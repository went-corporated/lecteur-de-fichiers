function toggleFile(path) {
    document.querySelector('.ui-standard>.center').innerHTML = path;
}

function readTextFile(file)
{
    file = "https://went-corporated.github.io/lecteur-de-fichiers/pagina/" + file + ".html";
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                toggleFile(allText);
            }
        }
    }
    rawFile.send(null);
}

// readTextFile('l-europe-entre-restauration-et-revolution');

let toggleSettingThemeIncator = false;

function toggleSetting(settingName) {
    if (settingName === "theme") {
        if (toggleSettingThemeIncator === false) {
            document.getElementById('sb_ta_cb_theme').style.transform = 'translateX(35px)';
            document.getElementById('sb_ta_cb_theme').style.backgroundColor = 'white';
            toggleSettingThemeIncator = true;
        } else {
            document.getElementById('sb_ta_cb_theme').style.transform = 'translateX(0px)';
            document.getElementById('sb_ta_cb_theme').style.backgroundColor = 'rgb(245, 245, 245)';
            toggleSettingThemeIncator = false;
        }
    }
}

document.getElementById('openSettingsModal').onclick = function () {
    document.querySelector('.mask').style.display = 'block';
    document.querySelector('.settings-modal').style.display = 'block';
}

document.querySelector('.mask').onclick = function () {
    document.querySelector('.mask').style.display = 'none';
    document.querySelector('.settings-modal').style.display = 'none';
}