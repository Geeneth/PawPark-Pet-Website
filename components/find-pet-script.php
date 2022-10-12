<?php
if(isset($_POST["find-pet-form-submit"])){

    echo "<script>document.getElementById("find-pet-form").style.display = "none";</script>"
    echo "<script>document.getElementById("browseTable").style.display = "block";</script>"

    $pet_type = $_POST['pet-type'];
    $pet_breed = $_POST['pet-breed'];
    $pet_age = $_POST['pet-age'];
    $pet_gender = $_POST['pet-gender'];
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

    $myfile = fopen("data/pets.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
        $pet_data = explode(":", fgets($myfile));
        if $pet_type == $pet_data[0] && $pet_breed == $pet_data[1] && $pet_age == $pet_data[2] && $pet_gender == $pet_data[3] && $other_dogs == $pet_data[4] && $other_cats == $pet_data[5] && $small_children == $pet_data[6] {
            echo '<tr>';
            echo '<td class="petBrowse">' . $pet_type . '</td>';
            echo '<td class="petBrowse">' . $pet_breed . '</td>';
            echo '<td class="petBrowse">' . $pet_age . '</td>';
            echo '<td class="petBrowse">' . $pet_gender . '</td>';

            //Other dogs, cats, and children
            echo '<td class="petBrowse">';
            if ($other_dogs == "#") {
            }
            else {
                echo  . "Other Dogs" . ;
            }
            if ($other_cats == "#") {
            }
            else {
                echo  . "Other Cats" . ;
            }
            if ($small_children == "#") {
            }
            else {
                echo  . "Small Children" . ;
            }
            echo '</td>';

            echo '<td class="petBrowse">' . $pet_data[7] . '</td>';
            echo '<td class="petBrowse">' . $pet_data[8] . '</td>';
            echo '<td class="petBrowse">' . $pet_data[9] . '</td>';
            echo '<td class="petBrowse">' . $pet_data[10] . '</td>';
            echo '</tr>';
        }
    }
}
?>