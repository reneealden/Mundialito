$(document).ready(function($) {
	
	$('#btnEnviar').click(function(event) {
		/* Act on the event */
		var objJson = JSON.stringify( { cmd: { email: $('#txtEmail').val(), password: $('#txtPassword').val() }, mod: 'LoginAdmin' } );
	
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

			var objJson = JSON.stringify( { cmd: { nameCompany: $('#txtCompany').val(), nameImageCompany: $('#inptImage').val() }, mod: 'SaveNameCompany' } );
			
			$.post('../controller/operaciones.php',{ json: $.base64.encode( objJson ) }, function(data, textStatus, xhr) {
				/*optional stuff to do after success */
				$('#txtCompany').val('')
				$('.blockResImg').empty();
			});
		}
	});

	$('#btnSaveUsers').click(function(event) {
		/* Act on the event */
		if( $('#inptExcel').val() != '' ){
			var objJson = JSON.stringify( { cmd: { nameFile: $('#inptExcel').val() }, mod: 'SaveUsersCsv' } );
			
			$.post('../controller/operaciones.php',{ json: $.base64.encode( objJson ) }, function(data, textStatus, xhr) {
				/*optional stuff to do after success */
				var objRes = $.parseJSON(data);
							
				if( objRes.success.message == 'ok' ){
					$('.blockResExcel').empty();
					$('.blockResExcel').hide();
					$('.blockErrorExcel').text('Datos Guardados correctamente');
					$('.blockErrorExcel').show().delay(3000).fadeOut();
				}
			});
		}
	});

	$('#navAdmin li a').click(function(event) {
		/* Act on the event */
		var $id = $(this).attr('id');
		$('form').hide();
		$('#form'+$id).show();
		$('#navAdmin li').each( function(index) {
			 /* iterate through array or object */
			 $('#navAdmin li:eq('+index+')').removeClass('active');
		});

 		$(this).parent('li').addClass('active');	

		event.preventDefault();
	});

	new AjaxUpload('#btnUploadCvs', {
        action: '../uploadFile/uploadExcel.php',
		onSubmit : function(file , ext){
			console.log(ext)
			if (! (ext && /^(csv|xls|xlsx|)$/.test(ext))){
				// extensiones permitidas
				$(".blockErrorExcel").text("Only format csv !");
				$(".blockErrorExcel").show().delay(3000).fadeOut();

				// cancela upload
				return false;
			} else {
				if($(".blockErrorExcel").is(":visible"))
				{
					$(".blockErrorExcel").fadeOut("slow");
				}
				$('.blockResExcel').show();
				$('#btnUploadCvs').text('Uploading...');
				this.disable();
			}
		},
		onComplete: function(file, response){
			$('#btnUploadCvs').text('Select');
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

				var file_icon = format[ext] || (ext.match(/csv/)!=null ? ext : 'unknown');
				
				// Agrega archivo a la lista
				var data = { 
					ruta: res.ruta,
					name: file.replace(/[^\.\w]/g,''),
					nameServer: res.filename,
					flag: 'C'
				};

				$('#inptExcel').val(data.nameServer);
				// Agregamos a la lista
				$("#archivoTemplate").tmpl(data).appendTo(".blockResExcel");
			}
			else
			{
				alert('No se pudo subir el archivo.');
			}

		} // onComplete
	});


	/*** Upload File ***/
	new AjaxUpload('#btnUploadImg' , {
        action: '../uploadFile/uploadImage.php',
		onSubmit : function(file , ext){
			if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
				// extensiones permitidas
				$(".blockError").text("Only format png, jpg, gif !");
				$(".blockError").show().delay(3000).fadeOut();

				// cancela upload
				return false;
			} else {
				if($(".blockError").is(":visible"))
				{
					$(".blockError").fadeOut("slow");
				}
				$('.blockResImg').show();
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

				var file_icon = format[ext] || (ext.match(/jpg|png|gif/)!=null ? ext : 'unknown');
				
				// Agrega archivo a la lista
				var data = { 
					ruta: res.ruta,
					name: file.replace(/[^\.\w]/g,''),
					nameServer: res.filename,
					flag: 'I'
				};

				$('#included_files').show();
				$('#inptImage').val(data.nameServer);
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

function removeFile( elem, name, flag ){
	var $divParent = $(elem).parent('.menuItem');

	if( name != '' ){
		var objJson = JSON.stringify( { cmd: { nameImage: name, flag: flag }, mod: 'deleteImage' } );

		$.post('../controller/operaciones.php',{ json: $.base64.encode( objJson ) }, function(data, textStatus, xhr) {
			/*optional stuff to do after success */
			var objRes = $.parseJSON(data);
			if( objRes.flag == 'ok' ){
				$divParent.remove();
			}
		});
	}
}