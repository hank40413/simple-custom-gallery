<?php
	// 與 controller 連結
	include_once("/controller/main.cls.php");
	$main = new main();
?>

<html>
	<head>
		<? header("Content-type: text/html; charset=utf-8"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS -->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
		
		<style type="text/css">
			body {
				background-color:#fafafa;
				font-family: Arial, Helvetica, sans-serif;
			}
		</style>
		
		<!-- Google Icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<!-- JQuery 縮圖套件 -->
		<script src="js/plugin/jquery.imagesGrid.js"></script>

	</head>
	
	<?php require_once("route.php"); ?>
	
</html>

