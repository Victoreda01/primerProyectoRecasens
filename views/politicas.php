<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Politicas De Privacidad</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/hoja_estilo.css">
		<script src="../assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php 
		$_COOKIE['MisPedidos'] = array();
		
		session_start();
		if (isset($_SESSION['Sel'])) {
			if (isset($_POST['idprod'])) {
				$prodSel = new pedido($productos[$_POST['idprod']]);
				array_push($_SESSION['Sel'], $prodSel);
			}
		}else{
			$_SESSION['Sel'] = array(); 
		}
		
		?>
		<?php	
		require_once('../views/navbar.php');
		?>

		<div class="container">
			<div class="container centro" style="background-color: #F2F4F3;">			

				<div class="row pt-5 mb-4">
					<div class="col-lg-12 col-sm-12 col-12 mb-4">
					<h5 style="color:#49111C" class="tt-pp">1.       Plazo de conservación</h5>
					<hr style="color:#49111C" >
					<div class="pp-pp">
							
					Los datos personales proporcionados se conservarán durante el tiempo necesario para cumplir con la finalidad para la que se recaban y para determinar las posibles responsabilidades que se pudieran derivar de la finalidad, además de los períodos establecidos en la normativa de archivos y documentación. El plazo se determinará en la información proporcionada en el momento de recogida de datos.			
						</div>
					</div>
				</div>
				<div class="row mt-5 mb-4">
					<div class="col-lg-12 col-sm-12 col-12 mb-4">
					<h5 style="color:#49111C" class="tt-pp">2.       Sus Derechos de Protección de Datos</h5>
					<hr style="color:#49111C" >
						<div class="pp-pp">
						
						Cuando el tratamiento de su información personal se base en su consentimiento, puede retirar este consentimiento en cualquier momento; la retirada del consentimiento no afectará la legalidad del tratamiento basado en el consentimiento antes de su revocación;
Solicitar acceso a su información personal y obtener una copia de ella;
Obtener su información personal en un formato estructurado, de uso común y legible por máquina y solicitar que la transmitamos directamente a otra compañía en los casos en que su información personal sea tratada en base a su consentimiento previo o requerida para la ejecución de un contrato;
Hacer que se corrija su información personal cuando sea inexacta o incompleta;
Oponerse por motivos relacionados con su situación particular en caso de que Bocatapas tratara su información personal en base al interés legítimo.
Derecho a que su información personal sea borrada, incluidos los enlaces, la copia o la reproducción de dicha información, según lo permitido por la ley aplicable; por ejemplo, cuando su información esté desactualizada, no sea necesaria o sea ilegal, o cuando retire su consentimiento para nuestro tratamiento basado en dicho consentimiento, o cuando se oponga con éxito a nuestro tratamiento;
Obtener la limitación del tratamiento mientras procesamos su solicitud o impugnación relativa a la exactitud de su información personal o a la legalidad del tratamiento de su información personal y nuestros intereses legítimos para tratar esta información, o si usted necesita la información personal para litigios.
Para ejercitar sus derechos utilice los datos de contacto proporcionados en la Política de Privacidad facilitada en el momento de la recogida de sus datos. En cualquier caso, siempre puede contactar con el Delegado de Protección de Datos soporte@bocatapas.com.

Antes de proporcionarle información o corregir imprecisiones, podemos solicitarle que verifique su identidad y/o proporcione otros detalles para ayudarnos a responder a su solicitud.
						</div>
						
					</div>
				</div>

				<div class="row mt-5 pb-4">
					<div class="col-lg-12 col-sm-12 col-12 mb-4">
					<h5 style="color:#49111C" class="tt-pp">3.       Sus Derechos</h5>
					<hr style="color:#49111C" >
						<div class="pp-pp">
						
						Cuando el tratamiento de su información personal se base en su consentimiento, puede retirar este consentimiento en cualquier momento; la retirada del consentimiento no afectará la legalidad del tratamiento basado en el consentimiento antes de su revocación;
Solicitar acceso a su información personal y obtener una copia de ella; No tiene.
Obtener su información personal en un formato estructurado, de uso común y legible por máquina y solicitar que la transmitamos directamente a otra compañía en los casos en que su información personal sea tratada en base a su consentimiento previo o requerida para la ejecución de un contrato;
Hacer que se corrija su información personal cuando sea inexacta o incompleta;
Oponerse por motivos relacionados con su situación particular en caso de que Bocatapas tratara su información personal en base al interés legítimo.
Derecho a que su información personal sea borrada, incluidos los enlaces, la copia o la reproducción de dicha información, según lo permitido por la ley aplicable; por ejemplo, cuando su información esté desactualizada, no sea necesaria o sea ilegal, o cuando retire su consentimiento para nuestro tratamiento basado en dicho consentimiento, o cuando se oponga con éxito a nuestro tratamiento;
Obtener la limitación del tratamiento mientras procesamos su solicitud o impugnación relativa a la exactitud de su información personal o a la legalidad del tratamiento de su información personal y nuestros intereses legítimos para tratar esta información, o si usted necesita la información personal para litigios.
Para ejercitar sus derechos utilice los datos de contacto proporcionados en la Política de Privacidad facilitada en el momento de la recogida de sus datos. En cualquier caso, siempre puede contactar con el Delegado de Protección de Datos soporte@bocatapas.com.

Antes de proporcionarle información o corregir imprecisiones, podemos solicitarle que verifique su identidad y/o proporcione otros detalles para ayudarnos a responder a su solicitud.
						</div>
						
					</div>
				</div>

				
						
					</div>
				</div>
		<?php require_once 'footer.php'; ?>
	</body>
</html>
