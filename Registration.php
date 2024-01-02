<?php
include_once "main.php";
$object = Singleton::getInstance();

$conn = $object->startDB("userregistration");


?>

<?php

$name = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['user_email'];

$state = $object->checkUserExist($conn, $name);
if($state){
    echo "User already exist";
    header('location:createagain.php');
}
else{
    $object->insertIntoTableUserRegistration($conn, $name, $pass, $email, "nonadmin");
    echo "Created Account Succesfully";
    
    //assign session variable to a logged in user
    $_SESSION['username'] = $name;
    $_SESSION['user_email'] = $email;
    $_SESSION['p_assword'] = $pass;
    $_SESSION['type_'] = "nonadmin";
    $_SESSION['logged_in'] = true;
    
    //time the session
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    header('location:university.php');
    
}
?>