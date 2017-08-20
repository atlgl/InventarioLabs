@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Fallas
                </div>

                 <div class="panel-body">
                 <div class="form-group" >
                     <input type="search" class="form-control" id="txtbusqueda" onkeyup="busqueda()" placeholder="Buscar elementos...."/>
                      
                  </div>
                   
                    <table id="tablaprincipal" class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Laboratorio:</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($labs as $l)
                            <tr>
                                <td>{{$l->id}}</td>
                                <td>{{$l->name}}</td>
                            </tr>
                            <tr>
                               <td colspan="2">
                               
                                <table class="table table-stripped">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Modelo</th>
                                        <th>Codigo de barras</th>
                                        <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach($l->inventory as $i)
                                        <tr>
                                           <td>{{$i->id}}</td>
                                           <td>{{$i->computer['modelname']}}</td>
                                           <td>{{$i->barcode}}</td>                                           
                                           <td>
                                               <a href="{{action('FailsController@show',$i->id)}}" class="btn btn-success">+Falla</a>
                                        
                                           </td>
                                        </tr>
                                        <tr>
                                           <td colspan="4">
                                            <table class="table table-stripped">
                                                <thead>
                                                   <tr>
                                                    <th>ID</th>
                                                    <th>EstadoFalla</th>
                                                    <th>Tipo Falla</th>
                                                    <th>Accion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  
                                                   @foreach($i->fail as $f)
                                                   <tr>
                                                      <td>{{$f->id}}</td>
                                                       <td>{{$f->failstate}}</td>
                                                       <td>{{$f->failtype}}</td>
                                                       <td>
                                                           <a href="{{action('FailsController@edit',$f->id)}}" class="btn btn-success">+Cambiar</a>
                                                       </td>
                                                       <td>                                                
                                                       
                                                       <form action="{{action('FailsController@destroy',$f->id)}}" method="post">
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
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                               
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
