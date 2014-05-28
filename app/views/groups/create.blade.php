@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Create Group
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
	{{ Form::open(array('action' => 'GroupController@store')) }}
        <h2>Erstelle neue Gruppe</h2>
    
        <div class="form-group {{ ($errors->has('name')) ? 'has-error' : '' }}">
            {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Name')) }}
            {{ ($errors->has('name') ? $errors->first('name') : '') }}
        </div>

        {{ Form::label('Permissions') }}
        <div class="form-group">
            <label class="checkbox-inline">
                {{ Form::checkbox('adminPermissions', 1) }} Admin
            </label>
            <label class="checkbox-inline">
                {{ Form::checkbox('userPermissions', 1) }} User
            </label>

        </div>

        {{ Form::submit('Create New Group', array('class' => 'btn-u')) }}

    {{ Form::close() }}
    </div>
</div>

@stop