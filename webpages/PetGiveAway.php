<?php
$title = "Have a pet to give away - Wenlu's Cats&Dogs";
include("header.php");
?>
    	<div class="sidemenu">
    		<ul>
    			<li><a href="Home.php">Home</a></li>
                <li><a href="CreateAccount.php">Create an account</a></li>
    			<li><a href="FindADog.php">Find a dog/cat</a></li>
    			<li><a href="DogCare.php">Dog Care</a></li>
    			<li><a href="CatCare.php">Cat Care</a></li>
    			<li><a href="petGive.php" class="active">Have a pet to give away</a></li>
    			<li><a href="Contact.php">Contact Us</a></li>
                <li><a href="Logout.php">LogOut</a></li>
    		</ul>
    	</div>
    	<div class="content">
    		<table>
                <tr>
                    <td><a class="find" href="#cat"><img src="icon.jpg" alt="icon" style="width: 15%"/>Give a Cat</a></td>
                    <td><a class="find" href="#dog"><img src="icon.jpg" alt="icon" style="width: 15%"/>Give a Dog</a></td>
                </tr>
            </table><br/>
            <form action="addcat.php" method="post">
                <fieldset id="cat">
                    <legend>Cat's information</legend>
                    <p>Which breed of your cat? (include a mix, so pick as many as apply)<br/>
                    <label><input type="checkbox" name="catbreed[]" id="abyssinian" value="abyssinian"/> Abyssinian</label>
                    <label><input type="checkbox" name="catbreed[]" id="americanshorthair" value="americanshorthair"/> American Shorthair</label>
                    <label><input type="checkbox" name="catbreed[]" id="briman" value="briman"/> Birman</label><br/>
                    <label><input type="checkbox" name="catbreed[]" id="regdoll" value="regdoll"/> Regdoll</label>
                    <label><input type="checkbox" name="catbreed[]" id="persian" value="persian"/> Persian</label>
                    <label><input type="checkbox" name="catbreed[]" id="bengal" value="bengal"/> Bengal</label><br/>
                    <label><input type="checkbox" name="catbreed[]" id="other" value="other"/> Other</label></p>
                    <p>Your Cat's Gender:
                    <label><input type="radio" name="genderc" id="female" value="female"/> Female</label>
                    <label><input type="radio" name="genderc" id="male" value="male"/> Male</label></p>
                    <p>What age category of your cat?
                    <select name="agec">
                        <option value="">please select option</option>
                        <option value="under 6 months">under 6 months</option>
                        <option value="under 1 year">6months - 1 </option>
                        <option value="1-5 years">1 - 5</option>
                        <option value="5-10 years">5 - 10</option>
                        <option value="older 10 years">Older than 10</option>
                    </select></p>
                    <label>Whether it gets along with other cats: <input type="checkbox" name="withcatc" id="withcatc" value="Can get along with other cat"/> </label><br/>
                    <label>Whether it gets along with other dogs: <input type="checkbox" name="withdogc" id="withdogc" value="Can get along with other dog"/> </label><br/>
                    <label>Whether it is suitable for a family with small children: 
                        <input type="checkbox" name="withchildc" id="withchildc" value="Can get along with small child"/> </label><br/>
                    <p>Comments (any other things about the cat): </p><textarea name="comment" id="commentc" rows="10"></textarea>
                    <p>Current Owner's Info:</p>
                    <p>First Name <input type="text" name="firstname" id="firstnamec"/></p>
                    <p>Family Name <input type="text" name="familyname" id="familynamec"></p>
                    <p>Email <input type="email" name="email" id="emailc"/></p>
                </fieldset><br/>
                <input type="submit" name="submit" id="submit" onclick="return validationGiveCat();"/>
                <input type="reset" name="reset" id="reset"/>
            </form><br /><br />
            <form action="adddog.php" method="post">
                <fieldset id="dog">
                    <legend>Dog's information</legend>
                    <p>Which breed of your dog? (include a mix, so pick as many as apply)<br/>
                    <label><input type="checkbox" name="dogbreed[]" id="corgi" value="corgi"/> Corgi</label>
                    <label><input type="checkbox" name="dogbreed[]" id="afghanhound" value="afghanhound"/> Afghan Hound</label>
                    <label><input type="checkbox" name="dogbreed[]" id="alaskanmalamute" value="alaskanmalamute"/> Alaskan Malamute</label><br/>
                    <label><input type="checkbox" name="dogbreed[]" id="americanbulldog" value="americanbulldog"/> American Bulldog</label>
                    <label><input type="checkbox" name="dogbreed[]" id="persiana" value="persian"/> Persian</label>
                    <label><input type="checkbox" name="dogbreed[]" id="bengala" value="bengal"/> Bengal</label><br/>
                    <label><input type="checkbox" name="dogbreed[]" id="othera" value="other"/> Other</label></p>
                    <p>Your Dog's Gender:
                    <label><input type="radio" name="genderd" id="femalea" value="female"/> Female</label>
                    <label><input type="radio" name="genderd" id="malea" value="male"/> Male</label></p>
                    <p>What age category of your dog?
                    <select name="aged">
                        <option value="">please select option</option>
                        <option value="under 6 months">under 6 months</option>
                        <option value="under 1 year">6months - 1 </option>
                        <option value="1-5 years">1 - 5</option>
                        <option value="5-10 years">5 - 10</option>
                        <option value="older 10 years">Older than 10</option>
                    </select></p>
                    <label>Whether it gets along with other dogs: <input type="checkbox" name="withdog" id="withdogd" value="Can get along with other dog"/> </label><br/>
                    <label>Whether it gets along with other cats: <input type="checkbox" name="withcat" id="withcatd" value="Can get along with other cat"/> </label><br/>
                    <label>Whether it is suitable for a family with small children: 
                        <input type="checkbox" name="withchild" id="withchildd" value="Can get along with small child"/> </label><br/>
                    <p>Comments (any other things about the dog): </p><textarea name="comment" id="commentd" rows="10"></textarea>
                    <p>Current Owner's Info:</p>
                    <p>First Name <input type="text" name="firstname" id="firstnamed"/></p>
                    <p>Family Name <input type="text" name="familyname" id="familynamed"></p>
                    <p>Email <input type="email" name="email" id="emaild"/></p>
                </fieldset><br/> 
                <input type="submit" name="submit" id="submit" onclick="return validationGiveDog();"/>
                <input type="reset" name="reset" id="reset"/>
            </form>
            <br/>
            <p id="privacy">We respect your privacy, and promise that all your information will not be sold or misused. We protect the website builder from any incorrect information posted by a pet owner.</p>
    	</div>	
<?php
include("footer.php");
?>