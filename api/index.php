<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev 101</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #0f172a;
            color: white;
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 60vh;
            background: url('/cover.png') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
        }

        .hero-content {
            position: relative;
            text-align: center;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3rem;
            margin: 0;
        }

        .hero p {
            font-size: 1.2rem;
            color: #cbd5f5;
        }

        /* CONTENT */
        .container {
            padding: 40px 20px;
        }

        .card {
            background: #1e293b;
            padding: 20px;
            margin: 20px auto;
            border-radius: 15px;
            max-width: 600px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        h2 {
            color: #38bdf8;
        }

        a {
            text-decoration: none;
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background: #38bdf8;
            color: black;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: #0ea5e9;
        }

        /* RESPONSIVE */
        @media(max-width: 768px){
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<!-- HERO -->
<section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Welcome Dev 101</h1>
        <p>Build • Learn • Deploy 🚀</p>
    </div>
</section>

<!-- CONTENT -->
<div class="container">

    <?php

    include_once 'Traitements.php';

    $groupe = "Dev 101";
    $plt = "Vercel";

    echo "<div class='card'>";
    echo "<h2>Premier site de $groupe sur $plt</h2>";
    echo "</div>";

    echo "<div class='card'>";
    echo "<h2>Atelier 1</h2>";
    echo "<a href='/At1.pdf' class='btn'>Voir PDF</a>";
    echo "</div>";

    echo "<div class='card'>";
    echo "<h2>Atelier 2</h2>";
    Triangle(10);
    echo "</div>";

    echo "<div class='card'>";
    echo "<h2>Atelier 3</h2>";
    Triangle(20);
    echo "</div>";

    ?>

</div>

</body>
</html>