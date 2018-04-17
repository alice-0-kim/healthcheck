<?php
/**
 * @author UCB IT WebServices, May 28th 2015
 * 
 * This is a basic health check page that is monitored by SCOM.
 * 
 * Checks if the database is reachable and we can run a query.
 * Checks if the default Drupal files folder is reachable and writeable.
 * Checks if a CLF theme is installed and checks for CLF CDN assets.
 * 
 * SCOM checks for the STATUS_OK string to be present in the page.
 * The STATUS_OK string is included only if all health checks pass.
 * 
 * @file
 * Contains \Drupal\healthcheck\Monitor\StatusMonitor.
 */

namespace Drupal\healthcheck\Monitor;

define('STATUS_OK', 	'<!-- SCOM HEALTH CHECK STATUS OK -->');
define('STATUS_ERR', 	'<!-- SCOM HEALTH CHECK STATUS ERR -->');
define('CLF_ASSET_URL', 'http://cdn.ubc.ca/clf/7.0.4/js/ubc-clf.min.js');

class StatusMonitor {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}
