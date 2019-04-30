<?php
/**
 * @file
 * restaurant_menu.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function restaurant_menu_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'restaurant_menu_items';
  $view->description = 'This view supplies a menu page, an optional list menu page, and a featured menu item block.';
  $view->tag = 'business';
  $view->base_table = 'node';
  $view->human_name = 'Restaurant Menu Items';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Menu';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'grid';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'name',
      'rendered' => 1,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['row_plugin'] = 'fields';
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['content'] = 'No menu items have been entered. If you are the owner of this site, please add some menu items or remove this page.';
  $handler->display->display_options['empty']['area']['format'] = 'full_html';
  /* Relationship: Content: Taxonomy terms on node */
  $handler->display->display_options['relationships']['term_node_tid']['id'] = 'term_node_tid';
  $handler->display->display_options['relationships']['term_node_tid']['table'] = 'node';
  $handler->display->display_options['relationships']['term_node_tid']['field'] = 'term_node_tid';
  $handler->display->display_options['relationships']['term_node_tid']['label'] = 'Category';
  $handler->display->display_options['relationships']['term_node_tid']['vocabularies'] = array(
    'restaurant_menu_item_category' => 'restaurant_menu_item_category',
    'directory_person_type' => 0,
    'library_document_type' => 0,
    'physical_location_type' => 0,
    'restaurant_menu_item_tags' => 0,
    'tags' => 0,
  );
  /* Field: Taxonomy term: Term description */
  $handler->display->display_options['fields']['description']['id'] = 'description';
  $handler->display->display_options['fields']['description']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['description']['field'] = 'description';
  $handler->display->display_options['fields']['description']['relationship'] = 'term_node_tid';
  $handler->display->display_options['fields']['description']['label'] = '';
  $handler->display->display_options['fields']['description']['exclude'] = TRUE;
  $handler->display->display_options['fields']['description']['element_label_colon'] = FALSE;
  /* Field: Taxonomy term: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'term_node_tid';
  $handler->display->display_options['fields']['name']['label'] = '';
  $handler->display->display_options['fields']['name']['exclude'] = TRUE;
  $handler->display->display_options['fields']['name']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['name']['alter']['text'] = '<h2>[name]</h2>
<p>[description]</h2>';
  $handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
  /* Field: Content: Photo */
  $handler->display->display_options['fields']['field_rmi_photos']['id'] = 'field_rmi_photos';
  $handler->display->display_options['fields']['field_rmi_photos']['table'] = 'field_data_field_rmi_photos';
  $handler->display->display_options['fields']['field_rmi_photos']['field'] = 'field_rmi_photos';
  $handler->display->display_options['fields']['field_rmi_photos']['label'] = '';
  $handler->display->display_options['fields']['field_rmi_photos']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_photos']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_photos']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_rmi_photos']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => '',
  );
  $handler->display->display_options['fields']['field_rmi_photos']['field_api_classes'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'h3';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Description */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['body']['field_api_classes'] = TRUE;
  /* Field: Content: Price */
  $handler->display->display_options['fields']['field_rmi_price']['id'] = 'field_rmi_price';
  $handler->display->display_options['fields']['field_rmi_price']['table'] = 'field_data_field_rmi_price';
  $handler->display->display_options['fields']['field_rmi_price']['field'] = 'field_rmi_price';
  $handler->display->display_options['fields']['field_rmi_price']['label'] = '';
  $handler->display->display_options['fields']['field_rmi_price']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_price']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_price']['settings'] = array(
    'thousand_separator' => ' ',
    'decimal_separator' => '.',
    'scale' => '2',
    'prefix_suffix' => 1,
  );
  $handler->display->display_options['fields']['field_rmi_price']['field_api_classes'] = TRUE;
  /* Field: Content: Tags */
  $handler->display->display_options['fields']['field_rmi_tags']['id'] = 'field_rmi_tags';
  $handler->display->display_options['fields']['field_rmi_tags']['table'] = 'field_data_field_rmi_tags';
  $handler->display->display_options['fields']['field_rmi_tags']['field'] = 'field_rmi_tags';
  $handler->display->display_options['fields']['field_rmi_tags']['label'] = '';
  $handler->display->display_options['fields']['field_rmi_tags']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_tags']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_tags']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_rmi_tags']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_rmi_tags']['field_api_classes'] = TRUE;
  /* Sort criterion: Taxonomy term: Weight */
  $handler->display->display_options['sorts']['weight']['id'] = 'weight';
  $handler->display->display_options['sorts']['weight']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['sorts']['weight']['field'] = 'weight';
  $handler->display->display_options['sorts']['weight']['relationship'] = 'term_node_tid';
  /* Sort criterion: Content: Sticky */
  $handler->display->display_options['sorts']['sticky']['id'] = 'sticky';
  $handler->display->display_options['sorts']['sticky']['table'] = 'node';
  $handler->display->display_options['sorts']['sticky']['field'] = 'sticky';
  $handler->display->display_options['sorts']['sticky']['order'] = 'DESC';
  /* Sort criterion: Content: Title */
  $handler->display->display_options['sorts']['title']['id'] = 'title';
  $handler->display->display_options['sorts']['title']['table'] = 'node';
  $handler->display->display_options['sorts']['title']['field'] = 'title';
  $handler->display->display_options['sorts']['title']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'restaurant_menu_item' => 'restaurant_menu_item',
  );

  /* Display: Menu */
  $handler = $view->new_display('page', 'Menu', 'restaurant_menu_grid');
  $handler->display->display_options['path'] = 'menu';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Menu';
  $handler->display->display_options['menu']['name'] = 'main-menu';

  /* Display: Menu (List) */
  $handler = $view->new_display('page', 'Menu (List)', 'page_1');
  $handler->display->display_options['enabled'] = FALSE;
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'name',
      'rendered' => 1,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Taxonomy term: Term description */
  $handler->display->display_options['fields']['description']['id'] = 'description';
  $handler->display->display_options['fields']['description']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['description']['field'] = 'description';
  $handler->display->display_options['fields']['description']['relationship'] = 'term_node_tid';
  $handler->display->display_options['fields']['description']['label'] = '';
  $handler->display->display_options['fields']['description']['exclude'] = TRUE;
  $handler->display->display_options['fields']['description']['element_label_colon'] = FALSE;
  /* Field: Taxonomy term: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'term_node_tid';
  $handler->display->display_options['fields']['name']['label'] = '';
  $handler->display->display_options['fields']['name']['exclude'] = TRUE;
  $handler->display->display_options['fields']['name']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['name']['alter']['text'] = '<h2>[name]</h2>
<p>[description]</h2>';
  $handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'h3';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Description */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['body']['field_api_classes'] = TRUE;
  /* Field: Content: Price */
  $handler->display->display_options['fields']['field_rmi_price']['id'] = 'field_rmi_price';
  $handler->display->display_options['fields']['field_rmi_price']['table'] = 'field_data_field_rmi_price';
  $handler->display->display_options['fields']['field_rmi_price']['field'] = 'field_rmi_price';
  $handler->display->display_options['fields']['field_rmi_price']['label'] = '';
  $handler->display->display_options['fields']['field_rmi_price']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_price']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_price']['settings'] = array(
    'thousand_separator' => ' ',
    'decimal_separator' => '.',
    'scale' => '2',
    'prefix_suffix' => 1,
  );
  $handler->display->display_options['fields']['field_rmi_price']['field_api_classes'] = TRUE;
  /* Field: Content: Tags */
  $handler->display->display_options['fields']['field_rmi_tags']['id'] = 'field_rmi_tags';
  $handler->display->display_options['fields']['field_rmi_tags']['table'] = 'field_data_field_rmi_tags';
  $handler->display->display_options['fields']['field_rmi_tags']['field'] = 'field_rmi_tags';
  $handler->display->display_options['fields']['field_rmi_tags']['label'] = '';
  $handler->display->display_options['fields']['field_rmi_tags']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_tags']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_tags']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_rmi_tags']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_rmi_tags']['field_api_classes'] = TRUE;
  $handler->display->display_options['path'] = 'menu';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Menu';
  $handler->display->display_options['menu']['name'] = 'main-menu';

  /* Display: Featured */
  $handler = $view->new_display('block', 'Featured', 'restaurant_menu_featured');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Featured Menu Item';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '1';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Taxonomy term: Term description */
  $handler->display->display_options['fields']['description']['id'] = 'description';
  $handler->display->display_options['fields']['description']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['description']['field'] = 'description';
  $handler->display->display_options['fields']['description']['relationship'] = 'term_node_tid';
  $handler->display->display_options['fields']['description']['label'] = '';
  $handler->display->display_options['fields']['description']['exclude'] = TRUE;
  $handler->display->display_options['fields']['description']['element_label_colon'] = FALSE;
  /* Field: Taxonomy term: Name */
  $handler->display->display_options['fields']['name']['id'] = 'name';
  $handler->display->display_options['fields']['name']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['fields']['name']['field'] = 'name';
  $handler->display->display_options['fields']['name']['relationship'] = 'term_node_tid';
  $handler->display->display_options['fields']['name']['label'] = '';
  $handler->display->display_options['fields']['name']['exclude'] = TRUE;
  $handler->display->display_options['fields']['name']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['name']['alter']['text'] = '<h2>[name]</h2>
<p>[description]</h2>';
  $handler->display->display_options['fields']['name']['element_label_colon'] = FALSE;
  /* Field: Content: Photo */
  $handler->display->display_options['fields']['field_rmi_photos']['id'] = 'field_rmi_photos';
  $handler->display->display_options['fields']['field_rmi_photos']['table'] = 'field_data_field_rmi_photos';
  $handler->display->display_options['fields']['field_rmi_photos']['field'] = 'field_rmi_photos';
  $handler->display->display_options['fields']['field_rmi_photos']['label'] = '';
  $handler->display->display_options['fields']['field_rmi_photos']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_photos']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_photos']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_rmi_photos']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => '',
  );
  $handler->display->display_options['fields']['field_rmi_photos']['field_api_classes'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'h2';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Description */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['body']['field_api_classes'] = TRUE;
  /* Field: Content: Price */
  $handler->display->display_options['fields']['field_rmi_price']['id'] = 'field_rmi_price';
  $handler->display->display_options['fields']['field_rmi_price']['table'] = 'field_data_field_rmi_price';
  $handler->display->display_options['fields']['field_rmi_price']['field'] = 'field_rmi_price';
  $handler->display->display_options['fields']['field_rmi_price']['label'] = '';
  $handler->display->display_options['fields']['field_rmi_price']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_price']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_price']['settings'] = array(
    'thousand_separator' => ' ',
    'decimal_separator' => '.',
    'scale' => '2',
    'prefix_suffix' => 1,
  );
  $handler->display->display_options['fields']['field_rmi_price']['field_api_classes'] = TRUE;
  /* Field: Content: Tags */
  $handler->display->display_options['fields']['field_rmi_tags']['id'] = 'field_rmi_tags';
  $handler->display->display_options['fields']['field_rmi_tags']['table'] = 'field_data_field_rmi_tags';
  $handler->display->display_options['fields']['field_rmi_tags']['field'] = 'field_rmi_tags';
  $handler->display->display_options['fields']['field_rmi_tags']['label'] = '';
  $handler->display->display_options['fields']['field_rmi_tags']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_tags']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_rmi_tags']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_rmi_tags']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_rmi_tags']['field_api_classes'] = TRUE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'restaurant_menu_item' => 'restaurant_menu_item',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Promoted to front page */
  $handler->display->display_options['filters']['promote']['id'] = 'promote';
  $handler->display->display_options['filters']['promote']['table'] = 'node';
  $handler->display->display_options['filters']['promote']['field'] = 'promote';
  $handler->display->display_options['filters']['promote']['value'] = '1';
  $export['restaurant_menu_items'] = $view;

  return $export;
}
