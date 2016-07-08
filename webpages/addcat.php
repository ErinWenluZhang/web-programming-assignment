<?php
session_start();
$user=$_SESSION["user"];
$breeds=$_POST["catbreed"];
$gender=$_POST["genderc"];
$age=$_POST["agec"];
$withcat=(isset($_POST["withcatc"]))?$_POST["withcatc"]:"Can not with other cat";
$withdog=(isset($_POST["withdogc"]))?$_POST["withdogc"]:"Can not with other dog";
$withchild=(isset($_POST["withchildc"]))?$_POST["withchildc"]:"Can not with small child";
$comment=$_POST["comment"];
$firstname=$_POST["firstname"];
$familyname=$_POST["familyname"];
$email=$_POST["email"];
$breed="";
foreach($breeds as $key => $value){
	$breed=$breed.$value.":";
}
$filename="available pet information.txt";
$counter = count(file($filename))+1;
$info=$counter.":"."cat".":".$user.":".$breed.$gender.":".$age.":".$withcat.":".$withdog.":".$withchild.":".$comment.":".$firstname.":".$familyname.":".$email."\n";
$file=fopen($filename, "a");
$done=fwrite($file, $info);
fclose($file);
if($done)
echo "<script>window.alert(\"Your form is successfully submitted!\");</script>";
include("PetGiveAway.php");
?>