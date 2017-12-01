$(document).ready(function () {
	$('.card-text').each(function(event){ /* select all divs with the item class */
	
		var max_length = 220; /* set the max content length before a read more link will be added */
		
		if($(this).html().length > max_length){ /* check for content length */
			
			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
			var long_content	= $(this).html().substr(max_length);
			
			$(this).html(short_content+
						 '<a href="#" class="read_more"><br/>Leer mas</a>'+
						 '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
						 
			$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
				event.preventDefault(); /* prevent the a from changing the url */
				$(this).hide(); /* hide the read more button */
				$(this).parents('.card-text').find('.more_text').show(); /* show the .more_text span */
		 
			});
			
		}
		
	});
    $("[id=btnRegistrar]").click(function () {
        var sNom = $('[name=nombreUsuario]').val();
        var sEm = $('[name=emailUsuario]').val();
        var sPass = $('[name=passUsuario]').val();
        if(sNom == "" || sEm == "" || sPass == "") {
            alert('Error llene los campos');
            return;
        }
        var urlResource = location.origin + "/users_admin";
        dataSend = {
            sNombre: sNom,
            email: sEm,
            password: sPass,
            _token: $('meta[name="csrf-token"]').attr('content')
        };
        $.ajax({
          type: 'POST',
          url: urlResource,
          data: dataSend
        }).done(function(response){
            location.href = location.origin;
        });
    });
    $("[id=btnLogin]").click(function () {
        var sEm = $('[name=emailUsuario]').val();
        var sPass = $('[name=passUsuario]').val();
        if(sEm == "" || sPass == "") {
            alert('Error llene los campos');
            return;
        }
        var urlResource = location.origin + "/login";
        dataSend = {
            email: sEm,
            password: sPass,
            _token: $('meta[name="csrf-token"]').attr('content')
        };
        $.ajax({
          type: 'POST',
          url: urlResource,
          data: dataSend
        }).done(function(response){
            location.href = location.origin;
        });
    });
});