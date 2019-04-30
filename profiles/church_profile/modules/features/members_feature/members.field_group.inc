<?php
/**
 * @file
 * members.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function members_field_group_info() {
  $export = array();

  $field_group = new stdClass;
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_address|profile2|profile|form';
  $field_group->group_name = 'group_address';
  $field_group->entity_type = 'profile2';
  $field_group->bundle = 'profile';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Physical Address',
    'weight' => '3',
    'children' => array(
      0 => 'field_physical_address',
      1 => 'field_city',
      2 => 'field_state',
      3 => 'field_zip_code',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'label' => 'Physical Address',
      'instance_settings' => array(
        'required_fields' => 0,
        'classes' => '',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_address|profile2|profile|form'] = $field_group;

  $field_group = new stdClass;
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_phone_numbers|profile2|profile|form';
  $field_group->group_name = 'group_phone_numbers';
  $field_group->entity_type = 'profile2';
  $field_group->bundle = 'profile';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Phone Numbers',
    'weight' => '5',
    'children' => array(
      0 => 'field_cell_phone',
      1 => 'field_home_phone',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'label' => 'Phone Numbers',
      'instance_settings' => array(
        'required_fields' => 0,
        'classes' => '',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_phone_numbers|profile2|profile|form'] = $field_group;

  $field_group = new stdClass;
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_physical_address|profile2|profile|default';
  $field_group->group_name = 'group_physical_address';
  $field_group->entity_type = 'profile2';
  $field_group->bundle = 'profile';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Physical Address',
    'weight' => '3',
    'children' => array(
      0 => 'field_physical_address',
      1 => 'field_city',
      2 => 'field_state',
      3 => 'field_zip_code',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Physical Address',
      'instance_settings' => array(
        'classes' => '',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_physical_address|profile2|profile|default'] = $field_group;

  $field_group = new stdClass;
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_social_networking|profile2|profile|form';
  $field_group->group_name = 'group_social_networking';
  $field_group->entity_type = 'profile2';
  $field_group->bundle = 'profile';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Social Networking',
    'weight' => '6',
    'children' => array(
      0 => 'field_facebook_url',
      1 => 'field_twitter_url',
      2 => 'field_google_url',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'label' => 'Social Networking',
      'instance_settings' => array(
        'required_fields' => 0,
        'classes' => '',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_social_networking|profile2|profile|form'] = $field_group;

  return $export;
}
