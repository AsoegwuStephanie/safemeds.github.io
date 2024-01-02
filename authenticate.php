<?php

include('db_connect.php');

function authenticate(){
	if(!isset($_SESSION['category_id']) && !isset($_SESSION['password'])){
		header("location:login.php");
	}
}
?>