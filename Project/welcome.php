<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{background-color: lightblue; font: 14px sans-serif; text-align: center; }
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 30px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p> &nbsp 
  <p><h1>Please Select Any One Of The Topics Below!&nbsp&nbsp</p>&nbsp&nbsp</h1> &nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp<img src="pointer.jpg" height="120" width="120"style="float:left"></img>
&nbsp<a href="http://yashbhatt91.pythonanywhere.com/" button class="button" style="position:absolute;left:120px;"><span>Predicting Life Expectancy. </span></button></a>
<img src="pointer.jpg" height="120" width="120"style="float:middle">
<a href="http://127.0.0.1:5000/" button class="button" style="position:absolute; middle:100px;"><span> Covid-19 &nbsp    Detector. </span></button></a>
</body>
</html>