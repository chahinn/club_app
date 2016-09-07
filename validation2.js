$(document).ready(function() {

	document.getElementById("membershiptypemessage1").innerHTML="Please choose at least one option";
		
	document.getElementById("yourmessagemess").innerHTML="Please input a message";
	
		
		$("#subject1").blur(function(){
		if(document.getElementById("subject1").value.length==0)
			document.getElementById("subjectmessage").innerHTML="Please input the subject";
		else{
			document.getElementById("subjectmessage").innerHTML="";
		}	
		});	
		
		$("textarea").change(function(){
		if(document.getElementById("yourmessage1").value.length==0)
			document.getElementById("yourmessagemess").innerHTML="Please input a message";
		else{
			document.getElementById("yourmessagemess").innerHTML="";
		}	
		});
	
		
		$("#mailpassword1").blur(function(){
		if(document.getElementById("mailpassword1").value.length==0)
			document.getElementById("mailpasswordmessage").innerHTML="Please input the password";
		else{
			document.getElementById("mailpasswordmessage").innerHTML="";
		}	
		});
		
		$(".ent").change(function() {
    		if(this.checked) {
        	document.getElementById("membershiptypemessage1").innerHTML="";
    		}
    		else{
    			document.getElementById("membershiptypemessage1").innerHTML="Please choose at least one option";
    		}
		});
	
		
		
});	