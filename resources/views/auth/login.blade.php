@include('layouts.app')

<div class="container" style="margin-top: 80px;">
    @if(isset($status))
        <h1>{{$status}}</h1>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1 id="cursos" class="col-xs-11 display-4 text-xs-center m-y-3">Inicia sesión</h1>

                <div class="panel-body">
                    <div class="row top5" style="margin-bottom: 20px;">
                        <div class="col-md-12 text-left">
                            <input class="form-control col-md-10" type="text" placeholder="Email" id="example-text-input" name="emailUsuario">
                        </div>
                    </div>
                    <div class="row top5" style="margin-bottom: 20px;">
                        <div class="col-md-12 text-left">
                            <input class="form-control" type="text" placeholder="Password" id="example-text-input" name="passUsuario">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button class="btn btn-primary" id="btnLogin">Iniciar sesión</button>
                            <a href="/register"><button style="background-color: rgb(153, 0, 0); border-color: rgb(153, 0, 0);" class="btn btn-primary">No tengo cuenta</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
