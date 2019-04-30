<?php
/**
 * @file
 * directory.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function directory_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'ant_directory_person';
  $strongarm->value = '1';
  $export['ant_directory_person'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'ant_pattern_directory_person';
  $strongarm->value = '[node:field_dp_first] [node:field_dp_middle] [node:field_dp_last]';
  $export['ant_pattern_directory_person'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'ant_php_directory_person';
  $strongarm->value = 0;
  $export['ant_php_directory_person'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_options_directory_person';
  $strongarm->value = array(
    0 => 'main-menu',
  );
  $export['menu_options_directory_person'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_parent_directory_person';
  $strongarm->value = 'main-menu:0';
  $export['menu_parent_directory_person'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_directory_person';
  $strongarm->value = array(
    0 => 'status',
  );
  $export['node_options_directory_person'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_preview_directory_person';
  $strongarm->value = '1';
  $export['node_preview_directory_person'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_directory_person';
  $strongarm->value = 0;
  $export['node_submitted_directory_person'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_directory_person_pattern';
  $strongarm->value = 'directory/[node:title]';
  $export['pathauto_node_directory_person_pattern'] = $strongarm;

  return $export;
}
