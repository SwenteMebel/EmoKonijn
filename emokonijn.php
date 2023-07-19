<?php
$konijntjes = array(
    array("\t()_()<br>\t(o.o)<br>\t('')('')"),
    array("\t()_()<br>\t(>.<)<br>\t('')('')"),
    array("\t()_()<br>\t(&.&)<br>\t('')('')"),
    array("\t()_()<br>\t(?.?)<br>\t('')('')"),
    array("\t()_()<br>\t(/./)<br>\t('')('')"),
    array("\t()_()<br>\t($.$)<br>\t('')('')"),
    array("\t()_()<br>\t(=.=)<br>\t('')('')"),
    array("\t()_()<br>\t(0.=)<br>\t('')('')"),
    array("\t()_()<br>\t(O.o)<br>\t('')('')"),
    array("\t()_()<br>\t(~.~)<br>\t('')('')"),
    array("\t()_()<br>\t(E.E)<br>\t('')('')"),
    array("\t()_()<br>\t([.])<br>\t('')('')"),
    array("\t()_()<br>\t(!.!)<br>\t('')('')"),
    array("\t()_()<br>\t(*.*)<br>\t('')('')"),
    array("\t()_()<br>\t(^.^)<br>\t('')('')"),
);

echo "<pre>";
foreach($konijntjes as $konijn){
    foreach($konijn as $stuk){
        echo "$stuk";
    }
    echo'<br>';
    echo'<br>';
}
echo "</pre>";
?>