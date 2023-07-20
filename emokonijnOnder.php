<?php

$emoties = array("(o.o)", "(>.<)", "(&.&)", "(?.?)", "(/./)", "($.$)", "(=.=)", "(0.=)", "(~.~)", "(E.E)", "(^.^)", "(>.>)", "(X.X)"); 
shuffle($emoties);

class konijn {
    //Properties
   
    private $eenArray;

    public function __construct($emoties) {
        $this->eenArray = $emoties;
    }

    public function loopDoorArray(){
        //Wil weten hoeveel er in een array zitten 
        $arrayLengte = count($this->eenArray);

        for($i=0; $i < $arrayLengte; $i++){
            echo "<pre id='[$i]'>";
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

$konijn = new konijn($emoties);
$konijn -> loopDoorArray();



?>