<?php
    include("Automata.php");
    session_start();
    $_SESSION['automata_1'] = new automata("q0,q1,q2","q0","q2","0,1","q0,q1,q1,q2,q2,q2","AFD");
    $_SESSION['automata_2'] = new automata("q0,q1,q2","q0","q2","0,1","q0,q1,q1,q2,q2,q2","AFD");
?>