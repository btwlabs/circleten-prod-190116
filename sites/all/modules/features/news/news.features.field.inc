<?php
/**
 * @file
 * news.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function news_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('<em>format: http://mcninteractive.com</em>');
  t('Body');
  t('Enter a comma-separated list of words to describe your content.');
  t('Link');
  t('Open in a New Window');
  t('Tags');

  return $fields;
}
