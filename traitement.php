<?php
require_once "layouts/header.php";
?>
<h1>Importer un fichier</h1>
<form action="upload_file.php" method="post" enctype="multipart/form-data">
    Select a file to upload (CSV):
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
require_once "layouts/footer.php";
?>