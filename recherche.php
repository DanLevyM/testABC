<?php
require_once "layouts/header.php";
?>
<h1>Rechercher</h1>
<form action="research_result.php" method="POST">
    <div>
        <label for="first_name"></label>
        <input type="text" name="first_name" id="first_name" placeholder="Prénom">
    </div>
    <button type="submit" class="btn btn-primary">Rechercher</button>
</form>

<?php
require_once "layouts/footer.php";
?>