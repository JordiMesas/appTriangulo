<?php

Class Perimeter{
    private $base;
    private $altura;
    public function __construct($base , $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    //getters

    public function getBase()
    {
        return $this->base;
    }
       
    public function getAltura()
    {
        return $this->altura;
    }

    //setters

    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }
 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    // own function 

    // Triangulo

    public function area(){
        $area= ($this->base * $this->altura)/2;        
        return $area;
    }

    public function CalculatePerimeter(){
        $b = $this->base;
        $a =  $this->altura;
        $r = pow($b,2) + pow($a,2);        
        $h = sqrt($r);
        $result = $b + $a +  $h ;
        return $result;
    }

    //Rectangulo

    public function areaRectangulo(){
        $area= ($this->base * $this->altura);        
        return $area;
    }

    public function CalculatePerimeterRectangulo(){
        $b = $this->base;
        $a =  $this->altura;
        $resultR = 2 * ($b + $a);
        return $resultR;
    }

}
