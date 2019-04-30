<?php
/**
 * @file
 * restaurant_menu.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function restaurant_menu_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Category');
  t('Description');
  t('Photo');
  t('Price');
  t('Tags');

  return $fields;
}
