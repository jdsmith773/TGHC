<?php 
/* Connection to server */
define('db_server', 'localhost');
define('db_username', 'root');
define('db_password', 'root');


$connection = mysqli_connect(db_server, db_username, db_password);

//check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Create database query
$sql = "CREATE DATABASE landing_page";
if(mysqli_query($connection, $sql)){
    echo "Database created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " .mysqli_error($connection);
}

mysqli_close($connection);
?>