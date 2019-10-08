<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>



<?php
$CLASE =$_POST['CLASE'];

switch ($CLASE) {
    case "AB":
		
	    echo "la opcion ingresada es la AB SIN BONO<br>";
        break;
    case "C1A":
        echo "la opcion ingresada es la C1A SIN BONO<br>";
        break;
    case "C1B":
        echo "la opcion ingresada es la C1B SIN BONO<br>";
        break;
	case "C2":
		$sueldo=324.000;
		$bono=0.1;
		$result=($sueldo*$bono)*1000;
        echo "la opcion ingresada es la C2 BONO DE 10% SUELDO MINIMO $result<br>";
        break;
	case "C3":
        echo "la opcion ingresada es la C3BONO DE 20% SUELDO MINIMO<br>";
        break;
	case "D":
        echo "la opcion ingresada es la EBONO DE 30% SUELDO MINIMO<br>";
        break;
	case "E":
        echo "la opcion ingresada es la D<br> BONO DE 50% SUELDO MINIMO";
        break;
    default:
        echo "usted ingreso una opcion no valida<br>";
}

?>

<body>
</body>
</html>
