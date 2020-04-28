<?php
session_start();


$con = mysqli_connect('localhost','root');

if($con){ 
    echo "INCORRECT EMAIL OR PASSWORD OR NOT REGISTER";
}else{
    echo "no connection"; 
}
mysqli_select_db($con, 'register');

$firstname = $_POST['firstname'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$q = "select * from reg where firstname = '$firstname' && email = '$email' && pass = '$pass' ";


$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"WRONG EMAIL OR PASSWORD";
    $_SESSION['username'] =$firstname;
    header('location:project.php');
    
}else{
    $qy = "insert into reg (email,pass) 
    values ('$email','$pass'); ";    
    mysqli_query($con,$qy); 
}



?>
