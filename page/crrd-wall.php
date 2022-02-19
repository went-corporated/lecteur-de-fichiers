<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mur de la C.R.R.D. · Shymedhve</title>
    <!-- <?php require '../component/open-graph.html'; ?> -->
    <meta property="og:url" content="https://stage3.abeille.com/shymedhve">
    <meta property="og:image" content="https://www.google.com/url?sa=i&url=https%3A%2F%2Fec.europa.eu%2Fjrc%2Fen%2Fscience-update%2Fhigh-growth-enterprises-can-speed-economic-recovery&psig=AOvVaw3oErktcozHF2oBJAuBqIrB&ust=1644576932842000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCMjUh9L89PUCFQAAAAAdAAAAABAE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Shymedhve - Lecteur de fichiers">
    <meta name="author" content="kct">
    <meta property="og:title" content="POLSÉNB - La stratégie de l'économie ultime">
    <meta property="og:description" content="« Pour lancer l'économie de la Nouvelle Birmanie, le gouvernement Birman propose deux activités lucratives dont la construction d'infrastructures et l'exploitation de champs. La première activité débouchera sur des notations, cependant nous ne détaillerons que la seconde activité, l'agriculture. »">
    <meta name="description" content="« Pour lancer l'économie de la Nouvelle Birmanie, le gouvernement Birman propose deux activités lucratives dont la construction d'infrastructures et l'exploitation de champs. La première activité débouchera sur des notations, cependant nous ne détaillerons que la seconde activité, l'agriculture. »">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../reset.css">
</head>
<body>

    <div class="ui-controller">

        <?php require '../component/menu-bar.html'; ?>

        <div class="ui-standard">
            <div class="new-box">
                <p class="title">Le Conseil Général</p>
                <p class="content">
                    Assistez à l'événement de la semaine prochaine, le Conseil Général de la C.R.R.D., qui se tiendra sur le serveur Coral
                    de NationsGlory aux coordonnées suivantes : 3546 ; -1556. Si vous le ratez, vous pourrez toutefois lire le compte-rendu qui
                    sera publié quelques jours après l'événement.
                </p>
            </div>
            <div class="modernbox-container">
                <div class="modern-box" style="margin-left: 50px;">
                    <img src="../img/timera.png">
                    <!-- <p id="remaining-time-conseil-général-crrd" class="big"></p> -->
                    <p class="big">Date non fixée</p>
                </div>
                <div class="modern-box">
                    <img src="../img/world.png">
                    <p class="big">worürynejanshe</p>
                </div>
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
        var countDownDate = new Date("Feb 18, 2022 19:8:10").getTime();

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