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
    <title>Disclaimer and Source</title>
  </head>
  <body>
  <?php 
    //importing the header and side-bar
    include 'components/header.php';
    include 'components/side-bar.php';?>

    <!--Content Area-->
    <div class="content-area">
      <h1>Privacy/Disclaimer Statement</h1>
      <p>
        This website is owned by Paw Park. The content of this website is for
        informational purposes only. The information collected by this website
        is not intended to be misused or sold. The website developer is not
        responsible for any damages caused by the use of this website.
      </p>
      <h1>Image Sources</h1>
      <p>
        All images used on the Paw Park website were taken from Canva. It is
        stated in the Canva Free Media License Agreement that "Attribution is
        not required" for images that fulfill certain criteria. The criteria on
        the agreement is met by the images used throughout the website
        and therefore, the images do not need to be cited.
      </p>
      <a
        href="https://www.canva.com/policies/free-media-license-agreement-2022-01-03/"
        target="_blank"
        >Canva Free Media License Agreement</a
      >
    </div>

    <?php
    //importing the footer
    include 'components/footer.php';?>
      <img
        src="images/disclaimer-dog.png"
        alt="Welcome Page Dog"
        width="500px"
        class="pet-footer-image"
      />
      
  </body>
  <script src="javascript/index.js"></script>
</html>