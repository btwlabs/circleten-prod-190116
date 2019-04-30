<?php
/**
 * @file
 * audio_rss.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function audio_rss_user_default_permissions() {
  $permissions = array();

  // Exported permission: create audio content
  $permissions['create audio content'] = array(
    'name' => 'create audio content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any audio content
  $permissions['delete any audio content'] = array(
    'name' => 'delete any audio content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own audio content
  $permissions['delete own audio content'] = array(
    'name' => 'delete own audio content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any audio content
  $permissions['edit any audio content'] = array(
    'name' => 'edit any audio content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own audio content
  $permissions['edit own audio content'] = array(
    'name' => 'edit own audio content',
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
