@extends('backend/_layout/layout')
@section('content')

{{-- Web site Title --}}
@section('title')
@parent
Forgotyy Password
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        {{ Form::open(array('action' => 'UseradminController@forgot', 'method' => 'post')) }}
            
            <h2>Forgot your Password?yyy</h2>
            
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-mail', 'autofocus')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            {{ Form::submit('Send Instructions', array('class' => 'btn btn-primary'))}}

  		{{ Form::close() }}
  	</div>
</div>

@stop