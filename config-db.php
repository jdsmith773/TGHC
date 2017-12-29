<?php 
/* Connection to server */
define('db_server', 'localhost');
define('db_username', 'root');
define('db_password', 'root');


$link = mysqli_connect(db_server, db_username, db_password);

//check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


mysqli_close($link);
?>