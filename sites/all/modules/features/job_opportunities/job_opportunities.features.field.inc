<?php
/**
 * @file
 * job_opportunities.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function job_opportunities_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Application Link');
  t('Department');
  t('Description');
  t('Email');
  t('Location');
  t('Please note that all location information that is supplied, will be visible to visitors on the site.');
  t('Provide the URL at which the user may apply for this job, if applicable.');
  t('This email will be shown on the job opportunity page.');

  return $fields;
}
