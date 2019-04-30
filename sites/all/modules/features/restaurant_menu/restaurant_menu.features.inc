<?php
/**
 * @file
 * restaurant_menu.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function restaurant_menu_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function restaurant_menu_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function restaurant_menu_node_info() {
  $items = array(
    'restaurant_menu_item' => array(
      'name' => t('Restaurant Menu Item'),
      'base' => 'node_content',
      'description' => t('A restaurant menu item is any single person that can be included in a restaurant menu.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
