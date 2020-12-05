<?php
require_once "layouts/header.php";
require_once "functions/functions.php";

try {
    $pdo = new PDO("mysql:dbname=abcsalles;host=localhost", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$criteria = $_POST['first_name'];

$query = $pdo->query("SELECT * FROM ref_prenoms WHERE label LIKE '$criteria%'");
if ($query === false)
{
    var_dumb($pdo->errorInfo());
    die('Erreur sql');
}

$nameResults = $query->fetchAll();
?>


<?php if (count($nameResults) == 0): ?>
    <h2>Aucun résultat !</h2>
<?php else: ?>
    <h2>Resultat de votre recherche : </h2>
    <?php foreach ($nameResults as $nameResult): ?>
        <div>
            <?php if ($nameResult['genre'] == 1): ?>
                <h5 style="background-color: #7FFFD4;"><?= $nameResult['label'] . ' ' . showType($nameResult['type']) . ' ' . showGenre($nameResult['genre']) . ' ' . $nameResult['origin']?></h3>
            <?php else: ?>
                <h5 style="background-color: pink;"><?= $nameResult['label'] . ' ' . showType($nameResult['type']) . ' ' . showGenre($nameResult['genre']) . ' ' . $nameResult['origin']?></h3>

            <?php endif; ?>
        </div>
    <?php endforeach ?>
    <h2><?= count($nameResults) ?> personnes trouvés</h2>
<?php endif; ?>

<?php
require_once "layouts/footer.php";
?>