<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev 101</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
        }

        img {
            max-width: 100%;   /* rend l'image responsive */
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }

        h1, h2, h3 {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Welcome Dev 101 :</h1>

    <!-- Image intégrée -->
    <img src="image.png" alt="Dev Setup">

    <?php

    include_once 'Traitements.php';

    $groupe = "dev 101";
    $plt = "vercel";

    echo("<h2>Premier site de $groupe sur $plt</h2>");

    echo("<a href='At1.pdf'><h3>Atelier 1 :</h3></a>");

    Triangle(10);

    echo("<h3>Atelier 2 :</h3>");

    Triangle(20);

    ?>

</div>

</body>
</html>