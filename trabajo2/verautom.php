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
        foreach($autom->verAlf() as $fila){
            echo "<tr>";
            foreach($autom->verE() as $columna){
                echo "<td>&($columna,$fila)= ".$autom->verñe()[$c];
                echo "</br>";
                $c=$c+1;
            echo"</td>";
            }
        }  
        
        if($c<count($autom->verñe())){
            echo "</tr>";
            echo "<table border=6>";
            foreach($autom->verE() as $estado){
                echo "<td>&($estado,ε)= ".$autom->verñe()[$c];
                $c+=1;
                echo"</td>";
            }
        }
    }
?>