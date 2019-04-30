<?php
/**
 * @file
 * document_library.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function document_library_taxonomy_default_vocabularies() {
  return array(
    'library_document_type' => array(
      'name' => 'Library Document Type',
      'machine_name' => 'library_document_type',
      'description' => 'A type of library document, used for grouping and sorting.',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
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
