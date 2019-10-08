<?php 
$fp = fopen("hola/javier.txt", "r");

while(!feof($fp)) {

$linea = fgets($fp);

echo $linea . "<br />";

}

fclose($fp);

?>