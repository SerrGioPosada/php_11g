<?php
//entrada de datos
$documentoEmpleado=$_POST["textDocumentoEmpleado"];
$nombreEmpleado=$_POST["textNombreEmpleado"];
$sueldoBase=$_POST["textSueldoBase"];
$numeroHorasExtras=$_POST['textNumeroHorasExtras'];

////proceso
//para calcular el valor de las horas exrtras
$valorHoraExtra=3500;
$valorHorasExtras=$numeroHorasExtras*3500;
//para calcualar el descuento de salud
$descuentoSalud=$sueldoBase*8/100;
//para calcular el descuento de pension
$descuentoPension=$sueldoBase*4/100;
//para calcular el neto a pagar
$netoPagar=$sueldoBase+$valorHorasExtras-$descuentoSalud-$descuentoPension;



?>
<!DOCTYPE html>
<html lang="es">
  <head>
	<title>Nómina del empleado</title>
    <meta charset="utf-8">
  </head>
<body>
<h1>Nómina Empresa SAS</h1>
<h3>Programa para calcular el total a pagar a un empleado:</h3>

 <table width="300" border="1" align="center" cellpadding="4" cellspacing="0">
        <tr>
		 <td colspan="2" align="center">Nómina Sistemas CASD</td>
        </tr>
        <tr>
         <td width="50%">Documento del empleado:</td>
         <td><?php echo$documentoEmpleado;?></td>
        </tr>
        <tr>
         <td>Nombre del empleado:</td>
         <td><?php echo$nombreEmpleado;?></td>	
        </tr>
        <tr>
         <td>Sueldo base:</td>
         <td><?php echo$sueldoBase;?></td>	
        </tr>
        <tr>
         <td>Número de horas extras que trabajó:</td>
         <td><?php echo$numeroHorasExtras;?></td>	
        </tr>         
        <tr>
         <td>Valor a pagar por horas extras:</td>
         <td><?php echo$valorHorasExtras;?></td>	
        </tr> 	
        <tr>
         <td>Descuento de salud 8%:</td>
         <td><?php echo$descuentoSalud;?></td>	
        </tr> 		
        <tr>
         <td>Descuento de pensión 4%:</td>
         <td><?php echo$descuentoPension;?></td>	
        </tr>
        <tr>
         <td>Neto a pagar:</td>
         <td><?php echo$netoPagar;?></td>	
        </tr> 			
  </table>

</body>
</html>