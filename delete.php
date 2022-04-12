<?php
    require_once('connection.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `users` WHERE id = $id";

        if($con->query($sql) === TRUE){
            header('Location: http://localhost/Movie-suggestion-website/show.php');
        }else{
            echo "something went wrong";
        }
        
    }else{
        // redirect to show with error
        die('id not provided');
    }

?>

