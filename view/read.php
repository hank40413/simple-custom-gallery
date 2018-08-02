<head>
	<title>Read</title>
</head>
<body>
	<i id="back" class="material-icons" >arrow_back</i><br>
	<div id="menu" style="margin-bottom: 5px;" >
		<button id="btnDownload" type="button" class="btn btn-info"><i class="fa fa-download"></i> Download</button>
		<button id="btnDelete" type="button" class="btn btn-danger"><i class="fa fa-remove"></i> Delete</button>
	</div>
	<?php
		if ($_GET["img"]) {
			echo "<img src='img/{$_GET["img"]}.jpg'/>";
		}
		else {
			echo "<h1 style='color: red;'>請輸入正確檔名</h1>";
		}
	?>
</body>

<script>
$(document).ready(function() {
	$("#btnDelete").on("click", function() {
		if (confirm("將刪除這張圖片，且不能回覆。\n要繼續嗎?")) {
			window.location.href = "index.php?menu=delete&img=<? echo $_GET[img] ?>&action=delete"
		}
	});
});
</script>