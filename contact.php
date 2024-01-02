<?php 
include "main.php";
$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");
//check if session has expired
if(isset($_SESSION['expire'])){
  if($_SESSION['expire'] < time()){
      session_destroy();
      header('location:relogin.php');
  }
}

if (isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["message"])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

$object->insertIntoTableContact($conn, $name, $phone, $email, $message);

$html = '<section class="feedback">
<div class="feedmessage">
  <h1>Thank you for sending us an email. We will get back to you shortly.</h1>
</div>
</section>';


}
/*
$conn = mysqli_connect('localhost', 'root', '', 'userregistration') 
 or die('Error connecting to MySQL server.'); 
 $query = "INSERT  INTO contact(name, phone, email, message) VALUES('$name','$phone','$email','$message')"; 
 $result = mysqli_query($conn, $query) 
 or die('Error querying database.'); 
 if (isset($_POST['submit'])){
     header("Location: confirm.html");
     exit;
 }
 mysqli_close($conn);
}

*/
?>

<!DOCTYPE html>
 <html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="formstyle.css" media="all">
  <script type="text/javascript">
        function validateName() {
var name = document.getElementById('contact-name').value;
if(name.length == 0) {
  producePrompt('Name is required', 'name-error' , 'red')
  return false;
}
if(name.length < 2){
  producePrompt('Name is atleast two characters', 'name-error','red')
  return false;
}
if (!name.match(/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/)) {
  producePrompt('First name, please.','name-error', 'red');
  return false;
}
producePrompt('Valid','name-error','green');
return true;
}
function validatePhone() {
var phone = document.getElementById('contact-phone').value;
if(phone.length == 0) {
producePrompt('Phone number is required.', 'phone-error', 'red');
return false;
}
if(phone.length != 10) {
producePrompt('Input a complete 10 digit number.', 'phone-error', 'red');
return false;
}
if(!phone.match(/^[0-9]{10}$/)) {
producePrompt('Only digits, please.' ,'phone-error', 'red');
return false;
}
producePrompt( 'Valid','phone-error','green');
return true;
}
function validateEmail () {
var email = document.getElementById('contact-email').value;
if(email.length == 0) {
producePrompt('Input a valid email.','email-error', 'red');
return false;
}
if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
producePrompt('Email Invalid', 'email-error', 'red');
return false;
}
producePrompt('Valid', 'email-error', 'green');
return true;
}
function validateMessage() {
var message = (document.getElementById('contact-message').value).replace(/ /g,'');
var required = 9;
var left = required - message.length;
if (left > 0 ) {
producePrompt(left + ' characters required','message-error','red');
return false;
}
producePrompt('Valid', 'message-error', 'green');
return true;
}
function validateForm() {
if (!validateName() && !validatePhone() && !validateEmail() && !validateMessage()) {
jsShow('submit-error');
producePrompt('Please fix errors to submit.', 'submit-error', 'red');
setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
}
else if (validateName() && !validatePhone() && !validateEmail() && !validateMessage()) {
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
}
else if(validateName() && validatePhone() && !validateEmail() && !validateMessage()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(validateName() && validatePhone() && validateEmail() && !validateMessage()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(validateName() && !validatePhone() && !validateEmail() && validateMessage()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(!validateName() && !validatePhone() && validateEmail() && !validateMessage()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(validateName() && validatePhone() && !validateEmail() && !validateMessage()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(!validateName() && !validatePhone() && !validateEmail() && validateMessage()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
}
function jsShow(id) {
document.getElementById(id).style.display = 'block';
}
function jsHide(id) {
document.getElementById(id).style.display = 'none';
}
function producePrompt(message, promptLocation, color) {
document.getElementById(promptLocation).innerHTML = message;
document.getElementById(promptLocation).style.color = color;
}
</script>
</head>
<body>
  <div class="container">
    <form action="contact.php" method="POST" id= "formvalidation" class="form">

      <div class="form-group">
        <label for="contact-name">Name</label>
        <input type="text" class="form-control" id="contact-name" name="name"   placeholder="Enter your name.." onkeyup='validateName()'>
        <span class='error-message' id='name-error'></span>
    </div>

    <div class="form-group">
        <label for="contact-phone">Phone Number</label>
        <input type="tel" class="form-control" id="contact-phone" name="phone" placeholder="Ex: 1231231234" onkeyup='validatePhone()'>
        <span class='error-message' id='phone-error'></span>
    </div>
    <div class="form-group">
        <label for="contact-email">Email address</label>
        <input type="email" class="form-control" id="contact-email" name="email" placeholder="Enter Email" onkeyup='validateEmail()'>
        <span class='error-message' id='email-error'></span>
    </div>   
    <div class="form-group">
        <label for='contactMessage'>Your Message</label>
        <textarea class="form-control" rows="5" id='contact-message'  name="message"  placeholder="Enter a brief message" onkeyup='validateMessage()'></textarea>
        <span class='error-message' id='message-error'></span>
    </div>
    <button type = "submit" class="btn" name= "submit" onclick='return validateForm()' >Send Message</button>
    <span class='error-message' id='submit-error'></span>
    <a class="btn" href="index.php" style="text-decoration: none; margin-left: 50px; padding: 5px">Home</a>

    <?php
if (isset($_POST['submit'])){
  echo $html;
  echo '<meta http-equiv="refresh" content="5; url=http://localhost/umlando/contact.php"/>';
  //header("Refresh: 4; URL=index.php");
  exit;
}

?>
    

    
</form>
  </div>

<?php
if (isset($_POST['submit'])){
  echo $html;
  echo '<meta http-equiv="refresh" content="5; url=http://localhost/umlando/index.php"/>';
  //header("Refresh: 4; URL=index.php");
  exit;
}

?>
</body>
</html>