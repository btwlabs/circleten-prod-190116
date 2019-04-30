<?php
/**
 * @file
 * document_library.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function document_library_user_default_permissions() {
  $permissions = array();

  // Exported permission: create library_document content.
  $permissions['create library_document content'] = array(
    'name' => 'create library_document content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any library_document content.
  $permissions['delete any library_document content'] = array(
    'name' => 'delete any library_document content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own library_document content.
  $permissions['delete own library_document content'] = array(
    'name' => 'delete own library_document content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any library_document content.
  $permissions['edit any library_document content'] = array(
    'name' => 'edit any library_document content',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own library_document content.
  $permissions['edit own library_document content'] = array(
    'name' => 'edit own library_document content',
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
