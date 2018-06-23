
$(document).ready(function() { 
	
	$('.login-toggle').click(function(){
		$('.login-holder').toggle('slow');
		/*$('#username').val('');
		$('#user-pass').val('');*/
	});
	
	$('.log-submt').click(function(){
		
		var username = $('#username').val();
		var password = $('#user-pass').val();
		
		if(username == ''){
			
			$('.log-error').html('Please provide Username');
			$('.log-error').toggle('slow');
			
		}else if(password == ''){
			
			$('.log-error').html('Please provide a Password');
			$('.log-error').toggle('slow');
			
		}else{
			
			$('.log-error').html('');
			$('.log-error').hide();
			alert('logged in');
			
		}
	});
	
	
});



// JavaScript Document