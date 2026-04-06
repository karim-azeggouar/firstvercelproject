<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
</head>
<body>

<h2>Upload une photo</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="photo">
    <button type="submit">Envoyer</button>
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = $_FILES["photo"];

    if ($file["error"] == 0) {
        $destination = "public/" . $file["name"];

        move_uploaded_file($file["tmp_name"], $destination);

        echo "Upload réussi !";
    } else {
        echo "Erreur lors de l'upload";
    }
}
?>




</body>
</html>