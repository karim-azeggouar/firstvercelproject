<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev 101</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>

        .form-group {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
}

label {
    width: 150px; /* 👈 même largeur pour tous */
    font-size: 14px;
    color: #cbd5f5;
}

.input {
    width: 250px;
    padding: 8px;
    border-radius: 6px;
    border: none;
    background: #e2e8f0;
}
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


// Cours PHP
echo "<div class='card'>";
echo "<h2>Cours PHP</h2>";
echo "<a href='/php.pptx' class='btn'>Telecharger Le cours</a>";
echo "</div>";

// Communication
echo "<div class='card'>";
echo "<h2>Communication via formulaire :</h2>";
?>
<form method="POST" action="login.php" class="form">
    
    <div class="form-group">
        <label>Login:</label>
        <input type="text" name="log" class="input" />
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="password" name="pass" class="input" />
    </div>

    <div class="form-actions">
        <input type="submit" name="action1" value="connexion" class="btn" />
        <input type="reset" value="Réinitialiser" class="btn btn-secondary" />
    </div>

</form>
<?php
echo "</div>";


// Table
echo "<div class='card'>";
echo "<h2>Appel Table</h2>";
?>
<form method="POST" action="index.php" class="form">

    <div class="form-group">
        <label>nbre de lignes :</label>
        <input type="text" name="rows" class="input" />
    </div>

    <div class="form-group">
        <label>nbre de colonnes :</label>
        <input type="text" name="cols" class="input" />
    </div>

    <div class="form-actions">
        <input type="submit" name="action2" value="dessiner" class="btn" />
        <input type="reset" value="Réinitialiser" class="btn btn-secondary" />
    </div>

</form>
<?php
if(!empty($_POST['action2'])){
    table($_POST['rows'], $_POST['cols']);
}
echo "</div>";


// Triangle form
echo "<div class='card'>";
echo "<h2>Appel Triangle via form</h2>";
?>
<form method="POST" action="index.php" class="form">

    <div class="form-group">
        <label>nbre de lignes :</label>
        <input type="text" name="rowst" class="input" />
    </div>

    <div class="form-actions">
        <input type="submit" name="action3" value="dessiner" class="btn" />
        <input type="reset" value="Réinitialiser" class="btn btn-secondary" />
    </div>

</form>
<?php
if(!empty($_POST['action3'])){
    Triangle($_POST['rowst']);
}
echo "</div>";


// Triangle liens
echo "<div class='card'>";
echo "<h2>Appel Triangle via liens hypertext</h2>";

echo "<div class='links'>";
for($i=3;$i<=10;$i++){
    echo "<a href='index.php?action4=$i' class='link'>$i</a>***";
}
echo "</div>";

if(!empty($_GET['action4'])){
    Triangle($_GET['action4']);
}

echo "</div>";


// Atelier 1
echo "<div class='card'>";
echo "<h2>Atelier 1</h2>";
echo "<a href='/At1.pdf' class='btn'>Voir PDF</a>";
echo "</div>";


// Atelier 2
echo "<div class='card'>";
echo "<h2>Atelier 2</h2>";
echo "<a href='/At2.pdf' class='btn'>Voir PDF</a>";
echo "<a href='inscription.php' class='btn'>Inscription en ligne</a>";
echo "</div>";


// Atelier 3
echo "<div class='card'>";
echo "<h2>Atelier 3</h2>";
echo "<a href='/At3_enn.pdf' class='btn'>Ennoncé Atelier 3</a>";
echo "<a href='/At3.pdf' class='btn'>Voir Rapport Atelier 3</a>";
echo "<a href='https://github.com/karim-azeggouar/atelier3_dev101.git' class='btn'> <i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";




// Atelier 4
echo "<div class='card'>";
echo "<h2>Atelier 4</h2>";
echo "<a href='/At4.pdf' class='btn'>Ennoncé Atelier 4</a>";
echo "<a href='/Rapp4.pdf' class='btn'>Voir Rapport Atelier 4</a>";
echo "<a href='https://github.com/karim-azeggouar/atel4.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";





// Atelier 5
echo "<div class='card'>";
echo "<h2>Atelier 5</h2>";
echo "<a href='/At5.pdf' class='btn'>Ennoncé Atelier 5</a>";
echo "<a href='/Rapp5.pdf' class='btn'>Voir Rapport Atelier 5</a>";
echo "<a href='https://github.com/karim-azeggouar/Atelier5.git' class='btn'><i class='fab fa-github'></i> GitHub Repo</a>";
echo "</div>";


?>



</div>

</body>
</html>