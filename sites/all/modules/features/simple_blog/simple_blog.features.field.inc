<?php
/**
 * @file
 * simple_blog.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function simple_blog_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Blog Body');
  t('Tags');

  return $fields;
}
