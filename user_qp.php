<?php
include "main.php";

$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");

include_once "template/nav.php";
if(isset($_SESSION['logged_in']) && $_SESSION['type_'] == "admin"){
	include_once "template/adminnav.php";
}
?>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>home</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style>
    h4{
        text-align: center;
    }
    form{
        text-align: center;
    }
    p{
        text-align: center;
    }

</style>
<br><br><br><br><br><br>
<h4>Download Previous question papers </h4> 
<?php 


$files=scandir("uploads");
for($a=2;$a<count($files);$a++){


    ?>
    <p>
        <?php echo $files[$a]; ?> 
        <a href="uploads/<?php echo $files[$a];?>" download="<?php echo $files [$a];?>" >
        Download
        </a>  
       
    </p>
    <?php

}
?>
<br><br><br><br><br><br>
<?php
include_once "template/footer.php";
?>