<!doctype html>
<html lang="fr">
<title>The ArtBox</title>

<?php
    include 'header.php';
    include_once 'oeuvres.php';
?>

<body>
    <main>
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre): ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?= $oeuvre['id'] ?>">
                        <img src="<?= htmlspecialchars($oeuvre['image']) ?>" alt="<?= htmlspecialchars($oeuvre['alt']) ?>">
                        <h2><?= htmlspecialchars($oeuvre['titre']) ?></h2>
                        <p class="description"><?= htmlspecialchars($oeuvre['artiste']) ?></p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>

<?php include 'footer.php'; ?>