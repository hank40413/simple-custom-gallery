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
			$read->showRead();
			break;
			
		case "upload":
			$upload->showUpload();
			break;
			
		case "delete":
			$delete->showDelete();
			break;
			
		default:
			$main->showMain();
			break;
	}
?>