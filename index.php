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
    <title>Home Page</title>
  </head>
  <body>
    <?php 
    //importing the header and side-bar
    include 'components/header.php';
    include 'components/side-bar.php';?>

    <!--Content Area-->
    <div class="content-area">
      <h1>Welcome to Paw Park</h1>

      <!--Decription of the website-->
      <p class="content-page-text">
        Paw Park is a pet adoption website that allows users to find and adopt
        pets. We also take care of any pets that current owners want to put up
        for adoption. We believe in hosting a safe environment for all the
        animals we house and make sure that the customers that adopt them will
        treat them like family.
      </p>
      <p class="content-page-text">
        We have provided a few major points for taking care of a dog or a cat as
        it is a huge responsiblility to own an animal. We want to ensure that
        our customers have the necessary resources to know how to take care of
        their pets and make sure they live a long and happy life.
      </p>
      <p class="content-page-text">
        We hope you enjoy your time on the website and we look forward to seeing
        you pick one of our beautiful pets to adopt.
      </p>
    </div>

    <?php include 'components/footer.php'; //importing the footer?>
    <img
        src="images/welcome-page-dog.png"
        alt="Welcome Page Dog"
        width="500px"
        class="pet-footer-image"
      />
    
  </body>
  <script src="javascript/index.js"></script>
</html>