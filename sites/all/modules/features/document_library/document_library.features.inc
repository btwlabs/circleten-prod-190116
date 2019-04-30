<?php
/**
 * @file
 * document_library.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function document_library_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function document_library_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function document_library_node_info() {
  $items = array(
    'library_document' => array(
      'name' => t('Library Document'),
      'base' => 'node_content',
      'description' => t('A library document is a file or page that is considered reference material for users on your site, and will be listed on the document library.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
