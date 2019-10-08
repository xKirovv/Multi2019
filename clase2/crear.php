<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?PHP
MKdir('eros1');
 $nombre_archivo ="eros1/archivo.txt";
 $control_archivo = fopen($nombre_archivo, "a") or die("no se puede abrir");
  fclose($control_archivo);

 ?> 
</body>
</html>
