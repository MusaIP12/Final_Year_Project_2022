<?php 
include "main.php";
$object = Singleton::getInstance();
$conn = $object->startDB("userregistration");
if (isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["email"])){
$name=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];

$object->insertIntoTableContact($conn, $name, $phone, $email);

if (isset($_POST['submit'])){
  header("location: Registration.php");
  exit;
}
}
/*
$conn = mysqli_connect('localhost', 'root', '', 'userregistration') 
 or die('Error connecting to MySQL server.'); 
 $query = "INSERT  INTO Signup(name, phone, email) VALUES('$name','$phone','$email')"; 
 $result = mysqli_query($conn, $query) 
 or die('Error querying database.'); 
 if (isset($_POST['submit'])){
     header("Location: Registration.php");
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
  <title>Signup</title>
  <link rel="stylesheet" href="Accformstyle.css" media="all">
  <script type="text/javascript">
        function validateName() {
var name = document.getElementById('username').value;
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
function validatePassword() {
var pass = document.getElementById('password').value;
if(pass.length == 0) {
producePrompt('Password cannot be left blank', 'password-error', 'red');
return false;
}
if(pass.length < 5 ) {
producePrompt('Password must be at least 5 digits', 'password-error', 'red');
return false;
}

producePrompt( 'Valid','password-error','green');
return true;
}
function validateEmail () {
var email = document.getElementById('email').value;
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
function validateForm() {
if (!validateName() && !validatePassword() && !validateEmail()) {
jsShow('submit-error');
producePrompt('Incorr', 'submit-error', 'red');
setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
}
else if (validateName() && !validatePassword() && !validateEmail()) {
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
}
else if(validateName() && validatePhone() && !validateEmail()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(validateName() && validatePassword() && validateEmail()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(validateName() && !validatePassword() && validateEmail() ){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(!validateName() && validatePassword() && !validateEmail()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(!validateName() && validatePassword() && validateEmail()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(!validateName() && !validatePassword() && validateEmail()){
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
    <form action="Registration.php" method="POST" id= "formvalidation" class="form">

      <div class="form-group">
        <h1>Username already exists</h1>
        <h1>Create Account</h1>
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username"   placeholder="Enter username.." onkeyup='validateName()'required>
        <span class='error-message' id='name-error'></span>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" onkeyup='validatePassword()'required>
        <span class='error-message' id='password-error'></span>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" onkeyup='validateEmail()'required>
        <span class='error-message' id='email-error'></span>
    </div>   
    <button type = "submit" class="btn" name= "submit" onclick='return validateForm()' >Create</button>
    <span class='error-message' id='submit-error'></span>
</form>
  </div>

</body>
</html>