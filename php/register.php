<?php
	 $firstName = $_POST['firstname'];
	 $lastName = $_POST['lastname'];
	 $email = $_POST['email'];
	 $phonenumber = $_POST['phonenumber'];
	 $password = $_POST['password'];

	 // Database connection
	$conn = new mysqli('localhost','root','','regi');
	 if($conn->connect_error){
	 	echo "$conn->connect_error";
	 	die("Connection Failed : ". $conn->connect_error);
	 } else {
	 	$stmt = $conn->prepare("insert into register(firstName, lastName, email, phonenumber, password) values(?, ?, ?, ?, ?)");
	 	$stmt->bind_param("sssis", $firstName, $lastName, $email, $phonenumber, $password);
	 	$execval = $stmt->execute();
	 	echo $execval;
	 	echo "Registration successfully...";
	 	$stmt->close();
	 	$conn->close();
	 }
	 ?>
