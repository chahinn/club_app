<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="club.css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
</head>
<body>

</body>
</html>

<h1>Exclusive Entrepreneur Club<h1>


<div id='f1'>
<form method ="post"> 
	<div>
	<img src='entrepreneur.jpg' alt='entrepreneur' id='img'>
	</div>
	<br>
	<br>
	<input type='submit' name = 'join' id="b1" value='join' ><br>
			
</form>
</div>

<div id='f3'>
<form method ="post"> 
	
	<div>
	<input type='submit' name = 'forgotpassword' id="b2" value='I forgot my password' >
	</div>
</form>
</div>


<?php  
  if(isset($_POST['join'])){
  	displayform();
  }  
  if(isset($_POST['forgotpassword'])){
  	displayform2();
  }  
 

	function displayform(){
?>	
	<div id='f2'>
	<form action="dboperation1.php" method="get">
		<fieldset>
  			<legend>Application Form</legend>
  			firstname: <input type="text" name='firstname' id="firstname1" required><span id="firstnamemessage"></span><br>
  			lastname: <input type="text" name='lastname' id="lastname1" required><span id="lastnamemessage"></span> <br>
  			email: <input type="email" name='email' id="email1" required><span id="emailmessage"></span><br>
  			password: <input type="password" name='password1' id="password11" required><span id="firstpasswordmessage"></span> <br>
  			password: <input type="password" name='password2' id="password22" required><span id="secondpasswordmessage"></span><br>
  			Membership Type: <span id="membershiptypemessage"></span> <br>
  			<input type="radio" name="membertype" value="entrepreneur" required> Entrepreneur
  			<input type="radio" name="membertype" value="serialentrepreneur">  SerialEntrepreneur
  			<input type="radio" name="membertype" value="venturecapitalist"> Venture Capitalist<br><br>
  			
  			
  			
  			<input type='submit' name='submitform' value='Submit Form'>
  		
  		<fieldset>
  	
	
	</form>

	</div>

<?php

}
function displayForm2(){
?>

<form action="dboperation1.php" method="get">
		<fieldset>
  			<legend>Forgot Password</legend>
  			Email: <input type="text" name='forgotemail' id="forgotemail1" required><br>
  			
  			
  			
  			
  			<input type='submit' name='forgotemailbutton' value='Submit Email'>
  		
  		<fieldset>
  	
	
	</form>


<?php

}
?>