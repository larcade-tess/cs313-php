function validate () {
	document.getElementById("pass").onchange = validatePassword;
	document.getElementById("pass1").onchange = validatePassword;
}

function validatePassword(){
var pass1=document.getElementById("pass1").value;
var pass=document.getElementById("pass").value;

if(pass1!=pass)
	document.getElementById("password2").setCustomValidity("Passwords Don't Match");
else
	document.getElementById("password2").setCustomValidity('');
}