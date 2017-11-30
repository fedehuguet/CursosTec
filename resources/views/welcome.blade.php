@include('layouts.app')
      <!-- /jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-info" style="padding-bottom: 200px !important;">
      <div class="container text-sm-center p-t-3">
        <h1 class="display-2">Cursos</h1>
        <p class="lead">¡Inscríbete al curso que buscas!</p>   
      </div>
    </div>
      <!-- servicios -->
      <h1 id="cursos" class="display-4 text-xs-center m-y-3 text-muted">Cursos Disponibles</h1>
      
      <div class="row">
        <a href="/cursos">
        	<div class="col-md-6 col-lg-4">
          		<div class="card">
            		<div class="card-block">
              			<h4 class="card-title">Venta</h4>
              			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            		</div>
          		</div>
        	</div>
        </a>
      
        <div class="col-md-6 col-lg-4">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">Instalación</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            </div>
          </div>
        </div>
      
        <div class="col-md-12 col-lg-4">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">Mantenimiento</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
      </div>
@include('layouts.footer')