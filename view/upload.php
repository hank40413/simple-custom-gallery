<head>
	<title>Upload</title>
</head>
<body>
	<i id="back" class="material-icons" >arrow_back</i><br>
	
<?php
	$imgData = $_POST["uploadImgBlob"];
	$imgBlob = base64_decode(substr($imgData, strpos($imgData, ",") + 1));

    $imagick = new Imagick();
    $imagick->readImageBlob($imgBlob);
	$imagick->setImageFormat("jpg");
?>
</body>