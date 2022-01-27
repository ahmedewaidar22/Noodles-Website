<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
$servername="localhost";
$password = "";
$dbname = "noodles";
$user="root";

// Create connection
$conn =mysqli_connect( $servername , $user , $password , $dbname );
if($conn->connect_error){
    die("Connection Failed: ".$conn->connection_error);
}
$sql="CREATE DATABASE noodles";
if($conn->query($sql)==true){
    echo "Database Created";
}

else{
    echo "Error creating database.".$conn->error;
}
mysqli_close($conn);
?>
</body>
</html>