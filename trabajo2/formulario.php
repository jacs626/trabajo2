<?php
    require("config.php"); 
    include_once("Automata.php");


    if(!empty($_POST["Estados"])){
        $_SESSION['automata_1']->darE(llenararreglos($_POST["Estados"]));
    }
    if(!empty($_POST["Estadoincial"])){
        $_SESSION['automata_1']->darEI(llenararreglos($_POST["Estadoincial"]));
    }
    if(!empty($_POST["Estadofinal"])){
        $_SESSION['automata_1']->darEF(llenararreglos($_POST["Estadofinal"]));
    }
    if(!empty($_POST["Alfabeto"])){
        $_SESSION['automata_1']->darAlf(llenararreglos($_POST["Alfabeto"]));
    }
    
    
?>

<html>
    <body>
        <form action="formulario2.php" method="POST">
            <?php
            echo "<table border=6>";
            foreach($_SESSION['automata_1']->verAlf() as $fila){
                echo "<tr>";
                foreach($_SESSION['automata_1']->verE() as $columna){
                    echo "<td>&($columna,$fila)= ";
                    ?>
                    <input type="text"  placeholder="Estados siguientes" name="EstadosSig[]"><br>
                <?php
                    echo"</td>";
                }  
            }
            echo "</tr>";
            ?>
            <p>
            <input type="submit" value="enviado" name="enviado">
            </p>
        </form>
    </body>
</html>



