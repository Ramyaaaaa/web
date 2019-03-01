<?php
$servername = "localhost";
$username = "root";
$password = "srini1998";
$dbname = "Base1";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn -> connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT INTO Tab1  VALUES('3549','SHRIJA');";

if($conn -> query($sql) === TRUE)
    echo "Data inserted";
else
    echo "Error";
$conn ->close();
?>