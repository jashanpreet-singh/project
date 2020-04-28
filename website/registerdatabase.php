<?php
session_start();
header('location:log-in.php');

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "no connection"; 
}
mysqli_select_db($con, 'register');

$subtitle = $_POST['subtitle'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

$q = "select * from reg where email = '$email' && pass = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"Email Already Register";
}else{
    $qy = "insert into reg (subtitle,firstname,lastname,city,email,pass,cpass) 
    values ('$subtitle','$firstname','$lastname','$city','$email','$pass','$cpass'); ";    
    mysqli_query($con,$qy); 
}



?>