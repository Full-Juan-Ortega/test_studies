<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP 01 </title>
</head>
<body>
    <h1>Aprendiendo PHP 01 </h1>
    <?php echo "Escrito con php";
    echo $num = rand(1,100) . "<br>";
    echo "el dia de hoy es : " . "<br>";
    $fecha = date("d/m/y");
    echo $fecha. "<br>";
    $cadena1 = "diego";
    $cadena2 = "juan";
    $cadena3 = "ana";
    $todo = $cadena1 . $cadena2 . $cadena3 . "<br>";
    echo $todo;
    $edad1 = 24;
    echo $cadena1 . " tiene $edad1 de edad";
    ?>
</body>
</html>