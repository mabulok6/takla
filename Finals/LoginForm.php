<?php

session_start();



?>

<style>
body {
	margin: 0;
	padding: 0;
	display: flex;
	background: black;
	background-image: url('img/1.avif');
	background-size: cover;
	justify-content: center;
	align-items: center;
	height: 100vh;
	
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

.login-card {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  background-color: wheat;
  box-shadow: 2px 2px 10px #ccc;
}

.card-header {
  text-align: center;
  margin-bottom: 20px
}

.card-header .log {
  margin: 0;
  font-size: 24px;
  color: black;
}

.form-group {
  margin-bottom: 15px;
}

label {
  font-size: 18px;
  margin-bottom: 5px;
}

input[type="text"], input[type="password"] {
  width: 100%;
  padding: 12px 20px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  transition: 0.5s;
}

input[type="submit"] {
  width: 100%;
  background-color: #333;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #ccc;
  color: black;
}

	

</style>


<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css"
</head>
<body>
	<form action="admin/user_mgt.php" method=POST>
		<h2>LOGIN</h2>
		<div class="login-card">
  <div class="card-header">
    <div class="log">Login</div>
  </div>
  <form>
    <div class="form-group">
      <label for="username">Username:</label>
      <input required="" name="username" id="username" type="text" placeholder="Enter your Username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input required="" name="password" id="password" type="password" placeholder="Enter your Password">
    </div>
    <div class="form-group">
      <input value="Login" type="submit">
    </div>

</div>
		<p><?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
					}else{
						
					}
					?></p>
					
</form>

</body>
</html>

<?php
session_destroy();
?>