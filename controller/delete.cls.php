<?php
	include_once("controller.php");
	
	class delete {
		// 宣告資料表物件
		var $img;
		
		// 建構式
		public function delete() {
			// 與資料表img連結
			$this->img = new img();
		}
		
		// 顯示畫面 delete
		public function showDelete() {
			require("/view/delete.php");
		}
		
		// 操作資料庫
		// 取消顯示圖片名稱為 $name 的圖片
		public function disable_img($name) {
			return $this->img->disable_img($name);
		}
	}
?>