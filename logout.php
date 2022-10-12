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
      <h1>You are logged in as <?php echo $_COOKIE['userName']?></h1>

    <div id="log-out-sign-up">
      <!--Log Out form-->
      <!--Log Out form needs confimration-->
      <p>Are you sure you want to log out?</p>
      <form class="content-page-text" method="get">
      <input
            type="radio"
            id="confirm-log-out"
            name="confirm-log-out"
            value="confirm-log-out"
          />
          <label for="confirm-log-out">Yes</label>
          <br/><br/>
          <input type="submit" value="Log Out" class="submit-button" name="log-out-submit"/>
        </form>
    </div>
    
        

    </div>

    <?php include 'components/footer.php'; //importing the footer?>
    <img
        src="images/find-pet.png"
        alt="Welcome Page Dog"
        width="25%"
        class="pet-footer-image"
      />
</body>
<script src="javascript/index.js"></script>

<!-- Implementing functionality -->
<script>
    function wrongPassword() {
        alert("Incorrect Password");
    }

    function wrongUsername() {
        alert("Username does not exist");
    }

    function loggedIn() {
        alert("You are logged in");
    }
	function loggedOut() {
        alert("You are logged out");
    }
</script>

<?php

if (isset($_GET['log-out-submit'])){
    if ($_GET['confirm-log-out'] == "confirm-log-out"){
        session_start();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        setcookie("login", "", time() - (86400 * 30), "/");
        setcookie("userName", "", time() - (86400 * 30), "/");
		echo "<script>loggedOut();</script>";
		echo "<script>window.location=('index.php');</script>";
    }
}
ob_end_flush();
?>



</html>