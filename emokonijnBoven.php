<?php

class konijntje {
    //Properties
    
    private $eenArray;

    public function __construct($emoties) {
        $this->eenArray = $emoties;
    }

    public function loopDoorArray(){
        //Wil weten hoeveel er in een array zitten 
        $arrayLengte = count($this->eenArray);

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

$emoties = array("(o.o)", "(>.<)", "(&.&)", "(?.?)", "(/./)", "($.$)", "(=.=)", "(0.=)", "(~.~)", "(E.E)", "(^.^)", "(>.>)", "(X.X)"); 
shuffle($emoties);

$konijn = new konijntje($emoties);
$konijn -> loopDoorArray();



?>