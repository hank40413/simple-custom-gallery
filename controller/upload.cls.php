<?php
	include_once("controller.php");
	
	class upload {
		// 宣告資料表物件
		var $img;
		
		// 建構式
		public function upload() {
			// 與資料表img連結
			$this->img = new img();
		}
		
		// 顯示畫面 create
		public function showUpload() {
			require("/view/upload.php");
		}
		
		// 操作資料庫
		// 寫入資料至 img 資料表內
		public function add_img($name, $width, $height) {
			return $this->img->add_img($name, $width, $height);
		}
	}
?>