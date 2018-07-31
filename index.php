<?php
	// 與 controller 連結
	include_once("/controller/main.cls.php");
	include_once("/controller/create.cls.php");
	
	$main = new main();
	$create = new create();
?>

<html>
	<head>
		<? header("Content-type: text/html; charset=utf-8"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<style type="text/css">
			body {
				margin: 10px;
				background-color:#fafafa;
				font-size: 18px;
			}
			#back {
				margin-top: 20px; 
				margin-bottom: 30px; 
				border-radius: 22.5px; 
				background-color: lightgray; 
				font-size: 48px; 
				color: white; 
				cursor: pointer;
			}
		</style>
		
		<!-- Google Icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<!-- JQuery 縮圖套件 -->
		<script src="js/plugin/jquery.imagesGrid.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</head>
	
	<?php require_once("route.php"); ?>
	
</html>

<script>
	$(document).ready(function() {
		$("#back").on("click", function() {
			window.location.href = "/CRUD";
		});
	})
</script>

