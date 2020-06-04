
<?php
    include("verautom.php");
    session_start();
    include("Automata.php");
    $_SESSION['ctemod'] = 0;
    $arrai=array(["q0","1","q0"],["q0","0","q1"],["q1","0","q1"],["q1","1","q2"],["q2","0","q2"],["q2","1","q2"]);
    $arrai2=array(["q0","0","q0,q1"],["q0","1","q0"],["q1","1","q2"]);
    $a1=new automata("q0,q1,q2","q0","q2","0,1",$arrai,"AFD");
    $a2=new automata("q0,q1,q2","q0","q2","0,1",$arrai2,"AFND");
    $_SESSION["automata1"] = serialize($a1);
    $_SESSION["automata2"] = serialize($a2);
    $_SESSION["automatas"] = array ($_SESSION["automata1"],$_SESSION["automata2"]);
    header("Location:formulario0.php");
?>