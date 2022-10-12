<link rel="stylesheet" href="../index.css" />
<div id="header">
        <table class="header-table">
          <tr>
            <td>
              <!--Making sure the image links to the home page-->
              <a href="index.php">
                <img
                  src="images/Paw Park.png"
                  alt="Paw Park Logo"
                  width="50px"
                  class="name-header"
                />
              </a>
            </td>
            <td>
              <h1 class="name-header">Paw Park</h1>
            </td>
          </tr>
        </table>
        <!--a header that will be converted to the real time date-->
        <h3 id="date">Date Loading...</h3>
        <a href="login.php" class="submit-button" id="account-button">Log In</a>
  </div>
  <script>
    //This is the script that will be used to update the account button
    function setLogOutText() {
        document.getElementById("account-button").textContent = "Log Out";
    }
</script>
  <?php
  //if a user has logged in, then the account button will be set to log out
  if (isset($_COOKIE['login'])){
    echo '<script>setLogOutText();</script>';
    echo '<script>document.getElementById("account-button").href = "logout.php";</script>';
  }

  ?>