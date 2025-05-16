<?php 
 //session_start();

	include("../config/connection.php");
	include("../includes/functions.php");

	

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
        <h1 class="text-center" style="color: black;">
            Watch-later
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form action="WL.php" method="POST">
                    <div class="form-group">
                        <label for="name">Movie-Name</label>
                        <input type="text" class="form-control" name="pname" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">user_name</label>
                        <input type="text" class="form-control" name="user_name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">password</label>
                        <input type="text" class="form-control" name="password" id="name">
                    </div>
                    </div>
                    <input type="submit" name="submitForm" value="submit" class="btn btn-danger btn-block">
                    <a href="show.php" style="color: rgba(255, 99, 71, 0.8);">show</a>
                    </form>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<style type="text/css">
   body { background: black !important; } 
</style>
<?php
   

    if(isset($_POST['submitForm'])){
        $name = $_POST['pname'];
        $UN = $_POST['user_name'];
        $p = $_POST['password'];
        

        $sql = "INSERT INTO `users`(`watch`,`user_name`,`password`) 
                VALUES ('$name','$UN','$p')";
        
        if($con->query($sql) === TRUE){
            
        }else{
            echo "something went wrong";
        }

    }else{
        
       
    }

   
        
    
?>
