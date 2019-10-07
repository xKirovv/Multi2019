<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $A = $_POST['a'];
        $B = rand(0,25);

        echo $A . '<br>';
        echo $B . '<br>';
        if($A>$B){
            echo "a es mayor que b";
        }else{
            echo "b es mayor que a";
        }

        /*
        echo $rand = rand(1,25);
        if(($rand % 2) ==! 0){
            echo '<br>'."numero impar";
        }else{
            echo '<br>'."numero par";
        }*/
        //comversor de monedas (al menos cinco )
        //comversor de unidades metricas (cinco ingles y cinco internacional)
        //quince respuestas
        //usar POST
    ?>
</body>
</html>