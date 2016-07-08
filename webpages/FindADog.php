<?php
$title = "Find a Cat/Dog - Wenlu's Cats&Dogs";
include("header.php");
?>
    	<div class="sidemenu">
    		<ul>
    			<li><a href="Home.php">Home</a></li>
                <li><a href="CreateAccount.php">Create an account</a></li>
    			<li><a href="FindADog.php" class="active">Find a dog/cat</a></li>
    			<li><a href="DogCare.php">Dog Care</a></li>
    			<li><a href="CatCare.php">Cat Care</a></li>
    			<li><a href="petGive.php">Have a pet to give away</a></li>
                <li><a href="Contact.php">Contact Us</a></li>
                <li><a href="Logout.php">LogOut</a></li>
    		</ul>
    	</div>
    	<div class="content">
    		<table>
                <tr>
                    <td><a class="find" href="#cat"><img src="icon.jpg" alt="icon" style="width: 15%"/>Find a Cat</a></td>
                    <td><a class="find" href="#dog"><img src="icon.jpg" alt="icon" style="width: 15%"/>Find a Dog</a></td>
                </tr>
            </table><br/>
            <form action="finding.php" method="post">
                <fieldset id="cat">
                    <legend>Cat's information</legend>
                    <p>Which breed of cat you prefer? (Pick as many as apply)<br/>
                    <label><input type="checkbox" name="catbreed" id="abyssinian" value="abyssinian"/> Abyssinian</label>
                    <label><input type="checkbox" name="catbreed" id="americanshorthair" value="americanshorthair"/> American Shorthair</label>
                    <label><input type="checkbox" name="catbreed" id="briman" value="briman"/> Birman</label><br/>
                    <label><input type="checkbox" name="catbreed" id="regdoll" value="regdoll"/> Regdoll</label>
                    <label><input type="checkbox" name="catbreed" id="persian" value="persian"/> Persian</label>
                    <label><input type="checkbox" name="catbreed" id="bengal" value="bengal"/> Bengal</label><br/>
                    <label><input type="checkbox" name="catbreed" id="other" value="other"/> Other</label></p>
                    <p>Preferred Gender:
                    <label><input type="radio" name="genderc" id="female" value="female"/> Female</label>
                    <label><input type="radio" name="genderc" id="male" value="male"/> Male</label></p>
                    <p>What age category you prefer?
                    <select name="agec">
                        <option value="">please select option</option>
                        <option value="under 6 months">under 6 months</option>
                        <option value="under 1 year">6months - 1 </option>
                        <option value="1-5 years">1 - 5</option>
                        <option value="5-10 years">5 - 10</option>
                        <option value="older 10 years">Older than 10</option>
                    </select></p>
                    <label>Whether it needs to get along with other dogs, other cats, small children: 
                        <input type="checkbox" name="withotherc" id="withotherc" value="Can get"/>
                    </label>
                </fieldset><br/>
                <input type="submit" name="submit" id="submit" onclick="return validationFindCat();"/>
                <input type="reset" name="reset" id="reset"/>
            </form><br /><br />
            <form action="finding.php" method="post">
                <fieldset id="dog">
                    <legend>Dog's information</legend>
                    <p>Which breed of cat you prefer? (Pick as many as apply)<br/>
                    <label><input type="checkbox" name="dogbreed" id="corgi" value="corgi"/> Corgi</label>
                    <label><input type="checkbox" name="dogbreed" id="afghanhound" value="afghanhound"/> Afghan Hound</label>
                    <label><input type="checkbox" name="dogbreed" id="alaskanmalamute" value="alaskanmalamute"/> Alaskan Malamute</label><br/>
                    <label><input type="checkbox" name="dogbreed" id="americanbulldog" value="americanbulldog"/> American Bulldog</label>
                    <label><input type="checkbox" name="dogbreed" id="persianf" value="persian"/> Persian</label>
                    <label><input type="checkbox" name="dogbreed" id="bengalf" value="bengal"/> Bengal</label><br/>
                    <label><input type="checkbox" name="dogbreed" id="otherf" value="other"/> Other</label></p>
                    <p>Preferred Gender:
                    <label><input type="radio" name="genderd" id="femalef" value="female"/> Female</label>
                    <label><input type="radio" name="genderd" id="malef" value="male"/> Male</label></p>
                    <p>What age category you prefer?
                    <select name="aged">
                         <option value="">please select option</option>
                        <option value="under 6 months">under 6 months</option>
                        <option value="under 1 year">6months - 1 </option>
                        <option value="1-5 years">1 - 5</option>
                        <option value="5-10 years">5 - 10</option>
                        <option value="older 10 years">Older than 10</option>
                    </select></p>
                    <label>Whether it needs to get along with other dogs, other cats, small children: 
                        <input type="checkbox" name="withotherf" id="withotherf" value="Can get"/>
                    </label>
                </fieldset><br/>
                <input type="submit" name="submit" id="submit" onclick="return validationFindDog();"/>
                <input type="reset" name="reset" id="reset"/>
            </form>
            <br/>
            <p id="privacy">We respect your privacy, and promise that all your information will not be sold or misused. We protect the website builder from any incorrect information posted by a pet owner.</p>
    	</div>	
<?php
include("footer.php");
?>