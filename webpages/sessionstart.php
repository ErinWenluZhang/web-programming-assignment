<?php
$username = $_POST["username"];
$password = $_POST["password"];
$filename = "login.txt";
$filelogin = file($filename);
$input = "$username".":"."$password"."\n";
$exist = FALSE;
foreach($filelogin as $key => $value){
	if($input==$value){
		$exist = TRUE;
		break;
	}
}
if($exist){
	session_start();
	$_SESSION["user"]=$username;
	echo "<script>window.alert(\"You are Login!\")</script>";
	include("PetGiveAway.php");
}else{
	$title = "Login - Wenlu's Cats&Dogs";
	include("header.php");
    echo "<div class=\"sidemenu\">
    		<ul>
    			<li><a href=\"Home.php\">Home</a></li>
    			<li><a href=\"CreateAccount.php\">Create an account</a></li>
    			<li><a href=\"FindADog.php\">Find a dog/cat</a></li>
    			<li><a href=\"DogCare.php\">Dog Care</a></li>
    			<li><a href=\"CatCare.php\">Cat Care</a></li>
    			<li><a href=\"petGive.php\">Have a pet to give away</a></li>
    			<li><a href=\"Contact.php\">Contact Us</a></li>
    			<li><a href=\"Logout.php\">LogOut</a></li>
    		</ul>
    	</div>
    	<div class=\"content\">
    		<h1>The username/password is incorrect!</h1>
    		<h1>Please enter again!</h1>
    		<form action=\"sessionstart.php\" method=\"post\">
                <p>Username <input type=\"text\" name=\"username\" id=\"username\" /></p>
                <p>Password <input type=\"password\" name=\"password\" id=\"password\"/></p>
                <input type=\"submit\" value=\"login\" id=\"submit\" onclick=\"return validationLogin();\"/>
                <input type=\"reset\" id=\"reset\"/>
            </form>
    	</div>";
include("footer.php");
}
?>