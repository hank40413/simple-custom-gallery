<?php
	include_once("controller.php");
	
	class read {
		// 宣告資料表物件
		var $img;
		
		// 建構式
		public function read() {
			// 與資料表img連結
			$this->img = new img();
		}
		
		// 顯示畫面 main
		public function showRead() {
			require("/view/read.php");
		}
		
	}
?>