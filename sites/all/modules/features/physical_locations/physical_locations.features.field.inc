<?php
/**
 * @file
 * physical_locations.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function physical_locations_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Contact Person');
  t('Description');
  t('Email');
  t('Hours');
  t('If provided, visitors to the site will be able to use an email form to send an email to this address. The email itself will not be shown on the site.');
  t('Location');
  t('Photo');
  t('Provide a grouping for this location, and it will be searchable that way on the site.');
  t('Provide the hours that the office is open, if applicable. Example:<br>
Monday - Friday: 8 AM CT - 5 PM CT<br>
Saturday: 8 AM CT - 12 PM CT<br>
Sunday: Not in office');
  t('Type');
  t('Website');

  return $fields;
}
