<?php 


// Functie die telt hoeveel index matches er zijn in de array. 
function aantalGelijkeIndexen($ArrayBoven, $ArrayOnder) {
    $aantalMatches = 0;
    
    foreach ($ArrayBoven as $index => $waarde) {
        if (isset($ArrayOnder[$index]) && $ArrayOnder[$index] === $waarde) {
            $aantalMatches++;
        }
    }
    
    return $aantalMatches;
}

// Aantal gelijke indexen berekenen
$aantalGelijke = aantalGelijkeIndexen($ArrayBoven, $ArrayOnder);

// Het aantal matches weergeven
echo "<label>Match</label> <input type='number' value='$aantalGelijke' name='matches' disabled> <br>";


// Een score, per match is het 100 punten
$highscore = $aantalGelijke * 100;
echo "<label>Score</label> <input type='number' value='$highscore' name='matches' disabled>";
// Haalt de File op waar de highscore in moet.
$fileHighScore = "data/highscore.txt";
// Neemt de waarde uit de file
$huidigeHighScore = intval(file_get_contents($fileHighScore));
// kijkt of de nieuwe waarde groter is dan de oude waarde, als dat zo is overschrijf die dan. 
if($highscore > $huidigeHighScore){
    // Als de nieuwe waarde hoger is dan de oude waarde dan opent hij de file om de schrijven. 
    $file = fopen($fileHighScore, "w");
    // De geopende file zet hij de nieuwe score in.
    fwrite($file, $highscore);
    // Vervolgens sluit hij die de file weer.
    fclose($file);
    
}

if($aantalGelijke == 0 ){
    // Zoekt de file.
    $filenaam = "data/score_0.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
} else if ($aantalGelijke == 1 ){
    // Zoekt de file.
    $filenaam = "data/score_1.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
} else if ($aantalGelijke == 2){
     // Zoekt de file.
     $filenaam = "data/score_2.txt";
     // Neemt de waarde uit de file.
     $waardeFile = intval(file_get_contents($filenaam));
     // Heeft de waarde van de file + 1.
     $nieuweWaarde = $waardeFile + 1;
     // Opent de file om te schrijven.
     $file = fopen($filenaam, "w");
     // Voegt het hier samen.
     fwrite($file, $nieuweWaarde);
     // Sluit de file weer.
     fclose($file);
} else if ($aantalGelijke == 3){
    // Zoekt de file.
    $filenaam = "data/score_3.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
} else if ($aantalGelijke == 4){
    // Zoekt de file.
    $filenaam = "data/score_4.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
} else if ($aantalGelijke == 5){
    // Zoekt de file.
    $filenaam = "data/score_5.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
} else if ($aantalGelijke == 6){
    // Zoekt de file.
    $filenaam = "data/score_6.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
} else if ($aantalGelijke == 7){
    // Zoekt de file.
    $filenaam = "data/score_7.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
} else if ($aantalGelijke == 8){
    // Zoekt de file.
    $filenaam = "data/score_8.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
} else if ($aantalGelijke == 9){
    // Zoekt de file.
    $filenaam = "data/score_9.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
}  else if ($aantalGelijke == 10){
    // Zoekt de file.
    $filenaam = "data/score_10.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
}  else if ($aantalGelijke == 11){
    // Zoekt de file.
    $filenaam = "data/score_11.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
}  else if ($aantalGelijke == 12){
    // Zoekt de file.
    $filenaam = "data/score_12.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
}  else if ($aantalGelijke == 13){
    // Zoekt de file.
    $filenaam = "data/score_13.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
}  else if ($aantalGelijke == 14){
    // Zoekt de file.
    $filenaam = "data/score_14.txt";
    // Neemt de waarde uit de file.
    $waardeFile = intval(file_get_contents($filenaam));
    // Heeft de waarde van de file + 1.
    $nieuweWaarde = $waardeFile + 1;
    // Opent de file om te schrijven.
    $file = fopen($filenaam, "w");
    // Voegt het hier samen.
    fwrite($file, $nieuweWaarde);
    // Sluit de file weer.
    fclose($file);
}
 








?>
