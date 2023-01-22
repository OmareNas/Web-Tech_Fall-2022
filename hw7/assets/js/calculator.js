// JavaScript Document
function calcFunc()
{
	var num1;
	var num2;
	var frmOp;
	var numAns;
//	var valBool = false;
	num1=document.getElementById("number1").value;
	num2=document.getElementById('number2').value;
	frmOp=document.getElementById('frmOperator').value;
/*	
	console.log("Number 1:" + num1);
	console.log("Number 2:" + num2);
	console.log("Operation:" + frmOp);
	
	console.log(typeof frmOp);
*/	
	switch(String(frmOp))
	{
		case '+':
			numAns=parseInt(num1)+parseInt(num2);
			break;
		case '-':
			numAns=parseInt(num1)-parseInt(num2);
			break;
		case '/':
			numAns=parseInt(num1)/parseInt(num2);
			break;
		case '*':
			numAns=parseInt(num1)*parseInt(num2);
			break;
	}
	
	document.getElementById("output").innerHTML="Answer is: " + numAns;
}