<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$text= $_POST['text'];

// database connection


$conn = mysqli_connect("localhost","root","","portfolio") or die("connection failed");
$sql = "INSERT INTO contact(name,email,phone,text) values ('{$name}','{$email}','{$phone}','{$text}')";
$result = mysqli_query($conn,$sql) or die("Query Failed");
echo  "sent succesfully";

?>