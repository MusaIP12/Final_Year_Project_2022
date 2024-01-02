<?php


include "main.php";

try {
  $object = Singleton::getInstance();
} finally {
  //echo "something is wrong with your database";
}

$name_tag = $name_title = $describe = $message = "";
$conn = $object->startDB("userregistration");
$error= 0;

if(isset($_POST["submit"])) {
    $name_title =  ($_POST["name_title"]);
    $date = $_POST["name_date"];
    $object->updateTableStat($conn, "{$name_title}", "{$date}");
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <title>Update University Information</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="description" content=" The Jackson Vocational Interest Survey 
    combines a highly regarded career interest test with valuable career and
    education resources and advice.">
    <link rel="stylesheet" href="css/career.css" type="text/css">
    <script language="JavaScript" type="text/javascript" src="../javascript/googlytics.js"></script>
</head>
<body>
<?php
include_once "template/nav.php"
?>
<section class="adminnav">
    <div class="admindiv"></div>
    <?php
    include_once "template/adminnav.php";
    ?>
</section>
<section class="addcareer">
    <div class="add">
        <h1>Update Closing Date</h1>
        <form action="" method="post">
            <input type="text" name="name_title" placeholder="University Name, e.g Cape Peninsula University of Technology (CPUT)" size="50" style='width:25em' required><br>
            <input type="text" name="name_date" placeholder="closing date e.g 30 september 2022" style='width:25em' required><br>
            <input type="submit" name="submit" value="Add">
        </form>
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
