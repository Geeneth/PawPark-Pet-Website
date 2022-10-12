<?php
ob_start();
?>

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
      <h1>Sign Up to Paw Park</h1>

      <!--Sign Up form-->
      <form class="content-page-text" method='get'>
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" />
          <br/><br/>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password"/>
          <br/><br/><br/>
          <input type="submit" value="Sign Up" class="submit-button" name="new-user-submit" onclick="return validate()"/>
        </form>
        
    </div>

    <?php include 'components/footer.php'; //importing the footer?>
	<img
        src="images/sign-up-dog.png"
        alt="Welcome Page Dog"
        width="400px"
        class="pet-footer-image"
      />
</body>
<script src="javascript/index.js"></script>
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

    function newUserCreated() {
        alert("New user created");
    }
</script>
<?php
//create a new user
if (isset($_GET['new-user-submit'])) {
	if ((!empty($_GET['username'])) && (!empty($_GET['password']))){
		$username = $_GET['username'];
$password = $_GET['password'];
//write new user to textfile
$file = fopen("data/login.txt", "a");
fwrite($file, "\n" . $username . ":" . $password);
echo '<script type="text/javascript">newUserCreated();</script>';
fclose($file);
echo "<script>window.location=('login.php');</script>";
}
else{
	echo "<script>alert('Please fill out all the fields');</script>";
}
	}


ob_end_flush();
?>
</html>