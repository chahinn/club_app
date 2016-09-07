<?php include "base.php"; $_SESSION = array(); session_destroy();
	setcookie( "firstname", "", time()-1800, '/' );
    setcookie( "email", "", time()-1800, '/' );
    setcookie( "ID", "", time()-1800, '/' );
?>
<!--<meta http-equiv="refresh" content="0;index.php" />-->