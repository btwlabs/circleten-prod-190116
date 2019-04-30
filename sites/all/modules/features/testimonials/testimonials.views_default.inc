<?php
/**
 * @file
 * testimonials.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function testimonials_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'testimonials';
  $view->description = 'This view supplies a testimonial page & featured testimonial block.';
  $view->tag = 'business';
  $view->base_table = 'node';
  $view->human_name = 'Testimonials';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Testimonials';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['content'] = 'No testimonials have been entered. If you are the owner of this site, please add some testimonials or remove this page.';
  $handler->display->display_options['empty']['area']['format'] = 'full_html';
  /* Field: Content: Photo */
  $handler->display->display_options['fields']['field_t_photo']['id'] = 'field_t_photo';
  $handler->display->display_options['fields']['field_t_photo']['table'] = 'field_data_field_t_photo';
  $handler->display->display_options['fields']['field_t_photo']['field'] = 'field_t_photo';
  $handler->display->display_options['fields']['field_t_photo']['label'] = '';
  $handler->display->display_options['fields']['field_t_photo']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_t_photo']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_t_photo']['settings'] = array(
    'image_style' => 'thumbnail',
    'image_link' => '',
  );
  /* Field: Content: Description */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = '';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  /* Field: Content: Name */
  $handler->display->display_options['fields']['field_t_name']['id'] = 'field_t_name';
  $handler->display->display_options['fields']['field_t_name']['table'] = 'field_data_field_t_name';
  $handler->display->display_options['fields']['field_t_name']['field'] = 'field_t_name';
  $handler->display->display_options['fields']['field_t_name']['label'] = '';
  $handler->display->display_options['fields']['field_t_name']['element_type'] = 'h2';
  $handler->display->display_options['fields']['field_t_name']['element_label_colon'] = FALSE;
  /* Field: Content: Affiliation */
  $handler->display->display_options['fields']['field_t_affiliation']['id'] = 'field_t_affiliation';
  $handler->display->display_options['fields']['field_t_affiliation']['table'] = 'field_data_field_t_affiliation';
  $handler->display->display_options['fields']['field_t_affiliation']['field'] = 'field_t_affiliation';
  $handler->display->display_options['fields']['field_t_affiliation']['label'] = '';
  $handler->display->display_options['fields']['field_t_affiliation']['element_label_colon'] = FALSE;
  /* Sort criterion: Content: Sticky */
  $handler->display->display_options['sorts']['sticky']['id'] = 'sticky';
  $handler->display->display_options['sorts']['sticky']['table'] = 'node';
  $handler->display->display_options['sorts']['sticky']['field'] = 'sticky';
  $handler->display->display_options['sorts']['sticky']['order'] = 'DESC';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
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
    'testimonial' => 'testimonial',
  );

  /* Display: Testimonials */
  $handler = $view->new_display('page', 'Testimonials', 'testimonials');
  $handler->display->display_options['path'] = 'testimonials';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Testimonials';
  $handler->display->display_options['menu']['name'] = 'main-menu';

  /* Display: Featured */
  $handler = $view->new_display('block', 'Featured', 'testimonials_featured');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Featured Testimonial';
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
    'testimonial' => 'testimonial',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Promoted to front page */
  $handler->display->display_options['filters']['promote']['id'] = 'promote';
  $handler->display->display_options['filters']['promote']['table'] = 'node';
  $handler->display->display_options['filters']['promote']['field'] = 'promote';
  $handler->display->display_options['filters']['promote']['value'] = '1';
  $export['testimonials'] = $view;

  return $export;
}
