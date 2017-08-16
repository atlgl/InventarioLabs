@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Inventario: 
                 <p>
                 Laboratorio: {{$labd->name}}
                </p>
                <p>
                 
                 </p>
                 </div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{ url('inventory')}}">

                    {{csrf_field()}}
                    
                        <input id="labid" type="hidden" name="labid" value="{{ $labd->id }}" >

                        <div class="form-group">
                            <label for="computer" class="col-md-4 control-label">Computadora</label>
                            <div class="col-md-6">
                                <select id="computerid" class="form-control" name="computerid" value="" required autofocus>
                                   @foreach($computer as $c)
                                    <option value="{{$c->id}}" selected >{{$c->modelname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="barcode" class="col-md-4 control-label">Codigo de barras</label>
                            <div class="col-md-6">
                                <input id="barcode" class="form-control" name="barcode" value="" required autofocus/>
                                
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="inventorystate" class="col-md-4 control-label">Estado en Inventario:</label>
                            <div class="col-md-6">
                                <select id="inventorystate" class="form-control" name="inventorystate" value="" required autofocus>
                                   <option value="Ninguno" selected>--Seleccionar</option>
                                    <option value="Funcionando">Funcionando</option>
                                    <option value="Baja"> Baja </option>
                                    <option value="Reparacion">Reparación</option>
                                    
                                </select>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                                <a href="{{url('inventory')}}" class="btn"> Regresar</a>
                            </div>
                        </div>
                 </form>
                 
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
