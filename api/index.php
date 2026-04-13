<?php

include_once 'Traitements.php';

$groupe = "Dev 101";
$plt = "Vercel";

echo "<div class='card'>";
echo "<h2>Premier site de $groupe sur $plt</h2>";
echo "</div>";


// 1️⃣ Cours PHP
echo "<div class='card'>";
echo "<h2>Cours PHP</h2>";
echo "<a href='/php.pptx' class='btn'>Telecharger Le cours</a>";
echo "</div>";


// 2️⃣ Communication via formulaire
echo "<div class='card'>";
echo "<h2>Communication via formulaire :</h2>";
?>
<form method="POST" action="login.php">
Login: <input type="text" name="log" /> <br/>
Password: <input type="password" name="pass" /> <br/>
<input type="submit" name="action1" value="connexion" />
<input type="reset">
</form>
<?php
echo "</div>";


// 3️⃣ Appel Table
echo "<div class='card'>";
echo "<h2>Appel Table</h2>";
?>
<form method="POST" action="index.php">
nbre de lignes : <input type="text" name="rows" /> <br/>
nbre de colonnes : <input type="text" name="cols" /> <br/>
<input type="submit" name="action2" value="dessiner" />
<input type="reset">
</form>
<?php

if(!empty($_POST['action2'])){
    $nbl=$_POST['rows'];
    $nbc=$_POST['cols'];
    table($nbl,$nbc);
}

echo "</div>";


// 4️⃣ Appel Triangle via form
echo "<div class='card'>";
echo "<h2>Appel Triangle via form</h2>";
?>
<form method="POST" action="index.php">
nbre de lignes : <input type="text" name="rowst" /> <br/>
<input type="submit" name="action3" value="dessiner" />
<input type="reset">
</form>
<?php

if(!empty($_POST['action3'])){
    $nbl=$_POST['rowst'];
    Triangle($nbl);
}

echo "</div>";


// 5️⃣ Appel Triangle via liens hypertext
echo "<div class='card'>";
echo "<h2>Appel Triangle via liens hypertext</h2>";

echo ("<a href='index.php?action4=3'>3 </a>-");
echo ("<a href='index.php?action4=4'>4 </a>-");
echo ("<a href='index.php?action4=5'>5 </a>-");
echo ("<a href='index.php?action4=6'>6 </a>-");
echo ("<a href='index.php?action4=7'>7 </a>-");
echo ("<a href='index.php?action4=8'>8 </a>-");
echo ("<a href='index.php?action4=9'>9 </a>-");
echo ("<a href='index.php?action4=10'>10 </a><br/>");

if(!empty($_GET['action4'])){
    $nbl=$_GET['action4'];
    Triangle($nbl);
}

echo "</div>";


// 6️⃣ Atelier 1
echo "<div class='card'>";
echo "<h2>Atelier 1</h2>";
echo "<a href='/At1.pdf' class='btn'>Voir PDF</a>";
echo "</div>";


// 7️⃣ Atelier 2
echo "<div class='card'>";
echo "<h2>Atelier 2</h2>";
echo "<a href='/At2.pdf' class='btn'>Voir PDF</a>";
echo "<a href='inscription.php' class='btn'>Inscription en ligne</a>";
echo "</div>";


// 8️⃣ Atelier 3
echo "<div class='card'>";
echo "<h2>Atelier 3</h2>";
echo "<a href='/At3_enn.pdf' class='btn'>Ennoncé Atelier 3</a>";
echo "<a href='/At3.pdf' class='btn'>Voir Rapport Atelier 3</a>";
echo "<a href='https://github.com/karim-azeggouar/atelier3_dev101.git' class='btn'>GitHub Repo</a>";
echo "</div>";

?>