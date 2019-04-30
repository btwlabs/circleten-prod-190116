<?php
/**
 * @file
 * service.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function service_user_default_permissions() {
  $permissions = array();

  // Exported permission: create service content
  $permissions['create service content'] = array(
    'name' => 'create service content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any service content
  $permissions['delete any service content'] = array(
    'name' => 'delete any service content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own service content
  $permissions['delete own service content'] = array(
    'name' => 'delete own service content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any service content
  $permissions['edit any service content'] = array(
    'name' => 'edit any service content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own service content
  $permissions['edit own service content'] = array(
    'name' => 'edit own service content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  return $permissions;
}
