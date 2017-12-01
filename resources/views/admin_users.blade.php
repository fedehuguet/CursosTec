@include('layouts.app')
<div class="container" style="padding-top: 80px;">
	<div class="col-md-8" style="margin-top: 50px;">
		<h2 class="col-md-11"> Administradores </h2>
		  <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Nombre</th>
		        <th>Email</th>
		        <th>Curso</th>
		        <th>Creación del curso</th>
		      </tr>
		    </thead>
		    <tbody>
		    	@foreach($users as $user)
			      	@if(isset($user->cursos))
			      	@foreach($user->cursos as $curso)
			      	<tr>
			        	<td>{{$user->name}}</td>
			        	<td>{{$user->email}}</td>
			        	<td>{{$curso->sNombre}}</td>
			        	<td>{{$curso->created_at}}</td>
			      	</tr>
		      		@endforeach
		      		@else
		      		<tr>
			        	<td>{{$user->name}}</td>
			        	<td>{{$user->email}}</td>
			        	<td></td>
			        	<td></td>
			      	</tr>
		      		@endif
		      	@endforeach
		    </tbody>
		  </table>
	</div>
</div>
@include('layouts.footer')