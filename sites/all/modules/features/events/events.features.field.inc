<?php
/**
 * @file
 * events.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function events_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('<em>You can enter time in any format, e.g., 7pm, 7:00pm, 7-10pm, etc.</em>');
  t('Event Date');
  t('Event Description');
  t('Ticket Link');
  t('Time');

  return $fields;
}
