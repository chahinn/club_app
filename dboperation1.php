
<form action="index.php" method ="get"> 
	
	
	<input type='submit' name = 'mainpage'  value='returnMainPage' >
	
</form>

<?php   

include 'include/dbconn1.php';
	
	if(isset($_GET['submitform'])){
	
			$dbc=connect_to_db( "chahinn" );
			
  	        $firstname= $_GET['firstname'];
  			$lastname= $_GET['lastname'];
  			$email= $_GET['email'];
  			$password1 =$_GET['password1'];
  			$password2= $_GET['password2'];
  			$memtype= $_GET['membertype'];
  
  			$sqlemail = "SELECT email FROM `newclubdb`  WHERE email='$email'";
 				
  			$result= perform_query($dbc, $sqlemail);
  			
  	if($password1===$password2){
  		if(mysqli_num_rows($result)==0){
  				$password1=sha1($password1);
  				$sqlinsert="INSERT INTO newclubdb (`firstname`, `lastname`, `email`, `password`, `timedate`, `memtype`)
				VALUES ('$firstname','$lastname','$email', ' $password1', now(), '$memtype') ";
  				perform_query( $dbc, $sqlinsert );
				echo "Your membership application was succesful";					
  		}
  		else{
  			echo "Email already exist";			
  		}	
  		return;
  	}
	else{ echo "password do not match";
	}
	//should close database
	}
	
	if(isset($_GET['forgotemailbutton'])){
		
		$dbc2=connect_to_db( "chahinn" );
		
		$email2= $_GET['forgotemail'];
		$sqlostemail = "SELECT email FROM `newclubdb`  WHERE email='$email2'";
		
		$result2= perform_query($dbc2, $sqlostemail);
		if(mysqli_num_rows($result2)==0){
				echo "Email $email2 does not exist";					
  		}
  		else{
  			$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    		$pass = array(); //remember to declare $pass as an array
    		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    		for ($i = 0; $i < 10; $i++) {
        		$n = rand(0, $alphaLength);
        		$pass[] = $alphabet[$n];
    		}
    		$newpass=implode($pass); //turn the array into a string
    		$to = $email2;
			$subject = "New Password";
			$txt = $newpass;
			$headers = "From: $email2";

			mail($to,$subject,$txt,$headers);
			$password3=sha1($newpass);
			$sqlupdatepass = "UPDATE `newclubdb` SET password='$password3' WHERE email='$email2'";
			$result3= perform_query($dbc2, $sqlupdatepass);
			echo "Success, check your email for new password";
    		
  		}	
	}
	
	
?>



