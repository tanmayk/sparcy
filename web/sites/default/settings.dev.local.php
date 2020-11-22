<?php

/**
 * @codingStandardsIgnoreFile
 */

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

/**
 * Database configurations.
 */
$databases['default']['default'] = array (
  'database' => '????',
  'username' => '????',
  'password' => '????',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

/**
 * Configuration sync directory.
 */
$settings['config_sync_directory'] = '../config/sync';

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = '1PJQK57tJuvUPrWGI9GlzGwq2tpFBgBe9k0PjOCuxI6cleBVy4mXZrP9h6Fc3ommWroUAUg1Lg';

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
