<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="form-card">
    <h2>Login/Sign Up</h2>
    <h3>Enter your Credentials</h3>
    <form action='connect.php' method="post" class="login-form">
      <input type="text" placeholder="Username" id="uname" name="username" pattern="[a-z]*" />
      <input type="password" placeholder="Password" id="pass" name="password" />
      <a href="#">forget your password</a>
      <button><a href="home.html">LOGIN </a></button>
    </form>
  </div>
  <?php
       $servername = "";
       $servername = "";
  ?>
</body>
</html>