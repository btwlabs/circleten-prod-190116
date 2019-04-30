<?php
/**
 * @file
 * faq.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function faq_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function faq_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function faq_node_info() {
  $items = array(
    'faq' => array(
      'name' => t('FAQ'),
      'base' => 'node_content',
      'description' => t('An FAQ is a question and answer that can be included on the FAQ page.'),
      'has_title' => '1',
      'title_label' => t('Question'),
      'help' => '',
    ),
  );
  return $items;
}
