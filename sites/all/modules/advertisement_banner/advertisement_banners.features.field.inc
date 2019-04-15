<?php
/**
 * @file
 * advertisement_banners.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function advertisement_banners_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Banner Image');
  t('Banner Link');
  t('Banner Space');
  t('Open URL in New Window');
  t('Use the full url for offsite links (e.g., http://google.com) or for local links, you can also just use the local path (e.g., \'news\' for http://[yoursite]/news)');

  return $fields;
}
