@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Software</div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{action('ComputerController@update',$computer)}}">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$computer->modelname}}" required autofocus>

                                @if ($errors->has('modelname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{$computer->desc}}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        


                        <div class="form-group">
                            <label for="barcode" class="col-md-4 control-label">Codigo de Barras</label>

                            <div class="col-md-6">
                                <select name="marca" id="marca" class="form-control">
                                   @foreach($marc as $m)
                                   <option value="{{$m->id}}" {{$m->id==$computer->mark_id ? 'selected':''}}>{{$m->name}}</option>
                                   @endforeach
                                    
                                </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
