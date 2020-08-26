<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create New Account</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|courgette|pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="signup.css">

<style>
    body{
    color:#999;
    background-image: url(../images/image1.webp);
    font-family: 'Roboto', Sans-serif;
    background-size: cover;
}
.form-control{
min-height: 41px;
box-shadow: none;
border-color: #e1e1e1;
}
.form-control:focus{
    border-color: #00cb82;
}
.form-control, .btn{
    border-radius: 3px;
}
.form-header{
    margin: -30px -30px 20px;
    padding: 30px 30px 10px;
    text-align: center;
    background: #00cb82;
    border-bottom: 1px solid #eee;
    color: #fff;
}
.form-header h2{
    font-size: 34px;
    font-weight: bold;
    margin: 0 0 10px;
    font-family: 'pacifico' sans-serif;
}
.form-header p{
    margin: 20px 0 15px;
    font-size: 17px;
    line-height: normal;
    font-family: 'courgette' sans-serif;
}
.signup-form{
    width: 390px;
    margin: 0 auto;
    padding: 30px 0;
}
.signup-form form{
    color: #999;
    border-radius: 3px;
    margin-bottom: 15px;
    background: #f0f0f0;
    box-shadow: 0px 2px 2px rgba(0,0,0,0.3);
    padding: 30px;
}
.signup-form .form-group{
    margin-bottom: 20px;
}
.signup-form label{
    font-weight: normal;
    font-size: 13px;
}
.signup-form input[type="checkbox"]{
    margin-top: 2px;
}
.signup-form .btn{
    font-size: 16px;
    font-weight: bold;
    background: #00cb82;
    border: none;
    min-width: 200px;
}
.signup-form .btn:hover, .signin-form .btn:focus{
    background: #00b073 !important;
    outline: none;
}
.signup-form a{
    color:#00cb82;
}
.signup-form a:hover{
    text-decoration: underline;
}


</style>
</head>
<body>
    <div class="signup-form">
        <form action="signup_user.php" method="post">
            <div class="form-header">
                <h2>Sign Up Here</h2>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="user" id="" placeholder="Ex : Kavita"
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Paasword</label>
                <input type="password" class="form-control" name="pass" id="" placeholder="Password"
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" id="" placeholder="someone@site.com"
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="country" required>
                <option disabled>select a country </option>
                <option>India </option>
                <option>United state of America </option>
                <option>UK </option>
                <option>Canada </option>
                <option>Italy </option>
          </select>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="gender" required>
                <option disabled>Choose your Gender </option>
                <option>Female </option>
                <option>Male </option>
                <option>Others </option>
          </select>
          <br>
          <br>
          

 <div class="form-group">
                <button type="submit" class="btn btn-primary btn btn-block btn-lg" name="sign_up"> Sign Up
                </button>
                 </div>
        </form>
        <div class="text-center small" style="color:#674288;">Already have an Account <a href="login.php">  click here to <strong>Login</strong></div>
</body>
</html>


