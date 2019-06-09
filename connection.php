<?php
$cfg = '';
$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory(ROOT.'/App/Models');
$cfg->set_connections(
  array(
    'development' => 'mysql://root:root@localhost/mvc'
   // 'test' => 'mysql://username:password@localhost/test_database_name',
   // 'production' => 'mysql://username:password@localhost/production_database_name'
  )
);