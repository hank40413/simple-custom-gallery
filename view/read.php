<body>
	<h1>Raed</h1>
	<a href="index.php?menu=main">Main</a><br><br>
	<?php
		if ($_GET["img"]) {
			echo "<img src='img/{$_GET["img"]}.jpg'/>";
		}
		else {
			echo "<h1 style='color: red;'>請輸入正確檔名</h1>";
		}
		
	?>
</body>
