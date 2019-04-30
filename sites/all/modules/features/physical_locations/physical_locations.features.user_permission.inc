<?php
/**
 * @file
 * physical_locations.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function physical_locations_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create physical_location content'.
  $permissions['create physical_location content'] = array(
    'name' => 'create physical_location content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any physical_location content'.
  $permissions['delete any physical_location content'] = array(
    'name' => 'delete any physical_location content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own physical_location content'.
  $permissions['delete own physical_location content'] = array(
    'name' => 'delete own physical_location content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any physical_location content'.
  $permissions['edit any physical_location content'] = array(
    'name' => 'edit any physical_location content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own physical_location content'.
  $permissions['edit own physical_location content'] = array(
    'name' => 'edit own physical_location content',
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
