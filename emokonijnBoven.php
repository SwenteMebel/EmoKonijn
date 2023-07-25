<?php
//DE KONIJNEN IN DE BOVENSTE RIJ.


class konijntje {
    //Properties
    private $eenArray;

    public function __construct($emotiesArrayBoven) {
        $this->eenArray = $emotiesArrayBoven;
    }

    public function loopDoorArray(){
        //Wil weten hoeveel er in een array zitten. 
        $arrayLengte = count($this->eenArray);
        // Zet bij elk konijn een nieuwe emotie.
        for($i=0; $i < $arrayLengte; $i++){
            echo "<pre>";
            echo "()_() <br>";
            echo $this->eenArray[$i] . "<br>";
            echo "('')('')<br>";
            echo "<br>";
            echo "</pre>";
        }
    }

}
// emoties van konijnen
$emotiesArrayBoven = array("(o.o)", "(>.<)", "(&.&)", "(?.?)", "(/./)", "($.$)", "(=.=)", "(0.=)", "(~.~)", "(E.E)", "(^.^)", "(>.>)", "(X.X)"); 
shuffle($emotiesArrayBoven);

$konijn = new konijntje($emotiesArrayBoven);
$konijn -> loopDoorArray();



?>