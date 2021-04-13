
var selectedFiles = [];

// Selectionne les fichiers et les met dans un <ul>
function selectFiles() {
    $.FileDialog({ 
        "accept": "file/*"
    }).on("files.bs.filedialog", function (event) {

        var html = "<ul>";

        for (let i = 0; i < event.files.length; i++) {
            selectedFiles.push(event.files[i]);
            html += "<li>" + event.files[i].name +"</li>"
            console.log(event);
        }
        html += "</ul>";
        document.querySelector("#selected-files").innerHTML = html;
    })
}


// Traitement du formulaire
function submitForm() {
    var form = document.querySelector("#form");
    var formData = new FormData(form);

    for (let i = 0; i < selectedFiles.length; i++) {
        formData.append("files[]", selectedFiles[i]);
    }

    var ajax = new XMLHttpRequest();
    ajax.open("POST", "traitement.php", true);
    ajax.send(formData);

    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
    return false;
}