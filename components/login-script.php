<?php
ob_start();
//checking if the user has clicked the submit button on the log in page
if (isset($_GET['login-submit'])) {
    $username = $_GET['username'];
$password = $_GET['password'];

    //opening the text file of users
    $myfile = fopen("data/login.txt", "r") or die("Unable to open file!");

    //checking if the username and password match the ones in the text file
    if (empty($_GET['username'])) {
        exit;
     }
    $found = false;
    $new_user = ""; 
    $line = "";
    while(!feof($myfile)) {
        $line = fgets($myfile);
		$exploded_line = (explode(":",$line));
        if ($exploded_line[0] === $username) {
            $found = true;
            break;
        }
        else {
           
        }

    }

    if ($found) {
        //checking if the password matches the one in the text file
        if (trim(explode(":",$line)[1]) == $_GET['password']) {
            echo '<script type="text/javascript">loggedIn();</script>';
            //setting the cookies for the logged in user
            setcookie("login", "true", time() + (86400 * 30), "/");
            setcookie("userName", $username, time() + (86400 * 30), "/");
            //setting the session variable to the username
            session_start();
            $_SESSION['userName'] = $username;
            //redirecting the user to the home page
            echo "<script>window.location=('index.php');</script>";
        }
        else {
            echo '<script type="text/javascript">wrongPassword();</script>';
        }
    }
    else {
        echo '<script type="text/javascript">wrongUsername();</script>';
    }

    fclose($myfile);
    
}
ob_end_flush();
?>