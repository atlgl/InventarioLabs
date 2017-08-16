@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Docente  </div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{ url('teacher')}}">

                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="segundonombre" class="col-md-4 control-label">Segundo Nombre</label>
                            <div class="col-md-6">
                                <input id="segundonombre" type="text" class="form-control" name="segundonombre" value="" required autofocus>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="apellidos" class="col-md-4 control-label">Apellidos</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="fechanacimiento" class="col-md-4 control-label">Fecha Nacimiento</label>
                            <div class="col-md-6">
                                <input id="fechanacimiento" type="date" class="form-control" name="fechanacimiento" value="" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="foto" class="col-md-4 control-label">Foto</label>
                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control" name="foto" value="" required autofocus>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="usuario" class="col-md-4 control-label">Usuario</label>
                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control" name="usuario" value="" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="contrasena" class="col-md-4 control-label">Contrasena</label>
                            <div class="col-md-6">
                                <input id="contrasena" type="text" class="form-control" name="contrasena" value="" required autofocus>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="tipousuario" class="col-md-4 control-label">Usuario tipo</label>
                            <div class="col-md-6">
                                <select class="form-control" name="tipousuario" id="tipousuario">
                                    <option value="Administrador">Administrador</option>
                                    <option value="Invitado">Invitado</option>
                                </select>
                            
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
