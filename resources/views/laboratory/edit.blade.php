@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Laboratorio</div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{action('LabsController@update',$labsdata)}}">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                            <label for="labname" class="col-md-4 control-label">Laboratorio:</label>

                            <div class="col-md-6">
                                <input id="labname" type="text" class="form-control" name="labname" value="{{$labsdata->name}}" required autofocus>

                                @if ($errors->has('labname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('labname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="labdescription" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <input id="labdescription" type="text" class="form-control" name="labdescription" value="{{$labsdata->desc}}" required autofocus>

                                @if ($errors->has('labdescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('labdescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                <a href="{{ url('lab')}}" class="btn"></a>
                            </div>
                        </div>


                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
