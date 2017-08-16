@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Falla</div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{url('lost/create')}}">
                    <input name="inventoryid" value="{{$id}}"/>

                    {{csrf_field()}}
          
                        <div class="form-group{{ $errors->has('descfail') ? ' has-error' : '' }}">
                            <label for="descfail" class="col-md-4 control-label">Descripcion</label>
                            

                            <div class="col-md-6">
                                <textarea id="descfail" type="text" class="form-control" name="descfail"  required autofocus>
                                    
                                </textarea>

                                @if ($errors->has('descfail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descfail') }}</strong>
                                    </span>
                                @endif
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
