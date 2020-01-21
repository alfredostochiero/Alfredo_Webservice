<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT === 'development'){
	$config['dbname'] = 'webservice';
	$config['host'] =  'localhost';
	$config['dbuser'] =  'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'webservice';
	$config['host'] =  'localhost';
	$config['dbuser'] =  'root';
	$config['dbpass'] = '';
}



?>