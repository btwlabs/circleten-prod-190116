<?php
/**
 * @file
 * members.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function members_user_default_permissions() {
  $permissions = array();

  // Exported permission: administer profile types
  $permissions['administer profile types'] = array(
    'name' => 'administer profile types',
    'roles' => array(
      0 => 'administrator',
      1 => 'developer',
    ),
    'module' => 'profile2',
  );

  // Exported permission: administer profiles
  $permissions['administer profiles'] = array(
    'name' => 'administer profiles',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'profile2',
  );

  // Exported permission: edit any profile profile
  $permissions['edit any profile profile'] = array(
    'name' => 'edit any profile profile',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'profile2',
  );

  // Exported permission: edit own profile profile
  $permissions['edit own profile profile'] = array(
    'name' => 'edit own profile profile',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'authenticated user',
      3 => 'client',
      4 => 'developer',
    ),
    'module' => 'profile2',
  );

  // Exported permission: view any profile profile
  $permissions['view any profile profile'] = array(
    'name' => 'view any profile profile',
    'roles' => array(
      0 => 'authenticated user',
    ),
    'module' => 'profile2',
  );

  // Exported permission: view own profile profile
  $permissions['view own profile profile'] = array(
    'name' => 'view own profile profile',
    'roles' => array(
      0 => 'authenticated user',
    ),
    'module' => 'profile2',
  );

  return $permissions;
}
