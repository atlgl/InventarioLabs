@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editando Laboratorios</div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{action('TeacherController@update',$t)}}">
                   
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$t->firstname}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="segundonombre" class="col-md-4 control-label">Segundo Nombre</label>
                            <div class="col-md-6">
                                <input id="segundonombre" type="text" class="form-control" name="segundonombre" value="{{$t->secondname}}" required autofocus>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="apellidos" class="col-md-4 control-label">Apellidos</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{$t->lastname}}" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="fechanacimiento" class="col-md-4 control-label">Fecha Nacimiento</label>
                            <div class="col-md-6">
                                <input id="fechanacimiento" type="date" class="form-control" name="fechanacimiento" value="{{$t->birhtdate}}" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="foto" class="col-md-4 control-label">Foto</label>
                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control" name="foto" value="$t->photo" required autofocus>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="usuario" class="col-md-4 control-label">Usuario(correo)</label>
                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control" name="usuario" value="{{$t->user[0]->email}}" required autofocus>
                            </div>
                        </div>
                      <!--  
                        <div class="form-group">
                            <label for="contrasena" class="col-md-4 control-label">Contrasena</label>
                            <div class="col-md-6">
                                <input id="contrasena" type="password" class="form-control" name="contrasena" value="{{bcrypt($t->user[0]->password)}}" required autofocus>
                            </div>
                        </div>
                        
                        -->
                        <div class="form-group">
                            <label for="tipousuario" class="col-md-4 control-label">Usuario tipo</label>
                            <div class="col-md-6">
                                <select class="form-control" name="tipousuario" id="tipousuario">
                                    <option value="Administrador" {{$t->user[0]->usertype=='Administrador' ? 'selected':''}}>Administrador</option>
                                    <option value="Invitado" {{$t->user[0]->usertype=='Invitado' ? 'selectes':''}}>Invitado</option>
                                </select>
                            
                            </div>
                        </div>
                        
                        <div class="form-group">
                            
                            <div class="col-md-6 col-md-offset-4">
                                <a href="#" class="btn">Cambiar Password</a>                            
                            </div>
                        </div>
                        
                    
                       
                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                <a href="{{ url('teacher')}}" class="btn btn-warning">Cancelar</a>
                            </div>
                        </div>


                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
