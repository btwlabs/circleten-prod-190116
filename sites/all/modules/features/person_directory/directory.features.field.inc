<?php
/**
 * @file
 * directory.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function directory_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Biography');
  t('Email Address');
  t('First');
  t('Hours');
  t('Job Role');
  t('Last');
  t('Location');
  t('Middle');
  t('Photo');
  t('Please note that adding an email address here will result in a link to email the person when they are viewed on the site. This is a potential source of spam, so carefully consider whether or not to provide this information.');
  t('Provide a grouping for this person, and it will be shown that way on the site.');
  t('Provide as much or as little biographical information as preferred.');
  t('Provide middle name or middle initial.');
  t('Provide the hours that the person is present in their office, if applicable. Example:<br>
Monday - Friday: 8 AM CT - 5 PM CT<br>
Saturday: 8 AM CT - 12 PM CT<br>
Sunday: Not in office');
  t('Provide the job role or title of the person.');
  t('Type');
  t('You can add multiple locations, and you need only enter the relevant information for each location.');

  return $fields;
}
