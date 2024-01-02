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

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Enquiries</title>
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
include "template/nav.php";
if(isset($_SESSION['logged_in']) && $_SESSION['type_'] == "admin"){
	include_once "template/adminnav.php";
}
?>
<section class="messages">
    <div class="message-head" style="margin-top: 50px;">
        <h3>Messages from varous users</h3>
    </div>


<?php


$html = '<span id="mess">username: %s</span><br>
<span id="mess">user email: %s</span><br>
<span id="mess">user phone: %s</span><br>
<span id="mess">user message: <br><a id="desc"> %s</a></span><br>';

$html2 = '<div class="message-block">
            <div class="message-content">
                <div class="buble" >
                    <span>username:   <b>%s</b>  </span><br>
                    <span>user email: <b>%s</b>  </span><br>
                    <span>user phone: <b>%s</b>  </span><br>
                    <span>user message: <br><a id="desc"> %s</a></span><br><br><br>
                    <a class="btn" onclick="refresh()" href="read.php?name=%s" style="color:red;">Delete</a><br><br>
                </div>
            </div>
        </div>';

$result = $object->getMessages($conn);
while($row = mysqli_fetch_assoc($result)){
    
    echo sprintf($html2, $row['username'], $row['email'], $row['phone'], $row['usermessage'], $row['username']);
}
?>

</section>


<?php
if(isset($_GET["name"])) {
    $name_title =  ($_GET["name"]);
    $object->deleteFromTableContact($conn, "{$name_title}");
    $_GET["name"]= null;
}
//footer
include_once "template/footer.php";
?>

<script>

function refresh() {
    setTimeout(function(){
    window.location.reload(); // you can pass true to reload function to ignore the client cache and reload from the server
},20);
}

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
