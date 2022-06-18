<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>03 FORMS</h1>
    <?php
        $pedido = fopen("pedido.txt" , "w") or die ("problemas de conexion");
        
        fputs($pedido, "Nombre : " . $_REQUEST['nombre'] . "\n");
        fputs($pedido, "Direccion : " . $_REQUEST['direccion'] . "\n");
        
        if (isset($_REQUEST['jamonqueso'])) {
            fputs($pedido, "Cantidad de Jamón y Queso : " . $_REQUEST['cantjamonqueso']);
            fputs($pedido, "\n");
          }
        
          if (isset($_REQUEST['napolitana'])) {
            fputs($pedido, "Cantidad de Napolitana:");
            fputs($pedido, $_REQUEST['cantnapolitana']);
            fputs($pedido, "\n");
          }
          if (isset($_REQUEST['muzzarella'])) {
            fputs($pedido, "Cantidad de Muzzarella:");
            fputs($pedido, $_REQUEST['cantmuzzarella']);
            fputs($pedido, "\n");
          }
        

    ?>
</body>
</html>