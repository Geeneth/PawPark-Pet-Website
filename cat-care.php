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
    <title>Cat Care</title>
  </head>
  <body>
  <?php 
    //importing the header and side-bar
    include 'components/header.php';
    include 'components/side-bar.php';?>

    <!--Content Area-->
    <div class="content-area">
      <h1>Cat Care</h1>
      <div class="content-page-text">
        <h3>Feeding</h3>
        <p>
          Cats require taurine, an essential amino acid, for heart and eye
          health. You will need to provide fresh, clean water at all times, and
          wash and refill your cat’s water bowls daily. Treats should be no more
          than 5-10% of the diet. Take your pet to your veterinarian if signs of
          anorexia, diarrhea, vomiting or lethargy continue for more than two
          days.
        </p>
        <h3>Litter Box</h3>
        <p>
          DAll indoor cats need a litter box, which should be placed in a quiet,
          accessible location. In a multi-level home, one box per floor is
          recommended. Avoid moving the box unless absolutely necessary, but if
          you must do so, move the box just a few inches per day.
        </p>
        <h3>Medicines and Poisons</h3>
        <p>
          Never give your cat medication that has not been prescribed by a
          veterinarian. If you suspect that your animal has ingested a poisonous
          substance, call your veterinarian.
        </p>
        <h4>For more information, visit the following links:</h4>
        <a
          href="https://www.aspca.org/pet-care/cat-care/general-cat-care"
          target="_blank"
          >ASPCA Genereal Cat Care</a
        >
      </div>
    </div>

    <?php
    //importing the footer
    include 'components/footer.php';?>
      <img
        src="images/cat.png"
        alt="Welcome Page Dog"
        width="500px"
        class="pet-footer-image"
        id="cat-footer"
      />
      
  </body>
  <script src="javascript/index.js"></script>
</html>