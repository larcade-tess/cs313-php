function validate () {
	document.getElementById("password").onchange = validatePassword;
	document.getElementById("password1").onchange = validatePassword;
}

function validatePassword(){
var pass1=document.getElementById("password1").value;
var pass=document.getElementById("password").value;

if(pass1!=pass)
	document.getElementById("password").setCustomValidity("Passwords Don't Match");
else
	document.getElementById("password1").setCustomValidity('');
}