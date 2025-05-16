<?php 
session_start();

include("config/connection.php");
include("includes/functions.php");

$user_data = check_login($conn); // changed $con to $conn
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Movie Suggestion Website</title>
</head>
<body>
  <header>
    <form id="form">
      <input type="text" placeholder="Search" id="search" class="search" />
    </form>
    <form action="pages/login.php" method="get" target="_blank">
      <button type="submit" id="signup">signup/login</button>
    </form>
    <form action="pages/logout.php" method="get" target="_blank">
      <button type="submit" id="signup">logout</button>
    </form>
  </header>

  <div id="tags"></div>

  <div id="yes">
    <form action="pages/WL.php" method="get" target="_blank">
      <button type="submit" id="watchlater">◤Watch-Later◢</button>
    </form>

    <h2 id="name">
      <?php
      if(isset($user_data['user_name'])){
        echo "Welcome {$user_data['user_name']}";
      }
      ?>
    </h2>
  </div>

  <main id="main"></main>

  <script src="assets/js/script.js"></script>
</body>
</html>
