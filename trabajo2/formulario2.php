
<?php
    session_start();
    include_once("Automata.php");
    require("verautom.php"); 
    $m=($_SESSION["automatas"])[$_SESSION['ctemod']];
    $m=unserialize($m);
    $maux;
    $c=0;

    if(!empty($_POST["EstadosSig[]"])){
        foreach ($_POST["EstadosSig"] as $estado) {
            $maux[$c]=$estado;
            $c+=1;
        }
        $m->darñe($maux);
    }
    
    else{
        $maux=$m->verñe();
        $c=count($maux);
    }

    if(!empty($_POST["est"])){
        foreach ($_POST["est"] as $estado) {
            $maux[$c]=$estado;
            $c+=1;
        }
    }

    

    foreach($m->verñe() as $ache){
        echo $ache;
    }

    ver($m);
    ($_SESSION["automatas"])[$_SESSION['ctemod']]=serialize($m);
?>
