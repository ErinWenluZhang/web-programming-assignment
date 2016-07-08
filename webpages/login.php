<?php
$title = "Login - Wenlu's Cats&Dogs";
include("header.php");
?>
    	<div class="sidemenu">
    		<ul>
    			<li><a href="Home.php">Home</a></li>
                <li><a href="CreateAccount.php">Create an account</a></li>
    			<li><a href="FindADog.php">Find a dog/cat</a></li>
    			<li><a href="DogCare.php">Dog Care</a></li>
    			<li><a href="CatCare.php">Cat Care</a></li>
    			<li><a href="petGive.php">Have a pet to give away</a></li>
    			<li><a href="Contact.php">Contact Us</a></li>
                <li><a href="Logout.php">LogOut</a></li>
    		</ul>
    	</div>
    	<div class="content">
    		<h1>Please login first!</h1>
    		<form action="sessionstart.php" method="post">
                <p>Username <input type="text" name="username" id="username" /></p>
                <p>Password <input type="password" name="password" id="password"/></p>
                <input type="submit" value="login" id="submit" onclick="return validationLogin();"/>
                <input type="reset" id="reset"/>
            </form>
       	</div>
<?php
include("footer.php");
?>
