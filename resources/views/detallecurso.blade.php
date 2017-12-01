@include('layouts.app')
@if(isset($curso))
<div class="container" style="padding-top: 80px;">
	<div class="col-md-8">
		<h1 class="col-md-11"> {{$curso->sNombre}} </h1>
		<p class="col-md-11">{{$curso->sDescripcion}}</p>
		<p class ="col-md-3">Cupo: {{$curso->iCupo}}</p>
		<p class ="col-md-3">Fecha: {{$curso->fFecha}}</p>
		<p class ="col-md-4">Precio: $ {{$curso->dPrecio}} MXN</p>
	</div>
	<div class="col-md-4">
		<button style="margin-top: 20px;" class="btn btn-primary col-md-12" id="btnInscribir" idCurso="{{$curso->id}}">Inscribir al curso</button>
		<button style="margin-top: 20px;" class="btn btn-primary col-md-12" id="btnEditCurso" data-info="{{$curso}}">Editar el curso</button>
	</div>
	<div class="col-md-8" style="margin-top: 50px;">
		<h2 class="col-md-11"> Inscritos </h2>
		  <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Nombre</th>
		        <th>Email</th>
		      </tr>
		    </thead>
		    <tbody>
		    	@foreach($inscripciones as $inscripcion)
			      <tr>
			        <td>{{$inscripcion->cliente->sNombre}}</td>
			        <td>{{$inscripcion->cliente->sEmail}}</td>
			      </tr>
		      	@endforeach
		    </tbody>
		  </table>
	</div>
</div>
<div style="display:none;" id='modalInscribir'>
    @include('modals.modalInscribir')
</div>
<div style="display:none;" id='modalEditCur'>
    @include('modals.modalEditCurso')
</div>
@else
<div class="container" style="padding-top: 80px;">
	<h1 id="cursos" class="col-xs-11 display-4 text-xs-center m-y-3">Curso no encontrado</h1>
</div>
@endif

@include('layouts.footer')