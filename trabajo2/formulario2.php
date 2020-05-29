
<?php
    session_start();
    include_once("Automata.php");
    require("verautom.php"); 
    $m=($_SESSION["automatas"])[$_SESSION['ctemod']];
    $m=unserialize($m);


    foreach ($_POST["EstadosSig"] as $estado) {
        if(!empty($estado)){
            $m->darñe(($_POST["EstadosSig"]));
        }
    }

    ver($m);
?>
