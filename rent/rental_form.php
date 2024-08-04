<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$title = $_POST['title'];
		$firstname = $_POST['firstname'];
		$surname = $_POST['surname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $streetaddress = $_POST['streetaddress'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $rental_duration = $_POST['rental_duration'];
        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $cartype = $_POST['cartype'];
        $addons = $_POST['addons'];
		
		// include database connection file
				
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO rent(title,firstname,surname,email,phonenumber,streetaddress,city,postcode,rental_duration,startdate,enddate,cartype,addons) VALUES('$title','$firstname','$surname','$email','$phonenumber','$streetaddress','$city','$postcode','$rental_duration,'$startdate','$enddate','$cartype','$addons')");
		
		// Show message when user added
	   echo "rent equipment added successfully.";
 	}
	?>
