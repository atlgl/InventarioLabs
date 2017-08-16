@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva Computadora</div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{ url('computer')}}">

                    {{csrf_field()}}
                    <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Modelo</label>
                            <div class="col-md-6">
                                <input id="modelname" type="text" class="form-control" name="modelname" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Descripcion</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="" required autofocus>

                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="marca" class="col-md-4 control-label">marca</label>

                            <div class="col-md-6">
                                <select name="marca" class="form-control" id="marca">
                                    @foreach($marks as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                    @endforeach
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
