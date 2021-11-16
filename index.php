<!DOCTYPE html>
<html>

<head>
	<title> Login and registration form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet" type="text/css" />

	<?php include "include/database.php"; ?>
	<style>
		body {
			background: #fafafa;
			position: absolute;
			padding: 0;
			margin: 0;
			width: 100%;
			height: 100%;
		}

		.boxx {
			position: relative;
			margin: 10% 10% 10% 210px;
			background-color: white;
			width: 70%;
			height: 100%;
			z-index: 10;
			border-radius: 7px;

			padding: 5%;
			text-align: center;
			border-bottom: 10px solid black;

		}

		.outer {
			position: absolute;
			width: 100%;
		}

		.header {
			height: 40%;
			width: 100%;

			box-shadow: 10px 8px 16px 0px rgba(0, 0, 0, 0.5);
		}

		.brand {
			font-size: 50px;
			color: white;
			text-decoration: none;
			padding: 20px;
			float: left;
		}

		ul>li {
			display: inline-block;
			padding: 20px;
			font-size: 30px;
			list-style: none;
			margin-right: 30px;
		}

		li>a {
			text-decoration: none;
			color: white;
		}

		.indent {
			float: left;
		}

		.box {
			width: 200px;
			height: 30px;
			border-radius: 5%;
		}

		.button {
			font-size: 15px;
			width: 120px;
			height: 30px;
			border-radius: 2px;
			box-shadow: 4px 5px 8px 0px rgba(0, 0, 0, 0.5);
			margin: 20px;
		}

		.btn {
			border: none;
			background-color: black;
			font-size: 30px;
			color: white;
		}
	</style>
</head>

<body onload="load()">

	<!--<div class="header" id="header">
		
		
			<ul class="left">
				<li><input id="check" class="btn" type="button" onclick="check()" value=""></li>
				<li><input class="btn" type="submit" target="about.php" value="About"></li>
			</ul>
		</div>--->

	<div class="outer" id="outer">

		<div class="boxx" id="login">
			<img style="margin-top: -25px;" src="images/logo.png">

			<form style="margin-top: 30px;" class="form-inline" action="programs/login_program.php" method="post">


				<label for="email">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="email" class="box" name="email" id="email" value="" placeholder="Email ID" onkeyup="validation()"><br>
				<p style="color:red;" id="error"><br><br><br></p>

				<label for="password">Password&nbsp;&nbsp;&nbsp;</label>
				<input type="password" class="box" name="pwd" id="password" value="" placeholder="Password"><br><br><br>

				<input class="button" type="button" value="Register &nbsp;" onclick="register()">

				<input type="submit" class="button" name="s1" value="Submit">
			</form>
		</div>


		<div class="boxx" id="register">
			<img style="margin-top: -25px;" src="images/logo.png">

			<form style="margin-top: 30px;" class="form-inline" name="form1" method="post" action="programs/register_program.php" enctype="multipart/form-data">

				<label for="fname">Name&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; </label>
				<input class="box" type="text" name="name" id="fname" value="" placeholder="Name"><br><br><br>


				<label for="email">Email &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input class="box" type="email" name="email" id="email" value="" placeholder="Email ID"><br><br><br>

				<label for="mob">Mobile No &nbsp;&nbsp;</label>
				<input class="box" type="text" name="number" id="mob" value="" placeholder="Mobile Number"><br><br><br>

				<label for="password">Password&nbsp;&nbsp;&nbsp;</label>
				<input class="box" type="password" name="pwd" id="password" value="" placeholder="Password"><br><br><br>

				<input class="button" type="button" value="Login" onclick="login()">

				<input class="button" type="submit" name="register1" value="Submit">
			</form>
		</div>


	</div>

	<script>
		function load() {
			document.getElementById('register').style = "display:none;";
			document.getElementById('check').value = "Register";
		}

		function register() {
			document.getElementById('register').style = "height:100%;";
			document.getElementById('login').style = "display:none";
			document.getElementById('check').value = "Login";
			//document.getElementById('header').style="display:none";
		}

		function login() {
			document.getElementById('register').style = "display:none;";
			document.getElementById('login').style = "display:block;";
			document.getElementById('check').value = "Register";
			//document.getElementById('header').style="display:none";
		}

		function check() {

			var che = document.getElementById('check').value;
			if (che == "Login") {
				document.getElementById('register').style = "display:none;";
				document.getElementById('login').style = "display:block;";
				document.getElementById('check').value = "Register";
			} else {
				document.getElementById('register').style = "height:100%;";
				document.getElementById('login').style = "display:none";
				document.getElementById('check').value = "Login";
			}

		}

		function validation() {

			var check = document.getElementById('email').type;
			if (check == "email") {
				var value = document.getElementById('email').value;
				if (value == "") {

					document.getElementById('error').innerHTML = "Incorrect Email Address";

				}
			}
		}
	</script>
</body>

</html>