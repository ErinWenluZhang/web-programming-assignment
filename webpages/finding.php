<?php
$title = "Finding - Wenlu's Cats&Dogs";
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
            <h2>You May like These Pets:</h2>
    		<?php
            $post=$_POST;
            $count; $count2; $line;
            $ar = array("<br />Gender: ","Age: ","","","","Comments: ");
            $file=file("available pet information.txt");
            foreach($file as $k => $v){
                $count=0;
                foreach($post as $key => $value){
                    if(!strpos($v,$value))
                        break;
                    $count++;
                }
                if($count==count($post)-1){
                    $line = explode(':',$v);
                    echo "<h2>$line[1]</h2>";
                    echo "Breed: ";
                    $count2=2;
                    for($i=3; $i<count($line); $i++){
                        $count2++;
                        if(($line[$i]!="female") &&($line[$i]!="male"))
                            echo $line[$i]." ";
                        else
                            break;
                    }
                    foreach($ar as $value){
                        echo $value.$line[$count2]."<br />";
                        $count2++;
                    }
                }
                echo "<br />";
            }
            ?>
    	</div>	
<?php
include("footer.php");
?>