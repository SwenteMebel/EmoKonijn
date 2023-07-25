<?php
    //DEZE PAGINA KIJKT OF ER EEN MATCH IS TUSSEN DE EMOTIE KONIJNNEN IN DE BOVENSTE RIJ EN DE ONDERSTE RIJ. 
    include_once "emokonijnOnder.php";
    include_once "emokonijnBoven.php";

    $ArrayBoven = $emotiesArrayBoven;
    $ArrayOnder = $emotiesArrayOnder;
   
    //kleur voor de achtergroend, bij een match.
    $green = 'green';
    $red = 'red';
   
    // for loop die controlleert dmv de array[#] of er een match is.  
    for($i=0; $i<count($ArrayBoven); $i++){
        //Als er een match is dan voert hij deze uit.
        if($ArrayBoven[$i] === $ArrayOnder[$i]){
            echo "<pre style='background-color:$green'>";
            echo "()_() <br>";
            echo $ArrayOnder[$i]. "<br>";
            echo "('')('')<br>";
            echo "<br>";
            echo "</pre>";    
        } else {
            //Ales er geen match is dan voert hij deze uit.
            echo "<pre style='background-color:$red'>";
            echo "()_() <br>";
            echo $ArrayOnder[$i]. "<br>";
            echo "('')('')<br>";
            echo "<br>";
            echo "</pre>";
        }

        
    }


   
    ?>