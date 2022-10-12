<?php

$adding_pet = false;
$other_dogs = "";
$other_cats = "";
$small_children = "";

//check if the user clicked the submit button
if (isset($_POST["add-pet-submit"])){
	if(empty($_POST['pet-type'])||empty($_POST['pet-breed'])||empty($_POST['pet-age'])||empty($_POST['pet-gender'])){
		
	}
	else{
    $pet_type = $_POST['pet-type'];
    $pet_breed = $_POST['pet-breed'];
    $pet_age = $_POST['pet-age'];
    $pet_gender = $_POST['pet-gender'];
    //getting radio button values
    if(!empty($_POST['other-dogs'])){
        $other_dogs = $_POST['other-dogs'];
    }
    else{
        $other_dogs = "#";
    }
    if(!empty($_POST['other-cats'])){
        $other_cats = $_POST['other-cats'];
    }
    else{
        $other_cats = "#";
    }
    if(!empty($_POST['small-children'])){
        $small_children = $_POST['small-children'];
    }
    else{
        $small_children = "#";
    }
    
    $pet_extra_information = $_POST['pet-extra-information'];
    $owner_first_name = $_POST['owner-first-name'];
    $owner_last_name = $_POST['owner-last-name'];
    $owner_email = $_POST['owner-email'];
    $adding_pet = true;

    //put all the variables into a single string
    $pet_details = $pet_type . ":" . $pet_breed . ":" . $pet_age . ":" . $pet_gender . ":" . $other_dogs . ":" . $other_cats . ":" . $small_children . ":" . $pet_extra_information . ":" . $owner_first_name . ":" . $owner_last_name . ":" . $owner_email;
  }

//write new pet to textfile
if ($adding_pet){
    $file = fopen("data/pets.txt", "a+");
    fwrite($file, "\n" . $pet_details);
    fclose($file);
	echo "<script>alert('Pet Successfully added to database.');</script>";
}
}
?>