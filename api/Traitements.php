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






?>