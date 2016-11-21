<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
session_start();
$_SESSION['TEST'] = "This is a test session";
var_dump(session_save_path());
	var_dump($_GET);
	$test=array('arrayitem one'=>'item one', '1'=>'item two', '2'=>'item 3', '5'=>'item 4');
	foreach($test as $value){
		if($key === 'bestStudentEver'){

?>
					<h2>Please dont beleive me</h2>
<?php

		}
?>	
	
	<h1><?=$key?></h1>
	<p><?=$key?></p>


<?php
	}
?>










?>	
	
</body>
</html>