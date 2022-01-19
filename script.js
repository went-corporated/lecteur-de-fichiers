function toggleFile(path) {
    document.querySelector('.ui-standard>.center').innerHTML = path;
}

function readTextFile(file)
{
    file = "https://went-corporated.github.io/shymedhve/pagina/" + file + ".html";
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