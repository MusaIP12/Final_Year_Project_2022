<?php

//create neccesary folders
$dir = array("C:/xampp/htdocs/umlando/uploads", "C:/xampp/htdocs/umlando/pdf", "C:/xampp/htdocs/umlando/temp", "C:/xampp/htdocs/umlando/prospectus", "C:/xampp/htdocs/umlando/cao", "C:/xampp/htdocs/umlando/docs");
foreach ($dir as $value) {
    if (!file_exists($value)) {
        mkdir($value);
    }
}

include_once "main.php";
$object = Singleton::getInstance();
//create a data base called career
$object->createDbt("userregistration");

//start the database
$conn = $object->startDB("userregistration");

//create a table called Career
echo $object->createTableCareer($conn);

//create a table called stat it for changing of dates feature
$object->createTableStat($conn);

//create a table called contact for insert users contact form input's
$object->createTableContact($conn);


?>

<?php

//add initial dates  from a json file on the python folder
if (!$object->checkStat($conn)){
  $string = file_get_contents("C:/xampp/htdocs/umlando/python/data.json");
  $json_a = json_decode($string,true);
  
  foreach ($json_a as $key => $value){
    //echo  $value. '<br><br>';
    $date=date_create($value);
    echo date_format($date,"d M Y"). '<br><br>';
    $object->insertIntoTableStat($conn, "{$key}","{$value}");
  }
}
?>

<?php
$object->createTableUserRegistration($conn);

$object->insertIntoTableUserRegistration($conn, "admin", "admin", "as@ahu.com", "admin");

$object->createTableContact($conn);
?>

<?php
include "addCar.php";

?>