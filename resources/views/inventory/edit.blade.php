@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Falla:
                 <p>
                 {{  $fail->computer['name']  }}
                 </p>
                 </div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{action('FailsController@update',$fail)}}">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{$fail->desc}}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="barcode" class="col-md-4 control-label">Codigo de Barras</label>

                            <div class="col-md-6">
                                <input id="failtype" type="text" class="form-control" name="failtype" value="{{$fail->failtype}}" required autofocus>

                                @if ($errors->has('barcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barcode') }}</strong>
                                    </span>
                                @endif
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
