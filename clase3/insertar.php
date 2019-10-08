<?php

require "conn.php";
$titulo = $_POST['titulo'];
$noticia = $_POST['texto'];
$fecha = $_POST['fecha'];   
$img = $_POST['img'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO noticias(titulo,noticia,fecha,img,categoria) VALUES ('$titulo','$noticia','$fecha','$img','$categoria')";

if ($conn->query($sql) === TRUE){
    echo "Insersion exitosa";
}else{
    echo "Error: ".$sql.'<br>'.$conn->error;
}

?>