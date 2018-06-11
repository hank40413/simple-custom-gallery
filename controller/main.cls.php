<?php
	$img = new img();
	class main {
		public function showMain() {
			require("/view/main.php");
		}
		public function test() {
			echo "Hello world!<br>";
			var_dump($img);
		}
	}
?>