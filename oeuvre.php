<?php

include_once 'oeuvres.php';

// Récupérer l'ID de l'œuvre depuis l'URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
// echo "ID récupéré: " . $id; *** Ligne pour déboguer ***

// Rechercher l'œuvre par son ID
$oeuvreTrouvee = null;
foreach ($oeuvres as $oeuvre) {
    if ($oeuvre['id'] === $id) {
        $oeuvreTrouvee = $oeuvre;
        break;
    }
}

// Rediriger si l'œuvre n'est pas trouvée
if (!$oeuvreTrouvee) {
    echo "Aucune œuvre trouvée pour l'ID: " . $id . ". <a href='index.php'>Retour à l'accueil</a>";
    //header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'header.php'; ?>
<body>
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?= htmlspecialchars($oeuvreTrouvee['image']) ?>" alt="<?= htmlspecialchars($oeuvreTrouvee['alt']) ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?= htmlspecialchars($oeuvreTrouvee['titre']) ?></h1>
                <p class="description"><?= htmlspecialchars($oeuvreTrouvee['artiste']) ?></p>
                <p class="description-complete"><?= htmlspecialchars($oeuvreTrouvee['description']) ?></p>
            </div>
        </article>
    </main>
</body>
</html>

<?php include 'footer.php'; ?>