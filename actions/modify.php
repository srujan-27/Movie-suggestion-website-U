<?php
    require_once('connection.php');

    if(isset($_GET['id']) && isset($_POST['editForm'])){
        $id = $_GET['id'];
        $name = $_POST['pname'];
       

        $sql = "UPDATE `users` SET 
                `watch`= '$name'
                WHERE id = $id";

        if($con->query($sql) === TRUE){
            header('Location: http://localhost/Movie-suggestion-website/show.php?id=' . $id);
        }else{
            echo "something went wrong";
        }
        
    }else{
        echo "invalid";
    }
?>

