<?php
/**
 * @file
 * physical_locations.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function physical_locations_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pl_contact|node|physical_location|form';
  $field_group->group_name = 'group_pl_contact';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'physical_location';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_pl_container';
  $field_group->data = array(
    'label' => 'Contact',
    'weight' => '17',
    'children' => array(
      0 => 'field_pl_email',
      1 => 'field_pl_contact_person',
      2 => 'field_pl_website',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => ' group-pl-contact field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pl_contact|node|physical_location|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pl_container|node|physical_location|form';
  $field_group->group_name = 'group_pl_container';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'physical_location';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Container',
    'weight' => '2',
    'children' => array(
      0 => 'group_pl_contact',
      1 => 'group_pl_description',
      2 => 'group_pl_location',
      3 => 'group_pl_hours',
    ),
    'format_type' => 'tabs',
    'format_settings' => array(
      'formatter' => '',
      'instance_settings' => array(
        'classes' => ' group-pl-container field-group-tabs',
      ),
    ),
  );
  $export['group_pl_container|node|physical_location|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pl_description|node|physical_location|form';
  $field_group->group_name = 'group_pl_description';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'physical_location';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_pl_container';
  $field_group->data = array(
    'label' => 'Description',
    'weight' => '18',
    'children' => array(
      0 => 'body',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => ' group-pl-description field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pl_description|node|physical_location|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pl_hours|node|physical_location|form';
  $field_group->group_name = 'group_pl_hours';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'physical_location';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_pl_container';
  $field_group->data = array(
    'label' => 'Hours',
    'weight' => '16',
    'children' => array(
      0 => 'field_pl_hours',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => ' group-pl-hours field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pl_hours|node|physical_location|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pl_location|node|physical_location|form';
  $field_group->group_name = 'group_pl_location';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'physical_location';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_pl_container';
  $field_group->data = array(
    'label' => 'Location',
    'weight' => '15',
    'children' => array(
      0 => 'field_pl_location',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => ' group-pl-location field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pl_location|node|physical_location|form'] = $field_group;

  return $export;
}
