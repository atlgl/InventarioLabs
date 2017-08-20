@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Laboratorios 
                <a href="{{ url('lab/create')}}" class="btn btn-info">Agregar</a>
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
                                <th>Descripcion</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($datalab as $d)
                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->desc}}</td>
                                <td><a href="{{action('LabsController@edit',$d->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                    <form action="{{action('LabsController@destroy',$d->id)}}" method="post">
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
