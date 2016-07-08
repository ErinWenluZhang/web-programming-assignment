<?php
session_start();
if(!isset($_SESSION["user"])){
	include("login.php");
}else{
	include("PetGiveAway.php");
}
?>
