<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acöhnme · Shymedhve</title>
    <meta property="og:title" content="Acöhnme - Le lecteur de fichiers moderne">
    <meta property="og:description" content="Découvrez ou redécouvrez notre bibliothèque de fichiers">
    <meta name="description" content="Découvrez ou redécouvrez notre bibliothèque de fichiers">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./reset.css">
</head>
<body>

    <div class="ui-controller">

        <?php require './component/menu-bar.html'; ?>

        <div class="ui-standard">
            <!-- <div class="new-box">
                <p class="title">Fichier le plus récent</p>
            </div> -->
            <div class="center"></div>
        </div>

        <div class="mask"></div>

        <?php require './component/settings.html'; ?>

    </div>

    <script src="./script.js"></script>
</body>
</html>