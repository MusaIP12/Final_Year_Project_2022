<?php
include "main.php";

$object = Singleton::getInstance();
$object->generate();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>home</title>
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
include_once "template/nav.php"
?>

<section class="image2pdf">
    <div class="tool" style="height: 40vh;">
        <div class="tool_header">
            
            <p><?php
            $htm = "<h1>Convert Image To PDF</h1><h2>your file has been converted to PDF</h2>";
            //waitfile();
            if (is_string($object->image())){
               echo "<h1>".$object->image()."</h1>";
               echo "<div id='submit'><a href='img2py.php'>Try again</a></div>";
            }
            else{
               echo $htm;
               $object->image();
               $object->convert();
               $object->waitfile();
            }

            ?></p>


            

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
