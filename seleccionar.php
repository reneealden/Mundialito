<?php session_start();  
 	if ( !isset( $_SESSION['user'] )){
 		header("Location: index.php");
 	}
?>
<!DOCTYPE html>
<html>	
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Mundialito</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="blockHeader">
		<div class="wrapperHeader"></div>		
	</div>
	<div class="blockMain2">
		<div class="wrapperMain clearfix">
			<!--<div class="blockCol1">&nbsp;				
			</div>-->
			<div class="blockCol12 clearfix">
					<div class="blockCol7">
						<h3 class="subtitle">Grupos del Mundial</h3>
						<div id="blockSelec" class="clearfix">
							<div class="blockCol5 clearfix">
								<div class="blockCol2">
									<ul class="listGroups">
										<li><small>GRUPO</small><span>A</span></li>	
										<li><small>GRUPO</small><span>B</span></li>	
										<li><small>GRUPO</small><span>C</span><br></li>	
										<li><small>GRUPO</small><span>D</span></li>	
									</ul>
								</div>
								<div class="blockCol8">
									<div class="blockCountry clearfix">
										<div id="Brasil" class="itCountry draggable ui-widget-content">
											<img src="Flags/Brasil.jpg">BRASIL</div>
										<div id="Croacia" class="itCountry draggable ui-widget-content">
											<img src="Flags/Croacia.jpg">CROACIA</div>
										<div id="Mexico" class="itCountry draggable ui-widget-content">
											<img src="Flags/Mexico.jpg">MEXICO</div>
										<div id="Camerun" class="itCountry draggable ui-widget-content">
											<img src="Flags/Camerun.jpg">CAMERUN</div>
									</div>
									<div class="blockCountry clearfix">
										<div class="itCountry">
											<img src="Flags/espana.jpg">ESPAÑA</div>
										<div class="itCountry">
											<img src="Flags/holanda.jpg">HOLANDA</div>
										<div class="itCountry">
											<img src="Flags/chile.jpg">CHILE</div>
										<div class="itCountry">
											<img src="Flags/australia.jpg">AUSTRALIA</div>
									</div>
									<div class="blockCountry clearfix">
										<div class="itCountry">
											<img src="Flags/colombia.jpg">COLOMBIA</div>
										<div class="itCountry">
											<img src="Flags/grecia.jpg">GRECIA</div>
										<div class="itCountry">
											<img src="Flags/costamarfil.jpg">COSTA DE MARFIL</div>
										<div class="itCountry">
											<img src="Flags/japon.jpg">JAPON</div>
									</div>
									<div class="blockCountry clearfix">
										<div class="itCountry">
											<img src="Flags/Uruguay.jpg">URUGUAY</div>
										<div class="itCountry">
											<img src="Flags/costarica.jpg">COSTA RICA</div>
										<div class="itCountry">
											<img src="Flags/inglaterra.jpg">INGLATERRA</div>
										<div class="itCountry">
											<img src="Flags/italia.jpg">ITALIA</div>
									</div>
								</div>
							</div>
							<div class="blockCol5">
								<div class="blockCol2">
									<ul class="listGroups">
										<li><small>GRUPO</small><span>E</span></li>	
										<li><small>GRUPO</small><span>F</span></li>	
										<li><small>GRUPO</small><span>G</span><br></li>	
										<li><small>GRUPO</small><span>H</span></li>	
									</ul>
								</div>
								<div class="blockCol8">
									<div class="blockCountry clearfix">
										<div class="itCountry">
											<img src="Flags/suiza.jpg">SUIZA</div>
										<div class="itCountry">
											<img src="Flags/ecuador.jpg">ECUADOR</div>
										<div class="itCountry">
											<img src="Flags/francia.jpg">FRANCIA</div>
										<div class="itCountry">
											<img src="Flags/honduras.jpg">HONDURAS</div>
									</div>
									<div class="blockCountry clearfix">
										<div class="itCountry">
											<img src="Flags/argentina.jpg">ARGENTINA</div>
										<div class="itCountry">
											<img src="Flags/bosnia.jpg">BOSNIA H.</div>
										<div class="itCountry">
											<img src="Flags/iran.jpg">IRAN</div>
										<div class="itCountry">
											<img src="Flags/nigeria.jpg">NIGERIA</div>
									</div>
									<div class="blockCountry clearfix">
										<div class="itCountry">
											<img src="Flags/alemania.jpg">ALEMANIA</div>
										<div class="itCountry">
											<img src="Flags/portugal.jpg">PORTUGAL</div>
										<div class="itCountry">
											<img src="Flags/ghana.jpg">GHANA</div>
										<div class="itCountry">
											<img src="Flags/estadosunidos.jpg">ESTADOS UNIDOS</div>
									</div>
									<div class="blockCountry clearfix">
										<div class="itCountry">
											<img src="Flags/belgica.jpg">BELGICA</div>
										<div class="itCountry">
											<img src="Flags/argelia.jpg">ARGELIA</div>
										<div class="itCountry">
											<img src="Flags/rusia.jpg">RUSIA</div>
										<div class="itCountry">
											<img src="Flags/costamarfil.jpg">COSTA DEL SUR</div>
									</div>
								</div>
							</div>
						</div>
						<h3 class="subtitle">Mis selecciones <span>Arrastra las banderas de las selecciones de los equipos que te representen</span></h3>
						<div id="blockSelecRes" class="clearfix">
							<div class="blockCountry clearfix">
								<div class="itCountry" class="ui-widget-header">
									Equipo 1
								</div>
								<div class="itCountry">
									Equipo 2
								</div>
								<div class="itCountry">
									Equipo 3
								</div>
								<div class="itCountry">
									Equipo 4
								</div>
							</div>		
							<div class="blockCountry clearfix">
								<div class="itCountry">
									Equipo 5
								</div>
								<div class="itCountry">
									Equipo 6
								</div>
								<div class="itCountry">
									Equipo 7
								</div>
								<div class="itCountry">
									Equipo 8
								</div>
							</div>
						</div>
						<h3 class="subtitle">Mi presupuesto <span>tienes un presupuesto de $20</span></h3>
						<div id="blockPres">
							<ul class="listPres">
								<li>
									<span class="first">Usado</span>
									<span class="second">$</span>
								</li>	
								<li>
									<span class="first">Disponible</span>
									<span class="second"><em class="alert">$</em> te haz excedido del presupuesto disponible</span>
								</li>	
							</ul>
						</div>
						<div id="blockBtn">
							<a href="index.php" class="btn btn-primary">Enviar</a>	
						</div>						
					</div>
					<div class="blockCol3 blockPadding">
						<h3 class="subtitle">Reglas</h3>
						<p class="vineta">1. Debes elegir 8 equipos, los cuales acumularán puntos para ti a lo largo de todo el Mundial, incluida la Final.</p>
						<p class="vineta">2. Solo puedes elegir 1 equipo por cada Grupo y debes respetar tu presupuesto de $20.</p>
						<br><br>
						<h3 class="subtitle">Tabla de Puntos</h3>
						<table id="tblPuntaje">
						<tbody>
						<tr>
							<td>Partido Ganado</td>
							<td>3 puntos</td></tr>
						<tr><td>Partido Empatado</td>
							<td>1 punto</td></tr>
						<tr><td>Equipo Campeón</td>
							<td>20 puntos</td></tr>
						<tr><td>Equipo Sub-Campeón</td>
							<td>15 puntos</td></tr>
						<tr><td>Tercer Lugar</td>
							<td>10 puntos</td></tr>
						<tr><td>Cuarto Lugar</td>
							<td>5 puntos</td></tr>
						<tr><td>Equipo del Balón de Oro</td>
							<td>5 puntos</td></tr>
						<tr><td>Equipo de la Bota de Oro</td>
							<td>5 puntos</td></tr>
						<tr><td>Equipo del Guante de Oro</td>
							<td>5 puntos</td></tr>
						<tr><td>Equipo Premio Fair Play</td>
							<td>5 puntos</td></tr>
						</tbody>
						</table>
					</div>
				</div>
			<!--<div class="blockCol1">&nbsp;</div>-->
		</div>
	</div>
	<div class="blockFooter">
		<div class="wrapperFooter">
			<ul class="listFooter">
<li>© Derechos Reservados, 2014, VIRTUAL ENTERTAINMENT NETWORK SAC
</li>	
<li><a href="#">Términos y Condiciones</a></li>
<li class="last">Mail de contacto: contacto@futfan.pe</li>
			</ul>
		</div>
	</div>
	<script src="js/libs/jquery-1.7.min.js"></script>
    <script src="js/libs/jquery.fancybox.pack.js"></script>
   	<script src="js/libs/jquery.mousewheel-3.0.6.pack.js"></script>
   	<script src="js/libs/jquery-ui.js"></script>
   	<script src="js/custom/customSelect.js"></script>  
</body>
</html>