<!DOCTYPE html>
<html>
<body>

	<?php

	function saltoLinea(){
		echo "<br>";
	}

	function burbuja($array){
		for ($i=1; $i < count($array); $i++) { 
			for ($j=0; $j < count($array)-$i; $j++) {
				//Comparamos si el primer elemento es mayor que el siguiente 
				if ($array[$j] > $array[$j+1]) {
					//Guardamos el contenido del segundo valor
					$siguiente = $array[$j+1];
					//Asignamos en el segundo valor el contenido del primer valor
					$array[$j+1] = $array[$j];
					//En el primer valor asignamos la variable que contiene el segundo valor
					$array[$j] = $siguiente;
				}//Condicional
			}//Segundo FOR
		}//Primer FOR
		return $array;
	}

	function seleccionDirecta($array){
		for ($i=0; $i < count($array); $i++) {
			//De momento el valor más bajo es que tenemos en la primera posición así que nos guardamos ese numero
			$min = $i;
			for ($j=$i+1; $j < count($array); $j++) {
				//Y ahora comparamos si hay algun valor en toda la array mayor que el primer valor que hemos cogido
				if ($array[$min] > $array[$j]) {
					//Guardamos ese valor que es mayor que el menor
					$min = $j;
					//Cojemos el valor donde estaba antes el antiguo valor que era el menor
					$aux = $array[$min];
					//Intercambiamos la posición del que hemos encontrado en la primera posición
					$array[$min] = $array[$i];
					//Y cambiamos el valor con anterior y lo ponemos donde encontramos el valor que era el mayor
					$array[$i] = $aux;
				}//Condicional
			}//Segundo FOR
		}//Primer FOR
		return $array;
	}


	$numeros = array(5,8,6,2,9,1);

	print("Este es el valor inicial de la array: ");

	foreach ($numeros as $i) {
		print($i);
	}

	saltoLinea();

	//////////////////////////////////////////////////////////
	//Función de la Burbuja
	$arrayordenada = burbuja($numeros);

	print("Función de la Burbuja :");

	foreach ($arrayordenada as $iterador) {
		print($iterador);
	}

	saltoLinea();
	////////////////////////////////////////////////////////////
	//Función de Selección Directa

	$arrayordenada = seleccionDirecta($numeros);

	print("Función de Selección Directa: ");

	foreach ($arrayordenada as $iterador) {
		print($iterador);
	}

	saltoLinea();

	////////////////////////////////////////////////////////////

	echo "<hr>";
	$user_numbers = $_POST["numero"];//Guardamos lo que el usuario ha puesto en la entrada de texto.
	
	echo "Valores que el usuario ha puesto: " . $user_numbers;

	$user_numbers_total = explode(",", $user_numbers);// Separamos los numeros escritos por el criterio de comas.
	echo "<br>";


	/////////////////////////////////////////////////////////
	//Función de la Burbuja
	$arrayuser = burbuja($user_numbers_total);
	saltoLinea();

	print("Función de la burbuja");
	saltoLinea();

	print_r($arrayuser);

	saltoLinea();
	////////////////////////////////////////////////////////
	//Función de seleccionDirecta
	$arrayuser = seleccionDirecta($user_numbers_total);
	saltoLinea();

	print("Función de seleccionDirecta");
	saltoLinea();

	print_r($arrayuser);

	saltoLinea();
	////////////////////////////////////////////////////////

	echo "<hr>";

	echo "Valores que se han generado de forma aleatoria";
	saltoLinea();
	$random = array();
	$max_num = 5;//Generamos el numero total de numeros aleatorios que queremos dar
	for ($i=0;$i<$max_num;$i++) {
		$num_aleatorio = rand(1,100);//Generemos un numero aleatorio entre el 1 y el 100.
		array_push($random,$num_aleatorio);//Agregamos los numeros generados de forma aleatoria en la array;
	}

	for ($j=0;$j<count($random);$j++)
		echo $random[$j] ."\t";
	////////////////////////////////////////////////////////
	//Función de la Burbuja
	$arrayuser = burbuja($random);
	saltoLinea();

	print("Función de la burbuja");
	saltoLinea();

	foreach ($arrayuser as $iterador) {
		print($iterador) . "\t";
	}
	saltoLinea();
	//////////////////////////////////////////////////////////
	//Función de seleccionDirecta
	$arrayuser = seleccionDirecta($random);

	print("Función de seleccionDirecta");
	saltoLinea();

	foreach ($arrayuser as $iterador) {
		print($iterador) . "\t";
	}

	saltoLinea();

	?>

</body>
</html>