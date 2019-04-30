<?php
/**
 * @file
 * service.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function service_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'sermons';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Service';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Past Services';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['hide_empty'] = 0;
  $handler->display->display_options['row_options']['default_field_elements'] = 1;
  /* Field: Content: Event Date */
  $handler->display->display_options['fields']['field_date']['id'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['table'] = 'field_data_field_date';
  $handler->display->display_options['fields']['field_date']['field'] = 'field_date';
  $handler->display->display_options['fields']['field_date']['label'] = '';
  $handler->display->display_options['fields']['field_date']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_date']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_date']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_date']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_date']['element_label_colon'] = 0;
  $handler->display->display_options['fields']['field_date']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_date']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_date']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_date']['type'] = 'date_short';
  $handler->display->display_options['fields']['field_date']['settings'] = array(
    'format_type' => 'short',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_repeat_rule' => 'show',
  );
  $handler->display->display_options['fields']['field_date']['field_api_classes'] = 0;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['link_to_node'] = 1;
  /* Field: Content: Link */
  $handler->display->display_options['fields']['view_node']['id'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['table'] = 'views_entity_node';
  $handler->display->display_options['fields']['view_node']['field'] = 'view_node';
  /* Sort criterion: Content: Service Date (field_sermon_date) */
  $handler->display->display_options['sorts']['field_sermon_date_value']['id'] = 'field_sermon_date_value';
  $handler->display->display_options['sorts']['field_sermon_date_value']['table'] = 'field_data_field_sermon_date';
  $handler->display->display_options['sorts']['field_sermon_date_value']['field'] = 'field_sermon_date_value';
  $handler->display->display_options['sorts']['field_sermon_date_value']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 0;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'service' => 'service',
  );

  /* Display: Past Services Page */
  $handler = $view->new_display('page', 'Past Services Page', 'page');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Service Date */
  $handler->display->display_options['fields']['field_sermon_date']['id'] = 'field_sermon_date';
  $handler->display->display_options['fields']['field_sermon_date']['table'] = 'field_data_field_sermon_date';
  $handler->display->display_options['fields']['field_sermon_date']['field'] = 'field_sermon_date';
  $handler->display->display_options['fields']['field_sermon_date']['label'] = '';
  $handler->display->display_options['fields']['field_sermon_date']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['element_type'] = '0';
  $handler->display->display_options['fields']['field_sermon_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_sermon_date']['element_wrapper_type'] = 'div';
  $handler->display->display_options['fields']['field_sermon_date']['element_wrapper_class'] = 'service-date';
  $handler->display->display_options['fields']['field_sermon_date']['element_default_classes'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['settings'] = array(
    'format_type' => 'm_d_y_time_am_',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_repeat_rule' => 'show',
  );
  $handler->display->display_options['fields']['field_sermon_date']['field_api_classes'] = 1;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['external'] = 0;
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['title']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_wrapper_type'] = 'h2';
  $handler->display->display_options['fields']['title']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['title']['link_to_node'] = 1;
  /* Field: Content: Link */
  $handler->display->display_options['fields']['view_node']['id'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['table'] = 'views_entity_node';
  $handler->display->display_options['fields']['view_node']['field'] = 'view_node';
  $handler->display->display_options['fields']['view_node']['label'] = '';
  $handler->display->display_options['fields']['view_node']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['view_node']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['view_node']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['view_node']['alter']['external'] = 0;
  $handler->display->display_options['fields']['view_node']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['view_node']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['view_node']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['view_node']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['view_node']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['view_node']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['view_node']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['view_node']['alter']['html'] = 0;
  $handler->display->display_options['fields']['view_node']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['view_node']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['view_node']['hide_empty'] = 0;
  $handler->display->display_options['fields']['view_node']['empty_zero'] = 0;
  $handler->display->display_options['fields']['view_node']['text'] = 'listen online »';
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 0;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'service' => 'service',
  );
  /* Filter criterion: Date: Date (node) */
  $handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
  $handler->display->display_options['filters']['date_filter']['table'] = 'node';
  $handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
  $handler->display->display_options['filters']['date_filter']['operator'] = '<';
  $handler->display->display_options['filters']['date_filter']['default_date'] = 'now';
  $handler->display->display_options['filters']['date_filter']['date_fields'] = array(
    'field_data_field_sermon_date.field_sermon_date_value' => 'field_data_field_sermon_date.field_sermon_date_value',
  );
  $handler->display->display_options['path'] = 'services';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Past Services';
  $handler->display->display_options['menu']['weight'] = '1';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;

  /* Display: Feed */
  $handler = $view->new_display('feed', 'Feed', 'feed');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['style_plugin'] = 'rss';
  $handler->display->display_options['row_plugin'] = 'node_rss';
  $handler->display->display_options['path'] = 'services.xml';
  $handler->display->display_options['displays'] = array(
    'default' => 'default',
    'page' => 'page',
  );

  /* Display: This Week's Message */
  $handler = $view->new_display('block', 'This Week\'s Message', 'block_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'The Latest Message';
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['css_class'] = 'latest-message';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '1';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['hide_empty'] = 0;
  $handler->display->display_options['row_options']['default_field_elements'] = 1;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: Content: Service audio (field_sermon_audio) */
  $handler->display->display_options['relationships']['field_sermon_audio_nid']['id'] = 'field_sermon_audio_nid';
  $handler->display->display_options['relationships']['field_sermon_audio_nid']['table'] = 'field_data_field_sermon_audio';
  $handler->display->display_options['relationships']['field_sermon_audio_nid']['field'] = 'field_sermon_audio_nid';
  $handler->display->display_options['relationships']['field_sermon_audio_nid']['required'] = 0;
  $handler->display->display_options['relationships']['field_sermon_audio_nid']['delta'] = '-1';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['external'] = 0;
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['title']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_wrapper_type'] = 'h3';
  $handler->display->display_options['fields']['title']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['title']['link_to_node'] = 1;
  /* Field: Content: Speaker */
  $handler->display->display_options['fields']['field_speaker']['id'] = 'field_speaker';
  $handler->display->display_options['fields']['field_speaker']['table'] = 'field_data_field_speaker';
  $handler->display->display_options['fields']['field_speaker']['field'] = 'field_speaker';
  $handler->display->display_options['fields']['field_speaker']['label'] = '';
  $handler->display->display_options['fields']['field_speaker']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_speaker']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_speaker']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_speaker']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_speaker']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_speaker']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_speaker']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_speaker']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_speaker']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_speaker']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_speaker']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_speaker']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_speaker']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_speaker']['element_type'] = '0';
  $handler->display->display_options['fields']['field_speaker']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_speaker']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_speaker']['element_default_classes'] = 0;
  $handler->display->display_options['fields']['field_speaker']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_speaker']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_speaker']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_speaker']['field_api_classes'] = 1;
  /* Field: Content: Service Date */
  $handler->display->display_options['fields']['field_sermon_date']['id'] = 'field_sermon_date';
  $handler->display->display_options['fields']['field_sermon_date']['table'] = 'field_data_field_sermon_date';
  $handler->display->display_options['fields']['field_sermon_date']['field'] = 'field_sermon_date';
  $handler->display->display_options['fields']['field_sermon_date']['label'] = '';
  $handler->display->display_options['fields']['field_sermon_date']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['text'] = '<div class="message"><h3>[title]</h3>
[field_speaker]
[field_sermon_date]</div>';
  $handler->display->display_options['fields']['field_sermon_date']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['element_type'] = '0';
  $handler->display->display_options['fields']['field_sermon_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_sermon_date']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_sermon_date']['element_default_classes'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['settings'] = array(
    'format_type' => 'm_d_y_time_am_',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_repeat_rule' => 'show',
  );
  $handler->display->display_options['fields']['field_sermon_date']['field_api_classes'] = 1;
  /* Field: Content: Audio File */
  $handler->display->display_options['fields']['field_audio']['id'] = 'field_audio';
  $handler->display->display_options['fields']['field_audio']['table'] = 'field_data_field_audio';
  $handler->display->display_options['fields']['field_audio']['field'] = 'field_audio';
  $handler->display->display_options['fields']['field_audio']['relationship'] = 'field_sermon_audio_nid';
  $handler->display->display_options['fields']['field_audio']['label'] = '';
  $handler->display->display_options['fields']['field_audio']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_audio']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_audio']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_audio']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_audio']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_audio']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_audio']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_audio']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_audio']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_audio']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_audio']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_audio']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_audio']['element_type'] = '0';
  $handler->display->display_options['fields']['field_audio']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_audio']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_audio']['element_default_classes'] = 0;
  $handler->display->display_options['fields']['field_audio']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_audio']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_audio']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_audio']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_audio']['type'] = 'mediaelement_audio';
  $handler->display->display_options['fields']['field_audio']['settings'] = array(
    'controls' => 1,
    'width' => '200',
    'height' => '30',
    'download_link' => 0,
    'download_text' => 'Download',
  );
  $handler->display->display_options['fields']['field_audio']['field_api_classes'] = 1;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 0;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'service' => 'service',
  );
  /* Filter criterion: Date: Date (node) */
  $handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
  $handler->display->display_options['filters']['date_filter']['table'] = 'node';
  $handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
  $handler->display->display_options['filters']['date_filter']['operator'] = '<';
  $handler->display->display_options['filters']['date_filter']['default_date'] = 'Sunday this week';
  $handler->display->display_options['filters']['date_filter']['date_fields'] = array(
    'field_data_field_sermon_date.field_sermon_date_value' => 'field_data_field_sermon_date.field_sermon_date_value',
  );
  /* Filter criterion: Content: Service audio (field_sermon_audio) */
  $handler->display->display_options['filters']['field_sermon_audio_nid']['id'] = 'field_sermon_audio_nid';
  $handler->display->display_options['filters']['field_sermon_audio_nid']['table'] = 'field_data_field_sermon_audio';
  $handler->display->display_options['filters']['field_sermon_audio_nid']['field'] = 'field_sermon_audio_nid';
  $handler->display->display_options['filters']['field_sermon_audio_nid']['operator'] = 'not empty';

  /* Display: Front Announcement */
  $handler = $view->new_display('block', 'Front Announcement', 'block_2');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['css_class'] = 'announcement';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '1';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['hide_empty'] = 0;
  $handler->display->display_options['row_options']['default_field_elements'] = 1;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Service Date */
  $handler->display->display_options['fields']['field_sermon_date']['id'] = 'field_sermon_date';
  $handler->display->display_options['fields']['field_sermon_date']['table'] = 'field_data_field_sermon_date';
  $handler->display->display_options['fields']['field_sermon_date']['field'] = 'field_sermon_date';
  $handler->display->display_options['fields']['field_sermon_date']['label'] = '';
  $handler->display->display_options['fields']['field_sermon_date']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['element_type'] = '0';
  $handler->display->display_options['fields']['field_sermon_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_sermon_date']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_sermon_date']['element_default_classes'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_sermon_date']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_sermon_date']['settings'] = array(
    'format_type' => 'month_day',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_repeat_rule' => 'show',
  );
  $handler->display->display_options['fields']['field_sermon_date']['field_api_classes'] = 1;
  /* Field: Content: Announcement */
  $handler->display->display_options['fields']['field_announcement_line_1']['id'] = 'field_announcement_line_1';
  $handler->display->display_options['fields']['field_announcement_line_1']['table'] = 'field_data_field_announcement_line_1';
  $handler->display->display_options['fields']['field_announcement_line_1']['field'] = 'field_announcement_line_1';
  $handler->display->display_options['fields']['field_announcement_line_1']['label'] = '';
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['element_type'] = '0';
  $handler->display->display_options['fields']['field_announcement_line_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_announcement_line_1']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_announcement_line_1']['element_default_classes'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_announcement_line_1']['group_rows'] = 1;
  $handler->display->display_options['fields']['field_announcement_line_1']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_announcement_line_1']['delta_reversed'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['delta_first_last'] = 0;
  $handler->display->display_options['fields']['field_announcement_line_1']['multi_type'] = 'ul';
  $handler->display->display_options['fields']['field_announcement_line_1']['field_api_classes'] = 0;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 0;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'service' => 'service',
  );
  /* Filter criterion: Date: Date (node) */
  $handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
  $handler->display->display_options['filters']['date_filter']['table'] = 'node';
  $handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
  $handler->display->display_options['filters']['date_filter']['default_date'] = 'Sunday this week';
  $handler->display->display_options['filters']['date_filter']['default_to_date'] = 'Sunday this week + 7 days';
  $handler->display->display_options['filters']['date_filter']['date_fields'] = array(
    'field_data_field_sermon_date.field_sermon_date_value' => 'field_data_field_sermon_date.field_sermon_date_value',
  );

  /* Display: This Week's Bulletin */
  $handler = $view->new_display('block', 'This Week\'s Bulletin', 'block_3');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['css_class'] = FALSE;
  $handler->display->display_options['css_class'] = 'bulletin';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '1';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['hide_empty'] = 0;
  $handler->display->display_options['row_options']['default_field_elements'] = 1;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Service Bulletin */
  $handler->display->display_options['fields']['field_service_bulletin']['id'] = 'field_service_bulletin';
  $handler->display->display_options['fields']['field_service_bulletin']['table'] = 'field_data_field_service_bulletin';
  $handler->display->display_options['fields']['field_service_bulletin']['field'] = 'field_service_bulletin';
  $handler->display->display_options['fields']['field_service_bulletin']['label'] = '';
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['text'] = '<span></span><a href="[field_service_bulletin]">Download This Week\'s Bulletin</a>';
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['path'] = '[field_service_bulletin]';
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['absolute'] = 1;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['element_type'] = '0';
  $handler->display->display_options['fields']['field_service_bulletin']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_service_bulletin']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_service_bulletin']['element_default_classes'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_service_bulletin']['hide_alter_empty'] = 1;
  $handler->display->display_options['fields']['field_service_bulletin']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_service_bulletin']['type'] = 'file_url_plain';
  $handler->display->display_options['fields']['field_service_bulletin']['field_api_classes'] = 1;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 0;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'service' => 'service',
  );
  /* Filter criterion: Date: Date (node) */
  $handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
  $handler->display->display_options['filters']['date_filter']['table'] = 'node';
  $handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
  $handler->display->display_options['filters']['date_filter']['default_date'] = 'Sunday this week';
  $handler->display->display_options['filters']['date_filter']['default_to_date'] = 'Sunday this week + 7 days';
  $handler->display->display_options['filters']['date_filter']['date_fields'] = array(
    'field_data_field_sermon_date.field_sermon_date_value' => 'field_data_field_sermon_date.field_sermon_date_value',
  );
  $export['sermons'] = $view;

  return $export;
}
