<?PHP
$nombre=$_POST['nombre'];
//$ip=$_SERVER['REMOTE_ADDR'];
$carpeta=$_POST['rut'];
$apellido=$_POST['apellido'];
mkdir("$carpeta");
$archivo="$carpeta/$carpeta".".html";
//variable contenedora del texto a guardar
$texto="<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>$nombre</title>
</head>
<body>
    
</body>
</html>";
//fp es el puntero al archivo abierto sobre el cual vamos a operar
//ahora ocuparemos nuestro comando fopen para ascribir en el archivo para esto remplazaremos la letra r que usabamos anteriormente por la letra a
// que nos permite escribir                                                     
$fp = fopen($archivo,"w+");
//fpust nos permite escribir en el archivo la primera parte indica el nombre del archivo seleccionado y luego 
//el texto a agregar
fputs($fp, $texto);
//como siempre se cierra el puntero y el comando fopen
fclose($fp);
//$ip=$_SERVER['REMOTE_ADDR'];
//$fecha=date("d.m.Y");  
//echo "$ip $fecha";
?>



