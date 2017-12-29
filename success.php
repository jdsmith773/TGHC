<?php include 'config-db.php';?>

<?php
if(!empty($_POST['name'])&& !empty($_POST['email']) && !empty($_POST['customer'])){
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $customer = mysqli_real_escape_string($link, $_POST['customer']);

    $query = "INSERT INTO `customers`(`ID`, `name`, `email`, `customer`) VALUES ('ID','$name','$email','$customer')";

    if(!mysqli_query($link, $query)){
        die(mysqli_error($link));
    }else{
        header("Location: index.php?success=Message%20Added");
    }
}
?>