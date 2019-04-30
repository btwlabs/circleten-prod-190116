<?php
/**
 * @file
 * faq.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function faq_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Answer');

  return $fields;
}
