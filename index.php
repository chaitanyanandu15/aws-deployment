<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>
Registration system PHP and MySQL
</title>
 
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>


#register { width: 30%;
margin: 0px auto; padding: 20px;
border: 1px solid #B0C4DE; background: white;
border-radius: 0px 0px 10px 10px;


}
</style>
<body>
<div class="header">
<h2>Register</h2>
</div>
<form method="post" id="register" action="register.php">
<?php include('error.php'); ?>
<div class="input-group">
<label>Enter Username</label>
<input type="text" name="username"
 
value="<?php echo $username; ?>">
</div>
<div class="input-group">
<label>Email</label>
<input type="email" name="email" value="<?php echo $email; ?>">
</div>
<div class="input-group">
<label>First Name</label>
<input type="text" name="firstname">
</div>
<div class="input-group">
<label>Last Name</label>
<input type="text" name="lastname">
</div>
<div class="input-group">
<label>Enter Password</label>
<input type="password" name="password_1">
</div>
<div class="input-group">
<button type="submit" class="btn" name="reg_user">
Register
</button>
 
</div>
<p>
Already having an account?
<a href="login.php"> Login Here!
</a>
</p>
</form>
</body>
</html>
