<?php
/**
 * @file
 * audio_rss.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function audio_rss_taxonomy_default_vocabularies() {
  return array(
    'views_rss_itunes_category' => array(
      'name' => 'iTunes Category',
      'machine_name' => 'views_rss_itunes_category',
      'description' => NULL,
      'hierarchy' => '0',
      'module' => 'views_rss_itunes',
      'weight' => '0',
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
  );
}
