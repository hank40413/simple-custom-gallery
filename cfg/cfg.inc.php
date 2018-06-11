<?php
	//設定文件類型、編碼
	header("Content-type: text/html; charset=utf-8");
	
	//設定時區
	date_default_timezone_set("Asia/Taipei");

	//資料庫連線設定
	define("SERVERNAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "rootroot");
	define("DBNAME", "hank");
?>