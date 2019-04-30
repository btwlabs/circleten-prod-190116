<?php
/**
 * @file
 * physical_locations.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function physical_locations_taxonomy_default_vocabularies() {
  return array(
    'physical_location_type' => array(
      'name' => 'Physical Location Type',
      'machine_name' => 'physical_location_type',
      'description' => 'A type of physical location, used for searching.',
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
