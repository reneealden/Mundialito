$(document).ready(function($) {
	$('#fancyRules').fancybox({
		'scrolling'     : 'no',
        'overlayOpacity': 0.1,
        'minWidth': 640,
        'showCloseButton'   : false,
        'content' : '<div class="blockFancybox"><h2>Tabla de Puntos</h2><table id="tblPuntaje"><tbody><tr><td>Partido Ganado</td><td>3 puntos</td></tr><tr><td>Partido Empatado</td><td>1 punto</td></tr><tr><td>Equipo Campeón</td><td>20 puntos</td></tr><tr><td>Equipo Sub-Campeón</td><td>15 puntos</td></tr><tr><td>Tercer Lugar</td><td>10 puntos</td></tr><tr><td>Cuarto Lugar</td><td>5 puntos</td></tr><tr><td>Equipo del Balón de Oro</td><td>5 puntos</td></tr><tr><td>Equipo de la Bota de Oro</td><td>5 puntos</td></tr><tr><td>Equipo del Guante de Oro</td><td>5 puntos</td></tr><tr><td>Equipo Premio Fair Play</td><td>5 puntos</td></tr></tbody></table><div class="blockInformation">Premio otorgado al Mejor jugador del Mundial<br><br>Premio otorgado al goleador del Mundial<br><br>Premio otorgado al Mejor Arquero del Mundial<br><br>Premio otorgado al equipo más disciplinado del Mundial</div></div>'
	});
	
	var liftoffTime = new Date();
	liftoffTime.setDate(liftoffTime.getDate() + 5);
	
	$('#padZeroes').countdown({until: liftoffTime, padZeroes: true});

	$('.btnFancRes').fancybox({
		'scrolling'     : 'no',
        'overlayOpacity': 0.1,
        'maxWidth': 680,
        'showCloseButton'   : false
	});
});	