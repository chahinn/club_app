$(document).ready(function() {
	
	document.getElementById("membershiptypemessage").innerHTML="Please choose an option";
	
	$("#firstname1").blur(function(){
		if(document.getElementById("firstname1").value.length==0)
			document.getElementById("firstnamemessage").innerHTML="Please input your first name";
		else{
			document.getElementById("firstnamemessage").innerHTML="";
		}	
	});		
	
	$("#lastname1").blur(function(){
		if(document.getElementById("lastname1").value.length==0)
			document.getElementById("lastnamemessage").innerHTML="Please input your last name";
		else{
			document.getElementById("lastnamemessage").innerHTML="";
		}	
	});	
	
	$("#email1").blur(function(){
		var email123=document.getElementById("email1").value;
		if(email123.length==0 || email123.indexOf("@")==-1 )
			document.getElementById("emailmessage").innerHTML="Please input email or @ sign";
		else{
			document.getElementById("emailmessage").innerHTML="";
		}	
	});	
	
	$("#password11").blur(function(){
		if(document.getElementById("password11").value.length==0)
			document.getElementById("firstpasswordmessage").innerHTML="Please input your password";
		else{
			document.getElementById("firstpasswordmessage").innerHTML="";
		}	
	});	
	
	$("#password22").blur(function(){
		if(document.getElementById("password22").value.length==0 )
			document.getElementById("secondpasswordmessage").innerHTML="Please input your password";
		else{
			document.getElementById("secondpasswordmessage").innerHTML="";
		}	
	});
		
		$("input[type=radio][name=membertype]").change(function(){
 
			
				document.getElementById("membershiptypemessage").innerHTML="";
		
		});	
		
		// second half
		// adminpage.php
		
	
		
		
	
	
});