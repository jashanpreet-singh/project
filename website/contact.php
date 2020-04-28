<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "no connection"; 
}
mysqli_select_db($con, 'websitedata1');

$subtitle = $_POST['subtitle'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "insert into contactus (subtitle,firstname,lastname,email,message) 
values ('$subtitle','$firstname','$lastname','$email','$message'); ";

mysqli_query($con,$query);

header('location:contact-us.php');
?>