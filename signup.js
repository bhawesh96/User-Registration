var submit1;
var submit2;
//Password Strength Check
function passStrength(){
	 var strength="";
	 var x = document.getElementById('password').value;
	 if(x.length < 7 && x.length > 0)
	 	strength = 'Too small';
	 else if(x.length >= 7)
		{strength = 'Fine';
		submit1 = true;
		}
	document.getElementById('passstrength').innerHTML = strength ;
}

function passConfirm(){
	if(document.getElementById('password').value == document.getElementById('confirmpassword').value)
		{document.getElementById('passconfirm').innerHTML = 'Password Match' ;	
		submit2 = true;}	
	else
		document.getElementById('passconfirm').innerHTML = '' ;
}

function checkAge(){
	var dob = document.getElementById('dob').value;
	var year = parseInt(dob.slice(0,4));
	var presentDate = new Date();
	var presentYear = presentDate.getFullYear();
	if(presentYear - year < 18)
		alert('You are below 18 years. Click OK to continue');

}

//Validate Form Submit	
function submitOkk(){
	if(submit1==true && submit2==true)
	{	document.getElementById('submit').disabled = false;
		document.getElementById('submit').style.cursor = 'pointer';
	}
}
