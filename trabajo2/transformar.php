<?php
    function complemento($automata){
        $automata->darEF(nofinales($automata));
    }

    function nofinales($automata){
        $nofinales;
        $c=0;
        foreach($automata->verE() as $estado){
            if(!in_array($estado,$automata->verEF())){
                $nofinales[$c]=$estado;
                $c+=1;
            }
        }
        return $nofinales;
        
    }

    function simplificar($automata){
        
    }

?>