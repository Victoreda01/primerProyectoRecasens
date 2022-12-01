<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Formulario en PHP</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/hoja_estilo.css">
		<script src="assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php session_start();
		if (isset($_SESSION['Sel'])) {
			if (isset($_POST['prod'])) {
				$prodSel = new pedido($productos[$_POST['prod']]);
				array_push($_SESSION['Sel'],$prodSel);
			}
		}else{
			$_SESSION['Sel'] = array(); 
		}
		
		
		?>
		<?php	
		require_once 'views/navbar.php';
		require_once 'views/cabecera.php'; 
		?>

		<div class="container">
			<div class="container centro" style="background-color: #F2F4F3;">			
			<div class="d-flex cuerpo justify-content-between">
			
				<div class="col-6 mt-5 mb-4 pt-2">
				<h6 class="centro sub">SOBRE NOSOTROS</h6>
					<div class="d-flex flex-row caja-index centro">
						<br>
						Somos uno de los pocos restaurantes de tapas de toda Barcelona,
						catalogado como uno de los mejores restaurantes ya que nuestras tapas son naturales 
						y las hacemos todas a mano y es por eso que estamos catalogados de esta manera  en los restaurantes de tapas.
						<br>
						Nuestro equipo está formado por una variedad de gente que sabe de 
						todo tipo de tapas del mundo dispuesto a lo que haga falta para satisfacer su apetito.				
					</div>
					<div class="d-flex flex-row caja-index der">
						<img  src="/assets/images/img2-index.png" width="90%" style="margin-left: 10%;">
					</div>
					<h6 class="centro sub" >TAPAS A DOMICILIO</h6>
					<div class="d-flex flex-row caja-index text-cente centro">
					<br>
						Ya repartimos tapas a domicilio!<br>
						Si quiere alguna tapa en concreto de nuestro catàlogo no dude en llamarnos al :<br><br>
						995 664 324<br><br>
						Estaremos encantados de que haga su pedido<br>
						Esperamos su llamada!!!
					</div>
					<div class="d-flex flex-row caja-index der">
					<img  src="/assets/images/img4-index.png" width="90%" style="margin-left: 10%;">
				</div>
				</div>


				<div class="col-6 mt-5 mb-4 pt-4">
					<div class="d-flex flex-row caja-index izq">
					<img  src="/assets/images/img1-index.png" width="90%">
					</div>
					<h6 class="centro sub" style="text-align: right;">NUEVA E-TAPA</h6>
					<div class="d-flex flex-row caja-index centro" style="text-align: right;">
					<br>
						Estrenamos nueva Tapa, son las croquetas de jamón Ibérico, hechas al punto con un relleno cremoso y tostadas hasta su doradez en un rico aceite de oliva de nuestro proveedor más fiable.
						<br>Un increible nuevo sabor salado junto a una textura cremosa y deliciosa le esperan en nuestro restaurante!
						<br><br> Esperamos su visita, que disfrute de su estancia y de nuestros alimentos tan bien cuidados.
					</div>
					<div class="d-flex flex-row caja-index izq">
						<img  src="/assets/images/img3-index.png" width="90%">
					</div>
					<br>
					<h6 class="centro sub" style="text-align: right;">LOCALICENOS</h6>
					<div class="d-flex flex-row text-right caja-index centro" style="text-align: right;"> 
						<br>
						Nusetro Restaurane se abre de lunes a sabado de 9:00 - 22:00 y nos puedes encontrar  en: <br>
						<br>Carrer Ntra. Sra. de Lourdes, 34, 08750 Molins de Rei, Barcelona
						<br>Estamos situados al lado de la escuela Bernat El Ferrer
						<br>
						<br>Te esperamos!!!
					</div>
				</div>
			</div>
			</div>
		</div>
		<?php require_once 'views/footer.php'; ?>
	</body>
</html>
