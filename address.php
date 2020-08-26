<?php
session_start();
header('location:login.php');


$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'shopee');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$city = $_POST['city'];
$address = $_POST['address'];
$zip = $_POST['zip'];

$s = "select *from address where name = '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<h1>This Username is already Taken, Please try with other.....</h1>";
}else{
    $reg = "insert into signup(name, email, phone, state, city, address, zip) 
    values('$name', '$email','$phone','$state', '$city', '$address', '$zip') ";
    mysqli_query($con, $reg);
    echo "<h2>Registration successfully done....</h2>";
}
?>