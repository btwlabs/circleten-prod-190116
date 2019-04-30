<?php
/**
 * @file
 * testimonials.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function testimonials_field_default_fields() {
  $fields = FALSE;

  // Translatables
  // Included for use with string extractors like potx.
  t('Affiliation');
  t('Name');
  t('Photo');
  t('Provide a photo of the person, company, etc.. that provided the testimonial.');
  t('Provide the job title and/or company of the person who provided the quote, if applicable.');
  t('Provide the name of the person associated with the testimonial, if applicable.');
  t('Quote');

  return $fields;
}
