<?php
require './lib/dibi.min.php';

// DB
try {
	$dsn = new PDO("mysql:host=localhost;dbname=xodlcxdd_ping", 'xodlcxdd_ping', 'F7k6R5k7', array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	));

	dibi::connect(array(
		'driver' => 'pdo',
		'pdo' => $dsn,
		'lazy' => true,
		'profiler' => array(
        	'run' => TRUE,
    	),
	));

	$dibi = true;

} catch (Exception $e) {
	echo $e->getMessage();
	exit();
}
?>
