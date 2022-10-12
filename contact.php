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
    <title>Contact Us</title>
  </head>
  <body>
  <?php 
    //importing the header and side-bar
    include 'components/header.php';
    include 'components/side-bar.php';?>

    <!--Content Area-->
    <div class="content-area">
      <h1>Contact Us</h1>
      <div class="content-page-text">
        <p>Name: <p class="personal-details">Geeneth Kulatunge</p></p>
        <p>Student ID: <p class="personal-details">40195350</p></p>
        <p>Email: <p class="personal-details">kulatungegeeneth@gmail.com</p></p>
      </div>
    </div>
    
    <?php
    //importing the footer
    include 'components/footer.php';?>
    <img
      src="images/contact-cat.png"
      alt="Welcome Page Dog"
      width="500px"
      class="pet-footer-image"
    />
    
  </body>
  <script src="javascript/index.js"></script>
</html>