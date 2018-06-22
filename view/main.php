<?php
	// 與 controller 連結
	require_once("/controller/main.cls.php");
	$main = new main();
?>

<body>
	<h1>Main</h1>
	<a href="index.php?menu=create">Create</a>　
	<a href="index.php?menu=delete">Delete</a><br><br>
	<?php 
		$gallery = $main->sel_all_img();
		for ($i = 0; $i < count($gallery); $i++) {
			echo "<a href='index.php?menu=read&img={$gallery[$i]["name"]}'><img id='img{$gallery[$i]["id"]}' src='img/{$gallery[$i]["name"]}.jpg' width='800' height='450' /></a> ";
			
		}
	?>	
</body>
