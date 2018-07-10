<?php
	// 與 controller 連結
	require_once("/controller/main.cls.php");
	$main = new main();
?>

<body>
	<h1>Main</h1>
	<a href="index.php?menu=create">Create</a>　
	<a href="index.php?menu=delete">Delete</a><br><br>

	<div id="images_grid" class="images-grid" >
	</div>
</body>

<script type="text/javascript">
	// 取得資料表 img 中的所有內容並轉成JSON格式存入 gallery
	var gallery = <? print_r(json_encode($main->sel_all_img())) ?>;
	//alert(gallery[0]["name"]);
	$(document).ready(function() {
		// 抓取資料庫中所有的資料以後，對應至伺服器中所有的圖片檔案，建立一個圖片集
		for (index in gallery) {
			$("#images_grid").append("<div class='image-wrapper' ></div>");
			$(".image-wrapper").last().attr("data-width", gallery[index]['width']);
			$(".image-wrapper").last().attr("data-height", gallery[index]['height']);
			$(".image-wrapper").last().html("<img class='image-thumb'/>");
			$(".image-wrapper").last().children().attr("src", 'img/' + gallery[index]['name'] + '.jpg');
		}

		// 縮圖工具，讓所有的縮圖並排列
		$(".images-grid").imagesGrid({
			rowHeight: 250,
			margin: 3
		});
	});
</script>