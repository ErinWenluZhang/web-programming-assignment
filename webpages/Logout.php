<?php
session_start();
$title = "Logout - Wenlu's Cats&Dogs";
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
    			<li><a href="Logout.php" class="active">LogOut</a></li>
    		</ul>
    	</div>
    	<div class="content">
    		<?php
            $_SESSION = array();
            $out = session_destroy();
            if($out)
                echo "<h1>You are now LogOut!</h1>";
            ?>
    	</div>	
<?php
include("footer.php");
?>