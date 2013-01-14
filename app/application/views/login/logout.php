<?php
	session_start();
	unset($_SESSION['validUser']);
	session_destroy();
	echo "Successfully Logged out<br />";
	echo "<a href='login.php'>login.php</a>";
?>