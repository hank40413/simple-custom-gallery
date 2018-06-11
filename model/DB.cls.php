<?php
	class DB {
		var $DbHost;	// Server Name
		var $DbName;	// Database Name
		var $DbUser;	// Database User
		var $DbPwd;		// Database Password
		var $DbObject;		
		
		//建構式
		function DB($DbHost, $DbUser, $DbPwd, $DbName) {
			// Create connection
			$this->DbObject = new mysqli($DbHost, $DbUser, $DbPwd, $DbName);
			// Check connection
			if ($this->DbObject->connect_error) {
				die("Connection failed: " . $this->DbObject->connect_error);
			}
			// echo "Connected successfully";
		}
		
		function selectRecords($sql) {
			$result = $this->DbObject->query($sql);
			for ($i = 0; $i < $result->num_rows; $i++) {
				$data[$i] = $result->fetch_assoc();
			}
			
			return $data;
		}
	}
	
?>