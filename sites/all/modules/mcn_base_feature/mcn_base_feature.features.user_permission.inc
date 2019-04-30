<?php
/**
 * @file
 * mcn_base_feature.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function mcn_base_feature_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'access administration menu'.
  $permissions['access administration menu'] = array(
    'name' => 'access administration menu',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'admin_menu',
  );

  // Exported permission: 'access administration pages'.
  $permissions['access administration pages'] = array(
    'name' => 'access administration pages',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'system',
  );

  // Exported permission: 'access content'.
  $permissions['access content'] = array(
    'name' => 'access content',
    'roles' => array(
      'administrator' => 'administrator',
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'node',
  );

  // Exported permission: 'access content overview'.
  $permissions['access content overview'] = array(
    'name' => 'access content overview',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'access contextual links'.
  $permissions['access contextual links'] = array(
    'name' => 'access contextual links',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'contextual',
  );

  // Exported permission: 'access overlay'.
  $permissions['access overlay'] = array(
    'name' => 'access overlay',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'overlay',
  );

  // Exported permission: 'access site in maintenance mode'.
  $permissions['access site in maintenance mode'] = array(
    'name' => 'access site in maintenance mode',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'system',
  );

  // Exported permission: 'access site reports'.
  $permissions['access site reports'] = array(
    'name' => 'access site reports',
    'roles' => array(
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'system',
  );

  // Exported permission: 'access toolbar'.
  $permissions['access toolbar'] = array(
    'name' => 'access toolbar',
    'roles' => array(
      'client' => 'client',
    ),
    'module' => 'toolbar',
  );

  // Exported permission: 'access user profiles'.
  $permissions['access user profiles'] = array(
    'name' => 'access user profiles',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'user',
  );

  // Exported permission: 'administer actions'.
  $permissions['administer actions'] = array(
    'name' => 'administer actions',
    'roles' => array(
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'system',
  );

  // Exported permission: 'administer blocks'.
  $permissions['administer blocks'] = array(
    'name' => 'administer blocks',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'block',
  );

  // Exported permission: 'administer content types'.
  $permissions['administer content types'] = array(
    'name' => 'administer content types',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'administer features'.
  $permissions['administer features'] = array(
    'name' => 'administer features',
    'roles' => array(
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'features',
  );

  // Exported permission: 'administer fieldgroups'.
  $permissions['administer fieldgroups'] = array(
    'name' => 'administer fieldgroups',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'field_group',
  );

  // Exported permission: 'administer files'.
  $permissions['administer files'] = array(
    'name' => 'administer files',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'file_entity',
  );

  // Exported permission: 'administer google analytics'.
  $permissions['administer google analytics'] = array(
    'name' => 'administer google analytics',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'googleanalytics',
  );

  // Exported permission: 'administer image styles'.
  $permissions['administer image styles'] = array(
    'name' => 'administer image styles',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'image',
  );

  // Exported permission: 'administer menu'.
  $permissions['administer menu'] = array(
    'name' => 'administer menu',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'menu',
  );

  // Exported permission: 'administer modules'.
  $permissions['administer modules'] = array(
    'name' => 'administer modules',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'system',
  );

  // Exported permission: 'administer nodes'.
  $permissions['administer nodes'] = array(
    'name' => 'administer nodes',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: 'administer pathauto'.
  $permissions['administer pathauto'] = array(
    'name' => 'administer pathauto',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'pathauto',
  );

  // Exported permission: 'administer permissions'.
  $permissions['administer permissions'] = array(
    'name' => 'administer permissions',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'user',
  );

  // Exported permission: 'administer scheduler'.
  $permissions['administer scheduler'] = array(
    'name' => 'administer scheduler',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'scheduler',
  );

  // Exported permission: 'administer shortcuts'.
  $permissions['administer shortcuts'] = array(
    'name' => 'administer shortcuts',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'shortcut',
  );

  // Exported permission: 'administer site configuration'.
  $permissions['administer site configuration'] = array(
    'name' => 'administer site configuration',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'system',
  );

  // Exported permission: 'administer taxonomy'.
  $permissions['administer taxonomy'] = array(
    'name' => 'administer taxonomy',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: 'administer themes'.
  $permissions['administer themes'] = array(
    'name' => 'administer themes',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'system',
  );

  // Exported permission: 'administer url aliases'.
  $permissions['administer url aliases'] = array(
    'name' => 'administer url aliases',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'path',
  );

  // Exported permission: 'administer users'.
  $permissions['administer users'] = array(
    'name' => 'administer users',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'user',
  );

  // Exported permission: 'block IP addresses'.
  $permissions['block IP addresses'] = array(
    'name' => 'block IP addresses',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'system',
  );

  // Exported permission: 'bulk upload media'.
  $permissions['bulk upload media'] = array(
    'name' => 'bulk upload media',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'bulk_media_upload',
  );

  // Exported permission: 'bypass node access'.
  $permissions['bypass node access'] = array(
    'name' => 'bypass node access',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'cancel account'.
  $permissions['cancel account'] = array(
    'name' => 'cancel account',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'user',
  );

  // Exported permission: 'change own username'.
  $permissions['change own username'] = array(
    'name' => 'change own username',
    'roles' => array(
      'administrator' => 'administrator',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'user',
  );

  // Exported permission: 'create files'.
  $permissions['create files'] = array(
    'name' => 'create files',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'file_entity',
  );

  // Exported permission: 'create url aliases'.
  $permissions['create url aliases'] = array(
    'name' => 'create url aliases',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'path',
  );

  // Exported permission: 'customize shortcut links'.
  $permissions['customize shortcut links'] = array(
    'name' => 'customize shortcut links',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'shortcut',
  );

  // Exported permission: 'delete terms in tags'.
  $permissions['delete terms in tags'] = array(
    'name' => 'delete terms in tags',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: 'display drupal links'.
  $permissions['display drupal links'] = array(
    'name' => 'display drupal links',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'admin_menu',
  );

  // Exported permission: 'edit terms in tags'.
  $permissions['edit terms in tags'] = array(
    'name' => 'edit terms in tags',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: 'flush caches'.
  $permissions['flush caches'] = array(
    'name' => 'flush caches',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'admin_menu',
  );

  // Exported permission: 'manage features'.
  $permissions['manage features'] = array(
    'name' => 'manage features',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'features',
  );

  // Exported permission: 'notify of path changes'.
  $permissions['notify of path changes'] = array(
    'name' => 'notify of path changes',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'pathauto',
  );

  // Exported permission: 'opt-in or out of tracking'.
  $permissions['opt-in or out of tracking'] = array(
    'name' => 'opt-in or out of tracking',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'googleanalytics',
  );

  // Exported permission: 'schedule (un)publishing of nodes'.
  $permissions['schedule (un)publishing of nodes'] = array(
    'name' => 'schedule (un)publishing of nodes',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'scheduler',
  );

  // Exported permission: 'select account cancellation method'.
  $permissions['select account cancellation method'] = array(
    'name' => 'select account cancellation method',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'user',
  );

  // Exported permission: 'switch shortcut sets'.
  $permissions['switch shortcut sets'] = array(
    'name' => 'switch shortcut sets',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'developer' => 'developer',
    ),
    'module' => 'shortcut',
  );

  // Exported permission: 'use PHP for tracking visibility'.
  $permissions['use PHP for tracking visibility'] = array(
    'name' => 'use PHP for tracking visibility',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'googleanalytics',
  );

  // Exported permission: 'view own unpublished content'.
  $permissions['view own unpublished content'] = array(
    'name' => 'view own unpublished content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'view the administration theme'.
  $permissions['view the administration theme'] = array(
    'name' => 'view the administration theme',
    'roles' => array(
      'account manager' => 'account manager',
      'administrator' => 'administrator',
      'client' => 'client',
      'developer' => 'developer',
    ),
    'module' => 'system',
  );

  return $permissions;
}
