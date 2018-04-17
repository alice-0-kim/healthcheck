<?php
/**
 * @file
 * Contains \Drupal\healthcheck\Monitor\StatusMonitor.
 */
namespace Drupal\healthcheck\Monitor;
class StatusMonitor {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}
