@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Laboratorios
                <a href="/lab/create" class="btn btn-info">Agregar</a>
                </div>

                 <div class="panel-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($datalab as $lb)
                            <tr>
                                <td>{{$lb->id}}</td>
                                <td>{{$lb->name}}</td>
                                <td>{{$lb->desc}}</td>
                                
                                <td><a href="{{action('LabsController@edit',$lb->id)}}" class="btn btn-success">Edit</a></td>
                                <td>
                                   
                                    <form action="{{ action('LabsController@destroy',$lb->id)}}" method="post">
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
