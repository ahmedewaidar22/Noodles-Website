<?php

$servername = "localhost";

$passwordd=$_POST["Password"];
$email=$_POST["email"];
$username = "root";
$password = "";
$dbname = "noodles";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "database succesed";

$sql="SELECT * FROM sign WHERE email = '$email' and password = '$passwordd'";

$res =mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);
$count =  mysqli_num_rows($res);

if ($count==1) {
    header('location: 1.html?$successful');
   
}
else{

 header('location: Signin.html?error username and password not match');
}
$conn->close();
?>