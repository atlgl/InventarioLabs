@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <p>
                Laboratorio:
                {{$labs->name}}
                </p>
                <p>
                    <a href="{{url('inventory')}}">Regresar</a>
                </p>
                </div>

                 <div class="panel-body">
                     <div class="form-group" >
                     <input type="search" class="form-control" id="txtbusqueda" onkeyup="busqueda()" placeholder="Buscar elementos...."/>
                      
                  </div>
                   
                    <table id="tablaprincipal" class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modelo</th>
                                <th>Barcode</th>
                                <th>Faltantes</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach($labs->inventory as $i)
                                <tr>
                                   <td>
                                       {{$i->id}}
                                   </td>
                                   <td>
                                       {{$i->computer['modelname']}}
                                   </td>
                                   <td>
                                       {{$i->barcode}}
                                   </td>
                                   <td>
                                       <form method="post" action="{{url('lost')}}">
                                            {{csrf_field()}}
                                          <input name="inventoryid" type="hidden" value="{{$i->id}}"/>
                                          <input name="labid" type="hidden" value="{{$labs->id}}"/>
                                          <textarea name="desclost" rows="2" cols="4" class="form-control">
                                          </textarea>
                                           <input type="submit" class="btn btn-sucess" value="Guardar"/>
                                       </form>
                                   </td>
                                </tr>
                                <tr>
                                   <td>
                                    <table class="table table-stripped">
                                       <thead>
                                           <tr>
                                               <td>ID</td>
                                               <td>Descripción</td>
                                           </tr>
                                       </thead>
                                       <tbody>
                                         @foreach($i->lost as $p)
                                          <tr>
                                             
                                             <td>{{$p->id}}</td>
                                             <td>{{$p->desc}}</td>
                                             <td>
                                                 <form action="{{action('LostController@destroy',$p->id)}}" method="post">
                                                   {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE"/>
                                                    <input name="losteliminar" type="submit" value="Eliminar"/>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
