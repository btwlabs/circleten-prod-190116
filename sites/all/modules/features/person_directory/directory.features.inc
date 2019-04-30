<?php
/**
 * @file
 * directory.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function directory_ctools_plugin_api($module = NULL, $api = NULL) {
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
function directory_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function directory_node_info() {
  $items = array(
    'directory_person' => array(
      'name' => t('Directory Person'),
      'base' => 'node_content',
      'description' => t('A directory person is any single person that can be included in a directory. Personal, contact and biographical information can be supplied for the person. You should only supply information that you want to be available to anyone who can see the directory.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
