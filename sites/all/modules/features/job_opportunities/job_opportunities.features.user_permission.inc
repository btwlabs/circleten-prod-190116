<?php
/**
 * @file
 * job_opportunities.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function job_opportunities_user_default_permissions() {
  $permissions = array();

  // Exported permission: create job_opportunity content.
  $permissions['create job_opportunity content'] = array(
    'name' => 'create job_opportunity content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any job_opportunity content.
  $permissions['delete any job_opportunity content'] = array(
    'name' => 'delete any job_opportunity content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own job_opportunity content.
  $permissions['delete own job_opportunity content'] = array(
    'name' => 'delete own job_opportunity content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any job_opportunity content.
  $permissions['edit any job_opportunity content'] = array(
    'name' => 'edit any job_opportunity content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own job_opportunity content.
  $permissions['edit own job_opportunity content'] = array(
    'name' => 'edit own job_opportunity content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  return $permissions;
}
