@include('layouts.app')
@if(isset($status))
    {{$status}}
@endif

<div class="container" style="margin-top: 80px;">
    @if(isset($status))
        <h1>{{$status}}</h1>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1 id="cursos" class="col-xs-11 display-4 text-xs-center m-y-3">Regístrate</h1>

                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="row top5" style="margin-bottom: 20px;">
                            <div class="col-md-12 text-left">
                                <input class="form-control" type="text" placeholder="Nombre" id="example-text-input" name="nombreUsuario">
                            </div>
                        </div>
                        <div class="row top5" style="margin-bottom: 20px;">
                            <div class="col-md-12 text-left">
                                <input class="form-control col-md-10" type="text" placeholder="Email" id="example-text-input" name="emailUsuario">
                            </div>
                        </div>
                        <div class="row top5" style="margin-bottom: 20px;">
                            <div class="col-md-12 text-left">
                                <input class="form-control" type="password" placeholder="Password" id="example-text-input" name="passUsuario">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button class="btn btn-primary" id="btnRegistrar">Registrarme</button>
                                <a href="/"><button style="background-color: rgb(153, 0, 0); border-color: rgb(153, 0, 0);" class="btn btn-primary">Cancelar</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')