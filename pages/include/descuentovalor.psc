Algoritmo descuento
	definir documentoCliente,nombreCliente Como Caracter;
	definir valorCompra,valorDescuento,valorPagar Como Real;
	escribir "calcular el descuento de una compra";
	escribir "digite el nombre del cliente";
	Leer documentoCliente;
	Escribir "digite el nombre del cliente"
	leer nombreCliente;
	Escribir "digite el valor de la compra";
	leer valorCompra;
	
	si (valorCompra<50000) Entonces
		porcentajeDescuento=0;
	SiNo
		si (valorCompra>50000 && valorCompra<100000) Entonces
			porcentajeDescuento=5;
		SiNo
			si (valorCompra>100000 && valorCompra<200000) Entonces
				porcentajeDescuento=10;
			SiNo
				si (valorCompra>200000 && valorCompra<500000) Entonces
					porcentajeDescuento=20;
				SiNo

						porcentajeDescuento=30;
					FinSi					
				FinSi
			FinSi
		FinSi
	// = <- Asignacion de derecha a izquierda
		valorDescuento <- valorCompra*porcentajeDescuento/100;
		valorPagar = valorCompra-valorDescuento;
		
		Borrar pantalla
		Escribir "el documento del cliente es:", documentoCliente;
		Escribir "el nombre del cliente es:", nombreCliente;
		Escribir "el valor de la compra es:", valorCompra;
		Escribir "el porcentaje de descuento es:", porcentajeDescuento;
		Escribir "el descuento es, usted ahorro:",valorDescuento;
		Escribir "el valor a pagar es:", valorPagar;
		
		
FinAlgoritmo
