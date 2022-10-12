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
    <title>Dog Care</title>
  </head>
  <body>
  <?php 
    //importing the header and side-bar
    include 'components/header.php';
    include 'components/side-bar.php';?>

    <!--Content Area-->
    <div class="content-area">
      <h1>Dog Care</h1>
      <div class="content-page-text">
      <h3>Feeding</h3><p>Puppies eight to 12 weeks old need four meals a day. Feed puppies three to six months old three meals a day. Feed puppies six months to one year two meals a day. When your dog reaches his first birthday, one meal a day is usually enough.</p>
      <h3>Exercise</h3><p>Dogs need exercise to burn calories, stimulate their minds, and stay healthy. Exercise also tends to help dogs avoid boredom, which can lead to destructive behaviors. Supervised fun and games will satisfy many of your pet's instinctual urges to dig, herd, chew, retrieve and chase.</p>
      <h3>Medicines and Poisons</h3><p>Never give your dog medication that has not been prescribed by a veterinarian. If you suspect that your animal has ingested a poisonous substance, call your veterinarian.</p>
      <h4>For more information, visit the following links:</h4>
      <a href="https://www.aspca.org/pet-care/dog-care/general-dog-care" target="_blank" style="font-size:1.2rm;">ASPCA Genereal Dog Care</a>
        </div>
    </div>
    
    <?php
    //importing the footer
    include 'components/footer.php';?>
    
    <img
      src="images/pug.png"
      alt="Welcome Page Dog"
      width="500px"
      class="pet-footer-image"
      id="pug-footer"
    />
    
  </div>
  </body>
  <script src="javascript/index.js"></script>
</html>