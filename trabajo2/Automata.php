<?php
function llenararreglos($algo){
    $arreglo= array();
    $palabra = "";
    $cont=0;
    for($i=0; $i< strlen($algo);$i++){
        if($algo[$i] == ","){
            $arreglo[$cont]=$palabra;
            $cont++;
            $palabra="";
        }
        else{
            $palabra.=$algo[$i];
        }
        if(($i==strlen($algo)-1)){
            $arreglo[$cont]=$palabra;
        }
    }
    return $arreglo;
}


class automata{
    
    public $Estado = array();
    public $EstadoInicial = array();
    public $EstadoFinal = array();
    public $Alfabeto = array();
    public $ñe = array();
    
    function __construct($p1,$p2,$p3,$p4,$p5){
        $this->Estado = llenararreglos($p1);
        $this->EstadoInicial = llenararreglos($p2);
        $this->EstadoFinal = llenararreglos($p3);
        $this->Alfabeto = llenararreglos($p4);
        $this->ñe = llenararreglos($p5);
    }

    function darE($nuevoestados){
        $this->Estado=$nuevoestados;
    }
    function verE(){
        return $this->Estado;
    }
    
    function darEI($nuevoestadosi){
        $this->EstadoInicial=$nuevoestadosi;
    }
    function verEI(){
        return $this->EstadoInicial;
    }
    
    function darEF($nuevoestadosf){
        $this->EstadoFinal=$nuevoestadosf;
    }
    function verEF(){
        return $this->EstadoFinal;
    }
    
    function darAlf($nuevoalf){
        $this->Alfabeto=$nuevoalf;
    }
    function verAlf(){
        return $this->Alfabeto;
    }
    
    function darñe($nuevoñe){
        $this->ñe=$nuevoñe;
    }
    function verñe(){
        return $this->ñe;
    }
}


