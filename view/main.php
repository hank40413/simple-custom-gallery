<?php
	// 與 controller 連結
	require_once("/controller/main.cls.php");
	$main = new main();
?>

<head>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<style  type="text/css">
		.image-thumb {
			cursor: pointer;
			transition: 0.2s;
		}
		
		.image-thumb:hover {opacity: 0.6;}
		
		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			padding-top: 100px; /* Location of the box */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.85); /* Black w/ opacity */
		}

		/* Modal Content (image) */
		.modal-content {
			margin: auto;
			display: block;
			width: 80%;
			max-width: 1000px;
		}
		
		/* The Close Button */
		.close {
			position: absolute;
			top: 15px;
			right: 35px;
			color: #f1f1f1;
			font-size: 40px;
			font-weight: bold;
			transition: 0.3s;
		}

		.close:hover,
		.close:focus {
			color: #bbb;
			text-decoration: none;
			cursor: pointer;
		}
		
		/* Add Animation */
		.modal-content, #caption {    
			-webkit-animation-name: zoom;
			-webkit-animation-duration: 0.6s;
			animation-name: zoom;
			animation-duration: 0.6s;
		}

		@-webkit-keyframes zoom {
			from {-webkit-transform:scale(0)} 
			to {-webkit-transform:scale(1)}
		}

		@keyframes zoom {
			from {transform:scale(0)} 
			to {transform:scale(1)}
		}

		/* 100% Image Width on Smaller Screens */
		@media only screen and (max-width: 700px){
			.modal-content {
				width: 100%;
			}
		}
	</style>
</head>

<body>
	<h1>Main</h1>
	<a href="index.php?menu=create">Create</a>　
	<a href="index.php?menu=delete">Delete</a><br><br>

	<!-- 圖庫 -->
	<div id="images-grid" class="images-grid" >
	</div>
	
	<!-- 檢視盒 -->
	<div id="vMainModal" class="modal">
		<span class="close">&times;</span>
		<img class="modal-content" id="modal-img">
	</div>
	
</body>

<script type="text/javascript">
	// 取得資料表 img 中的所有內容並轉成JSON格式存入 gallery
	var gallery = <? print_r(json_encode($main->sel_all_img())) ?>;

	$(document).ready(function() {
		// 圖片縮圖程式碼
		{
			// 抓取資料庫中所有的資料以後，對應至伺服器中所有的圖片檔案，建立一個圖片集
			for (index in gallery) {
				$("#images-grid").append("<div class='image-wrapper' ><img class='image-thumb'/></div>");
				$(".image-wrapper").last().attr("data-width", gallery[index]['width']);
				$(".image-wrapper").last().attr("data-height", gallery[index]['height']);
				$(".image-wrapper").last().children().attr("src", "img/" + gallery[index]['name'] + ".jpg");

			}

			// 縮圖工具，讓所有的縮圖並排列
			$(".images-grid").imagesGrid({
				rowHeight: 250,
				margin: 3, 
				imageSelector: '.image-thumb'
			});
		}
		
		$(".image-thumb").on("click", function() {
			$(".modal").css("display", "block");
			$(".modal-content").attr("src", this.src);
		});
		
		$(".close").on("click", function() {
			$(".modal").css("display", "none");
		});
		
	});
</script>