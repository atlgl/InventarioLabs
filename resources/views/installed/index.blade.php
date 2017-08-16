@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                Software Instalado 
                <p class="well" style="color:black;">
                Laboratorio:
                    {{$lab->name}}
                    <a href="{{url('inventory')}}" class="btn">Regresar</a>
                </p>
                <form method="post" action="{{action('InstalledController@store',$lab->id)}}">
                                  {{csrf_field()}}
                                  <input type="hidden" name="labid" value="{{$lab->id}}"/>
                                    <select class="form-control" name="softwareid">
                                       @foreach($software as $s)
                                        <option value="{{$s->id}}">{{$s->name}}</option>
                                        @endforeach
                                    </select>
                                    <input name="agregartodos" type="submit" value="+Todos" class="btn btn-success"/>
                </form>
                </div>

                 <div class="panel-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Software</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($lab->inventory as $i)
                            <tr>
                                <td>{{$i->id}}</td>
                                <td>{{$i->computer['modelname']}}</td>
                                <td>{{$i->barcode}}</td>
                                <td>
                                 
                                <form method="post" action="{{action('InstalledController@store',$i->id)}}">
                                  {{csrf_field()}}
                                  <input type="hidden" name="labid" value="{{$lab->id}}"/>
                                   <input type="hidden" name="inventoryid" value="{{$i->id}}"/>
                                    <select class="form-control" name="softwareid">
                                       @foreach($software as $s)
                                        <option value="{{$s->id}}">{{$s->name}}</option>
                                        @endforeach
                                    </select>
                                    <input type="submit" value="Agregar" class="btn btn-success"/>
                                </form>
                                </td>
                                <td>
                                    
                                </td>
                                
                                
                            </tr>
                            
                            <tr>
                                <td colspan="5">
                                     <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample{{$i->id}}" aria-expanded="false" aria-controls="collapseExample{{$i->id}}">
                                     Software Instalado
                                     </a>

                                    <div class="collapse" id="collapseExample{{$i->id}}">
                                      <div class="well">
                                       <table class="table">
                                       <thead>
                                           <tr>
                                               <th>ID</th>
                                               <th>Nombre</th>
                                               <th>Accion</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           
                                        @foreach($i->installed as $ins)
                                         <tr>
                                         <td>{{$ins->id}}</td>
                                          <td>{{$ins->software['name']}}</td>
                                          <td>
                                              <form action="{{ action('InstalledController@destroy',$ins->id)}}" method="post">
                                       {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <input name="installedid" type="hidden" value="{{$ins->id}}">
                                        <button name="delpaguno" value="delpaguno" class="btn btn-danger" type="submit">
                                          -Software  
                                        </button>
                                            </form>
                                          </td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                      </table>
                                      </div>
                                    </div>
                                      
                               
                            
                                                                            
                                      
                               
                            
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