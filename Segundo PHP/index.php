<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Segundo PHP</title>
</head>
<body>
<?php
echo 'hola';
const SERVIDOR='https://google.es';
define ('OTROSERVIDOR', 'https://amazon.com'); //otra forma de declarar una constante
$usuario='Beitoli';
echo "<p>El servidor que más visito es " . SERVIDOR. "</p>";
echo 'El usuario más guay es ' , $usuario;

?>

<h3>Muestra un texto</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis eligendi fugiat magnam minima natus nostrum omnis quam quas quibusdam sapiente, suscipit ut. At distinctio excepturi explicabo fugiat inventore quis, tempora.</p>

<?php
    echo "El otro servidor es " . OTROSERVIDOR;
    $usuario=1234;
    echo '<p>Ahora mi usuario es ' . ($usuario +1.05) . '</p>'; //Como hemos pasado la variable a numeros, se pueden realizar operaciones matematicas, porque el valor es entero
    echo 'He\'s a boy <br>';
    echo "El dijo \"hola\" <br>"; //Las barras se usan cuando tenemos dos comillas y tenemos que poner dos comillas, pero es más recomendable alternar las comillas, como en los siguientes casos:
    echo "El dijo 'Hola' <br>";
    echo 'El dijo "Hola" <br>';
    echo "El usuario continua con el nombre de $usuario <br>";
    echo 'El usuario continua con el nombre de $usuario<br>';
    echo "\$usuario= $usuario <br>";
    $fruta='manzana';
    echo "Una $fruta no es cara<br>";
    echo "Diez kilos de {$fruta}s si son caras<br>"; //tambien es válido poner ${fruta}s
    //para mostrar el nombre con llaves
    echo "Diez kilos de {{$fruta}s} serán caros <br>";
    echo $fruta[2] . "<br>"; //posición 2 de la palabra manzana
    $abe="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    echo $abe[16];
    //podemos sumar una cadena con un entero
    $numero="2";
    echo "<br>El resultado es " . (2+$numero);



?>
</body>
</html>
