<?php

require_once '../Model/triangulo.php';


$base = $_POST['base'];
$altura = $_POST['altura'];

$resultPerimeter = new Triangulo($base,$altura);

echo $resultPerimeter->getBase() ."<br>";

echo $resultPerimeter->getAltura(). "<br>";

echo $resultPerimeter->area() . "<br>";

echo $resultPerimeter->CalculatePerimeter(); 





