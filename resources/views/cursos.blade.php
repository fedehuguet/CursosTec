@include('layouts.app')
<div class="container" style="padding-top: 80px;">
	<!-- cursos -->
      <div class="col-md-12">
        <h1 id="cursos" class="col-xs-11 display-4 text-xs-center m-y-3">Cursos Disponibles</h1>
        @if(Auth::check())
        <button class="btn btn-primary col-md-1 m-y-3" id="btnAddCurso">+</button>
        @endif
      </div>
      <div class="row">
        @foreach($cursos as $curso)
      	<div class="col-md-6 col-lg-4">
        		<div class="card">
          		<div class="card-block">
                  <a href="/cursos/{{$curso->id}}">
            			   <h4 class="card-title">{{$curso->sNombre}}</h4>
                  </a>
            			<p class="card-text">{{$curso->sDescripcion}}</p>
          		</div>
        		</div>
      	</div>
        
        @endforeach
      </div>
</div>
<div style="display:none;" id='modalAddCur'>
    @include('modals.modalAddCurso')
</div>
@include('layouts.footer')