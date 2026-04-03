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
?>




?>