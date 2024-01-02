<?php
include_once "main.php";
$object = Singleton::getInstance();

$conn = $object->startDB("userregistration");


//$object->insertIntoTableUserRegistration($conn, "nja", "nja", "nja@gmail.com");

?>
<?php

$name = $_POST['username'];
$pass = $_POST['password'];

$sate = $object->signInUser($conn, $name, $pass);

if($sate){
    $_SESSION['username'] = $name;
    //$_SESSION['user_email'] = $email;
    $_SESSION['type_'] = $object->userType($conn, $name);
    $_SESSION['logged_in'] = true;
    
    //time the session
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
    header('location:index.php');
}else{
    header('location:relogin.php');
}



?>