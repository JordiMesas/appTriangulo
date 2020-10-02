<?php

require_once '../Model/areaPerimeter.php';


$base = $_POST['base'];
$altura = $_POST['altura'];

$resultPerimeter = new Perimeter($base,$altura);

echo $resultPerimeter->getBase() ."<br>";

echo $resultPerimeter->getAltura(). "<br>";

echo $resultPerimeter->area() . "<br>";

echo $resultPerimeter->CalculatePerimeter(); 



echo "resultado de rectangulo <br>";

echo $resultPerimeter->areaRectangulo() ."<br>";

echo $resultPerimeter->CalculatePerimeterRectangulo();


