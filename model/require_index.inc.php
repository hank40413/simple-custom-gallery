<?php
	require_once("/cfg/cfg.inc.php");
	//載入Class 
	spl_autoload_register(function ($class_name) {
		include_once($class_name . ".cls.php");
	});
?>