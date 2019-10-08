<?php

$usuario = $_POST['Usuario'];
$entrada = $_POST ['Entrada'];
$ip = getRealIP() ;
$hora = date('H').':'.date('i').':'.date('s').'|'.date("d").'/'.date("m").'/'.date("Y");

if(!empty($usuario) && !empty($entrada))
{
    $file = "Bitacora".".txt";
    $contenido = "Usuario: ".$usuario.' - IP:'. $ip.' - Hora y Fecha: '.$hora."\n".
                 $entrada."\n\r";
    
    $fp = fopen($file, "w+");
    fputs($fp, "$contenido ");
    fclose($fp);
    
    echo"Insercion exitosa";
    require  "archivos.php";
}else
{
    echo "Rellene todos los campos";
    require  "archivos.php";
    
}





function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
       
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
   
    return $_SERVER['REMOTE_ADDR'];
}
?>