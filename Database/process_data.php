<?php
include("connection.php");
extract($_POST);
$sql = "INSERT INTO contact(first_name, last_name, email, message) VALUES ('".$firstname."','".$lastname."','".$email."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Error: ".$mysqli->error);
}
echo "Message Sent! <br> Click the back arrow to go back! <br> Thank You!";
$mysqli->close();
?> 