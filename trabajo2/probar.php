<?php
    include("verautom.php");
    include("transformar.php");
    include("Automata.php");
    $a1=new automata("q0,q1,q2","q0","q2","0,1","q1,q1,q2,q0,q2,q2","AFD");
    $a2=new automata("q0,q1,q2","q0","q2","0,1","q0;q1, , ,q0,q2, ","AFND");

    ver($a1);
    complemento($a1);
    ver($a1);

?>