@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva Falla: 
                 <p>
                 Modelo
                 {{ $inventory->computer['modelname'] }}
                    </p>
                <p>
                Laboratorio:
                    {{ $inventory->lab['name']}}</p>
                    <p>
                Estado:
                 {{ $inventory->inventorystate}}
                 </p>
                 <p>
                Barcode:
                    {{$inventory->barcode}}
                 </p>
                 </div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{ url('fail')}}">

                    {{csrf_field()}}
                    
                        <input id="inventorieid" type="hidden" name="inventorieid" value="{{$inventory->id}}" >

                        <div class="form-group">
                            <label for="descfail" class="col-md-4 control-label">Descripcion Falla</label>
                            <div class="col-md-6">
                                <textarea id="description" cols="6" rows="5" class="form-control" name="description" value="" required autofocus></textarea>

                            </div>
                        </div>

                     <div class="form-group">
                            <label for="failtype" class="col-md-4 control-label">Tipo de Falla</label>
                            <div class="col-md-6">
                                <select id="failtype" class="form-control" name="failtype" value="" required autofocus>
                                    <option value="Mantenimiento">Mantenimiento</option>
                                    <option value="No enciende"> No Enciende</option>
                                    <option value="Otro">Otro</option>
            
                                </select>

                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="failstate" class="col-md-4 control-label">Tipo de Falla</label>
                            <div class="col-md-6">
                                <select id="failstate" class="form-control" name="failstate" value="" required autofocus>
                                    <option value="En Progreso">En Progreso</option>
                                    <option value="Detenida">Detenida</option>
                                    <option value="Lista">Lista</option>
                                    <option value="Otro">Otro</option>
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
