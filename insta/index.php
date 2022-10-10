<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "db1";
    $connection = mysqli_connect($host , $user , $pass , $database);
    if($connection){
        echo "NOW LOG IN";

    }else{
        die("could not connect");
        }
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "INSERT INTO contacts (username , password) values ('$name' , '$password')";
    mysqli_query($connection , $sql);
    
    
    mysqli_close($connection);
?>