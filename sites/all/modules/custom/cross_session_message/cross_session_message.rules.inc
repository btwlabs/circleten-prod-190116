<?php

/**
 * @file Implementations of hook functions for rules
 */

/**
 * Implementation of hook_rules_action_info
 */
function cross_session_message_rules_action_info() {
  return array(
    'cross_session_message_set' => array(
      'label' => t('Send a Message to Another User'),
      'group' => t('Cross-session Message'),
      'parameter' => array(
        'account' => array(
          'type' => 'user',
          'label' => t('User'),
        ),
        'message' => array(
          'type' => 'text',
          'label' => t('Message'),
        ),
        'type' => array(
          'type' => 'text',
          'label' => t('Type'),
          'description' => t('Recommended "status", "warning", or "error".'),
          'default value' => 'status',
        ),
        'repeat' => array(
          'type' => 'integer',
          'label' => t('Repeat'),
          'options list' => 'cross_session_repeat_options',
        )
      ),
      'access callback' => 'cross_session_message_access',
      'base' => 'cross_session_message_set',
    ),
  );
} // hook_rules_action_info

/**
 * Verify the current user's ability to send messages
 *
 * @return boolean
 */
function cross_session_message_access() {
  return user_access('send cross-session messages');
} // cross_session_message_access

/**
 * Return options for the repeat parameter (it's a boolean)
 *
 * @return array
 */
function cross_session_repeat_options() {
  return array(0 => 'No repeat', 1 => 'Repeat');
} // cross_session_repeat_options

