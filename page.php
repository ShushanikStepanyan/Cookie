<?php

	if(isset($_COOKIE['anun'])){
		$name = $_COOKIE['anun'];
		setcookie ("anun", $name , time () -5);

}

<!-- else { $name = "Guset." ; }  -->

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>cok</title>
</head>
<body>

<h1>Page Page.php</h1>
<a href="index.php">Index page.php</a> <br>
<!-- <h3> Hello <?=$name?></h3> -->
<h3> Cookie delete !!!</h3>


</body>
</html>

