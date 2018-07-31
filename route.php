<?php
	//根據get內的menu參數路由
	switch ($_GET["menu"]) {
		case "main":
			$main->showMain();
			break;
		case "create":
			$create->showCreate();
			break;
			
		case "read":
			require("view/read.php");
			break;
			
		case "update":
			require("view/update.php");
			break;
			
		case "delete":
			require("view/delete.php");
			break;
			
		default:
			$main->showMain();
			break;
	}
?>