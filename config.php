<?php
require 'environment.php';

global $config;
$config = array();

if(ENVIRONMENT = 'development'){
	$config['dbname'] = 'WebService';
	$config['host'] =  'localhost';
	$config['dbuser'] =  'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'WebService';
	$config['host'] =  'localhost';
	$config['dbuser'] =  'root';
	$config['dbpass'] = '';
}



?>