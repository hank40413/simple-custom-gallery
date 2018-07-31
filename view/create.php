<body>
	<h1>Upload</h1>
	<a href="index.php?menu=main">Main</a>
	<form action="" enctype="multipart/form-data">
	   <input type="file" id="uploadInput" accept="image/*" style="display: none;" />
	   <img id="uploadPreview" src="icon/icons8-add-image-96.png" style="cursor: pointer; margin-top: 10px;" />
	</form>
</body>

<script>
$(document).ready(function() {
	$("#uploadPreview").on("click", function() {
		$("#uploadInput").click();
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
				$("#uploadPreview").css({"width":"80%", "max-width":"1000px"});
			}
		}
		else {
			alert("請上傳低於3MB的圖檔");
		}
	}
}
</script>