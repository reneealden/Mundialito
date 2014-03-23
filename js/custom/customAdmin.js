$(document).ready(function($) {
	
	$('#btnEnviar').click(function(event) {
		/* Act on the event */
		var objJson = JSON.stringify( { cmd: { email: $('#txtEmail').val(), password: $('#txtPassword').val() }, mod: 'Login' } );
	
		$.post('../controller/operaciones.php',{ json: $.base64.encode( objJson ) }, function(data, textStatus, xhr) {
			/*optional stuff to do after success */
			var objRes = $.parseJSON(data);
			if( objRes.success == 'ok' ){
				location.href = 'Admin.php';
			}
		});
		
	});

	$('#btnSaveComp').click(function(){
		
		if( $('#txtCompany').val() != undefined && $('#txtCompany').val() != '' ){

			var objJson = JSON.stringify( { cmd: { nameCompany: $('#txtCompany').val() }, mod: 'SaveNameCompany' } );

			$.post('../controller/operaciones.php',{ json: $.base64.encode( objJson ) }, function(data, textStatus, xhr) {
				/*optional stuff to do after success */
				$('#txtCompany').val('')
				$('.blockResImg').empty();
			});
		}
	});

	$('#navAdmin li a').click(function(event) {
		/* Act on the event */
		var $id = $(this).attr('id');
		$('form').hide();
		$('#form'+$id).show();
 			

		event.preventDefault();
	});


	/*** Upload File ***/
	new AjaxUpload('#btnUploadImg' , {
        action: '../uploadFile/uploadImage.php',
		onSubmit : function(file , ext){
			if (! (ext && /^(jpg|png|jpeg|gif|pdf|xls|xlsx|doc|docx|ppt|pptx)$/.test(ext))){
				// extensiones permitidas
				$("#msn-error").text("Only format png, jpg, gif, pdf, xls, doc and ppt !");
				$("#msn-error").fadeIn("slow");

				// cancela upload
				return false;
			} else {
				if($("#msn-error").is(":visible"))
				{
					$("#msn-error").fadeOut("slow");
				}
				$('#btnUploadImg').text('Uploading...');
				this.disable();
			}
		},
		onComplete: function(file, response){
			$('#btnUploadImg').text('Select');
			// enable upload button
			this.enable();

			var res;
			try {
				res = jQuery.parseJSON(response);
			} catch( err ) {
				res = {success: false};
			}

			if( res.success )
			{
				var ext = file.substr(file.lastIndexOf('.') + 1);
				
				var format = [];
				format['docx'] = 'doc';
				format['xlsx'] = 'xls';
				format['pptx'] = 'ppt';
				format['jpeg'] = 'jpg';

				var file_icon = format[ext] || (ext.match(/jpg|png|gif|pdf|xls|doc|ppt/)!=null ? ext : 'unknown');
				
				// Agrega archivo a la lista
				var data = { 
					ruta:res.ruta,
					name:file.replace(/[^\.\w]/g,''),
					nameServer: res.filename
				};

				$('#included_files').show();

				// Agregamos a la lista
				$("#archivoTemplate").tmpl(data).appendTo(".blockResImg");
			}
			else
			{
				alert('No se pudo subir el archivo.');
			}

		} // onComplete
	});


});

