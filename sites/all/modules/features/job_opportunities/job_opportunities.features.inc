<?php
/**
 * @file
 * job_opportunities.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function job_opportunities_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function job_opportunities_views_api() {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function job_opportunities_node_info() {
  $items = array(
    'job_opportunity' => array(
      'name' => t('Job Opportunity'),
      'base' => 'node_content',
      'description' => t('A job opportunity is a listing for a position that can be filled, and will be shown on the job opportunities page.'),
      'has_title' => '1',
      'title_label' => t('Job Title'),
      'help' => '',
    ),
  );
  return $items;
}
