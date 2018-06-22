<?php
	// 與 controller 連結
	include_once("/controller/main.cls.php");
	$main = new main();
?>

<html>
	<head>
		<? header("Content-type: text/html; charset=utf-8"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
	</head>
	
	<?php require_once("route.php"); ?>
	
</html>

