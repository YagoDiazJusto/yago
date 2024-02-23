<?php
$databases['default']['default'] = array (
  'database' => getenv('DB_NAME'),
  'username' => getenv('DB_USER'),
  'password' => getenv('DB_PASWORD'),
  'prefix' => getenv('DB_PREFIX'),
  'host' => getenv('DB_HOST'),
  'port' => getenv('DB_PORT'),
  'isolation_level' => 'READ COMMITTED',
  'driver' => 'mysql',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);
$settings['hash_salt'] = 'Z59FzZUN6fazarX5Oar7M5g-bHHhdSLIKsIIBgxQmzV6kMDvJUK9S6HGea1aJKythO4WwyIBPQ';
$settings['config_sync_directory'] = 'sites/default/files/config_-jPcyRsw1lxI87MkeWaxQ-O7fbzejYfMagCXZwzWCiI3LHv1rd4qb5CAugsTnFkUU4ubJNvEfw/sync';
