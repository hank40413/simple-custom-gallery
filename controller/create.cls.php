<?php
	include_once("controller.php");
	
	class create {
		// 宣告資料表物件
		var $img;
		
		// 建構式
		public function create() {
			// 與資料表img連結
			$this->img = new img();
		}
		
		// 顯示畫面 create
		public function showCreate() {
			require("/view/create.php");
		}
		
		public function upload() {
			if ($_GET['action'] == "upload") {
				echo "loading()";
			}
		}
	}
?>

<script>
function loading() {
	document.body.innerHTML = "上傳中請稍候…";
}
</script>