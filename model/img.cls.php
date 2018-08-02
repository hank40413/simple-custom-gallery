<?php
	class img{
		
		var $db;
		
		//建構函式
		public function __construct(){
			$this->db = new DB(SERVERNAME, USERNAME, PASSWORD, DBNAME);

			return true;
		}
		
		// 顯示 img 資料表內所有資料
		public function sel_all_img() {
			$sql = 
			"
			SELECT 
				* 
			FROM 
				img
			";
			
			return $this->db->selectRecords($sql);
		}
		
		// 增加資料至 img
		public function add_img($name, $width, $height) {
			$sql = 
			"
			INSERT INTO 
				img (name, width, height) 
			VALUES (" . $name . "," . $width . "," . $height . ")
			";
			
			return $this->db->insertRecords($sql);
		}
		
		// 修改 name 欄位為 $name 的資料，disable 為 1
		// 預設 disable 為 1 將不會顯示該圖片
		public function disable_img($name) {
			$sql = 
			"
			UPDATE 
				img 
			SET 
				disable = 1
			WHERE 
				img.name = " . $name
			;
			
			return $this->db->updateRecords($sql);
		}
	}


	// if ($result->num_rows > 0) {
		// // output data of each row
		// while() {
			// echo "id: " . $row["id"] . " name: " . $row["name"] . "<br>";
		// }
	// } 
	// else {
		// echo "0 results";
	// }
?>