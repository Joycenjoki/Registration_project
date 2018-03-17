<?php include ('server.php'); ?>

<html>
<head>
<title>REGISTER</title>
</head>
<body>
<div><h2>Register Here<h2></div>

<form method="POST" action="Register.php">
<?php include ('server.php'); ?>


     <div class="input-group">
       <label>Username</label>
       <input type="text" name="Username">
     </div>
     <div class="input-group">
       <label>Email</label>
       <input type="text" name="Email">
     </div>
     <div class="input-group">
       <label>Password</label>
       <input type="Password" name="Password_1">
     </div>
     <div class="input-group">
       <label>Confirm Password</label>
       <input type="Password" name="Password_2">
     </div>
     <div>
     <button type="submit" name="register" class="btn">REGISTER</button>
     </div>
 <p>already a member<a href="login.php">Sign In</a></p>
</form>
</body>
</html>