<?php
/**
 * @file
 * physical_locations.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function physical_locations_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_options_physical_location';
  $strongarm->value = array(
    0 => 'main-menu',
  );
  $export['menu_options_physical_location'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_parent_physical_location';
  $strongarm->value = 'main-menu:0';
  $export['menu_parent_physical_location'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_physical_location';
  $strongarm->value = array(
    0 => 'status',
  );
  $export['node_options_physical_location'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_preview_physical_location';
  $strongarm->value = '1';
  $export['node_preview_physical_location'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_physical_location';
  $strongarm->value = 0;
  $export['node_submitted_physical_location'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_physical_location_pattern';
  $strongarm->value = 'locations/[node:title]';
  $export['pathauto_node_physical_location_pattern'] = $strongarm;

  return $export;
}
