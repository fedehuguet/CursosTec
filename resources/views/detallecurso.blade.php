@include('layouts.app')
<div class="container" style="padding-top: 80px;">
	<div class="col-md-8">
		<h1 class="col-md-11"> Titulo curso </h1>
		<p class="col-md-11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		<p class ="col-md-11">Cupo: 20</p>
		<p class ="col-md-5">Fecha: 10/22/2017</p>
		<p class ="col-md-5">Precio: $ 100.00 MXN</p>
	</div>
	<div class="col-md-4">
		<input class="form-control" type="text" placeholder="Nombre" id="example-text-input" name="nombreCliente">
		<button style="margin-top: 20px;" class="btn btn-primary col-md-12" id="btnShow">Inscribir al curso</button>
	</div>
</div>
@include('layouts.footer')