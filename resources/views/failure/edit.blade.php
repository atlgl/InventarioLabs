@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Falla:
                 <p>
                 Modelo:
                 {{  ($fail->inventory['computer'])->modelname}}
                </p>
                <p>
                Codigo:
                 {{  $fail->inventory['barcode']}}
                 </p>
                 </div>

                 <div class="panel-body">
                 <form class="form-horizontal" method="post" action="{{action('FailsController@update',$fail)}}">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                        <input type="hidden" name="inventoryid" value="{{$fail->inventory['id']}}">

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="descfail" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <textarea id="descfail" class="form-control" name="descfail" srequired autofocus>{{$fail->desc}}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="failtype" class="col-md-4 control-label">Tipo de Falla</label>
                            <div class="col-md-6">
                                <select id="failtype" class="form-control" name="failtype" value="" required autofocus>
                                    <option value="Mantenimiento" {{$fail->failtype =='Mantenimiento' ? 'selected':''}}>Mantenimiento</option>
                                    <option value="No enciende" {{$fail->failtype =='No enciende' ? 'selected':''}}> No Enciende</option>
                                    <option value="Otro" {{$fail->failtype =='Otro' ? 'selected':''}}>Otro</option>
            
                                </select>

                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="failstate" class="col-md-4 control-label">Tipo de Falla</label>
                            <div class="col-md-6">
                                <select id="failstate" class="form-control" name="failstate" value="" required autofocus>
                                    <option value="En Progreso" {{$fail->failtype =='En Progreso' ? 'selected':''}}>En Progreso</option>
                                    <option value="Detenida" {{$fail->failtype =='Detenida' ? 'selected':''}}>Detenida</option>
                                    <option value="Lista" {{$fail->failtype =='Lista' ? 'selected':''}}>Lista</option>
                                    <option value="Otro" {{$fail->failtype =='Otro' ? 'selected':''}}>Otro</option>
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
