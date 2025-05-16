<?php
    require_once('../config/connection.php');

    $sql = "SELECT * FROM `users`";
    $result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Later</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron">
        <h1 class="text-center">
            Your Movies
        </h1>
    </div>

    <div class="container">
        <table class="table table-striped table-borderrer">
            <tr>
                <th>ID#</th>
                <th>Name</th>
                <th>username</th>
                <th>Actions</th>
               

            <?php
                
                if($result->num_rows > 0 ){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['watch'] . "</td>";
                        echo "<td>  " . $row['user_name'] . "</td>";
                        echo "<td>";
                        echo "<div class='btn-group'>";
                        echo "<a class='btn btn-secondary' href='./edit.php?id=" .$row['id'] ."'> Update </a>";
                        echo "<a class='btn btn-danger' href='./delete.php?id=" .$row['id'] ."'> Delete</a>";
                        echo "</div>";
                     echo "</td>";
                      
                        echo "</tr>";
                    }
                }
            ?>
        <style>
             body { color: white !important; } 
</style>
        </style>   
        </table>
        <style type="text/css">
   body { background: black !important; } 
         </style>
        
    </div>
</body>
</html>
