<!DOCTYPE html>
<html lang="es">
  <head>
	<title>Nómina del empleado</title>
    <meta charset="utf-8">
  </head>
<body>
<h1>Nómina Empresa SAS</h1>
<h3>Programa para calcular el total a pagar a un empleado:</h3>
<form id="formDescuento" name="formDescuento" method="post" action="nomina.php">
 <table width="300" border="1" align="center" cellpadding="4" cellspacing="0">
        <tr>
		 <td colspan="2" align="center">Nómina Sistemas CASD</td>
        </tr>
        <tr>
         <td width="50%">Documento del empleado:</td>
         <td><input type="text" name="textDocumentoEmpleado" id="textDocumentoEmpleado" /></td>
        </tr>
        <tr>
         <td>Nombre del empleado:</td>
         <td><input type="text" name="textNombreEmpleado" id="textNombreEmpleado" /></td>	
        </tr>
        <tr>
         <td>Sueldo base:</td>
         <td><input type="number" name="textSueldoBase" id="textSueldoBase" /></td>	
        </tr>
        <tr>
         <td>Número de horas extras que trabajó:</td>
         <td><input type="number" name="textNumeroHorasExtras" id="textNumeroHorasExtras" /></td>	
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