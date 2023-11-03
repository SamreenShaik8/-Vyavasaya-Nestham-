<?php
   $username = filter_input(INPUT_POST, 'username');
   $password = filter_input(INPUT_POST, 'password');

   if (!empty($username)) {
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
            $sql = "INSERT INTO login (username,password) values ('$username', '$password')";
            if ($conn->query($sql)){
                echo "Successfully login";
            }
            else{
                echo "Error: ". $sql . "<br>". $conn->error;
            }
            $conn->close();
        }
    }
    else{
        echo "password should not be emty";
        die();
    }
}
else{
    echo "username should not be emty";
    die();
}
?>