@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Inventario
                </div>

                 <div class="panel-body">
                 <div class="form-group" >
                     <input type="search" class="form-control" id="txtbusqueda" onkeyup="busqueda()" placeholder="Buscar elementos...."/>
                      
                  </div>
                   
                    <table id="tablaprincipal" class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Laboratorio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($lab as $s)
                            <tr>
                                <td>{{$s->id}}</td>
                                <td>{{$s->name}}</td>
                                <td>
                                    <a href="{{ action('InventoryController@show',$s->id) }}" class="btn btn-info">+ PC</a>
                                    
                                    <a href="{{ action('InstalledController@show',$s->id) }}" class="btn">+Soft</a>
                                    
                                    <a href="{{ action('LostController@show',$s->id) }}" class="btn">+Perdida</a>
                                    
                                </td>
                            </tr>
                            <tr><td colspan="3">
                                
                                <table class="table table-stripped">
                                    <thead>
                                       <th></th>
                                        <th>ID</th>
                                        <th>Codigo de Barras</th>
                                        <th>Computadora</th>
                                        <th>Estado</th>
                                        <th>Usuario</th>
                                        <th>Acciones</th>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach($s->inventory as $p)
                                        <tr>
                                          <td></td>
                                           <td>{{$p->computer_id}}</td>
                                           <td>{{$p->barcode}}</td>
                                           <td>{{$p->computer['modelname']}}</td>
                                           <td>{{$p->inventorystate}}</td>
                                           <td>{{$p->user['email']}}</td>
                                            
                                            <td>
                                                <form action="{{action('InventoryController@destroy',$p->id)}}" method="post">
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
                            </td></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
