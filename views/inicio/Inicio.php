<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>BOCATAPAS</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/hoja_estilo.css">
	</head>
<body>
		<div class="container">
			<div class="container centro" style="background-color: #F2F4F3;">			

				<div class="row pt-5 mb-4">
					<div class="col-lg-6 col-sm-12 mb-4">
					<h5 class="sub">SOBRE NOSOTROS</h5>
					<div class="textoInd">
							<br>
							Somos uno de los pocos restaurantes de tapas de toda Barcelona,
							catalogado como uno de los mejores restaurantes ya que nuestras tapas son naturales 
							y las hacemos todas a mano y es por eso que estamos catalogados de esta manera  en los restaurantes de tapas.
							<br>
							Nuestro equipo está formado por una variedad de gente que sabe de 
							todo tipo de tapas del mundo dispuesto a lo que haga falta para satisfacer su apetito.				
						</div>
					</div>
					<div class="col-lg-6 col-sm-12 mb-4">
						<img  src="assets/images/img1-index.png" width="100%">
					</div>
				</div>

				<div class="row mt-5 mb-4">
					<div class="col-lg-6 col-sm-12 mb-4">
					<img  src="assets/images/img2-index.png" width="100%">
					</div>
					<div class="col-lg-6 col-sm-12 mb-4">
					<h5 class="sub" style="text-align: right;">NUEVA E-TAPA</h5>
						<div style="text-align: right;" class="textoInd">
						<br>
							Estrenamos nueva Tapa, son las croquetas de jamón Ibérico, hechas al punto con un relleno cremoso y tostadas hasta su doradez en un rico aceite de oliva de nuestro proveedor más fiable.
							<br>Un increible nuevo sabor salado junto a una textura cremosa y deliciosa le esperan en nuestro restaurante!
							<br><br> Esperamos su visita, que disfrute de su estancia y de nuestros alimentos tan bien cuidados.
						</div>
						
					</div>
				</div>

				<div class="row mt-5 mb-4">
					<div class="col-lg-6 col-sm-12 mb-4">
					<h5 class="sub text-left">TAPAS A DOMICILIO</h5>
						<div class="text-left textoInd">
						<br>
							Ya repartimos tapas a domicilio!<br>
							Si quiere alguna tapa en concreto de nuestro catàlogo no dude en llamarnos al :<br><br>
							995 664 324<br><br>
							Estaremos encantados de que haga su pedido<br>
							Esperamos su llamada!!!
						</div>
					</div>
					<div class="col-lg-6 col-sm-12 mb-4">
					<img  src="assets/images/img3-index.png" width="100%">
					</div>
				</div>
				<div class="row mt-5 pb-5">
					<div class="col-lg-6 col-sm-12 mb-4">
					<img  src="assets/images/img4-index.png" width="100%">
					</div>
					<div class="col-lg-6 col-sm-12 mb-4">
					<h5 class=" sub" style="text-align: right; ">LOCALICENOS</h5>
						<div style="text-align: right;" class="textoInd"> 
							<br>
							Nusetro Restaurane se abre de lunes a sabado de 9:00 - 22:00 y nos puedes encontrar  en: <br>
							<br>Carrer Ntra. Sra. de Lourdes, 34, 08750 Molins de Rei, Barcelona
							<br>Estamos situados al lado de la escuela Bernat El Ferrer
							<br>Te esperamos!!!
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		
		<script src="/assets/js/bootstrap.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var dropdownButton = document.getElementById("myDropdownButton");
  var dropdownMenu = document.getElementById("myDropdown");

  dropdownButton.addEventListener("click", function() {
    dropdownMenu.classList.toggle("show");
  });

  window.addEventListener("click", function(event) {
    if (!event.target.matches(".dropdown-toggle")) {
      if (dropdownMenu.classList.contains("show")) {
        dropdownMenu.classList.remove("show");
      }
    }
  });
});
</script>
	</body>
	
</html>