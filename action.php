<?php


$username = $_POST['user_name'];
$email = $_POST['user_email'];
$password = ($_POST['user_password']);

$query = "insert into user values('','$username','$email','$password','','','','')";
mysqli_query($conn, $query);
header("location: register.html");
?>