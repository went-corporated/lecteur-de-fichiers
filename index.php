<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acöhnme · Shymedhve</title>
    <?php require './component/open-graph.html'; ?>
    <meta property="og:title" content="Acöhnme - Le lecteur de fichiers moderne">
    <meta property="og:image" content="https://play-lh.googleusercontent.com/7hAq25yPmjdVuPeEpC8DQnHGsgo-BuNXhRVlSt0IYOXpKj8puu0PCDFsZHlJWkdN8kU">
    <meta property="og:description" content="Découvrez ou redécouvrez notre bibliothèque de fichiers">
    <meta name="description" content="Découvrez ou redécouvrez notre bibliothèque de fichiers.">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./reset.css">
</head>
<body>

    <div class="ui-controller">

        <?php require './component/menu-bar.html'; ?>

        <div class="ui-standard">

            <div class="new-box">
                <p class="title">Nouveau paramètre !</p>
                <p class="content">
                    Un paramètre vient d'être codé : désactiver les ombres. Il est cependant inutile.🙃
                </p>
                <div class="btn" onclick="openSettingsModal();">Ouvrir les paramètres</div>
            </div>

            <!-- <div class="new-box">
                <p class="title">Événement : le Conseil Général de la C.R.R.D.</p>
                <p class="content">
                    Assistez à l'événement de la semaine prochaine, le Conseil Général de la C.R.R.D., qui se tiendra sur le serveur Coral
                    de NationsGlory aux coordonnées suivantes : 3546 ; -1556. Si vous le ratez, vous pourrez toutefois lire le compte-rendu qui
                    sera publié quelques jours après l'événement.
                </p>
                <div class="btn" onclick="location.href = './page/crrd-wall.php';">Page de l'événement</div>
            </div> -->

            <div class="center"></div>

        </div>

        <div class="mask"></div>

        <?php require './component/settings.html'; ?>

    </div>

    <script src="./script.js"></script>
    <script>
        indexPhpPath = './index.php';
        crrdwallPhpPath = './page/crrd-wall.php';
        polsenbPhpPath = './page/polsenb.php';
    </script>
</body>
</html>