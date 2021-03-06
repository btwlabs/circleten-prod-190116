<?php
/**
 * @file
 * discography.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function discography_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function discography_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function discography_image_default_styles() {
  $styles = array();

  // Exported image style: 50x50.
  $styles['50x50'] = array(
    'name' => '50x50',
    'effects' => array(
      3 => array(
        'label' => 'Scale and crop',
        'help' => 'Scale and crop will maintain the aspect-ratio of the original image, then crop the larger dimension. This is most useful for creating perfectly square thumbnails without stretching the image.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 50,
          'height' => 50,
        ),
        'weight' => 1,
      ),
    ),
    'label' => '50x50',
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function discography_node_info() {
  $items = array(
    'album' => array(
      'name' => t('Album'),
      'base' => 'node_content',
      'description' => t('Add albums to your site, including associated Mp3 tracks (added separately).'),
      'has_title' => '1',
      'title_label' => t('Album Title'),
      'help' => '',
    ),
    'mp3_track' => array(
      'name' => t('Mp3 Track'),
      'base' => 'node_content',
      'description' => t('Add an Mp3 track to the website, which can then be categorized in albums or added to the audio player.'),
      'has_title' => '1',
      'title_label' => t('Song Title'),
      'help' => '',
    ),
  );
  return $items;
}
