<?php
	// 與 controller 連結
	require_once("/controller/delete.cls.php");
	$delete = new delete();
?>

<head>
	<title>Delete</title>
	<style>
		.container {
			display: flex;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
		}
		.loader {
			display: block;
			border: 20px solid #ffa4a4;
			border-radius: 50%;
			border-top: 20px solid #d42727;
			width: 120px;
			height: 120px;
			margin: auto;
			flex: center;
			-webkit-animation: spin 2s linear infinite; /* Safari */
			animation: spin 2s linear infinite;
		}

		/* Safari */
		@-webkit-keyframes spin {
			0% { -webkit-transform: rotate(0deg); }
			100% { -webkit-transform: rotate(360deg); }
		}

		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="loader"></div>
	</div>
</body>