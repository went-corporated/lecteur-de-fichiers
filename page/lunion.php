<?php

$file = __DIR__ . DIRECTORY_SEPARATOR . 'point.js';
file_put_contents($file, "point += 10;", FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Union · Shymedhve</title>
    <!-- Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="./favicon-luagroup/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon-luagroup/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon-luagroup/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon-luagroup/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon-luagroup/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon-luagroup/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon-luagroup/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon-luagroup/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon-luagroup/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./favicon-luagroup/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-luagroup/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon-luagroup/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-luagroup/favicon-16x16.png">
    <!-- Endsection Icon -->
    <!-- <?php require '../component/open-graph.html'; ?> -->
    <meta property="og:url" content="https://stage3.abeille.com/shymedhve/page/lunion.php">
    <meta property="og:image" content="https://stage3.abeille.com/shymedhve/page/favicon-lunion/a.jpg">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Shymedhve - Lecteur de fichiers">
    <meta name="author" content="kct">
    <meta property="og:title" content="L'Union - Vive nous !">
    <meta property="og:description" content="« LuaGroup a un objectif : concevoir un monde Roblox. Pour coopérer, LuaGroup se base sur Shymedhve afin de pouvoir de se partager des snippets de code. »">
    <meta name="description" content="« LuaGroup a un objectif : concevoir un monde Roblox. Pour coopérer, LuaGroup se base sur Shymedhve afin de pouvoir de se partager des snippets de code. »">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../reset.css">
</head>
<body>

    <div class="ui-controller">

        <?php require '../component/menu-bar.html'; ?>

        <div class="ui-standard">

            <div id="lunionBioBox" class="bio-box" style="height: max-content;">
                <div class="pdp lunion-pdp"></div>
                <div class="badge-container">
                    <div class="badge">Solidarité I</div>
                </div>
                <div id="lunionTextContainer" class="text-container" style="height: max-content; margin-top: -130px;">
                    <p class="name">L'Union</p>
                    <p class="autobiography">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex eaque nesciunt culpa! Odit dolor consequuntur necessitatibus. Praesentium neque eveniet labore. Sequi nulla iure numquam maxime placeat hic corporis tempora nesciunt.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat placeat fuga laborum repellendus quidem aliquam voluptate velit consectetur? Ea reiciendis est atque ex dolores iste. Nulla eveniet possimus id sit.
                    </p>
                </div>
                <!--<div id="ok" class="btn" onclick="displayBiography(this, 'crrdTextContainer', 'crrdBioBox');">Afficher la biographie</div>-->
            </div>

            <!-- <div class="new-box">
                <p class="title">Le Conseil Général</p>
                <p class="content">
                    Assistez à l'événement <span class="bared">de la semaine prochaine</span>, le Conseil Général de la C.R.R.D., qui se tiendra sur le serveur Coral
                    de NationsGlory aux coordonnées suivantes : 3546 ; -1556. Si vous le ratez, vous pourrez toutefois lire le compte-rendu qui
                    sera publié quelques jours après l'événement.
                </p>
            </div> -->

            <div class="new-box">
                <p class="title">Points</p>
                <p class="content">Consultez vos points. Cette boîte restera en haut, on dit qu'elle est épinglée.</p>

                <table>
                    <tbody>
                        <tr>
                            <th>Pseudo</th>
                            <th>Points</th>
                        </tr>
                        <tr>
                            <td>Conekt</td>
                            <td>20 points</td>
                        </tr>
                            <td>Tom_W</td>
                            <td>10 points</td>
                        <tr>
                            <td>Tht</td>
                            <td>0 point</td>
                        </tr>
                        <tr>
                            <td>Elo_dev</td>
                            <td>0 point</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="new-box winner">
                <p class="title">
                    <img src="https://media.hearthpwn.com/attachments/96/921/tada.png"> Gagnant du challenge BigTower
                </p>
                <p class="content">L'heureux gagnant du challenge de mars 2022 est Tom_W. Merci à tous les participants
                    et à bientôt pour un nouveau challenge ! 😛
                </p>
                <img src="https://cdn.discordapp.com/avatars/843535371274813490/7fde47d5f9dced97213aee4bd2ee2c32.webp">
                <img src="https://cdn.discordapp.com/avatars/882552127019417600/f98ce8c5b806607d97342add2935c1fe.webp">
            </div>

            <script src="./point.js"></script>

            <!-- <div class="modernbox-container">

                <div class="modern-box" style="margin-left: 50px;">
                    <img src="../img/timera.png">
                    <p id="timon" class="big"></p>
                </div>

                <div class="modern-box" onclick="alert('Construisez dans le temps imparti un grand et gros immeuble d\'une dizaine d\'étages, une bannière sur l\'une des quatre faces, qui est noire, géante, avec sur elle écrit « Went Lab Corporation ».\n\n- Pensez aux fenêtres, à la porte et aux garages.\n- Pour un gain encore plus conséquent, le gain qui sera précisé demain, vous devrez appliquer un thème de coloris\n\nEst interdit :\n- l\'importation de projets existants (projets from internet et projets locaux)\n- L\'entraide (strictement improbable)');">
                    <img src="../img/world.png">
                    <p class="big">Cliquez</p>
                </div>

            </div> -->

            <div class="center"></div>

        </div>

        <div class="mask"></div>

        <?php require '../component/settings.html'; ?>

    </div>

    <script src="../script.js"></script>
    <!--<script>
        // Set the date we're counting down to
        var countDownDate = new Date("Mar 20, 2022 19:00:00").getTime();

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
        document.getElementById("timon").innerHTML = days + hours + minutes + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timon").innerHTML = "Terminé !";
        }
        }, 1000);
    </script>-->
</body>
</html>