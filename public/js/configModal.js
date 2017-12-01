//Agregar curso
$("[id=modalAddCur]").ready(function () {
    $("#btnAddCurso").unbind('click');
    $('#btnAddCurso').click(function() {
        var modal = $("[id=modalAddCur] > .modal").clone();
        console.log(modal.length);
        $(modal).modal('show');
        $(modal).on('hidden.bs.modal', function (e) {
            $(this).remove();
        });
        $(modal).on('shown.bs.modal', function (e) {            
            $("#btnGuardarCurso").unbind('click');
            $("[id=btnGuardarCurso]").click(function () {
                var sNom = $(this).closest('.modal').find('[name=nombreCurso]').val();
                var iCup = parseInt($(this).closest('.modal').find('[name=iCupo]').val());
                var dPrec = parseFloat($(this).closest('.modal').find('[name=dPrecio]').val());
                var sDesc = $(this).closest('.modal').find('[name=sDescripcion]').val();
                var sFec = $(this).closest('.modal').find('[name=sFecha]').val();
                if($('[name=bolAdmin]').is(':checked') != 1) {
                    alert('Por favor indique que si es administrador');
                    return;
                }
                if(sNom == "" || iCup == "" || sDesc == "" || sFec == "") {
                    alert('Error llene los campos');
                    return;
                }
                var urlResource = location.origin + "/cursos";
                dataSend = {
                    sNombre: sNom,
                    iCupo: iCup,
                    dPrecio: dPrec,
                    sDescripcion: sDesc,
                    fFecha: sFec,
                    _token: $('meta[name="csrf-token"]').attr('content')
                };
                $.ajax({
                  type: 'POST',
                  url: urlResource,
                  data: dataSend,
                  dataType: 'json'
                }).done(function(response){
                    $(modal).modal('hide');
                    location.reload();
                });
            });
        });
    });
});
//Editar curso
$("[id=modalEditCur]").ready(function () {
    $("#btnEditCurso").unbind('click');
    $('#btnEditCurso').click(function() {
        var modal = $("[id=modalEditCur] > .modal").clone();
        console.log(modal.length);
        $(modal).modal('show');
        var curso = JSON.parse($(this).attr('data-info'));
        $(modal).find('[name=nombreCurso]').val(curso.sNombre);
        $(modal).find('[name=iCupo]').val(curso.iCupo);
        $(modal).find('[name=dPrecio]').val(curso.dPrecio);
        $(modal).find('[name=sDescripcion]').val(curso.sDescripcion);
        $(modal).find('[name=sFecha]').val(curso.fFecha);
        $(modal).find('[name=Cursoid]').val(curso.id);
        $(modal).on('hidden.bs.modal', function (e) {
            $(this).remove();
        });
        $(modal).on('shown.bs.modal', function (e) {            
            $("#btnEditarCurso").unbind('click');
            $("[id=btnEditarCurso]").click(function () {
                var sNom = $(this).closest('.modal').find('[name=nombreCurso]').val();
                var iCup = parseInt($(this).closest('.modal').find('[name=iCupo]').val());
                var dPrec = parseFloat($(this).closest('.modal').find('[name=dPrecio]').val());
                var sDesc = $(this).closest('.modal').find('[name=sDescripcion]').val();
                var sFec = $(this).closest('.modal').find('[name=sFecha]').val();
                var idCur = $(this).closest('.modal').find('[name=Cursoid]').val();
                if($('[name=bolAdmin]').is(':checked') != 1) {
                    alert('Por favor indique que si es administrador');
                    return;
                }
                if(sNom == "" || iCup == "" || sDesc == "" || sFec == "") {
                    alert('Error llene los campos');
                    return;
                }
                var urlResource = location.origin + "/cursos/"+idCur;
                dataSend = {
                    sNombre: sNom,
                    iCupo: iCup,
                    dPrecio: dPrec,
                    sDescripcion: sDesc,
                    fFecha: sFec,
                    _token: $('meta[name="csrf-token"]').attr('content')
                };
                $.ajax({
                  type: 'PATCH',
                  url: urlResource,
                  data: dataSend,
                  dataType: 'json'
                }).done(function(response){
                    $(modal).modal('hide');
                    location.reload();
                });
            });
        });
    });
});
//Inscribir al curso
$("[id=modalInscribir]").ready(function () {
    $("#btnInscribir").unbind('click');
    $('#btnInscribir').click(function() {
        debugger;
        var idCur = $(this).attr('idcurso');
        var modal = $("[id=modalInscribir] > .modal").clone();
        console.log(modal.length);
        $(modal).modal('show');
        $(modal).on('hidden.bs.modal', function (e) {
            $(this).remove();
        });
        $(modal).on('shown.bs.modal', function (e) {            
            $("#btnInscribirCurso").unbind('click');
            $("[id=btnInscribirCurso]").click(function () {
                var sNom = $(this).closest('.modal').find('[name=nombreCliente]').val();
                if(sNom == "") {
                    alert('Error llene los campos');
                    return;
                }
                var urlResource = location.origin + "/inscripciones";
                dataSend = {
                    sNombre: sNom,
                    idCurso: idCur,
                    _token: $('meta[name="csrf-token"]').attr('content')
                };
                $.ajax({
                  type: 'POST',
                  url: urlResource,
                  data: dataSend,
                  dataType: 'json'
                }).done(function(response){
                    location.reload();
                });
            });
        });
    });
});