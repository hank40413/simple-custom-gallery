<?php
	// 與 controller 連結
	require_once("/controller/upload.cls.php");
	$upload = new upload();
?>

<head>
	<title>Upload</title>
	<style>
		.container {
			display: flex;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
		}
		.loader {
			display: block;
			border: 16px solid #f3f3f3;
			border-radius: 50%;
			border-top: 16px solid #929292;
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
	
<?php
	$currentTime = (String)time();
	$uploadImgName = "img/" . $currentTime . ".jpg";
	
	try {
		$file = fopen($uploadImgName, "w");
		fclose($file);

		$imgData = $_POST["uploadImgBlob"];
		$imgBlob = base64_decode(substr($imgData, strpos($imgData, ",") + 1));

		$imagick = new Imagick();
		$imagick->readImageBlob($imgBlob);
		$imagick->setImageFormat("jpg");
		
		$imgWidth = $imagick->getImageWidth();
		$imgHeight = $imagick->getImageHeight();
		
		var_dump($imgWidth);
		var_dump($imgHeight);

		var_dump($upload->add_img($currentTime, $imgWidth, $imgHeight));
		$imagick->writeImage(realpath($uploadImgName));
	}
	catch(Exception $e) {
		echo "<script>alert('發生錯誤，請重試。')</script>";
		unlink($uploadImgName);
	}
	finally {
		echo "<script>window.location.href = 'index.php'</script>";
	}

?>
</body>