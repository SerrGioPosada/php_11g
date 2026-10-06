<!DOCTYPE html>
<html lang="es">
  <head>
	<title>Área y perímetro del rectángulo</title>
    <meta charset="utf-8">
  </head>
<body>
<h1>Rectángulos - Geometria plana</h1>
<h3>Programa para calcular el área y perímetro de un rectángulo:</h3>
<form id="fromRectangulo" name="fromRectangulo" method="post" action="rectangulo.php">
 <table width="300" border="1" align="center" cellpadding="4" cellspacing="0">
        <tr>
		 <td colspan="2" align="center">Nómina Sistemas CASD</td>
        </tr>
        <tr>
         <td width="50%">Base:</td>
         <td><input type="text" name="textBase" id="textBase" /></td>
        </tr>
        <tr>
         <td>Altura:</td>
         <td><input type="text" name="textAltura" id="textAltura" /></td>	
        </tr>

        <tr>
        <td colspan="2" align="center">
                <input type="reset" name="button" id="button" value="Restablecer" />
                <input type="submit" name="button2" id="button2" value="Enviar" />
        </td>
       </tr>
  </table>
</form>
</body>
</html>