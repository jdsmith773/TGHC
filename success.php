<?php

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
    if(!empty ($name)){
    if(!empty ($email)){
$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$dbname = "landing_page";

$link = new mysqli ($db_server, $db_username, $db_password, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
    $sql = "INSERT INTO customers (`name`, `email`) VALUES ($name,$email)";
    if ($link->query($sql)){
        echo "Thank you";
    }else{
        echo "Error: ". $sql ."<br>". $link->error;
    }
    $link->close();
}

}
else {
    echo "email cant be empty";
    die();
}
    } 
    else{
        echo "name cant be empty";
        die();
    }
?>