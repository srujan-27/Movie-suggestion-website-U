<?php
$link=mysqli_connect("localhost","root","root");
if($link==False)
{
    die("ERROR:could not connect" .mysqli_connect_error());
}

//echo "Connection sucessfully .host info ".mysqli_get_host_info($link);
$sql="CREATE DATABASE login_db";
if(mysqli_query($link,$sql))
{
    echo"connection success";
}
else
{
     echo"ERROR ";
}
mysqli_close($link)
?>