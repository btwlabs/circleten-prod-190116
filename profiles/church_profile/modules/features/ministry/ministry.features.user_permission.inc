<?php
/**
 * @file
 * ministry.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function ministry_user_default_permissions() {
  $permissions = array();

  // Exported permission: create ministry content
  $permissions['create ministry content'] = array(
    'name' => 'create ministry content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any ministry content
  $permissions['delete any ministry content'] = array(
    'name' => 'delete any ministry content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own ministry content
  $permissions['delete own ministry content'] = array(
    'name' => 'delete own ministry content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any ministry content
  $permissions['edit any ministry content'] = array(
    'name' => 'edit any ministry content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own ministry content
  $permissions['edit own ministry content'] = array(
    'name' => 'edit own ministry content',
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
