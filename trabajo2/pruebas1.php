<?php
    include("Automata.php");
    session_start();
    $_SESSION['automata_1'] = new automata("q0,q1,q2","q0","q2","0,1","q0,q1,q1,q2,q2,q2");
    $_SESSION['automata_2'] = new automata("palabras","askeroso","trolo","egro","sucio");

    $arra = "palabras,askeroso,trolo,negro,sucio";

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

    $autom->darE(llenararreglos("cualquiercosa"));
    $autom->darEI(llenararreglos("cualquiercosa"));
    $autom->darEF(llenararreglos("cualquiercosa"));


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
    


