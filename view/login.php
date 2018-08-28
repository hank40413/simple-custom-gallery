<?php
	// 與 controller 連結
	require_once("/controller/login.cls.php");
	$login = new login();
	
	// 取得 user 資料表內所有資料
	$allUsers = $login->sel_all_user();
?>

<head>
	<title>Log in</title>
	<style>
		/* style the container */
		.container {
			width: 100%;
			position: relative;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px 10px 30px 10px;
			margin-top: 18vw;
		} 

		/* style inputs and link buttons */
		input,
		.btn {
			width: 100%;
			padding: 12px;
			border: none;
			border-radius: 4px;
			margin: 5px 0;
			opacity: 0.85;
			display: inline-block;
			font-size: 17px;
			line-height: 20px;
			text-decoration: none; /* remove underline from anchors */
		}

		input:hover,
		.btn:hover {
			opacity: 1;
		}


		/* style the submit button */
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>

<body>
<script></script>
	<form method="post" action="">
		<div class="container">
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" value="Log in">
			<p id="errorText" style="margin-top: 3px; color: red; display: none;">帳號或密碼輸入錯誤，請重試</p>
		</div>
	</form>

</body>

<?php
	// 判斷帳號密碼是否正確
	
	if ($_POST["username"] != null && $_POST["password"] != null) {
		foreach($allUsers as $singleUser) {
			if ($_POST["username"] == $singleUser["User_Name"]) {
				if ($_POST["password"] == $singleUser["User_PW"]) {
					$_SESSION["logIn?"] = true;
					header("Location: index.php");
				}
			}
		}
		echo "<script>document.getElementById('errorText').style.display = 'inline'</script>";
	}
?>