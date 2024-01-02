<?php

include_once "main.php";
$object = Singleton::getInstance();
$conn = $object->startDB("career");

//$object->createTableStat($conn);

//$object->insertIntoTableStat($conn, "hello","30 september 2022");
$object->compareTime($conn);
$object->getState();
$object->getState();
$object->getState();
$object->getState();
$object->getState();
$object->getState();
?>