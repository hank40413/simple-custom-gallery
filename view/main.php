<?php
	// 與 controller 連結
	require_once("/controller/main.cls.php");
	$main = new main();
?>

<body>
	<h1>Main</h1>
	<?php 
		// var_dump($img->sel_all_img());
		// while($row = $img->sel_all_img()->fetch_assoc()) {
			// echo "<img id='img{$row["id"]}' src='img/{$row["name"]}.jpg' width='800' height='450' /><br><br>";
		// }
	?>	
</body>
