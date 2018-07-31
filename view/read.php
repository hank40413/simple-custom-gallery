<head>
	<title>Read</title>
</head>
<body>
	<i id="back" class="material-icons" >arrow_back</i><br>
	<?php
		if ($_GET["img"]) {
			echo "<img src='img/{$_GET["img"]}.jpg'/>";
		}
		else {
			echo "<h1 style='color: red;'>請輸入正確檔名</h1>";
		}
	?>
</body>