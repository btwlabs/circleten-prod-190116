<?php

//header ("Content-Type: application/rss+xml\n\n");
header ("Content-Type: application/xml\n\n");
//header ("Content-Type: text/html\n\n");

$parse_file = 1;
$cal_filelist = array($HTTP_GET_VARS['url']);

// what's the title of this feed
if (isset($HTTP_GET_VARS['title'])) {
  $title = $HTTP_GET_VARS['title'];
} else {
  $title = "RSS feed based on iCalendar";
}

// what page shall we link to
if (isset($HTTP_GET_VARS['link'])) {
  $link = urlencode($HTTP_GET_VARS['link']);
} else {
  $link = urlencode($HTTP_GET_VARS['url']);
}

// the maximum number of items (after today) that will be shown
$num = 100;
if (isset($HTTP_GET_VARS['num'])) {
  $num = intval($HTTP_GET_VARS['num']);
}

include('languages/english.inc.php');
include('functions/ical_parser.php');

print '<?xml version="1.0" encoding="UTF-8"?>';

print "<rss version=\"0.91\">\n";
print "<channel>\n";
print "<title>$title</title>\n";
print "<link>$link</link>\n";
print "<description>This RSS feed was automatically generated from an iCalendar file</description>\n";
print "<copyright>unknown</copyright>";

$items = 0;
for ($i = -5; $i < 300; $i++) {
  $getdate = date ('Ymd', strtotime("now + $i days"));
  $dispdate = date('D d M Y', strtotime("now + $i days"));
  if ($items >= $num) {
    break;
  }

  if (isset($master_array[($getdate)]['-1'])) {
    foreach($master_array[($getdate)]['-1'] as $allday) {
      $text = stripslashes(urldecode($allday["event_text"]));
      $description = urldecode($allday["description"]);
      $description = str_replace("<br>", "\n", $description);
      $title = str_replace("<br>", "\n", $title);
      print "\n<item><title>$dispdate: $text</title><description>$description</description></item>";
      
      $items++;
      // zie: openevent
      //	openevent($event_calna, '', '', $allday, 0, '', '<font color="#ffffff"><i>', '</i></font>', 'psf', $url);
    }
  }

  if (isset($master_array[$getdate])) {
    foreach($master_array[$getdate] as $time_key => $time_arr) {
      if ($time_key != -1) { 
	foreach ($time_arr as $time_arr_key => $event) {
	  //print "Title: " . stripslashes(urldecode($event['event_text'])) . "<br>";
	  //print "Description: " . stripslashes(urldecode($event['description'])). "<p>";;
	  $description = stripslashes(urldecode($event['description']));
	  $title = stripslashes(urldecode($event['event_text']));
	  $description = str_replace("<br>", "\n", $description);
	  $title = str_replace("<br>", "\n", $title);

	  print "\n<item><title>$getdate $time_key: $title</title><description>$description</description></item>";
	  /*foreach ($time_arr_value as $thekey => $theval) {
	    print "Event description: " . 
            print "key: $thekey<br>";
            print "value: $theval<br>";
	  }*/
	}
      }
    }
  }
}

print "</channel></rss>";

?>
