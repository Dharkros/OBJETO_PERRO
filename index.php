<?php
	/*Crear perros con clases*/
	require ("perro.php");

	/*Objeto perro*/
	$Pipo = new perro("Pipo","Yorsay",2);
	$Lucas = new perro("Lucas","Labrado",12);

	/*Mostrar atributos de objeto perro*/
	echo "<h1>".$Pipo->getNombre()."</h1>";
	echo "Raza: ".$Pipo->getRaza()."<br>";
	echo "Peso: ".$Pipo->getPeso()."Kg";
	
	echo "<h1>".$Lucas->getNombre()."</h1>";
	echo "Raza: ".$Lucas->getRaza()."<br>";
	echo "Peso: ".$Lucas->getPeso()."Kg";
?>
