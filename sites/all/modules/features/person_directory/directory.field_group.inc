<?php
/**
 * @file
 * directory.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function directory_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_dp_biography|node|directory_person|form';
  $field_group->group_name = 'group_dp_biography';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_person';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_dp_container';
  $field_group->data = array(
    'label' => 'Biography',
    'weight' => '37',
    'children' => array(
      0 => 'body',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => ' group-dp-biography field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_dp_biography|node|directory_person|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_dp_contact|node|directory_person|form';
  $field_group->group_name = 'group_dp_contact';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_person';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_dp_container';
  $field_group->data = array(
    'label' => 'Contact',
    'weight' => '36',
    'children' => array(
      0 => 'field_dp_email_address',
      1 => 'field_dp_location',
      2 => 'field_dp_hours',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'label' => 'Contact',
      'instance_settings' => array(
        'required_fields' => 1,
        'classes' => ' group-dp-contact field-group-tab',
        'description' => 'Please note that this information will be available to anyone who can view the directory.',
      ),
      'formatter' => 'closed',
    ),
  );
  $export['group_dp_contact|node|directory_person|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_dp_container|node|directory_person|form';
  $field_group->group_name = 'group_dp_container';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_person';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Container',
    'weight' => '2',
    'children' => array(
      0 => 'group_dp_biography',
      1 => 'group_dp_general',
      2 => 'group_dp_contact',
    ),
    'format_type' => 'tabs',
    'format_settings' => array(
      'formatter' => '',
      'instance_settings' => array(
        'classes' => ' group-dp-container field-group-tabs',
      ),
    ),
  );
  $export['group_dp_container|node|directory_person|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_dp_general|node|directory_person|form';
  $field_group->group_name = 'group_dp_general';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_person';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_dp_container';
  $field_group->data = array(
    'label' => 'General',
    'weight' => '34',
    'children' => array(
      0 => 'field_dp_job_role',
      1 => 'field_dp_photo',
      2 => 'group_dp_name',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => ' group-dp-general field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_dp_general|node|directory_person|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_dp_name|node|directory_person|form';
  $field_group->group_name = 'group_dp_name';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'directory_person';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_dp_general';
  $field_group->data = array(
    'label' => 'Name',
    'weight' => '36',
    'children' => array(
      0 => 'field_dp_first',
      1 => 'field_dp_middle',
      2 => 'field_dp_last',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'label' => 'Name',
      'instance_settings' => array(
        'required_fields' => 1,
        'classes' => ' group-dp-name field-group-fieldset',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_dp_name|node|directory_person|form'] = $field_group;

  return $export;
}
