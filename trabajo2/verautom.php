<?php
    function ver($autom){
        echo "El automata es: ";
        echo $autom->vertipo();
        echo "</br>";

        echo "</br>"."Los estados son: ";
        foreach ($autom->verE() as $estado) {
            echo $estado.",";
        }
        echo "</br>";

        echo "</br>"."Los estados finales son: ";
        foreach ($autom->verEF() as $estado) {
            echo $estado.",";
        }
        echo "</br>";
        echo "</br>"."Los estados Iniciales son: ";
        foreach ($autom->verEI() as $estado) {
            echo $estado.",";
        }
        echo "</br>";
        echo "</br>"."El alfabeto es: ";
        foreach ($autom->verAlf() as $estado) {
            echo $estado.",";
        }
        echo "</br>";
        
        echo "</br>"."Los estados & son: ";
        echo "<table border=6>";
        $c=0;
        $maux= $_SESSION['automata_1'];
        foreach($_SESSION['automata_1']->verAlf() as $fila){
            echo "<tr>";
            foreach($_SESSION['automata_1']->verE() as $columna){
                echo "<td>&($columna,$fila)= ".$maux->verñe()[$c];
                echo "</br>";
                $c=$c+1;
            echo"</td>";
            }
        }  
        echo "</tr>";
    }
?>