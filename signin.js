
$(document).ready(function(){


	//SHOW / HIDE PASSWORD
	$('img').click(function()
	{
		if($('img').attr('src')=='images/show.png')
			{
				$(this).attr('src','images/hide.png');
				$('#showpass').text('Hide Pass');
				$('#password,#confirmpassword').attr('type','text'); 
			}
		else if($('img').attr('src')=='images/hide.png')
			{
			 	$(this).attr('src','images/show.png');
			 	$('#showpass').text('Show Pass');
			 	$('#password,#confirmpassword').attr('type','password'); 
			}
	});

//FORGOT PASSWORD LINK CLICK
	$('.forgotpass').click(function(){
		$('.form').hide(500);
		$('#forgotpassdiv').show(500);
		$('p#title').text('Forgot Password');
	});

//SUBMIT EMAIL -'OK' BUTTON CLICK
$('.button#okbutton').click(function(){

	var email = $('#forgotemail').val();
	$.post('signin.php', { email:email}, function(data){
		
		//if user DNE
		if(data=="DNE"){
			$('#forgotpassdiv').hide(500);
			$('#securityquediv').show(500);
			$('#securityquediv').text('Entered e-mail is not registered with us!');
	}
	else{
		$('#forgotpassdiv').hide(500);
		$('#securityquediv').html(data);
		$('#securityquediv').show(500);	
		$('#forgotpassdiv2').show(500);
	}
	});
});

//SUBMIT ANSWER BUTTON CLICK
$('.button#submitanswer').click(function(){
	var email = $('#forgotemail').val();
	var forgotans = $('#securityans').val();
	$.post('signin.php', {forgotans: forgotans, email: email}, function(data){

		if(data=="wronganswer"){
			$('#securityquediv').hide(500);	
			$('#forgotpassdiv2').hide(500);		
			$('#wrongansdiv').text('Incorrect security answer!');
			$('#wrongansdiv').show(200);
		}
		else{
			$('#securityquediv').hide(500);	
			$('#forgotpassdiv2').hide(500);		
			$('#wrongansdiv').hide(200);
			$('#changepassdiv').show(500);
			//$('#changepassdiv').html(data);
			}
	});
});



//NEW PASSWORD UPDATE BUTTON CLICK
$('.button#newpasssubmit').click(function(){
		
	var email = $('#forgotemail').val();
	var newpassword = $('#password').val();
	$.post('signin.php', { newpassword: newpassword, email:email}, function(data){		

		if(data=='updatesuccess')
			$('#changepassdiv').hide(200);
			$('#error').show(200);
			$('#error').text('Password updated successfully!');

	});
});

});
