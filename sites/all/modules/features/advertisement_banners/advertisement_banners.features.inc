<?php
/**
 * @file
 * advertisement_banners.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function advertisement_banners_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
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
function advertisement_banners_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function advertisement_banners_node_info() {
  $items = array(
    'banner' => array(
      'name' => t('Banner'),
      'base' => 'node_content',
      'description' => t('Add an advertisement or banner to a designated space(s) on your website.'),
      'has_title' => '1',
      'title_label' => t('Banner Title (only for administrative purposes)'),
      'help' => '',
    ),
  );
  return $items;
}
