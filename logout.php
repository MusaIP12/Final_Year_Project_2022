<?php
session_start();
session_destroy();
//reset session data
$_SESSION = array();

header('location:index.php');
?>