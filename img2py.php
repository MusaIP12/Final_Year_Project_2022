<?php

include "main.php";

$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");

//check if session has expired
if(isset($_SESSION['expire'])){
    if($_SESSION['expire'] < time()){
        session_destroy();
        header('location:login.php');
    }
	else{
		$_SESSION['expire'] = time() + 60*60;
	}
}



?>
<?php
echo shell_exec("python deletefiles.py")
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Picture To PDF</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    
</head>
<body>
<?php
include_once "template/nav.php";
if(isset($_SESSION['logged_in']) && $_SESSION['type_'] == "admin"){
	include_once "template/adminnav.php";
}


?>

<section class="image2pdf" >
<div class="tool" style="height: 50vh;">
    <div class="tool_header">
        <h1>Convert Image To PDF</h1>
        <p>Convert images to PDF in seconds</p>

        <form action="upload.php" method="post" enctype="multipart/form-data" target="votar">
            <div>Select image to upload:</div>
            <br/>
            <input type="file" name="image" />
            <p>
            <br/>
            <input type="submit"/>
            </p>
        </form>
    </div>
</div>
</section>



<?php
//footer
include_once "template/footer.php";
?>

<script>

var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";
}

function hideMenu(){
    navLinks.style.right = "-300px";
}
</script>
</body>
</html>
