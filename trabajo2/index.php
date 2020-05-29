
<?php
    session_start();
    include("Automata.php");
    $_SESSION['ctemod'] = 0;
    $a1=new automata("q0,q1,q2","q0","q2","0,1","q0,q1,q1,q2,q2,q2","AFD");
    $a2=new automata("q0,q1,q2","q0","q2","0,1","q0,q1,q1,q2,q2,q2","AFD");
    $_SESSION["automata1"] = serialize($a1);
    $_SESSION["automata2"] = serialize($a2);
    $_SESSION["automatas"] = array ($_SESSION["automata1"],$_SESSION["automata2"]);

    header("Location:formulario0.php");
?>