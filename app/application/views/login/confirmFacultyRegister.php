<?php

	$conn = mysqli_connect("localhost", "root", "");
	$selected = mysqli_select_db($conn, "srmsserver");
		
	echo $_POST['Name'];
	echo "<br />";
	echo $_POST['Course'];
	echo "<br />";
			
	$query="INSERT INTO `faculty`(`Name`, `Gender`, `RegNum`, `FatherName`, `MotherName`, `Address`, `Phone`, `Email`) VALUES ('".$_POST['Name']."','".$_POST['Gender']."','".$_POST['RegNum']."','".$_POST['FatherName']."','".$_POST['MotherName']."','".$_POST['Address']."','".$_POST['Phone']."','".$_POST['Email']."')";

	echo "$query";

	echo "running query<br />";
	mysqli_query($conn, $query);
	
	echo "closing connection<br />";
	mysqli_close($conn);
	
	echo "data saved";
?>