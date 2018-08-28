<?php
	include_once("controller.php");
	
	class login {
		// 宣告資料表物件
		var $user;
		
		// 建構式
		public function login() {
			// 與資料表 user 連結
			$this->user = new user();
		}
		
		// 顯示畫面 create
		public function showLogin() {
			require("/view/login.php");
		}
		
		// 操作資料庫
		// 選取 user 資料表內所有資料
		public function sel_all_user() {
			return $this->user->sel_all_user();
		}
	}
?>