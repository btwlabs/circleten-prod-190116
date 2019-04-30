<?php
/**
 * @file
 * ministry.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function ministry_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function ministry_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}

/**
 * Implements hook_node_info().
 */
function ministry_node_info() {
  $items = array(
    'ministry' => array(
      'name' => t('Ministry'),
      'base' => 'node_content',
      'description' => t('Add a <em>Ministry</em> to the website.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
