<!DOCTYPE html>
<html>
<head>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="validation2.js"></script>
</head>
<body>

</body>
</html>



<?php
	include 'include/dbconn1.php';
	$dbc3=connect_to_db( "chahinn" );

	$sqltable = "SELECT * FROM newclubdb";
	$records= perform_query($dbc3, $sqltable);

?>

<table width="600" border="1" cellpadding="1" cellspacing="1">
	<tr>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Type</th>
		<th>Email</th>
		<th>Registration Date</th>
	</tr>

	<?php

	$d=0;

	while($member = mysqli_fetch_assoc($records)){
		 if($d % 2 == 0){
            $bgcolor= "#006666";
   		  }
   		 else{
            $bgcolor= "#CC6699";
  		 }
         $d++;


		echo "<tr bgcolor='$bgcolor'>";

		echo "<td>" .$member['firstname']. "</td>";
		echo "<td>" .$member['lastname']. "</td>";
		echo "<td>" .$member['memtype']. "</td>";
		echo "<td>" .$member['email']. "</td>";
		echo "<td>" .$member['timedate']. "</td>";

		echo "</tr>";
	}

	?>


</table>
<br>
<br>
<form method="get">
<fieldset>
	<legend>Create Group Email</legend>

			<br>
			Subject: <span id="subjectmessage" ></span> <br> <input type="text" name="subject" id ="subject1" required> <br> <br>
			Your Message: <span id="yourmessagemess"></span>  <br> <br><textarea rows="5" cols="40" name="yourmessage" id="yourmessage1" required> </textarea> <br><br>
			Membership Type: <span id="membershiptypemessage1"></span> <br>
			<input type="checkbox" name="membership[]" class = "ent" value="entrepreneur" > entrepreneur<br>
  			<input type="checkbox" name="membership[]" class = "ent" value="serialentrepreneur" > serial entrepreneur<br>
			<input type="checkbox" name="membership[]" class = "ent" value="venturecapitalist" > venture capitalist<br><br>
			Mail Password: <span id="mailpasswordmessage"></span><br> <input type="text" name="mailpassword" id="mailpassword1" required> <br>
			<br>
			<input type='submit' name='sendemails' value='Send Your Message'>

</fieldset>
</form>

<?php


	if(isset($_GET['sendemails'])){

    	//$to1 = $email2;
		$subject1 = $_GET['subject'];
		$txt1 = $_GET['yourmessage'];
		$txt1 = htmlspecialchars($txt1);
		echo "$txt1";
		$headers1 = "From: chahinn@bc.edu";
		$membershiptype= $_GET['membership'];
		$accesspassword= sha1($_GET['mailpassword']);
		$encryptedverification="1785ed6ccf537856a2e5d0935a1ffb2dde2d3ab5";



		if(!empty($membershiptype) AND ($accesspassword==$encryptedverification) ) {

		if(count($membershiptype)==1){
			$sqlselectemails= "SELECT * FROM `newclubdb`  WHERE memtype='$membershiptype[0]'";
			$allemails= perform_query($dbc3, $sqlselectemails);
		}
		else if(count($membershiptype)==2){
			$sqlselectemails= "SELECT * FROM `newclubdb`  WHERE memtype='$membershiptype[0]' OR memtype='$membershiptype[1]'";
			$allemails= perform_query($dbc3, $sqlselectemails);
			$number=count($membershiptype);
			echo "$number";
		}
		else{
			$sqlselectemails= "SELECT * FROM `newclubdb`  WHERE memtype='$membershiptype[0]' OR  memtype='$membershiptype[1]' OR memtype='$membershiptype[2]' ";
			$allemails= perform_query($dbc3, $sqlselectemails);
		}


		while($emailconfiguration = mysqli_fetch_assoc($allemails)){
			$to1=$emailconfiguration['email'];
			mail($to1,$subject1,$txt1,$headers1);
		}
		}
		else if(empty($membershiptype))	{
			echo "   Email could not be sent Choose one membership type to send email!";
		}
		else{
			echo "Email could not be sent, Please enter the correct password!";
		}


	}

?>
