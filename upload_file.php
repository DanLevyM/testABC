<?php
require_once "layouts/header.php";

$target_dir = "uploads/";
$target_file = $target_dir . "export.csv";
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($fileType != "csv") {
    echo "Sorry, only CSV are allowed.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars(basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
    echo "Sorry, there was an error uploading your file.";
    }
}
?>

<a href="index.php" class="btn btn-primary">Go back Home</a>

<?php
require_once "layouts/footer.php";
