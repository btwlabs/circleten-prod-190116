<?php
/**
 * @file
 * restaurant_menu.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function restaurant_menu_user_default_permissions() {
  $permissions = array();

  // Exported permission: create restaurant_menu_item content.
  $permissions['create restaurant_menu_item content'] = array(
    'name' => 'create restaurant_menu_item content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any restaurant_menu_item content.
  $permissions['delete any restaurant_menu_item content'] = array(
    'name' => 'delete any restaurant_menu_item content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own restaurant_menu_item content.
  $permissions['delete own restaurant_menu_item content'] = array(
    'name' => 'delete own restaurant_menu_item content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any restaurant_menu_item content.
  $permissions['edit any restaurant_menu_item content'] = array(
    'name' => 'edit any restaurant_menu_item content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own restaurant_menu_item content.
  $permissions['edit own restaurant_menu_item content'] = array(
    'name' => 'edit own restaurant_menu_item content',
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
