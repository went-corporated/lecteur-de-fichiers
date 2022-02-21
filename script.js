// let firstClick = false;
let indexPhpPath = '../index.php'
let crrdwallPhpPath = './crrd-wall.php'
let polsenbPhpPath = './polsenb.php'

// function toggleFile(path) {
//     if (firstClick === true) {
//         document.querySelector('.new-box').style.display = 'none';
//     }
//     document.querySelector('.ui-standard>.center').innerHTML = path;
// }

// function readTextFile(file)
// {
//     file = "https://went-corporated.github.io/lecteur-de-fichiers/pagina/" + file + ".html";
//     var rawFile = new XMLHttpRequest();
//     rawFile.open("GET", file, false);
//     rawFile.onreadystatechange = function ()
//     {
//         if(rawFile.readyState === 4)
//         {
//             if(rawFile.status === 200 || rawFile.status == 0)
//             {
//                 var allText = rawFile.responseText;
//                 toggleFile(allText);
//             }
//         }
//     }
//     rawFile.send(null);
// }

// readTextFile('l-europe-entre-restauration-et-revolution');

let toggleSettingShadowsIncator = false;

if (localStorage.getItem('settingitem-deactivateshadows') === 'true') {
    document.getElementById('sb_ta_cb_deactivateshadows').style.transform = 'translateX(35px)';
    document.getElementById('sb_ta_cb_deactivateshadows').style.backgroundColor = 'white';
    document.querySelectorAll('*').forEach(function (element) {
        element.style.boxShadow = 'none';
    });
    toggleSettingShadowsIncator = true;
}

function toggleSetting(settingName) {
    if (settingName === "deactivateshadows") {
        if (toggleSettingShadowsIncator === false) {
            document.getElementById('sb_ta_cb_deactivateshadows').style.transform = 'translateX(35px)';
            document.getElementById('sb_ta_cb_deactivateshadows').style.backgroundColor = 'white';
            document.querySelectorAll('*').forEach(function(element) {
                element.style.boxShadow = 'none';
            });
            toggleSettingShadowsIncator = true;
            localStorage.setItem('settingitem-deactivateshadows', 'true');
        } else {
            document.getElementById('sb_ta_cb_deactivateshadows').style.transform = 'translateX(0px)';
            document.getElementById('sb_ta_cb_deactivateshadows').style.backgroundColor = 'rgb(245, 245, 245)';
            toggleSettingShadowsIncator = false;
            localStorage.setItem('settingitem-deactivateshadows', 'false');
            location.href = location.href;
        }
    }
}

function openSettingsModal() {
    document.querySelector('.mask').style.display = 'block';
    document.querySelector('.settings-modal').style.display = 'block';
    document.querySelector('.mask').style.opacity = '1';
    document.querySelector('.settings-modal').style.opacity = '1';
    document.querySelector('.settings-modal').style.transform = 'translateY(0px)';
}

document.querySelector('.mask').onclick = function () {
    document.querySelector('.mask').style.opacity = '0';
    document.querySelector('.settings-modal').style.opacity = '0';
    document.querySelector('.settings-modal').style.transform = 'translateY(10px)';
    setTimeout("dnoneMaskAndSettingsmodal()", 300);
}

function dnoneMaskAndSettingsmodal(){
    document.querySelector('.mask').style.display = 'none';
    document.querySelector('.settings-modal').style.display = 'none';
}

// readTextFile('plan-officiel-de-lancement-du-systeme-economique-de-la-nouvelle-birmanie');
// firstClick = true;

function displayBiography(element, textContainerId, bioBoxId){
    if (element.classList.contains('toReduce') === false){
        document.getElementById(textContainerId).style.height = 'max-content';
        document.getElementById(bioBoxId).style.height = 'max-content';
        element.innerHTML = 'Masquer la biographie';
        element.classList.add('toReduce');
    } else {
        document.getElementById(textContainerId).style.height = '100px';
        document.getElementById(bioBoxId).style.height = '211.5px';
        element.innerHTML = 'Afficher la biographie';
        element.classList.remove('toReduce');
    }
}