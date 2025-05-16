<?php
    if(!isset($_GET['id'])){
        // redirect to show page
        die('id not provided');
    }
    require_once('connection.php');
    $id =  $_GET['id'];
    $sql = "SELECT * FROM `users` where id = $id";
    $result = $con->query($sql);
    if($result->num_rows != 1){
        // redirect to show page
        die('id is not in db');
    }
    $data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron">
        <h1 class="text-center">
            Watch Movies
        </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form action="./modify.php?id=<?= $id ?>" method="POST">
                <h3>Edit Form</h3>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="pname" id="name" value="<?= $data['watch']?>">
                    </div>
                    

                    <input type="submit" name="editForm" value="submit" class="btn btn-primary btn-block">
                </form>
                <style type="text/css">
   body { background: black !important; } </style>
            </div>
        </div>
    </div>
</body>
</html>

