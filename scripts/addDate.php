<?php
include_once "main.php";
$object = Singleton::getInstance();
$conn = $object->startDB("career");

//$object->createTableStat($conn);

//$object->insertIntoTableStat($conn, "hello","30 september 2022");
$object->selectFromTableStat($conn);

?>

<?php
//added date to database
/*
$string = file_get_contents("C:/xampp/htdocs/umlando/python/data.json");
$json_a = json_decode($string,true);

foreach ($json_a as $key => $value){
  //echo  $value. '<br><br>';
  $date=date_create($value);
  echo date_format($date,"d M Y"). '<br><br>';
  $object->insertIntoTableStat($conn, "{$key}","{$value}");
}
*/
?>