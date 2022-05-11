<?php
    $severname="localhost";
    $username="root";
    $password="";
    $database="testdatabase";

    $conn = mysqli_connect($severname,$username,$password,$database);
    if(!$conn){
        echo("connect fail");
        
    }else{
        echo("connect success");
    }
?>