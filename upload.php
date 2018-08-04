<?php

class upload{

//$file 

public $error;

function uploadfile($file){
 

$file_name=$file;
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES[$file_name]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES[$file_name]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $this->error="Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES[$file_name]["size"] > 200000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $this->error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $this->error="Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES[$file_name]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES[$file_name]["name"]). " has been uploaded.";
    } else {
        $this->error= "Sorry, there was an error uploading your file.";
    }
}
return $target_file;
}
}

?>