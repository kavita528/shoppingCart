
<?php

session_start();
if(isset($_SESSION['username'])){
    header('location:login.php');
}

?>
<html>
    <head>
        <title>Home Page </title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>

body{
    background: linear-gradient(0,0, 50, 0.5) rgba(0,0, 50, 0.5) url(1.jpeg);
  background-size: cover;
   background-position: center;
}
.login-box{
  max-width: 700px;
  float: none;
  margin: 150px auto;
}
.login-left{
  background: rgba(211,211,211, 0.5);
  padding: 30px;
}
.login-right{
  background:#fff;
  padding: 30px;
}
.form-control{
  background-color: transparent !important;
}
a{
    color:#fff !important;
    margin-top: -200px !important;
}
h1{
    color:#fff !important;
    margin-top: 200px;
    text-align : center;
    text-transform: uppercase;   
}

</style>

</head>
<body>
<div class="container">
<a class="float-right" href = "logout.php">Logout</a>
<h1>Welcome! <?php echo $_SESSION['username']; ?></h1>
</div>
</body>
</html>