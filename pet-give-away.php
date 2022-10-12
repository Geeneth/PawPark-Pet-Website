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
    <title>Assignement 2 Question 4</title>
  </head>
  <body>
    <?php 
    //importing the header and side-bar
    include 'components/header.php';
    include 'components/side-bar.php';?>

    <!--Content Area-->
    <div class="content-area">
      <h1>Put your pet up for adoption</h1>
      
      <!--A message to tell the user to log in, if they have not already-->
      <div class="login-warning-container">
      <h2 id="login-warning" style="display: none;">You must <a href="login.php">log in</a> to view this page</h2>
      </div>

      <div class="content-page-text">
        <form id="add-pet-form" action="pet-give-away.php" method="post">
      
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
            <option disabled selected value>-- select an option --</option>
            <option value="mix-breed">Mix Breed</option>
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
            <option disabled selected value>-- select an option --</option>
            <option value="young">Young</option>
            <option value="adult">Adult</option>
            <option value="senior">Old</option>
          </select>
          <br /><br />

          <!--Gender of the pet-->
          <label for="pet-gender">Pet Gender:</label>
          <select name="pet-gender" id="pet-gender">
            <option disabled selected value>-- select an option --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <br /><br />

          <!--Friendliness of the pet-->
          <p>Does the pet get along with any of the following:</p>
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

          <!--Comment Area-->
          <p><label for="pet-extra-information">Tell us more about your pet:</label></p>
          <textarea id="pet-extra-information" name="pet-extra-information" rows="4" cols="50"></textarea>
          <br /><br/>

          <!--Owner's Details-->
          <label for="owner-first-name">Owner's First Name: </label>
            <input type="text" id="owner-first-name" name="owner-first-name" />
            <br /><br />
            <label for="owner-last-name">Owner's Last Name: </label>
            <input type="text" id="owner-last-name" name="owner-last-name" />
            <br /><br />
            <label for="owner-email">Owner's Email: </label>
            <input type="text" id="owner-email" name="owner-email" />
            <br />

          <br /><br />
          <input type="submit" value="Submit" class="submit-button" id="submit-btn" name="add-pet-submit"/>
          <input type="reset" value="Clear" class="reset-button"/>
        </form>
      </div>
    </div>

    <?php include 'components/footer.php'; //importing the footer?>
      <img
        src="images/bulldog.png"
        alt="Welcome Page Dog"
        width="500px"
        class="pet-footer-image"
      />
      
  </body>
  <script src="javascript/pet-give-away.js"></script>
  <script src="javascript/index.js"></script>
  <script>
    //these functions are used to display the form or hide it depending on whether the user is logged in or not
    function showForm() {
      document.getElementById("add-pet-form").style.display = "block";
    }
    function hideForm() {
      document.getElementById("add-pet-form").style.display = "none";
    }
  </script>
  <?php
  //if the user is logged in, display the form, otherwise hide it
  if (isset($_COOKIE['login'])) {
    echo '<script>showForm();</script>';
    include 'components/inner-pet-give-away.php';
  }
  else{
    echo '<script>document.getElementById("login-warning").style.display = "block";</script>';
    echo '<script>hideForm();</script>';
  }
  ?>

</html>