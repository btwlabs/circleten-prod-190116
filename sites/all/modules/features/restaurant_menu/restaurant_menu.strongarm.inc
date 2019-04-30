<?php
/**
 * @file
 * restaurant_menu.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function restaurant_menu_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_options_restaurant_menu_item';
  $strongarm->value = array(
    0 => 'main-menu',
  );
  $export['menu_options_restaurant_menu_item'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_parent_restaurant_menu_item';
  $strongarm->value = 'main-menu:0';
  $export['menu_parent_restaurant_menu_item'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_restaurant_menu_item';
  $strongarm->value = array(
    0 => 'status',
  );
  $export['node_options_restaurant_menu_item'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_preview_restaurant_menu_item';
  $strongarm->value = '1';
  $export['node_preview_restaurant_menu_item'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_restaurant_menu_item';
  $strongarm->value = 0;
  $export['node_submitted_restaurant_menu_item'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_restaurant_menu_item_pattern';
  $strongarm->value = 'menu/[node:title]';
  $export['pathauto_node_restaurant_menu_item_pattern'] = $strongarm;

  return $export;
}
