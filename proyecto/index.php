<?php 
$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible'=> true

    ],
    [
        'nombre' =>'television 24"',
        'precio' => 300,
        'disponible'=> true
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible'=> false
    ]
    ];
?>
<?php
    require_once('proyecto/model/Producto.php');

    $productos = array(
        new  Producto("televisor",200,"disponible", true),
        new  Producto("pc gamers",800,"Disponible", true),
        new Producto("iphone12 pro", 900 , "disponible", true),
        new Producto("moto", 9000000 , "disponible", true),
        )
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header></header>
<nav></nav>
<main>
    <div>
        <?php echo $productos-> getPto         ?>
    </div>
</main>
<footer></footer>
</body>
</html>