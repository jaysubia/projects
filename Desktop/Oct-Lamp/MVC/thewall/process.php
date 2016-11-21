<?php

require ('connection.php');

var_dump($connection);

if(!isset($_POST['action'])){
	header("location: index.php");

}elseif($_POST['action']==='registration'){
	if($_POST['username'] ==='' || $_POST['password'] != $_POST['passwordConfirm']){
	

	header("location: index.php");
	die();

	}

	$query = "SELECT * FROM users WHERE username = ". $_POST['username'];
	var_dump(fetch_record($query));
	echo "hello I am right here";
	var_dump($_POST);
}
die();
?>

