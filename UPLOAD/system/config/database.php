<?php

$config['charset'] = 'utf8';
$config['prefix'] = 'aws_';
$config['driver'] = 'MySQLi';
$config['master'] = array (
  'charset' => 'utf8',
  'host' => '10.0.2.228',
  'username' => 'root',
  'password' => 'root',
  'dbname' => 'we_center',
  'port' => '3308',
);
$config['slave'] = false;
$config['port'] = '3308';