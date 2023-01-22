// JavaScript Document
function checkName(nameValue, nameId)
{
	console.log("Name: " + nameValue);
	console.log("ID: " + nameId);
	var pattern=/[a-zA-z-']+$/;
	var msg;
	
	if(nameValue.match(pattern))
	{
		msg='Data is valid';
		console.log("inside the if");
	}
	else
	{
		msg='Invalid data entered';
		console.log("inside the else");
	}
	document.getElementById(nameId+'Help').innerHTML=msg;
	
}

function checkEmail(emailValue)
{
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	//var mailformat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;	//regex tester
	var msg;
	if(emailValue.match(mailformat))
	{
		msg="Email is valid";
		console.log("Email: valid");
	}
	else
	{
		msg="Email is invalid";
		console.log("Email: invalid");
	}
	document.getElementById('emailHelp').innerHTML=msg;
}

function checkUser(userValue)
{
	//var usernameFormat = /^[a-zA-Z0-9]+{8,20}$/;
	//var usernameFormat = /^[a-zA-Z][a-zA-Z0-9]{7,20}$/;
	var usernameFormat = /^[a-zA-Z0-9]{8,20}$/;
	var msg;
	
	if (userValue.match(usernameFormat))
	{
		msg="username is valid";
	}
	else
	{
		msg="username is invalid";
	}
	document.getElementById('usernameHelp').innerHTML=msg;
}

function checkComment(commentValue)
{
	var comFormat = /^[^!@#$%^&*]+$/;
	var msg;
	
	if (commentValue.match(comFormat))
	{
		msg="comment is valid";
		console.log(msg);
		console.log(commentValue);
	}
	else
	{
		msg="comment is invalid";
		console.log(msg);
		console.log(commentValue);
	}
	document.getElementById("commentHelp").innerHTML=msg;
}