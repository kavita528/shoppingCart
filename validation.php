<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'shopee');

$name = $_POST['user'];
$pass = $_POST['password'];


$s = "select * from login where name = '$name' && password='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  $_SESSION ['user'] = $name;

    header('location:home.php');

}
else{
echo "Hello";
}

?>