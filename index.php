<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



	<?php

		setcookie("login", "fgsdgsdg", time() + 3600 * 24 * 7);

		echo $_COOKIE['login'];



	?>

	<div class="test"></div>
	
</body>
</html>