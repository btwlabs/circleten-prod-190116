<?php
/**
 * @file
 * directory.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function directory_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'directory_persons';
  $view->description = 'This view supplies a directory person page, index block, featured person block and administration screen.';
  $view->tag = 'business';
  $view->base_table = 'node';
  $view->human_name = 'Directory Persons';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Directory';
  $handler->display->display_options['use_more_always'] = TRUE;
  $handler->display->display_options['use_more_text'] = 'View Full Directory';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['exposed_form']['options']['submit_button'] = 'Search';
  $handler->display->display_options['exposed_form']['options']['reset_button'] = TRUE;
  $handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'View All';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'field_dp_type',
      'rendered' => 1,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['row_plugin'] = 'fields';
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['content'] = 'No directory persons have been entered. If you are the owner of this site, please add some directory persons or remove this page.';
  $handler->display->display_options['empty']['area']['format'] = 'full_html';
  /* Relationship: Content: Taxonomy terms on node */
  $handler->display->display_options['relationships']['term_node_tid']['id'] = 'term_node_tid';
  $handler->display->display_options['relationships']['term_node_tid']['table'] = 'node';
  $handler->display->display_options['relationships']['term_node_tid']['field'] = 'term_node_tid';
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_dp_type']['id'] = 'field_dp_type';
  $handler->display->display_options['fields']['field_dp_type']['table'] = 'field_data_field_dp_type';
  $handler->display->display_options['fields']['field_dp_type']['field'] = 'field_dp_type';
  $handler->display->display_options['fields']['field_dp_type']['label'] = '';
  $handler->display->display_options['fields']['field_dp_type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_dp_type']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_dp_type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_dp_type']['type'] = 'taxonomy_term_reference_plain';
  /* Field: Content: Photo */
  $handler->display->display_options['fields']['field_dp_photo']['id'] = 'field_dp_photo';
  $handler->display->display_options['fields']['field_dp_photo']['table'] = 'field_data_field_dp_photo';
  $handler->display->display_options['fields']['field_dp_photo']['field'] = 'field_dp_photo';
  $handler->display->display_options['fields']['field_dp_photo']['label'] = '';
  $handler->display->display_options['fields']['field_dp_photo']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_dp_photo']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_dp_photo']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => 'content',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'h3';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Job Role */
  $handler->display->display_options['fields']['field_dp_job_role']['id'] = 'field_dp_job_role';
  $handler->display->display_options['fields']['field_dp_job_role']['table'] = 'field_data_field_dp_job_role';
  $handler->display->display_options['fields']['field_dp_job_role']['field'] = 'field_dp_job_role';
  $handler->display->display_options['fields']['field_dp_job_role']['label'] = '';
  $handler->display->display_options['fields']['field_dp_job_role']['element_label_colon'] = FALSE;
  /* Sort criterion: Content: Sticky */
  $handler->display->display_options['sorts']['sticky']['id'] = 'sticky';
  $handler->display->display_options['sorts']['sticky']['table'] = 'node';
  $handler->display->display_options['sorts']['sticky']['field'] = 'sticky';
  $handler->display->display_options['sorts']['sticky']['order'] = 'DESC';
  /* Sort criterion: Content: Last (field_dp_last) */
  $handler->display->display_options['sorts']['field_dp_last_value']['id'] = 'field_dp_last_value';
  $handler->display->display_options['sorts']['field_dp_last_value']['table'] = 'field_data_field_dp_last';
  $handler->display->display_options['sorts']['field_dp_last_value']['field'] = 'field_dp_last_value';
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
    'directory_person' => 'directory_person',
  );
  /* Filter criterion: Content: First (field_dp_first) */
  $handler->display->display_options['filters']['field_dp_first_value']['id'] = 'field_dp_first_value';
  $handler->display->display_options['filters']['field_dp_first_value']['table'] = 'field_data_field_dp_first';
  $handler->display->display_options['filters']['field_dp_first_value']['field'] = 'field_dp_first_value';
  $handler->display->display_options['filters']['field_dp_first_value']['operator'] = 'contains';
  $handler->display->display_options['filters']['field_dp_first_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_dp_first_value']['expose']['operator_id'] = 'field_dp_first_value_op';
  $handler->display->display_options['filters']['field_dp_first_value']['expose']['label'] = 'First Name';
  $handler->display->display_options['filters']['field_dp_first_value']['expose']['operator'] = 'field_dp_first_value_op';
  $handler->display->display_options['filters']['field_dp_first_value']['expose']['identifier'] = 'field_dp_first_value';
  /* Filter criterion: Content: Last (field_dp_last) */
  $handler->display->display_options['filters']['field_dp_last_value']['id'] = 'field_dp_last_value';
  $handler->display->display_options['filters']['field_dp_last_value']['table'] = 'field_data_field_dp_last';
  $handler->display->display_options['filters']['field_dp_last_value']['field'] = 'field_dp_last_value';
  $handler->display->display_options['filters']['field_dp_last_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_dp_last_value']['expose']['operator_id'] = 'field_dp_last_value_op';
  $handler->display->display_options['filters']['field_dp_last_value']['expose']['label'] = 'Last Name';
  $handler->display->display_options['filters']['field_dp_last_value']['expose']['operator'] = 'field_dp_last_value_op';
  $handler->display->display_options['filters']['field_dp_last_value']['expose']['identifier'] = 'field_dp_last_value';
  /* Filter criterion: Content: Has taxonomy terms (with depth) */
  $handler->display->display_options['filters']['term_node_tid_depth']['id'] = 'term_node_tid_depth';
  $handler->display->display_options['filters']['term_node_tid_depth']['table'] = 'node';
  $handler->display->display_options['filters']['term_node_tid_depth']['field'] = 'term_node_tid_depth';
  $handler->display->display_options['filters']['term_node_tid_depth']['exposed'] = TRUE;
  $handler->display->display_options['filters']['term_node_tid_depth']['expose']['operator_id'] = 'term_node_tid_depth_op';
  $handler->display->display_options['filters']['term_node_tid_depth']['expose']['label'] = 'In Group';
  $handler->display->display_options['filters']['term_node_tid_depth']['expose']['operator'] = 'term_node_tid_depth_op';
  $handler->display->display_options['filters']['term_node_tid_depth']['expose']['identifier'] = 'term_node_tid_depth';
  $handler->display->display_options['filters']['term_node_tid_depth']['reduce_duplicates'] = TRUE;
  $handler->display->display_options['filters']['term_node_tid_depth']['type'] = 'select';
  $handler->display->display_options['filters']['term_node_tid_depth']['vocabulary'] = 'directory_person_type';
  $handler->display->display_options['filters']['term_node_tid_depth']['hierarchy'] = 1;
  $handler->display->display_options['filters']['term_node_tid_depth']['depth'] = '0';

  /* Display: Directory */
  $handler = $view->new_display('page', 'Directory', 'directory');
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Taxonomy terms on node */
  $handler->display->display_options['relationships']['term_node_tid']['id'] = 'term_node_tid';
  $handler->display->display_options['relationships']['term_node_tid']['table'] = 'node';
  $handler->display->display_options['relationships']['term_node_tid']['field'] = 'term_node_tid';
  $handler->display->display_options['relationships']['term_node_tid']['vocabularies'] = array(
    'directory_person_type' => 'directory_person_type',
    'library_document_type' => 0,
    'physical_location_type' => 0,
    'tags' => 0,
  );
  $handler->display->display_options['defaults']['sorts'] = FALSE;
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
  /* Sort criterion: Content: Last (field_dp_last) */
  $handler->display->display_options['sorts']['field_dp_last_value']['id'] = 'field_dp_last_value';
  $handler->display->display_options['sorts']['field_dp_last_value']['table'] = 'field_data_field_dp_last';
  $handler->display->display_options['sorts']['field_dp_last_value']['field'] = 'field_dp_last_value';
  $handler->display->display_options['path'] = 'directory';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Directory';
  $handler->display->display_options['menu']['name'] = 'main-menu';

  /* Display: Index */
  $handler = $view->new_display('block', 'Index', 'directory_index');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Directory Index';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_dp_type']['id'] = 'field_dp_type';
  $handler->display->display_options['fields']['field_dp_type']['table'] = 'field_data_field_dp_type';
  $handler->display->display_options['fields']['field_dp_type']['field'] = 'field_dp_type';
  $handler->display->display_options['fields']['field_dp_type']['label'] = '';
  $handler->display->display_options['fields']['field_dp_type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_dp_type']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_dp_type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_dp_type']['type'] = 'taxonomy_term_reference_plain';
  /* Field: Content: First */
  $handler->display->display_options['fields']['field_dp_first']['id'] = 'field_dp_first';
  $handler->display->display_options['fields']['field_dp_first']['table'] = 'field_data_field_dp_first';
  $handler->display->display_options['fields']['field_dp_first']['field'] = 'field_dp_first';
  $handler->display->display_options['fields']['field_dp_first']['label'] = '';
  $handler->display->display_options['fields']['field_dp_first']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_dp_first']['element_label_colon'] = FALSE;
  /* Field: Content: Last */
  $handler->display->display_options['fields']['field_dp_last']['id'] = 'field_dp_last';
  $handler->display->display_options['fields']['field_dp_last']['table'] = 'field_data_field_dp_last';
  $handler->display->display_options['fields']['field_dp_last']['field'] = 'field_dp_last';
  $handler->display->display_options['fields']['field_dp_last']['label'] = '';
  $handler->display->display_options['fields']['field_dp_last']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_dp_last']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_dp_last']['element_label_colon'] = FALSE;
  /* Field: Content: Middle */
  $handler->display->display_options['fields']['field_dp_middle']['id'] = 'field_dp_middle';
  $handler->display->display_options['fields']['field_dp_middle']['table'] = 'field_data_field_dp_middle';
  $handler->display->display_options['fields']['field_dp_middle']['field'] = 'field_dp_middle';
  $handler->display->display_options['fields']['field_dp_middle']['label'] = '';
  $handler->display->display_options['fields']['field_dp_middle']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_dp_middle']['element_label_colon'] = FALSE;
  /* Field: Content: Link */
  $handler->display->display_options['fields']['view_node']['id'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['table'] = 'views_entity_node';
  $handler->display->display_options['fields']['view_node']['field'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['label'] = '';
  $handler->display->display_options['fields']['view_node']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['view_node']['alter']['text'] = '[field_dp_last], [field_dp_first] [field_dp_middle]';
  $handler->display->display_options['fields']['view_node']['element_label_colon'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Taxonomy term: Weight */
  $handler->display->display_options['sorts']['weight']['id'] = 'weight';
  $handler->display->display_options['sorts']['weight']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['sorts']['weight']['field'] = 'weight';
  $handler->display->display_options['sorts']['weight']['relationship'] = 'term_node_tid';
  /* Sort criterion: Content: Last (field_dp_last) */
  $handler->display->display_options['sorts']['field_dp_last_value']['id'] = 'field_dp_last_value';
  $handler->display->display_options['sorts']['field_dp_last_value']['table'] = 'field_data_field_dp_last';
  $handler->display->display_options['sorts']['field_dp_last_value']['field'] = 'field_dp_last_value';
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
    'directory_person' => 'directory_person',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['block_description'] = 'Directory Index';

  /* Display: Administration */
  $handler = $view->new_display('page', 'Administration', 'directory_administration');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Directory Administration';
  $handler->display->display_options['enabled'] = FALSE;
  $handler->display->display_options['defaults']['access'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['access']['perm'] = 'edit any directory_person content';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'field_dp_type',
      'rendered' => 1,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['style_options']['columns'] = array(
    'field_dp_type' => 'field_dp_type',
    'field_dp_last' => 'field_dp_last',
    'field_dp_first' => 'field_dp_last',
    'field_dp_middle' => 'field_dp_last',
    'field_dp_job_role' => 'field_dp_job_role',
    'field_dp_email_address' => 'field_dp_email_address',
    'field_dp_location' => 'field_dp_location',
    'field_dp_hours' => 'field_dp_hours',
    'status' => 'status',
    'promote' => 'promote',
    'sticky' => 'sticky',
    'changed' => 'changed',
    'view_node' => 'view_node',
    'edit_node' => 'view_node',
    'delete_node' => 'view_node',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'field_dp_type' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_dp_last' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => ' ',
      'empty_column' => 0,
    ),
    'field_dp_first' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_dp_middle' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_dp_job_role' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_dp_email_address' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_dp_location' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_dp_hours' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'status' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'promote' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'sticky' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'changed' => array(
      'sortable' => 1,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'view_node' => array(
      'align' => '',
      'separator' => ' | ',
      'empty_column' => 0,
    ),
    'edit_node' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'delete_node' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['header'] = FALSE;
  /* Header: Global: Text area */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['content'] = '<a href="/node/add/directory-person?destination=/admin/directory-administration">+ Add a Directory Person</a>';
  $handler->display->display_options['header']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Type */
  $handler->display->display_options['fields']['field_dp_type']['id'] = 'field_dp_type';
  $handler->display->display_options['fields']['field_dp_type']['table'] = 'field_data_field_dp_type';
  $handler->display->display_options['fields']['field_dp_type']['field'] = 'field_dp_type';
  $handler->display->display_options['fields']['field_dp_type']['label'] = '';
  $handler->display->display_options['fields']['field_dp_type']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_dp_type']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_dp_type']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_dp_type']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_dp_type']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_dp_type']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_dp_type']['field_api_classes'] = TRUE;
  /* Field: Content: Last */
  $handler->display->display_options['fields']['field_dp_last']['id'] = 'field_dp_last';
  $handler->display->display_options['fields']['field_dp_last']['table'] = 'field_data_field_dp_last';
  $handler->display->display_options['fields']['field_dp_last']['field'] = 'field_dp_last';
  $handler->display->display_options['fields']['field_dp_last']['label'] = 'Name';
  $handler->display->display_options['fields']['field_dp_last']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_dp_last']['alter']['text'] = '[field_dp_last],';
  $handler->display->display_options['fields']['field_dp_last']['element_label_colon'] = FALSE;
  /* Field: Content: First */
  $handler->display->display_options['fields']['field_dp_first']['id'] = 'field_dp_first';
  $handler->display->display_options['fields']['field_dp_first']['table'] = 'field_data_field_dp_first';
  $handler->display->display_options['fields']['field_dp_first']['field'] = 'field_dp_first';
  $handler->display->display_options['fields']['field_dp_first']['label'] = '';
  $handler->display->display_options['fields']['field_dp_first']['element_label_colon'] = FALSE;
  /* Field: Content: Middle */
  $handler->display->display_options['fields']['field_dp_middle']['id'] = 'field_dp_middle';
  $handler->display->display_options['fields']['field_dp_middle']['table'] = 'field_data_field_dp_middle';
  $handler->display->display_options['fields']['field_dp_middle']['field'] = 'field_dp_middle';
  $handler->display->display_options['fields']['field_dp_middle']['label'] = '';
  $handler->display->display_options['fields']['field_dp_middle']['element_label_colon'] = FALSE;
  /* Field: Content: Job Role */
  $handler->display->display_options['fields']['field_dp_job_role']['id'] = 'field_dp_job_role';
  $handler->display->display_options['fields']['field_dp_job_role']['table'] = 'field_data_field_dp_job_role';
  $handler->display->display_options['fields']['field_dp_job_role']['field'] = 'field_dp_job_role';
  $handler->display->display_options['fields']['field_dp_job_role']['element_label_colon'] = FALSE;
  /* Field: Content: Email Address */
  $handler->display->display_options['fields']['field_dp_email_address']['id'] = 'field_dp_email_address';
  $handler->display->display_options['fields']['field_dp_email_address']['table'] = 'field_data_field_dp_email_address';
  $handler->display->display_options['fields']['field_dp_email_address']['field'] = 'field_dp_email_address';
  /* Field: Content: Published */
  $handler->display->display_options['fields']['status']['id'] = 'status';
  $handler->display->display_options['fields']['status']['table'] = 'node';
  $handler->display->display_options['fields']['status']['field'] = 'status';
  $handler->display->display_options['fields']['status']['label'] = 'Published?';
  $handler->display->display_options['fields']['status']['not'] = 0;
  /* Field: Content: Promoted to front page */
  $handler->display->display_options['fields']['promote']['id'] = 'promote';
  $handler->display->display_options['fields']['promote']['table'] = 'node';
  $handler->display->display_options['fields']['promote']['field'] = 'promote';
  $handler->display->display_options['fields']['promote']['label'] = 'Promoted?';
  $handler->display->display_options['fields']['promote']['not'] = 0;
  /* Field: Content: Sticky */
  $handler->display->display_options['fields']['sticky']['id'] = 'sticky';
  $handler->display->display_options['fields']['sticky']['table'] = 'node';
  $handler->display->display_options['fields']['sticky']['field'] = 'sticky';
  $handler->display->display_options['fields']['sticky']['label'] = 'Stickied?';
  $handler->display->display_options['fields']['sticky']['not'] = 0;
  /* Field: Content: Updated date */
  $handler->display->display_options['fields']['changed']['id'] = 'changed';
  $handler->display->display_options['fields']['changed']['table'] = 'node';
  $handler->display->display_options['fields']['changed']['field'] = 'changed';
  $handler->display->display_options['fields']['changed']['label'] = 'Last Updated';
  $handler->display->display_options['fields']['changed']['date_format'] = 'time ago';
  /* Field: Content: Link */
  $handler->display->display_options['fields']['view_node']['id'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['table'] = 'views_entity_node';
  $handler->display->display_options['fields']['view_node']['field'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['label'] = 'Options';
  $handler->display->display_options['fields']['view_node']['text'] = 'View';
  /* Field: Content: Edit link */
  $handler->display->display_options['fields']['edit_node']['id'] = 'edit_node';
  $handler->display->display_options['fields']['edit_node']['table'] = 'views_entity_node';
  $handler->display->display_options['fields']['edit_node']['field'] = 'edit_node';
  $handler->display->display_options['fields']['edit_node']['label'] = '';
  $handler->display->display_options['fields']['edit_node']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['edit_node']['text'] = 'Edit';
  /* Field: Content: Delete link */
  $handler->display->display_options['fields']['delete_node']['id'] = 'delete_node';
  $handler->display->display_options['fields']['delete_node']['table'] = 'views_entity_node';
  $handler->display->display_options['fields']['delete_node']['field'] = 'delete_node';
  $handler->display->display_options['fields']['delete_node']['label'] = '';
  $handler->display->display_options['fields']['delete_node']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['delete_node']['text'] = 'Delete';
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Taxonomy term: Weight */
  $handler->display->display_options['sorts']['weight']['id'] = 'weight';
  $handler->display->display_options['sorts']['weight']['table'] = 'taxonomy_term_data';
  $handler->display->display_options['sorts']['weight']['field'] = 'weight';
  $handler->display->display_options['sorts']['weight']['relationship'] = 'term_node_tid';
  /* Sort criterion: Content: Last (field_dp_last) */
  $handler->display->display_options['sorts']['field_dp_last_value']['id'] = 'field_dp_last_value';
  $handler->display->display_options['sorts']['field_dp_last_value']['table'] = 'field_data_field_dp_last';
  $handler->display->display_options['sorts']['field_dp_last_value']['field'] = 'field_dp_last_value';
  $handler->display->display_options['path'] = 'admin/directory-administration';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Directory Administration';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['context'] = 0;

  /* Display: Featured */
  $handler = $view->new_display('block', 'Featured', 'directory_featured');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Featured Person';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '1';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['empty'] = FALSE;
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['content'] = 'No directory persons have been promoted. If you are the owner of this site, please promote some directory persons or remove this block.';
  $handler->display->display_options['empty']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Photo */
  $handler->display->display_options['fields']['field_dp_photo']['id'] = 'field_dp_photo';
  $handler->display->display_options['fields']['field_dp_photo']['table'] = 'field_data_field_dp_photo';
  $handler->display->display_options['fields']['field_dp_photo']['field'] = 'field_dp_photo';
  $handler->display->display_options['fields']['field_dp_photo']['label'] = '';
  $handler->display->display_options['fields']['field_dp_photo']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_dp_photo']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_dp_photo']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => 'content',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_type'] = 'h2';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  /* Field: Content: Job Role */
  $handler->display->display_options['fields']['field_dp_job_role']['id'] = 'field_dp_job_role';
  $handler->display->display_options['fields']['field_dp_job_role']['table'] = 'field_data_field_dp_job_role';
  $handler->display->display_options['fields']['field_dp_job_role']['field'] = 'field_dp_job_role';
  $handler->display->display_options['fields']['field_dp_job_role']['label'] = '';
  $handler->display->display_options['fields']['field_dp_job_role']['element_label_colon'] = FALSE;
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
    'directory_person' => 'directory_person',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Promoted to front page */
  $handler->display->display_options['filters']['promote']['id'] = 'promote';
  $handler->display->display_options['filters']['promote']['table'] = 'node';
  $handler->display->display_options['filters']['promote']['field'] = 'promote';
  $handler->display->display_options['filters']['promote']['value'] = '1';
  $export['directory_persons'] = $view;

  return $export;
}
