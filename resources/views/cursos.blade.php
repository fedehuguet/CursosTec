@include('layouts.app')
<div class="container" style="padding-top: 80px;">
	<!-- cursos -->
      <div class="col-md-12">
        <h1 id="cursos" class="col-xs-11 display-4 text-xs-center m-y-3">Cursos Disponibles</h1>
        <button class="btn btn-primary col-md-1 m-y-3" id="btnAddCurso">+</button>
      </div>
      <div class="row">
        @foreach($cursos as $curso)
        <a href="/cursos/{{$curso->id}}">
        	<div class="col-md-6 col-lg-4">
          		<div class="card">
            		<div class="card-block">
              			<h4 class="card-title">{{$curso->sNombre}}</h4>
              			<p class="card-text">{{$curso->sDescripcion}}</p>
            		</div>
          		</div>
        	</div>
        </a>
        @endforeach
      </div>
</div>
<div style="display:none;" id='modalAddCur'>
    @include('modals.modalAddCurso')
</div>
@include('layouts.footer')