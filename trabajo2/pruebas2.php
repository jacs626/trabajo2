<?php
    require("config.php"); 
$autom= $_SESSION['automata_1'];


echo "Los estados son:"."</br>";
foreach ($autom->verE() as $estado) {
    echo $estado."</br>";
}

echo "</br>"."Los estados finales son:"."</br>";
foreach ($autom->verEF() as $estado) {
    echo $estado."</br>";
}

echo "</br>"."Los estados Iniciales son:"."</br>";
foreach ($autom->verEI() as $estado) {
    echo $estado."</br>";
}

echo "</br>"."El alfabeto es:"."</br>";
foreach ($autom->verAlf() as $estado) {
    echo $estado."</br>";
}