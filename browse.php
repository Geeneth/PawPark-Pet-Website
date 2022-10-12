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
    <title>Browse</title>
  </head>
  <body>
  <?php 
    //importing the header and side-bar
    include 'components/header.php';
    include 'components/side-bar.php';?>

    <!--Content Area-->
    <div class="content-area">
      <table id="browseTable">
        <tr>
          <td><h3>Image</h3></td>
          <td><h3>Type</h3></td>
          <td><h3>Breed</h3></td>
          <td><h3>Age</h3></td>
          <td><h3>Gender</h3></td>
          <td><h3>Gets Along With</h3></td>
          <td><h3>Owner</h3></td>
          <td><h3>Interested</h3></td>
        </tr>
        <tr>
          <td class="petBrowse">
            <img
              class="petBrowseImage"
              src="images/browse-images/emma.png"
              width="150px"
              height="150px"
            />
          </td>
          <td class="petBrowse">Dog</td>
          <td class="petBrowse">German Shepard</td>
          <td class="petBrowse">Young</td>
          <td class="petBrowse">Female</td>
          <td class="petBrowse">Dogs</td>
          <td class="petBrowse">Conner McGregor<br/>connermcgregor@gmail.com</td>
          <td class="petBrowse"><button class="submit-button">Interested</button></td>
        </tr>
        <tr>
          <td class="petBrowse">
            <img
              class="petBrowseImage"
              src="images/browse-images/edgar.png"
              width="150px"
              height="150px"
            />
          </td>
          <td class="petBrowse">Dog</td>
          <td class="petBrowse">Pug</td>
          <td class="petBrowse">Old</td>
          <td class="petBrowse">Male</td>
          <td class="petBrowse">Small Children<br/><br/>Dogs</td>
          <td class="petBrowse">Anthony Stark<br/>ironman1978@gmail.com</td>
          <td class="petBrowse"><button class="submit-button">Interested</button></td>
        </tr>
        <tr>
          <td class="petBrowse">
            <img
              class="petBrowseImage"
              src="images/browse-images/garfield.png"
              width="150px"
              height="150px"
            />
          </td>
          <td class="petBrowse">Cat</td>
          <td class="petBrowse">Persian</td>
          <td class="petBrowse">Old</td>
          <td class="petBrowse">Male</td>
          <td class="petBrowse">Small Children<br/><br/>Cats</td>
          <td class="petBrowse">Jon Jones<br/>jonbones@yahoo.com</td>
          <td class="petBrowse"><button class="submit-button">Interested</button></td>
        </tr>
        <tr>
          <td class="petBrowse">
            <img
              class="petBrowseImage"
              src="images/browse-images/erica.png"
              width="150px"
              height="150px"
            />
          </td>
          <td class="petBrowse">Cat</td>
          <td class="petBrowse">American ShortHair</td>
          <td class="petBrowse">Young</td>
          <td class="petBrowse">Female</td>
          <td class="petBrowse">Small Children<br/><br/>Cats<br/><br/>Dogs</td>
          <td class="petBrowse">Steve Rogers<br/>steve.rogers.real@outlook.com</td>
          <td class="petBrowse"><button class="submit-button">Interested</button></td>
        </tr>
      </table>
      
    </div>

    <?php
    //importing the footer
    include 'components/footer.php';?>
    
      <img
        src="images/browse-dog.png"
        alt="Welcome Page Dog"
        width="500px"
        class="pet-footer-image"
        id="browse-dog"
      />
      
  </body>
  <script src="javascript/index.js"></script>
</html>
