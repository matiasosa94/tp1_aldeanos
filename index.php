<?php
require_once './classes/Item.php';
require_once './contracts/Recolectable.php';
require_once './contracts/Recolectar.php';
require_once './traits/Recogido.php';
require_once './traits/Recolecta.php';
require_once './classes/Unidad.php';
require_once './classes/Aldeano.php';
require_once './classes/Recipiente.php';
require_once './classes/Arbusto.php';
require_once './classes/BancoDePesca.php';
require_once './classes/Pesquero.php';
require_once './classes/AldeanoFranco.php';
require_once './classes/AldeanoChino.php';


/*
$aldeano = new Aldeano;
$arbusto = new Arbusto;

$aldeano->recolectar($arbusto);
// Se debe ver el echo que devuelve el método recolectar

$pesquero = new Pesquero;
$bancoDePesca = new BancoDePesca;

$pesquero->recolectar($bancoDePesca);
// Se debe ver el echo que devuelve el método recolectar

// ------
*/
$aldeanoChino = new AldeanoChino;
$aldeanoFranco = new AldeanoFranco;
$arbusto1 = new Arbusto;
$arbusto2 = new Arbusto;

$banco=new BancoDePesca;

$pesquero= new Pesquero;

$aldeanoChino->recolectar($arbusto1);
// Se debe ver el echo que devuelve el método recolectar sin bonus
$pesquero->recolectar($arbusto2);
$aldeanoFranco->recolectar($arbusto2);
// Se debe ver el echo que devuelve el método recolectar con el bonus del 25%
$aldeanoFranco->recolectar($banco);
$pesquero->recolectar($banco);


echo $aldeanoFranco->getVelocidadRecoleccion()."<br>";
echo $aldeanoChino->getVelocidadRecoleccion();
/*
index.php
Página 1 de 2
TP 1
Maximiliano Jose Yañez Borghi
•
23 ago
Fecha de entrega: 21 sept
Completar todas las consignas del pdf que está adjunto.

La sección "extra" no es obligatoria pero puede ayudar a subir la nota.

Se adjunta también un archivo php que tiene la llamada a las clases que se deben crear en el TP. Ese va a ser el archivo que yo ejecute para comprobar que todo funciona de manera correcta. Dicho archivo puede ser modificado para agregar los require de las clases o usar el autoload de PSR4 según se prefiera.

Se debe adjuntar en esta pregunta un link que contenga todos los archivos del TP o bien una URL de GIT.

¡Éxitos!

index.php
PHP

TP1.pdf
PDF
Tu respuesta
Asignado
Comentarios de la clase*/