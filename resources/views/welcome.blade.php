@include('layouts.app')
      <!-- /jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-info" style="padding-bottom: 200px !important;">
      <div class="container text-sm-center p-t-3">
        <h1 class="display-2">Cursos</h1>
        <p class="lead">¡Inscríbete al curso que buscas!</p>   
      </div>
    </div>
    <div class="container">
      <!-- cursos -->
      <h1 id="cursos" class="display-4 text-xs-center m-y-3 text-muted">Cursos Disponibles</h1>
      
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
@include('layouts.footer')