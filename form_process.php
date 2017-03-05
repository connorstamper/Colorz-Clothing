<?php
$headers = "Content-Type: text/html; charset=UTF-8";
$name = $_POST['name'];
$email = $_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message']. ' </br> ' . $name . ' </br>' . $email . ' </br> ' . $phone ;

$to = "connorpstamper@gmail.com";
$subject = "new colorz clothing message"

mail($to, $subject, $message, $headers, $name);
echo "Your message has been sent";
?>
