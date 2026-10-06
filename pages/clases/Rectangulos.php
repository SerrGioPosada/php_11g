<?php
class Rectangulos{
    private $base;
    private $altura;
    private $area;
    private $perimetro;

    function __construct(){
        $this->base=0;
        $this->altura=0;
        $this->area=0;
        $this->perimetro=0;
    }

    public function setBase($base){
        $this->base=$base;
    }

    public function setAltura($altura){
        $this->altura=$altura;
    }    

    public function getBase(){
        return $this->base;
    }

    public function getAltura(){
        return $this->altura;
    }      

    public function getArea(){
        $this->calcularArea();
        return $this->area;
    }     

    public function getPerimetro(){
        $this->calcularPerimetro();
        return $this->perimetro;
    }     

    public function calcularArea(){
        $this->area=$this->base*$this->altura;
    }

    public function calcularPerimetro(){
        $this->perimetro=2*$this->base+2*$this->altura;
    }

    function __destruct(){
        $this->base=0;
        $this->altura=0;
        $this->area=0;
        $this->perimetro=0;
    }
}
?>