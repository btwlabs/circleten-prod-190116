<?php
/**
 * @file
 * staff.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function staff_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function staff_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}

/**
 * Implements hook_node_info().
 */
function staff_node_info() {
  $items = array(
    'staff' => array(
      'name' => t('Staff'),
      'base' => 'node_content',
      'description' => t('Add new <em>Staff</em> to the site'),
      'has_title' => '1',
      'title_label' => t('Name (Administrative purposes only)'),
      'help' => '',
    ),
  );
  return $items;
}
