<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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


</style>

</head>
<body>
 <div class="container">
     <div class="login-box">
     <div class="row">
         <div class="col-md-6 login-left">
             <h2>Login Here</h2>
             <form action="validation.php" method="post">
                 <div class="form-group">
                     <label>Username</label>
                     <input type="text" name="user" class="form-control" required>
                 </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button><br>
                <br>
             </form>

             <div class="text-center small" style="color:#674288;">Don't have an Account ?<a href="signup.php">  click here to <strong>SignUp</strong></div>

         </div>

     </div> 
 </div>

   <div> 

</body>
</html>