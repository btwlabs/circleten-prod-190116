<?php
/**
 * @file
 * basic_page.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function basic_page_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Body');

  return $fields;
}
