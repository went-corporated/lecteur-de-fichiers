<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GURK · Shymedhve</title>
    <!-- <?php require '../component/open-graph.html'; ?> -->
    <meta property="og:url" content="https://stage3.abeille.com/shymedhve/page/crrd-wall.php">
    <meta property="og:image" content="https://stage3.abeille.com/shymedhve/img/crrd-go.jpg">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Shymedhve - Lecteur de fichiers">
    <meta name="author" content="kct">
    <meta property="og:title" content="Le Mur de la C.R.R.D. - Toutes les infos clés">
    <meta property="og:description" content="« La Coopération Révolutionnaire pour une République Démocratique régit les sans-pays qui ont adhérés et leur fournit des espaces alloués à l'exploitation agricole, des outils, des armes et au final une liberté totale. »">
    <meta name="description" content="« La Coopération Révolutionnaire pour une République Démocratique régit les sans-pays qui ont adhérés et leur fournit des espaces alloués à l'exploitation agricole, des outils, des armes et au final une liberté totale. »">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../reset.css">
</head>
<body>

    <div class="ui-controller">

        <?php require '../component/menu-bar.html'; ?>

        <div class="ui-standard">

            <div id="crrdBioBox" class="bio-box" style="height: max-content;">
                <div class="pdp"></div>
                <div class="badge-container">
                    <div class="badge darkbadge">😎 Certifiée</div>
                    <div class="badge darkbadge">👍 Utile</div>
                </div>
                <div id="crrdTextContainer" class="text-container" style="height: max-content; margin-top: -165px;">
                    <p class="name">GURK</p>
                    <p class="autobiography">
                        La Coopération Révolutionnaire pour une République Démocratique régit les sans-pays qui ont adhérés
                        et leur fournit des espaces alloués à l'exploitation agricole, des outils, des armes et au final une
                        liberté totale.
                        En outre, la démocratie et le débat sont les principales raisons pour lesquelles la C.R.R.D. a un avenir
                        prospère.
                        En effet, il se tient régulièrement des réunions accessibles à tous et les libertés individuelles
                        de chaque coopérant de l'O.N.G. ne sont pas réprimées.
                    </p>
                </div>
                <!--<div id="ok" class="btn" onclick="displayBiography(this, 'crrdTextContainer', 'crrdBioBox');">Afficher la biographie</div>-->
            </div>

            <div class="new-box">
                <p class="title">Points de participation</p>
                <p class="content">
                    Assistez à l'événement <span class="bared">de la semaine prochaine</span>, le Conseil Général de la C.R.R.D., qui se tiendra sur le serveur Coral
                    de NationsGlory aux coordonnées suivantes : 3546 ; -1556. Si vous le ratez, vous pourrez toutefois lire le compte-rendu qui
                    sera publié quelques jours après l'événement.
                </p>
            </div>

            <div class="modernbox-container">

                <div class="modern-box" style="margin-left: 50px;">
                    <img src="../img/timera.png">
                    <p id="remaining-time-conseil-général-crrd" class="big"></p>
                    <!-- <p class="big" style="color: red;">Reporté</p> -->
                </div>

                <div class="modern-box">
                    <img src="../img/world.png">
                    <p class="big">worürynejanshe</p>
                </div>

            </div>

            <div class="center"></div>

        </div>

        <div class="mask"></div>

        <?php require '../component/settings.html'; ?>

    </div>

    <script src="../script.js"></script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Mar 17, 2022 0:0:0").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        days = days + "d ";
        if (days === "0d "){
            days = "";
        }
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        hours = hours + "h ";
        if (hours === "0h "){
            hours = "";
        }
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        minutes = minutes + "m ";
        if (minutes === "0m "){
            minutes = "";
        }
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("remaining-time-conseil-général-crrd").innerHTML = days + hours + minutes + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("remaining-time-conseil-général-crrd").innerHTML = "Le Conseil a commencé";
        }
        }, 1000);
    </script>
</body>
</html>