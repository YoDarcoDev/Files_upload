<?php

for ($i = 0; $i < count($_FILES['files']); $i++) {
    $name =  $_FILES['files']['name'][$i];
    $repertoire = "tmp_ged_files/ " . $name;

    move_uploaded_file($_FILES['files']['tmp_name'][$i], $repertoire);
}

echo "<pre>";
var_dump($_FILES);
echo "</pre>";
