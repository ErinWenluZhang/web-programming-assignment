<?php
$title = "Creating - Wenlu's Cats&Dogs";
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
            <?php
            $username = $_POST["username2"];
            $password = $_POST["password2"];
            $filename = "login.txt";
            $filecreat = file($filename);
            $exist = FALSE;
            $file;
            foreach($filecreat as $key => $value){
                $n=explode(':',$value,2);
                if($username==$n[0]){
                    $exist = TRUE;
                    break;
                }
            }
            if($exist){
                echo "<h2>The username not avaiblable, please create another one!</h2>";
            }else{
                $input = "$username".":"."$password";
                $file = fopen("$filename","a");
                fwrite($file, $input."\n");
                fclose($file);
                echo "<h2>Congratulations! New account created!</h2>";
                echo "<h2>You are now ready to login!</h2>";
            }
            ?>
    	</div>	
<?php
include("footer.php");
?>