<?php


$str = "maths,english,LO";

//separate the srring by ,
$str = explode(",", $str);

foreach($str as $key => $value){
    echo $value;
}

$arr = array("maths"=>array("describtion", "maths, lo, zulu"), "english"=>array("describtion", "maths, lo, zulu"), "LO"=>array("describtion", "maths, lo, zulu"));

foreach($arr as $key => $value){
    print_r($value);
    echo "<hr>";
}

?>