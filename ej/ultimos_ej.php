<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Operaciones en PHP</h1>
		<form method="POST">
			<p>
				<label>Operante 1</label>
				<input type="number" name="num1"/>
			</p>
			
			<p>
				<label>Operante 2</label>
				<input type="number" name="num2"/>
			</p>
			
			<input type="submit" name="Suma" value="+"></input>
			<input type="submit" name="Resta" value="-"></input>
			<input type="submit" name="Multi" value="*"></input>
			<input type="submit" name="Div" value="/"></input>

		</form>
</body>
</html>
<?php

echo "<h2> Ejercicio 4 </h2>";
	if ((isset($_GET['n1']) AND  (isset($_GET['n2'])))) {
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		echo 'Suma: '.$n1.' + '.$n2.' = '.($n1+$n2); echo "<br>";
		echo 'Resta: '.$n1.' - '.$n2.' = '.($n1-$n2); echo "<br>";
		echo 'Multiplicación: '.$n1.' x '.$n2.' = '.($n1*$n2); echo "<br>";
		echo 'División: '.$n1.' / '.$n2.' = '.($n1/$n2); echo "<br>";
	}else{
		echo "<p> No hay Datos que procesar </p>";
	}
     
      
	  echo "<br>";

	  echo "<h2> Ejercicio 5 </h2>";
echo 'En medio de '.$n2.' y '.$n1.' estan los numeros ';
    for($i = $n2; $i<=$n1; $i++ ){
      if($i!=$n1){
        echo  $i.', ';
      }else{
		echo $i;
	  }
    }
	echo "<br>";

	echo "<h2> Ejercicio 6 </h2>";
	echo "<table>";
	for ($i=1; $i <= 10; $i++) { 
		echo "<tr>";
			for ($j=1; $j <= 10; $j++) {
				echo '<td>|  '.($i*$j).' |</td>';
			}
		echo "</tr>";
		
	}
	echo "</table>";

	echo "<h2> Ejercicio 7 </h2>";
		$op1= (int)$_POST['num1'];
		$op2 = (int)$_POST['num2'];
		if (isset($_POST['Suma'])) {
			echo $op1.' + '.$op2.' = '.($op1+$op2);
		}elseif (isset($_POST['Resta'])) {
			echo $op1.' - '.$op2.' = '.($op1-$op2);
		}elseif (isset($_POST['Multi'])) {
			echo $op1.' * '.$op2.' = '.($op1*$op2);
		}elseif (isset($_POST['Div'])) {
			echo $op1.' / '.$op2.' = '.($op1/$op2);
		}


	echo "<h2> Ejercicio 8 </h2>";
	$arr = array(5,2,4,5,98,42,12,8);
	sort($arr);
	$length = count($arr);
	if (isset($_GET['num'])) {
		$num = $_GET['num'];
		
		if(is_numeric(array_search($num,$arr))){
			echo 'El numero: '.$num.' esta en el array.';
		}else{
			echo 'El numero: '.$num.' no esta en el array.';

		}
	}

	echo '<p> Los numeros del array son: ';
	for ($i=0; $i < count($arr) ; $i++) { 
		if ($i != count($arr)-1) {
			echo $arr[$i].' , ';
		}else{
			echo $arr[$i];
		}	
	}
	echo '<p>Longitud del Array: '.count($arr).'</p>';

	echo "<h2> Ejercicio 9 </h2>";
	$juegos = array("ACCION", "AVENTURA" ,"DEPORTES","GTA", "ASSASINS", "FIFA 19","COD" ,"CRASH" ,"PES 19","PUGB", "Prince of Persia", "MOTO GP 19");
	$num = 0;
	echo '<table>';
	for ($i=0; $i < 4; $i++) { 
		echo "<tr>";
		for ($j=$num; $j < $num+3; $j++) { 
			echo '<td>'.$juegos[$j].'</td>';
		}
		$num+=3;
		echo "</tr>";
	}
	echo '</table>';


	$arr = array(
		array(
			'cat' => 'ACCION',
			'pelis' => array('GTA', 'COD','PUBG')
		),
		array(
			'cat' => 'AVENTURA',
			'pelis' => array('ASSASINS', 'CRASH','Prince of Persia')
		),
		array(
			'cat' => 'DEPORTES',
			'pelis' => array('FIFA 19', 'PES 19','MOTO GP 19')
		)
	);
	echo "<h2> Try 2 </h2>";
	echo '<table>';
	echo '<tr>';
	foreach ($arr as $key => $pelicula) {
		
		echo '<td>';
		echo $pelicula['cat'];
		echo '</td>';
		$arr_pel = $pelicula['pelis'];
		echo '<tr>';

		foreach ($arr_pel as $k => $value) {
			echo '<td>';
			echo $value;
			echo '</td>';
		}
		echo '</tr>';

	}
	echo '</tr>';

	echo '</table>';


	







/*
if(isset($_GET['nI']) AND isset($_GET['nF']) ){
for ($i=$_GET['nI']; $i <= $_GET['nF'] ; $i++) { 
    if ($i%2 == 0) {
        echo $i.', ';
    }
}
}else{
    echo "Faltan datos por recibir.";
}
/*
ACT RUBEEEEN
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Formulario en PHP</title>
	</head>
	<body>
		<h1>Formulario en PHP</h1>
		<form method="POST" action="recibir.php">
			<p>
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" />
			</p>
			
			<p>
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" />
			</p>
			
			<input type="submit" value="Enviar datos"/>
		</form>
	</body>
</html>

*/
?>