<?php

/**
 * @file
 * Lightweight implementation of the Twitter API in PHP.
 *
 * This code does the heavy lifting behind the Drupal twitter_block module. It
 * does not aim to authenticate users nor provide complex integration. We only
 * need to grab public feeds, and as such we use the Twitter Search API. More
 * information on the twitter search API can be found at the
 * @link http://dev.twitter.com/doc/get/search GET search @endlink API resource
 * documentation.
 */

/**
 * TwitterBlockSearch provides the class for using the Twitter Search API.
 *
 * For more information on the API, see http://dev.twitter.com/doc/get/search
 */
class TwitterBlockSearch {

  // HTTP status code returned
  private $http_status;

  // Search parameters as defined by the API to be used w/ http_build_query
  private $options = array();

  // Determines which getter to use.
  private $search_type;

  // What were we looking for again?
  private $search_string;
  private $twitter_name;
  private $include_rts;

  // The API type we'll pull data from.
  private $api;

  // The url including the encoded query
  public $url_query;

  public function __construct($config = array()) {
    // @todo: Make this a configurable URL.
    $this->url_query = 'http://search.twitter.com/search.json?';
    $this->search_type = $config['search_type'];
    $this->api = in_array($this->search_type, array('getTweetsFrom')) ? 'rest' : 'search';

    if ($config['search_type'] == 'searchHashtag') {
      // We presume the search string is already validated.
      $this->search_string = $config['search_string'];
    }
    else {
      $this->twitter_name = $config['search_string'];
    }

    $this->include_rts = $config['include_rts'];

    $count = ($this->api == 'rest') ? 'count' : 'rpp';
    // The number of tweets to return per page.
    $this->options[$count] = $config['results_per_page'];

    // Filter by language, but only if there is one set in the config.
    if (isset($config['lang']) && !empty($config['lang'])) {
      $this->options['lang'] = $config['lang'];
    }
  }

  /**
   * Retrieve JSON encoded search results
   */
  public function getJSON() {
    $response = call_user_func(array($this, $this->search_type));
    $return = array(
      'status' => TRUE,
      'results' => array(),
      'debug' => $response,
    );
    if (empty($response)) {
      $return['status'] = 'Empty response from Twitter.';
    }
    else {
      $decoded = json_decode($response);
      if (empty($decoded)) {
        $return['status'] = 'Response from Twitter is not valid JSON data.';
      }
      elseif ($this->api == 'rest') {
        $data = $decoded;
      }
      else {
        $data = $decoded->results;
      }
      // An error from the API.
      if (!empty($data->error)) {
        $return['status'] = $data->error;
      }
      // Everything was ok.
      else {
        $return['results'] = $data;
      }
    }

    return $return;
  }

  /**
   * Returns the most recent tweets from $twittername
   * @param string $twittername to search. Note: begins with @
   * @return string $json JSON encoded search response
   */
  private function getTweetsFrom() {
    $this->options['screen_name'] = $this->twitter_name;
    $this->options['include_rts'] = $this->include_rts;
    // @todo: Make this URL a configurable option.
    $this->url_query = 'http://api.twitter.com/1/statuses/user_timeline.json?';
    $json = $this->search();

    return $json;
  }

  /**
   * Returns the most recent mentions (status containing @twittername)
   * @param string $twittername to search. Note: begins with @
   * @return string $json JSON encoded search response
   */
  private function getMentions() {
    $this->options['q'] = "@$this->twitter_name";
    $json = $this->search();

    return $json;
  }

  /**
   * Returns the most recent @replies to $twittername.
   * @param string $twittername to search. Note: begins with @.
   * @return string JSON encoded search response
   */
  private function getReplies() {
    $this->options['q'] = "to:$this->twitter_name";
    $json = $this->search();

    return $json;
  }

  /**
   * Returns the most recent tweets containing a string or hashtag.
   * @param string $hashtag to search. May or may not begin with #.
   * @return string JSON encoded search response
   */
  private function searchHashtag() {
    $this->options['q'] = ($this->search_string);
    $json = $this->search();

    return $json;
  }

  /**
   * Returns the last HTTP status code
   * @return integer
   */
  public function lastStatusCode() {
    return $this->http_status;
  }

  /**
   * Executes a Twitter Search API call
   * @return string JSON encoded search response.
   */
  function search() {
    // Build a URL query to send to Twitter
    $this->url_query .= drupal_http_build_query($this->options);

    if (variable_get('twitter_block_debug_mode', FALSE)) {
      watchdog('Twitter Block', 'DEBUG: URL: twitter_block_url', array('twitter_block_url' => $this->url_query), WATCHDOG_NOTICE);
    }

    // Query Twitter
    $twitter_data = drupal_http_request($this->url_query);

    // Set the response status code, or the error code if an error occurred
    $this->http_status = $twitter_data->code;

    if (isset($twitter_data->error)) {
      if (variable_get('twitter_block_debug_mode', FALSE)) {
        watchdog('Twitter Block', 'DEBUG: Returned data: returned_tweet_data', array('returned_tweet_data' => print_r($twitter_data->error, TRUE)), WATCHDOG_NOTICE);
      }

      return;
    }

    return $twitter_data->data;
  }

  function getApi() {
    return $this->api;
  }
}
