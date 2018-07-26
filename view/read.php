<body>
	<i class="material-icons back" style="margin-top: 20px; margin-bottom: 30px; border-radius: 22.5px; background-color: lightgray; font-size: 48px; color: white; cursor: pointer;">arrow_back</i><br>
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
		$(".back").on("click", function() {
			window.location.href = "/CRUD";
		});
	})
</script>
