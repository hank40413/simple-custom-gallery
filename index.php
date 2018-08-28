<?php
	session_start();
	
	// 與 controller 連結
	include_once("/controller/main.cls.php");
	include_once("/controller/create.cls.php");
	include_once("/controller/read.cls.php");
	include_once("/controller/upload.cls.php");
	include_once("/controller/delete.cls.php");
	include_once("/controller/login.cls.php");
	
	$main = new main();
	$create = new create();
	$read = new read();
	$upload = new upload();
	$delete = new delete();
	$login = new login();
	
	// session_unset();
?>

<html>
	<head>
		<? header("Content-type: text/html; charset=utf-8"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- Google Icons -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<!-- JQuery 縮圖套件 -->
		<script src="js/plugin/jquery.imagesGrid.js"></script>
		
		<!-- Bootstrap 關聯檔案，需置於JQuery以下 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		

		
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
			.need-login {
				display: none;
			}
		</style>
	</head>
	
	<script>
	<?php
		// 判斷是否已登入
		if ($_SESSION["logIn?"]) {
			echo "var isLogIn = true;";
		}
		else {
			echo "var isLogIn = false;";
		}
	?>
	$(document).ready(function() {
		$("#back").on("click", function() {
			window.location.href = "/gallery";
		});
		$("#btnLogin").on("click", function() {
			window.location.href = "index.php?menu=login";
		});
		if (isLogIn) {
			$(".need-login").removeClass("need-login");
		}
	})
	</script>
	
	<!-- 匯入 route 表，並根據內容顯示畫面 -->
	<?php require_once("route.php"); ?>
	
</html>



