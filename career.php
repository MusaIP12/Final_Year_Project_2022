<?php

include "main.php";

$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");

$careers = $object->getCareer($conn);

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
$str = "maths,english,LO";
function subj($str){
    $new = '';
    $str = explode(",", $str);
    foreach($str as $key => $value){
        $new .= $value.", ";
    }
    return "<strong>".$new."</strong>";
}

?>
<!DOCTYPE html> 
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="career.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <title>Major's Descriptions</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="description" content=" The Jackson Vocational Interest Survey 
    combines a highly regarded career interest test with valuable career and
    education resources and advice.">
    <link rel="stylesheet" href="css/career.css" type="text/css">
    <script language="JavaScript" type="text/javascript" src="../javascript/googlytics.js"></script>
    <style>
    @media(max-width: 800px){
        .admindiv{
            margin-top: 50px;
        }
    }
    </style>

</head>
<body>

<?php
include_once "template/nav.php"
?>
<section class="adminnav">
    <div class="admindiv"></div>
    <?php
    if(isset($_SESSION['logged_in']) && $_SESSION['type_'] == "admin"){
    include_once "template/adminnav.php";
    }
    ?>
</section>
<section class="careeriers" id="careeriers_page">
    <div class="block-list" style="background-color: orange;">
        <a name="top" ></a><h1 >Major's Descriptions</h1>
        <div class="text">
            <div id = 'description'>
                <p>Below is a list of majors and a brief description of what they are. A degree/diploma is conferred to you upon completion of all the requirements for graduation, and your major is the more specific area of study you focused on while completing your degree. Knowing what your major is can help you comprehend the value of your degree and the potential occupations you might pursue after receiving it.  </p></div>
                <ol>
                    <?php
                    foreach(array_keys($careers) as $key){
                        echo "<li ><a href='#".$key."' style='text-decoration: none;'>".$key."</a></li>";
                    }
                    ?>
                </ol>
            </div>
        </div>
    </div>

    <?php


    $html = '<div class="career">

    <h1 style="padding-bottom: 10px;">%s<a name="%s"></a></h2>
    <div class="row">
        <div class="career-col">
            <h3>Description</h3>
            <p>%s</p>
        </div>
        <div class="career-col">
            <div class="wrapper" >
                <img src="images/career/%s.jpg">
            </div>
            <hr>
            <div class="secondpart">
            <h3 style="text-decoration: underline;">High School Subjects</h3>
            <ul style="list-style: none;">
                <li>%s</li>
            </ul>
            </div>
        </div>
    </div>
    <div class="top"><a href="#top">back to the top</a></div>
</div>';



        foreach(array_keys($careers) as $title){
            /*format = career title, tag, career description,picture, list*/
            printf($html, $title, $title, $careers[$title][0], $title, subj($careers[$title][1]));
        }
    ?>
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
