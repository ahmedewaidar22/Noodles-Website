<?php
$servername = "localhost";
$firstname =$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$password1=$_POST["password"];

$password = "";
$dbname = "noodles";
$user="root";

// Create connection
$conn =mysqli_connect( $servername , $user , $password , $dbname );
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "database succesed";
$sql = "INSERT INTO sign(firstname,lastname,password,email) 
values('$firstname','$lastname','$password1','$email')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location: signin.html?successful');
   	
} else {;
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>