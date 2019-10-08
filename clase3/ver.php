<?php
    include "conn.php";
    $sql = "select * from noticias";

    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo $row['titulo'].'<br>';
            echo $row['noticia'].'<br>';
            echo $row['img'].'<br>';
            echo $row['fecha'].'<br>';
            echo $row['categoria'];
        }
    }else{
        echo "No hay resultados";
    }
    $conn->close();

?>