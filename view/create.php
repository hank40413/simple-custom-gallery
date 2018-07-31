<?php
	// 與 controller 連結
	require_once("/controller/create.cls.php");
	$create = new create();
	

?>

<head>
	<title>Create</title>
</head>
<body>
	<i id="back" class="material-icons" >arrow_back</i><br>
	
	<form action="index.php?menu=upload" method="post" enctype="multipart/form-data">
		<input type="file" name="uploadInput" id="uploadInput" accept="image/*" style="display: none;" />
		<input id="uploadSubmit" type="submit" style="display: none;" />
		<button id="uploadSubmitBtn" type="button" class="btn btn-primary" >上傳</button>
		<br>
		<img id="uploadPreview" src="icon/icons8-add-image-96.png" style="cursor: pointer; margin-top: 10px; margin-left: 48px;" />
		
		<input id="uploadImgBlob" type="hidden" name="uploadImgBlob" />
	</form>

</body>

<script>
$(document).ready(function() {
	$("#uploadPreview").on("click", function() {
		$("#uploadInput").click();
	});
	$("#uploadSubmitBtn").on("click", function() {
		if ($("#uploadInput")[0].files.length == 0) {
			alert("請先上傳圖片");
		}
		else {
			$("#uploadSubmit").click();
		}
	});
});

$("#uploadInput").change(function(){
	readURL(this);
});

function readURL(input){
	if(input.files && input.files[0]){
		var reader = new FileReader();
		
		if (input.files[0].size < 1024 * 1024 * 3) {
			reader.readAsDataURL(input.files[0]);
			reader.onload = function (e) {
				$("#uploadPreview").attr('src', e.target.result);
				$("#uploadImgBlob").attr('value', e.target.result);
				$("#uploadPreview").css({"width":"80%", "max-width":"1000px"});
			}
		}
		else {
			alert("請上傳低於3MB的圖檔");
		}
	}
}
</script>