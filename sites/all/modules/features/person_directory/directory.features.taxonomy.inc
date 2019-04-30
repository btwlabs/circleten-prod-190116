<?php
/**
 * @file
 * directory.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function directory_taxonomy_default_vocabularies() {
  return array(
    'directory_person_type' => array(
      'name' => 'Directory Person Type',
      'machine_name' => 'directory_person_type',
      'description' => 'A type of directory person, used for grouping and sorting.',
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
