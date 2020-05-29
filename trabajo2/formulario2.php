
<?php
    require("config.php");
    require("verautom.php"); 

    foreach ($_POST["EstadosSig"] as $estado) {
        if(!empty($estado)){
            $_SESSION['automata_1']->darñe(($_POST["EstadosSig"]));
        }
    }

    ver($_SESSION['automata_1']);

    

?>
