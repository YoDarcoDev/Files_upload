<?php

// var_dump($_FILES['files']);

for ($i = 1; $i < count($_FILES['files']['name']); $i++) {
    $name =  $_FILES['files']['name'][$i-1];
    $repertoire = "tmp_ged_files/ " . $name;

    move_uploaded_file($_FILES['files']['tmp_name'][$i], $repertoire);
}

// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>";
