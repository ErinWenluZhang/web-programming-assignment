function time(){
	document.getElementById("time").innerHTML=Date();
}
setInterval(time, 1000);
function validationFindCat(){
	var breeds = document.getElementsByName("catbreed");
	var check = 0;
	var genders = document.getElementsByName("genderc");
	var age = document.getElementsByName("agec");
	for(var k in breeds){
		if(breeds[k].checked)
			check++;
	}
	if(check == 0){
		window.alert("Please choose at least one breed!");
		return false;
	}
	if(!genders[0].checked && !genders[1].checked){
		window.alert("Please choose a gender!");
		return false;
	}
	if(age[0].value==""){
		window.alert("Please select the age range!");
		return false;
	}
	return true;
}
function validationFindDog(){
	var breeds = document.getElementsByName("dogbreed");
	var check = 0;
	var genders = document.getElementsByName("genderd");
	var age = document.getElementsByName("aged");
		for(var k in breeds){
		if(breeds[k].checked)
			check++;
	}
	if(check == 0){
		window.alert("Please choose at least one breed!");
		return false;
	}
	if(!genders[0].checked && !genders[1].checked){
		window.alert("Please choose a gender!");
		return false;
	}
	if(age[0].value==""){
		window.alert("Please select the age range!");
		return false;
	}
	return true;
}
function validationGiveCat(){
	var breeds = document.getElementsByName("catbreed[]");
	var check = 0;
	var genders = document.getElementsByName("genderc");
	var age = document.getElementsByName("agec");
	var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	for(var k in breeds){
		if(breeds[k].checked)
			check++;
	}
	if(check == 0){
		window.alert("Please choose at least one breed!");
		return false;
	}
	if(!genders[0].checked && !genders[1].checked){
		window.alert("Please choose a gender!");
		return false;
	}
	if(age[0].value==""){
		window.alert("Please select the age range!");
		return false;
	}
	if(document.getElementById("commentc").value==""){
		window.alert("Please write something about the cat!");
		return false;
	}
	if(document.getElementById("firstnamec").value==""){
		window.alert("Please enter your First Name!");
		return false;
	}
	if(document.getElementById("familynamec").value==""){
		window.alert("Please enter your Family Name!");
		return false;
	}
	if(!email.test(document.getElementById("emailc").value)){
		window.alert("Please enter a valid email address!");
		return false;
	}
	return true;
}
function validationGiveDog(){
	var breeds = document.getElementsByName("dogbreed[]");
	var check = 0;
	var genders = document.getElementsByName("genderd");
	var age = document.getElementsByName("aged");
	var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	for(var k in breeds){
		if(breeds[k].checked)
			check++;
	}
	if(check == 0){
		window.alert("Please choose at least one breed!");
		return false;
	}
	if(!genders[0].checked && !genders[1].checked){
		window.alert("Please choose a gender!");
		return false;
	}
	if(age[0].value==""){
		window.alert("Please select the age range!");
		return false;
	}
	if(document.getElementById("commentd").value==""){
		window.alert("Please write something about the dog!");
		return false;
	}
	if(document.getElementById("firstnamed").value==""){
		window.alert("Please enter your First Name!");
		return false;
	}
	if(document.getElementById("familynamed").value==""){
		window.alert("Please enter your Family Name!");
		return false;
	}
	if(!email.test(document.getElementById("emaild").value)){
		window.alert("Please enter a valid email address!");
		return false;
	}
	return true;
}
function validationLogin(){
	var username1 = /^[a-zA-Z0-9]+$/;
	var password1 = /^[a-zA-Z0-9]{4,}$/;
	var digit = /[a-zA-Z]+/;
	var letter = /[0-9]+/;
	var password = document.getElementById("password").value;
	if(!username1.test(document.getElementById("username").value)){
		window.alert("Username can only have letter and digit!");
		return false;
	}
	if((!password1.test(password))||(!digit.test(password))||(!letter.test(password))){
		window.alert("Password at least 4 character with at least 1 letter and at least 1 digit!");
		return false;
	}
	return true;
}
function validationCreate(){
	var username1 = /^[a-zA-Z0-9]+$/;
	var password1 = /^[a-zA-Z0-9]{4,}$/;
	var digit = /[a-zA-Z]+/;
	var letter = /[0-9]+/;
	var password = document.getElementById("password2").value;
	if(!username1.test(document.getElementById("username2").value)){
		window.alert("Username can only have letter and digit!");
		return false;
	}
	if((!password1.test(password))||(!digit.test(password))||(!letter.test(password))){
		window.alert("Password at least 4 character with at least 1 letter and at least 1 digit!");
		return false;
	}
	return true;
}