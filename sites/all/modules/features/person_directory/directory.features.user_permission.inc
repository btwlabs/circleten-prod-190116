<?php
/**
 * @file
 * directory.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function directory_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create directory_person content'.
  $permissions['create directory_person content'] = array(
    'name' => 'create directory_person content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any directory_person content'.
  $permissions['delete any directory_person content'] = array(
    'name' => 'delete any directory_person content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own directory_person content'.
  $permissions['delete own directory_person content'] = array(
    'name' => 'delete own directory_person content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any directory_person content'.
  $permissions['edit any directory_person content'] = array(
    'name' => 'edit any directory_person content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own directory_person content'.
  $permissions['edit own directory_person content'] = array(
    'name' => 'edit own directory_person content',
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
