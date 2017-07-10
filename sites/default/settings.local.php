<?php
$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'driver' => 'mysql',
      'username' => getenv('MYSQL_USER'),
      'password' => getenv('MYSQL_ROOT_PASSWORD'),
      'port' => getenv('MYSQL_PORT'),
      'host' => getenv('MYSQL_HOST'),
      'database' => getenv('MYSQL_DATABASE'),
    ),
  ),
);
