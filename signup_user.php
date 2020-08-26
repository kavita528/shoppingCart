<?php
session_start();
header('location:login.php');


$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'shopee');

$name = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$country = $_POST['country'];
$gender = $_POST['gender'];

$s = "select *from signup where name= '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "<h1>This Username is already Taken, Please try with other.....</h1>";
}else{
    $reg = "insert into signup(name, password, email, country, gender) 
    values('$name', '$pass', '$email','$country','$gender') ";
    mysqli_query($con, $reg);
    echo "<h2>Registration successfully done....</h2>";
}
?>