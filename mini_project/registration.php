<?php
   $firstName = filter_input(INPUT_POST, 'firstName');
   $lastName = filter_input(INPUT_POST, 'lastName');   
   $email = filter_input(INPUT_POST, 'email');
   $password = filter_input(INPUT_POST, 'password'); 
   $conpassword = filter_input(INPUT_POST, 'conpassword'); 

    if (!empty($firstName)) {
    	 if (!empty($lastName)) {
    	 	 if (!empty($email)) {
    	 	 	 if (!empty($password)) {
    	 	 	 	 
    	 	 	 	 	 $host = "localhost";
                         $dbusername = "root";
                         $dbpassword = "";
                         $dbname = "user";

                         $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

                         if (mysqli_connect_error()) {
                         	die('Connect Error ('.
                         		mysqli_connect_errno().')'.
                                mysqli_connect_error());
                         }
                         else{
                         	$sql = "INSERT INTO register (firstName,lastName,email,password) values ('$firstName', '$lastName', '$email', '$password')";
                         	if ($conn->query($sql)){
                         		echo "Successfully register";
                         	}
                         	else{
                         		echo "Error: ". $sql . "<br>". $conn->error;
                         	}
                         	$conn->close();
                        }
        

    	 	 	 	
    	 	 	 }
    	 	 	 else{
    	 	 	 	echo "password shold not be correct";
    	 	 	 	die();
    	 	 	 }
    	 	 }
    	 	 else{
    	 	 	echo "email shold not be correct";
    	 	 	die();
    	 	 }
    	 }
    	 else{
    	 	echo "last name shold not be correct";
    	 	die();
    	 }
    }
    else{
    	echo "first nameshold not be correct";
    	die();
    }
?>
