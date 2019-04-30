<?php

/**
 * Expose the session variable as a context condition
 */
class mcn_circleten_context_condition_sessionval extends context_condition {
  function condition_values() {
    $values = array();
    return $values;
  }

  function execute() {
    if ($this->condition_used()) {
      $trail = menu_get_active_trail();
      foreach ($trail as $item) {
        if (!empty($item['href'])) {
          foreach ($this->get_contexts($item['href']) as $context) {
            $this->condition_met($context, $item['href']);
          }
        }
      }
    }
  }

}
