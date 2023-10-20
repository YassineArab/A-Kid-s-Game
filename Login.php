<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="cssforlogin.css">

</head>
<body>
<?php
session_start();

if(isset($_POST['login_submit'])){
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  
  if ($username === "correctUsername" && $password === "correctPassword") {
    
    $_SESSION['username'] = $username;
    header("Location:gameL1.php");
    exit();
  } else {
    
    $error_message = "Sorry, you entered a wrong username or password!";
  }
}

if(isset($_POST['signup_submit'])){
  
  header("Location:registration.php");
  exit();
}
?>


<?php if(isset($error_message)): ?>
  <p><?php echo $error_message; ?></p>
  <a href="Modification.php">Forgotten? Please, change your password.</a>
<?php endif; ?>
<form id="login-form" method="post" action="login.php">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  <br>
  <input type="submit" value="Connect" id="login-submit" name="login_submit">
  <input type="submit" value="Sign-Up" id="signup-submit" name="signup_submit">
</form>

</body>
</html>