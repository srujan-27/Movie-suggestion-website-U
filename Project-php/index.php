<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Movie Suggestion website</title>
  </head>
  <body>
    <header>
      <form id="form">
        <input type="text" placeholder="Search" id="search" class="search" />
      </form>
      <form action="login.php" method="get" target="_blank" >
        <button type="submit" id="signup">signup/login</button>
      <form action="logout.php" method="get" target="_blank" >
        <button type="submit" id="signup">logout</button>
        <h1 style="color:red;">hello
        <?php
        echo $user_data['user_name'];
        
        
        
        ?>
        
        
        </h1>
      
    
    </header>

    <div id="tags"></div>

    <main id="main"></main>

    <script src="script.js"></script>
  </body>
</html>
