<?php
	include_once("controller.php");
	
	class main {
		// 宣告資料表物件
		var $img;
		
		// 建構式
		public function main() {
			// 與資料表img連結
			$this->img = new img();
		}
		
		// 顯示畫面 main
		public function showMain() {
			require("/view/main.php");
		}
		
		// 操作資料庫
		// 選取 img 資料表內所有資料
		public function sel_all_img() {
			return $this->img->sel_all_img();
		}
	}
?>