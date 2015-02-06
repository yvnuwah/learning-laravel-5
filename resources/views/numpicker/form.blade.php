@extends('master')

@section('content')

<h1>Number Picker!</h1>
{!! Form::open(['url' => 'numpicker']) !!}
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                {!! Form::text('low', null, array(
                                                    'class' => 'form-control input-sm',
                                                    'placeholder' => 'From')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                {!! Form::text('high', null, array(
                                                    'class' => 'form-control input-sm',
                                                    'placeholder' => 'To')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
    </div>
{!! Form::close() !!}
@stop