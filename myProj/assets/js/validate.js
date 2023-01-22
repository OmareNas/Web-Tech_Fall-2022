// JavaScript Document
function checkName(nameValue, nameId)
{
	console.log("Name: " + nameValue);
	console.log("ID: " + nameId);
	var pattern=/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/;
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