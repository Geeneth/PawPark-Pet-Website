<!--Geeneth Kulatunge-->
<!--40195350-->
<!--Assignment 2 Question 4-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="index.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find A Pet</title>
  </head>
  <body>
  <?php 
    //importing the header and side-bar
    include 'components/header.php';
    include 'components/side-bar.php';?>

    <!--Content Area-->
    <div class="content-area">
      <h1 id="page-title">Find a pet!</h1>
      <div class="login-warning-container">
      <h2 id="login-warning" style="display: none">You must <a href="login.php">log in</a> to view this page</h2>
</div>

      <div class="content-page-text">
        <form id="find-pet-form" action="find-pet.php" method="get" style="display: none">
          <!--Type of the pet-->
          <label for="pet-type">Pet Type:</label>
          <select name="pet-type" id="pet-type">
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
          </select>
          <br /><br />

          <!--Breed of the pet-->
          <label for="pet-breed">Pet Breed:</label>
          <select name="pet-breed" id="pet-breed">
            <option value="any">Doesn't Matter</option>
            <option value="labrador">Labrador</option>
            <option value="poodle">Poodle</option>
            <option value="pug">Pug</option>
            <option value="pomeranian">Pomeranian</option>
            <option value="pomeranian">Persian</option>
          </select>
          <br /><br />

          <!--Age of the pet-->
          <label for="pet-age">Pet Age:</label>
          <select name="pet-age" id="pet-age">
            <option value="any">Doesn't Matter</option>
            <option value="young">Young</option>
            <option value="adult">Adult</option>
            <option value="senior">Old</option>
          </select>
          <br /><br />

          <!--Gender of the pet-->
          <label for="pet-gender">Pet Gender:</label>
          <select name="pet-gender" id="pet-gender">
            <option value="any">Doesn't Matter</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <br /><br />

          <!--Friendliness of the pet-->
          <p>Does the pet need to get along with any of the following:</p>
          <input
            type="radio"
            id="other-dogs"
            name="other-dogs"
            value="other-dogs"
          />
          <label for="other-dogs">Other Dogs</label>
          <input
            type="radio"
            id="other-cats"
            name="other-cats"
            value="other-cats"
          />
          <label for="other-cats">Other Cats</label>
          <input
            type="radio"
            id="small-children"
            name="small-children"
            value="small-children"
          />
          <label for="small-children">Small Children</label>
          <br /><br />

          <br /><br />
          <input type="submit" value="Submit" name="find-pet-form-submit" class="submit-button"/>
          <input type="reset" value="Clear" class="reset-button"/>
        </form>
        
        <!--Testing positon of csripts-->
    <script src="javascript/find-pet.js"></script>
  <script src="javascript/index.js"></script>
  <script>
    function showForm() {
      document.getElementById("find-pet-form").style.display = "block";
    }
    function hideForm() {
      document.getElementById("find-pet-form").style.display = "none";
    }
    function setTitleBrowse() {
      document.getElementById("page-title").textContent = "Browse Pets";
    }
  </script>

  <?php
  include 'components/login-script.php';
  if (isset($_COOKIE['login'])) {
    echo '<script>showForm();</script>';
    // include 'components/find-pet-script.php';
    include 'components/find-pet-script-2.php';
  }
  else{
    echo '<script>document.getElementById("login-warning").style.display = "block";</script>';
  }
  ?>

      </div>
    </div>


    

    <?php include 'components/footer.php'; //importing the footer ?>
    <img
        src="images/browse-dog.png"
        alt="Welcome Page Dog"
        width="200px"
        class="pet-footer-image"
      />
  </body>
  
</html>