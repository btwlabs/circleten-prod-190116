<?php
/**
 * @file
 * videos.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function videos_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('<em>Sort albums in the order you\'d like them to appear (e.g., -10 shown earlier than -9).</em>');
  t('Video Embed');
  t('Video Sort Order');

  return $fields;
}
