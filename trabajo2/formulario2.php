
<?php
    require("config.php"); 

    foreach ($_POST["EstadosSig"] as $estado) {
        if(!empty($estado)){
            $_SESSION['automata_1']->darñe(($_POST["EstadosSig"]));
        }
    }

    

    echo "Los estados & son:"."</br>";
    foreach ($_SESSION['automata_1']->verñe() as $estado) {
        echo $estado."</br>";
    }

?>
