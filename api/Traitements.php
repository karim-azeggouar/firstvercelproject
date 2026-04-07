<?php 




// fonction triangle isocele : 



function Triangle($lignes){

// boucle des lignes : 

     for($i=1;$i<=$lignes;$i++)
        {

        // boucle des espaces : 

        for($j=1;$j<=$lignes-$i;$j++)
            {
        

           echo("&nbsp;&nbsp;");
        
            }
     
      // boucle des etoiles : 

        for($k=1;$k<=2*$i-1;$k++)
            {
        

           echo("*");
        
            }
     
     
     echo("<br>");
        
     
     
     
       }




}

// function table de multiplication : 

function table($lignes, $colonnes) {
    echo "<table border='1'>";

    for ($i = 1; $i <= $lignes; $i++) {
        echo "<tr>";

        for ($j = 1; $j <= $colonnes; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

// traitement inscription : 

function displayinfosintohtmltable($num,$nom,$prenom,$dn,$sexe,$loisirs,$infos){


echo "<h2>Informations de l'étudiant</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr><th>Champ</th><th>Valeur</th></tr>";

echo "<tr><td>Numéro</td><td>$num</td></tr>";
echo "<tr><td>Nom</td><td>$nom</td></tr>";
echo "<tr><td>Prénom</td><td>$prenom</td></tr>";
echo "<tr><td>Ville</td><td>$ville</td></tr>";
echo "<tr><td>Date de naissance</td><td>$dn</td></tr>";
echo "<tr><td>Sexe</td><td>$sexe</td></tr>";
echo "<tr><td>Loisirs</td><td>$loisirs</td></tr>";
echo "<tr><td>Infos complémentaires</td><td>$infos</td></tr>";

echo "</table>";




}









?>




