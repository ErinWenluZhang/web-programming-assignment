<?php
session_start();
$user=$_SESSION["user"];
$breedd=$_POST["dogbreed"];
$gender=$_POST["genderd"];
$age=$_POST["aged"];
$withcat=(isset($_POST["withcat"]))?$_POST["withcat"]:"Can not with other cat";
$withdog=(isset($_POST["withdog"]))?$_POST["withdog"]:"Can not with other dog";
$withchild=(isset($_POST["withchild"]))?$_POST["withchild"]:"Can not with small child";
$comment=$_POST["comment"];
$firstname=$_POST["firstname"];
$familyname=$_POST["familyname"];
$email=$_POST["email"];
$breed="";
foreach($breedd as $key => $value){
	$breed=$breed.$value.":";
}
$filename="available pet information.txt";
$counter = count(file($filename))+1;
$info=$counter.":"."dog".":".$user.":".$breed.$gender.":".$age.":".$withcat.":".$withdog.":".$withchild.":".$comment.":".$firstname.":".$familyname.":".$email."\n";
$file=fopen($filename, "a");
$done=fwrite($file, $info);
fclose($file);
if($done)
echo "<script>window.alert(\"Your form is successfully submitted!\");</script>";
include("PetGiveAway.php");
?>