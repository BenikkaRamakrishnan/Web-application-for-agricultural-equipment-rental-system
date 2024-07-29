<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
        $url = $_POST['url'];
        $msg = $_POST['msg'];
		
		// include database connection file
				
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO contact(name,email,mobile,url,msg) VALUES('$name','$email','$mobile','$url','$msg')");
		
		// Show message when user added
		echo "User added successfully. <a href='./index.php'>View Users</a>";
 	}
	?>