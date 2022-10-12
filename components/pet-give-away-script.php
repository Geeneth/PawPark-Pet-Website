<?php

$type = $_GET['pet-breed'];
echo $type;

if (isset($_GET["add-pet-submit"])){
    $pet_type = $_GET['pet-type'];
    $pet_breed = $_GET['pet-breed'];
    $pet_breed = $_GET['pet-age'];
    $pet_gender = $_GET['pet-gender'];
    //getting radio button values
    if(!empty($_GET['other-dogs'])){
        $other_dogs = $_GET['other-dogs'];
    }
    if(!empty($_GET['other-cats'])){
        $other_cats = $_GET['other-cats'];
    }
    if(!empty($_GET['small-children'])){
        $small_children = $_GET['small-children'];
    }
    
    $pet_extra_information = $_GET['pet-extra-information'];
    $owner_first_name = $_GET['owner-first-name'];
    $owner_last_name = $_GET['owner-last-name'];
    $owner_email = $_GET['owner-email'];
    $adding_pet = true;

    //put all the variables into a single string
    echo $pet_type
    $pet_details = ($pet_type . ":" . $pet_breed . ":" . $pet_gender . ":" . $other_dogs . ":" . $other_cats . ":" . $small_children . ":" . $pet_extra_information . ":" . $owner_first_name . ":" . $owner_last_name . ":" . $owner_email);
  }

//write new pet to textfile
if ($adding_pet){
    $file = fopen("data/pets.txt", "a+");
    fwrite($file, "\n" . $pet_details);
    fclose($file);
}

?>