@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                Docentes 
                <a href="{{ url('teacher/create')}}" class="btn btn-info">Agregar</a>
                </div>

                 <div class="panel-body">
                 <div class="form-group" >
                     <input type="search" class="form-control" id="txtbusqueda" onkeyup="busqueda()" placeholder="Buscar elementos...."/>
                      
                  </div>
                   
                    <table id="tablaprincipal" class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Segundo nombre</th>
                                <th>Apellidos</th>
                                <th>Fecha Nacimiento</th>
                                <th>Foto</th>
                                <th>Usuario</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($teachers as $t)
                            <tr>
                                <td>{{$t->id}}</td>
                                
                                <td>{{$t->firstname}}</td>
                                
                                <td>{{$t->secondname}}</td>
                                
                                <td>{{$t->lastname}}</td>
                                
                                <td>{{$t->birhtdate}}</td>
                                
                                <td>{{$t->photo}}</td>
                                
                                <td>
                                @foreach($t->user as $lm)
                                {{$lm->email}}
                                @endforeach
                                </td>
                                
                                
                                
                               
                                
                                
                                <td><a href="{{action('TeacherController@edit',$t->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                   
                                    <form action="{{ action('TeacherController@destroy',$t->id)}}" method="post">
                                       {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
