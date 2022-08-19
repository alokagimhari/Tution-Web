function validation(){
	var a=document.getElementById("uname").value;
	var b=document.getElementById("psw").value;
	
	if(a==""&&b=="")
	{
		alert("Both fields should not be blank");
		return false;
    }
	else if(a=="")
	{
		alert("Please enter the user name");
		return false;
	}
	else if(b=="")
	{
		alert("Please enter the password");
		return false;
	}
	else{
		return true;
	}
}

function checkPassword(){
	var txt = document.getElementById("pwdMismatch");
	var pw = document.getElementById("pwd").value;
	var newpw = document.getElementById("repwd").value;
	if(pw != newpw){
		txt.style.display="block";
		return false;
	}
	else{
		return true;
	}
}

function enableButton() {
	var checkBox = document.getElementById("agree");
	if(checkBox.checked == true){
		document.getElementById("sbmt").disabled = false;
	}
	else{
		document.getElementById("sbmt").disabled = true;
	}
}