<?php
	// 與 controller 連結
	require_once("/controller/main.cls.php");
	$main = new main();
?>

<head>
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
			cursor: pointer;
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
	<div id="menu" style="margin-bottom: 5px;" >
		<button id="btnCreate" type="button" class="btn btn-success">Upload</button>
		<button id="btnDelete" type="button" class="btn btn-danger">Delete</button>
	</div>
	
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
		
		// 圖片盒程式碼
		{
			// 點選圖片時將會顯示此圖片的圖片檢視盒
			$(".image-thumb").on("click", function() {
				var clickIndex = $(".image-thumb").index($(this));
				$(".modal").css("display", "block");
				$(".modal-content").attr("src", this.src);
				$(".modal-content").on("click", function() {
					window.location.href = "index.php?menu=read&img=" + gallery[clickIndex]['name'];
				});
			});
			
			// 點選圖片以外的地方將會關閉此圖片盒
			$(".close, .modal").on("click", function() {
				$(".modal").css("display", "none");
			});
		}
		
		// 功能按鈕
		{
			// create按鈕，連結到上傳頁面
			$("#btnCreate").on("click", function() {
				window.location.href = "index.php?menu=create";
			});
			// delete按鈕，連結到刪除頁面
			$("#btnDelete").on("click", function() {
				window.location.href = "index.php?menu=delete";
			});
		}
	});
</script>