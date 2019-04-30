<?php
/**
 * @file
 * document_library.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function document_library_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_options_library_document';
  $strongarm->value = array(
    0 => 'main-menu',
  );
  $export['menu_options_library_document'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_parent_library_document';
  $strongarm->value = 'main-menu:0';
  $export['menu_parent_library_document'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_library_document';
  $strongarm->value = array(
    0 => 'status',
  );
  $export['node_options_library_document'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_preview_library_document';
  $strongarm->value = '1';
  $export['node_preview_library_document'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_library_document';
  $strongarm->value = 0;
  $export['node_submitted_library_document'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_library_document_pattern';
  $strongarm->value = 'documents/[node:title]';
  $export['pathauto_node_library_document_pattern'] = $strongarm;

  return $export;
}
