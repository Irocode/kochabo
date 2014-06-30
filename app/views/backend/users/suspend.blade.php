@extends('backend/_layout/layout')
@section('content')

{{-- Web site Title --}}
@section('title')
@parent
Suspend User
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        {{ Form::open(array('action' => array('UseradminController@suspend', $id), 'method' => 'post')) }}
 
            <h2>Benutzer Suspendieren </h2>

            <div class="form-group {{ ($errors->has('minutes')) ? 'has-error' : '' }}">
                {{ Form::text('minutes', null, array('class' => 'form-control', 'placeholder' => 'Minuten', 'autofocus')) }}
                {{ ($errors->has('minutes') ? $errors->first('minutes') : '') }}
            </div>    	   

            {{ Form::hidden('id', $id) }}

            {{ Form::submit('Suspendieren', array('class' => 'btn btn-u')) }}
            
        {{ Form::close() }}
    </div>
</div>

@stop