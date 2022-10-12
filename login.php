<?php 
	ob_start(); ?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <title>Document</title>
</head>

<body>
    <?php 
	
    //importing the header and side-bar
    include 'components/header.php';
    include 'components/side-bar.php';?>
     

     <!--Content Area-->
    <div class="content-area">
      <h1>Login to Paw Park</h1>

    <div id="login-sign-up">
      <!--Login form-->
      <form class="content-page-text" method="get">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" />
          <br/><br/>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password"/>
          <br/><br/><br/>
          <input type="submit" value="Login" class="submit-button" name="login-submit" onclick="return validate()"/>
        </form>

        <br/><br/>
        <!--Sign up form-->
        <p class="content-page-text">Don't have an account? <a href="sign-up.php">Sign up</a></p>
    </div>
    
        

    </div>

    <?php include 'components/footer.php'; //importing the footer?>
    <img
        src="images/find-pet.png"
        alt="Welcome Page Dog"
        width="500px"
        class="pet-footer-image"
      />
</body>
<script src="javascript/index.js"></script>

<!-- Implementing functionality -->
<script>

function validate(){
	let username = document.getElementById ("username").value;
	let password = document.getElementById ("password").value;
	let usernamePattern = /^([a-zA-Z0-9]*)$/;
	let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;
let error = [];
let usernameValid = usernamePattern.test(username);
let passwordValid = passwordPattern.test(password);
if (!usernameValid || !passwordValid){

alert("Username or Password is in an incorrect format");
return false;
}
return true;
}

    function wrongPassword() {
        alert("Incorrect Password");
    }

    function wrongUsername() {
        alert("Username does not exist");
    }

    function loggedIn() {
        alert("You are logged in");
    }
</script>

<?php
include 'components/login-script.php';
ob_end_flush();
?>



</html>