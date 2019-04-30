<?php
/**
 * @file
 * service.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function service_field_group_info() {
  $export = array();

  $field_group = new stdClass;
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_audio|node|service|default';
  $field_group->group_name = 'group_audio';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'service';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Audio',
    'weight' => '0',
    'children' => array(
      0 => 'field_sermon_audio',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Audio',
      'instance_settings' => array(
        'classes' => '',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'fast',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_audio|node|service|default'] = $field_group;

  $field_group = new stdClass;
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_service_media|node|service|form';
  $field_group->group_name = 'group_service_media';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'service';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Service Media',
    'weight' => '6',
    'children' => array(
      0 => 'field_sermon_audio',
      1 => 'field_service_video',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'label' => 'Service Media',
      'instance_settings' => array(
        'required_fields' => 0,
        'classes' => '',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_service_media|node|service|form'] = $field_group;

  return $export;
}
