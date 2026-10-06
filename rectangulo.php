<?php
//entrada de datos
$Base=$_POST["textBase"];
$Altura=$_POST["textAltura"];

////poceso
$area=$Base*$Altura ;
$perimetro=2*$Base+2*$Altura ;

//salida
/*
echo "El area del rectangulo es: ".$area;
echo "El perimetro del rectangulo es:".$perimetro;
*/
?>
<!DOCTYPE html>
<html lang="es">
  <head>
	<title>Área y perímetro del rectángulo</title>
    <meta charset="utf-8">
  </head>
<body>
<h1>Rectangulos - Geometria plana</h1>
<h3>Programa para calcular el área y perímetro de un rectángulo:</h3>

 <table width="300" border="1" align="center" cellpadding="4" cellspacing="0">
        <tr>
		 <td colspan="2" align="center">Nómina Sistemas CASD</td>
        </tr>
        <tr>
         <td width="50%">Área del rectangulo:</td>
         <td><?php echo$area;?></td>
        </tr>
        <tr>
         <td>Perímetro del rectángulo:</td>
         <td><?php echo$perimetro;?></td>	
        </tr>
   			
  </table>

</body>
</html>