<?php
$other_dogs = "";
$other_cats = "";
$small_children = "";

//checking if the form has been submitted
if(isset($_GET["find-pet-form-submit"])){
    echo '<script>hideForm();</script>';
    echo '<script>setTitleBrowse();</script>';
    $pet_type = $_GET['pet-type'];
    $pet_breed = $_GET['pet-breed'];
    $pet_age = $_GET['pet-age'];
    $pet_gender = $_GET['pet-gender'];
    //getting radio button values
    if(!empty($_GET['other-dogs'])){
        $other_dogs = $_GET['other-dogs'];
    }
    else{
        $other_dogs = "#";
    }
    if(!empty($_GET['other-cats'])){
        $other_cats = $_GET['other-cats'];
    }
    else{
        $other_cats = "#";
    }
    if(!empty($_GET['small-children'])){
        $small_children = $_GET['small-children'];
    }
    else{
        $small_children = "#";
    }

    //opening the text file of pets and creating a new file (erasing any existing data) to use to filter the pets
    $petsFile = fopen("data/pets.txt", "r") or die("Unable to open file!");
    $file = fopen("data/filter-pets.txt", "w") or die("Unable to open file!");
    fclose($file);

    //filtering the pets based on the user's input
    while(!feof($petsFile)) {
        //getting each line of text from the 'pets' text file
        //and splitting it into an array of strings
        //each string is a piece of data from the line
        //we compare the data to the user's input on the form to see if it matches the data in the line
        $line = fgets($petsFile);
                 $pet_data = explode(":", $line);
                 
                 //if they have selected the "Doesn't matter" option, then we don't need to filter by that option
                 if (($other_cats == "#") && ($other_dogs == "#") && ($small_children == "#")){
                    if ($pet_type == $pet_data[0] && (($pet_breed == $pet_data[1])|| $pet_breed == "any") && (($pet_age == $pet_data[2])|| $pet_age == "any") && (($pet_gender == $pet_data[3])|| $pet_gender == "any")) {
                        //if the pet matches the user's input, then we write it to the new file
                        $file = fopen("data/filter-pets.txt", "a") or die("Unable to open file!");
                           fwrite($file, $line);
                        fclose($file);
                    }
                 }
                 
                 elseif ($pet_type == $pet_data[0] && (($pet_breed == $pet_data[1])|| $pet_breed == "any") && (($pet_age == $pet_data[2])|| $pet_age == "any") && (($pet_gender == $pet_data[3])|| $pet_gender == "any") && $other_dogs == $pet_data[4] && $other_cats == $pet_data[5] && $small_children == $pet_data[6]) {
                    //if the pet matches the user's input, then we write it to the new file
                     $file = fopen("data/filter-pets.txt", "a") or die("Unable to open file!");
                        fwrite($file, $line);
                     fclose($file);
                 }
            }
            fclose($petsFile);

            //creating a table of the filtered pets
            echo '<table id="browseTable">';
            echo "<tr><td><h3>Type</h3></td><td><h3>Breed</h3></td><td><h3>Age</h3></td><td><h3>Gender</h3></td><td><h3>Gets Along With</h3></td><td><h3>Comments</h3></td><td><h3>Owner</h3></td><td><h3>Interested</h3></td></tr>";
            $file = fopen("data/filter-pets.txt", "r") or die("Unable to open file!");
            while(!feof($file)) {
                $line = fgets($file);
                if ($line == ""){

                }
                else{
                    $pet_data = explode(":", $line);
                echo "<tr><td>" . $pet_data[0] . "</td><td>" . $pet_data[1] . "</td><td>" . $pet_data[2] . "</td><td>" . $pet_data[3] . "</td>";
                echo "<td>";
                if ($pet_data[4] == "#") {
                }
                else {
                    echo "$pet_data[4]<br/>";
                }
                if ($pet_data[5] == "#") {
                }
                else {
                    echo "$pet_data[5]<br/>";
                }
                if ($pet_data[6] == "#") {
                }
                else {
                    echo "$pet_data[6]<br/>";
                }
                echo "</td>";
                echo "<td>$pet_data[7]</td><td>$pet_data[8] $pet_data[9]<br/>$pet_data[10]</td>";
                echo "<td class='petBrowse'><button class='submit-button'>Interested</button></td></tr>";
                }
                
                
            }
            echo "</table>";

}


?>