<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangulo</title>
</head>

<body>
    <h2>Triangulo</h2>
    <form action="./Controller/trianguloController.php" method="post">
        <label for="base">Base</label>
        <input type="number" name="base" value="">
        <label for="altura">Altura</label>
        <input type="number" name="altura" value="">
        <label for="area">Area</label>
        <input type="number" value="" name="area">
        <label for="perimetro">Perimetro</label>
        <input type="number" value="" name="perimetro">
        <input type="submit" value="submit">
    </form>
   
</body>

</html>