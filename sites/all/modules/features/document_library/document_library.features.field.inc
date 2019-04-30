<?php
/**
 * @file
 * document_library.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function document_library_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Description');
  t('File');
  t('Provide a file for this document, if applicable.');
  t('Provide a grouping for this document, and it will be shown that way on the site.');
  t('Type');

  return $fields;
}
