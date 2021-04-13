<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple File Upload</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Multi_File_Upload/dist/bootstrap.fd.css">

</head>
<body>

<div class="container">
    <h2 class="text-center p-3 bg-primary">Charger des documents</h2>
    <form id="form" onsubmit="return submitForm()">
        <button type="button" onclick="selectFiles()">Charger des fichiers</button>
        <br>
        <div id="selected-files"></div>
        <input type="submit" class="btn btn-primary" value="Envoyer">
    </form>
</div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="Multi_File_Upload/dist/bootstrap.fd.js"></script>
<script src="js/script.js"></script>
</body>
</html>


