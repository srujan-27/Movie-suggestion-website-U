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
      </form>
      <form action="logout.php" method="get" target="_blank" >
        <button type="submit" id="signup">logout</button>
      </form>
     
      
    
    </header>

    
      <div id="tags">
      
    
      </div>
     <div id="yes">
       
       <form action="WL.php" method="get" target="_blank" >
        <button type="submit" id="watchlater">◤Watch-Later◢</button>
       </form>
       
     <h2 id="name" style="color:white;">

       
       <?php
     
       if(isset($user_data['user_name'])){
         echo "Welcome {$user_data['user_name']}";
       }
       
       
       
       ?>
       
       
       </h2> 
     </div>
    
    
    <main id="main"></main>

    <script src="script.js"></script>
  </body>
</html>
