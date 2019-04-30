<?php
/**
 * @file
 * physical_locations.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function physical_locations_ctools_plugin_api($module = NULL, $api = NULL) {
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
function physical_locations_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function physical_locations_node_info() {
  $items = array(
    'physical_location' => array(
      'name' => t('Physical Location'),
      'base' => 'node_content',
      'description' => t('A physical location is any single location that a user can attempt to locate on your site. Examples include retail stores, branches, offices. You should only supply information that you want any visitor to your site to be able to see.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
