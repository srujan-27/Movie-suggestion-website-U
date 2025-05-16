<?php 
session_start();

	include("../config/connection.php");
	include("../includes/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	body{
        background-color:brown ;
	}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		font-family: "Poppins", sans-serif;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		font-size: 20px;
		background-color: rgb(255, 0, 0);
		border: none;
		border-radius: 5px;
	}

	#box{

		background-color: #111111;
		margin: auto;
		width: 300px;
		padding: 20px;
		border-radius: 10px;
		
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="USERNAME"><br><br>
			<input id="text" type="password" name="password" placeholder="PASSWORD"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>