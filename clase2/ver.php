<?PHP
$nombre=mb_strtoupper('hOlA');
$nombre1=$nombre;
$titulo=strtolower("esto Es UN TITUlo");
$texto="texto texto texto";
echo "el nombre del usuario es: $nombre<br>";
echo 'el nombre del usuario es:'.$nombre."<br>";
echo "el nombre del usuario es: 
$nombre esto es una concatenacion<br>";
echo "el nombre del usuario es: $titulo<br>";
//echo ucwords("$texto<br>");
//echo ucfirst("$texto<br>");
echo trim($texto)."    cft   ";
//echo($nombre)."cft";
?>