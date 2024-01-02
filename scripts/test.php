<?php
include_once "main.php";
$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");
$object->updateTableStat($conn, "Cape Peninsula University of Technology (CPUT)", "2 january 2022");
?>