<?php
	class user{
		
		var $db;
		
		//建構函式
		public function __construct(){
			$this->db = new DB(SERVERNAME, USERNAME, PASSWORD, DBNAME);

			return true;
		}
		
		// 顯示 user 資料表內所有資料
		public function sel_all_user() {
			$sql = 
			"
			SELECT 
				* 
			FROM 
				user
			";
			
			return $this->db->selectRecords($sql);
		}
	}
?>