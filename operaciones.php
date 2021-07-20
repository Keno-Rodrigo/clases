<?php
class Operaciones {

    private int $primero;
    private int $segundo;
    private int $tercero;

    public function __construct(int $pri, int $seg, int $ter)
    {
        $this->primero = $pri;
        $this->segundo = $seg;
        $this->tercero = $ter;
    }

    private function sumar ():array{
        return [$this->primero+$this->segundo+$this->tercero, 'suma'];
    }

    private function multiplicar ():array{
        return [$this->primero*$this->segundo*$this->tercero, 'multiplicación'];
    }


    private function dividir (){
        return [$this->primero/$this->segundo/$this->tercero, 'división'];
    }

    public function  reultado (){
        $str_res = null;
        $resultados = [$this->sumar(), $this->multiplicar(), $this->dividir()];
        foreach($resultados as $res){
            $str_res .= "la ".$res[1]." entre $this->primero, $this->segundo y $this->tercero es ".$res[0]."<br>";
        }
        return $str_res;
    }

}