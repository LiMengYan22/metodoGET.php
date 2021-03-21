<?php
$alfa= "Valor de esta variable";
$bravo= "La otra..............";
echo "Enviar las variables:<br/>";
echo "\$alfa=$alfa <br/>";
echo "\$bravo=$bravo <br/>";
/* Aqui la cuestión de la Seguridad pasando mediante el navegador.. :( */
echo "<a href='destino.php?alfa=$alfa&bravo=$bravo'>Enviar</a>";
?>
