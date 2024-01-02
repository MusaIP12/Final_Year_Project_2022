<?php

include_once "main.php";

$object = Singleton::getInstance();
$conn = $object->startDB("career");

$object->createTableCareer($conn);
?>