<?php
//check if logged in
if(isset($_SESSION['logged_in'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
 <html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
var phone = document.getElementById('password').value;
if(phone.length == 0) {
producePrompt('Password cannot be left blank', 'password-error', 'red');
return false;
}
if(phone.length < 5 ) {
producePrompt('Password must be at least 5 digits', 'password-error', 'red');
return false;
}
producePrompt( 'Valid','password-error','green');
return true;
}
function validateForm() {
if (!validateName() && !validatePassword()) {
jsShow('submit-error');
producePrompt('Incorr', 'submit-error', 'red');
setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
}
else if (validateName() && !validatePassword()) {
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
}
else if(!validateName() && validatePassword()){
  jsShow('submit-error');
  producePrompt('Please fix errors to submit.', 'submit-error', 'red');
  setTimeout(function(){jsHide('submit-error');}, 2000);
return false;
 }
 else if(validateName() && validatePassword()){
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
    <h3>Wrong username or password</h3>
    <form action="Signin.php" method="POST" id= "formvalidation" class="form">

      <div class="form-group">
        <h1>Login</h1>
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username"   placeholder="Enter username.." onkeyup='validateName()'required>
        <span class='error-message' id='name-error'></span>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" onkeyup='validatePassword()'required>
        <span class='error-message' id='password-error'></span>
    </div>   
    <button type = "submit" class="btn" name= "submit">Login</button>
    <span class='error-message' id='submit-error'></span>
    <a class="btn" href="index.php" style="text-decoration: none; margin-left: 50px; padding: 5px">Home</a>
    
</form>
  </div>

</body>
</html>