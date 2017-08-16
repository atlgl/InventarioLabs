@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Laboratorio: 
                 </div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{ url('lab')}}">

                    {{csrf_field()}}
                    
                        

                       <div class="form-group">
                            <label for="labname" class="col-md-4 control-label">Laboratorio:</label>
                            <div class="col-md-6">
                                <input id="labname" type="text" class="form-control" name="labname" value="" required autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="labdescription" class="col-md-4 control-label">Descripcion</label>
                            <div class="col-md-6">
                                <input id="labdescription" type="text" class="form-control" name="labdescription" value="" required autofocus>

                            </div>
                        </div>

                     
                        
                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                                <a href="{{ url('lab')}}" class="btn">Cancelar</a>
                            </div>
                        </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
