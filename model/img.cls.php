<?php
	class img{
		
		var $db;
		
		//建構函式
		public function __construct(){
			$this->db = new DB(SERVERNAME, USERNAME, PASSWORD, DBNAME);

			return true;
		}
		
		public function sel_all_img() {
			$sql = "SELECT 
						* 
					FROM 
						img";
			
			return $this->db->selectRecords($sql);
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