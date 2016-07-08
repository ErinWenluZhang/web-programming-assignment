<?php
$title = "Create an account - Wenlu's Cats&Dogs";
include("header.php");
?>
    	<div class="sidemenu">
    		<ul>
    			<li><a href="Home.php">Home</a></li>
    			<li><a href="CreateAccount.php" class="active">Create an account</a></li>
    			<li><a href="FindADog.php">Find a dog/cat</a></li>
    			<li><a href="DogCare.php">Dog Care</a></li>
    			<li><a href="CatCare.php">Cat Care</a></li>
    			<li><a href="petGive.php">Have a pet to give away</a></li>
    			<li><a href="Contact.php">Contact Us</a></li>
                <li><a href="Logout.php">LogOut</a></li>
    		</ul>
    	</div>
    	<div class="content">
    		<h1>Create An Account</h1>
            <form action="creating.php" method="post">
                <p>Username can only have letter and digit!</p>
                <p>Password at least 4 character with at least 1 letter and at least 1 digit!</p>
                <p>Username <input type="text" name="username2" id="username2" /></p>
                <p>Password <input type="password" name="password2" id="password2"/></p>
                <input type="submit" value="create" id="submit" onclick="return validationCreate();"/>
                <input type="reset" id="reset"/>
            </form>
    	</div>	
<?php
include("footer.php");
?>