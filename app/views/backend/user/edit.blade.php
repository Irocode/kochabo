@extends('backend/_layout/layout')
@section('content')
<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Editier Benutzer "{{ $user->first_name . ' ' . $user->last_name }}"</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ URL::route('admin.user.delete', array($user->id)) }}" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Lösche Benutzer
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            {{ Form::open( array( 'route' => array( 'admin.user.update', $user->id), 'method' => 'PATCH')) }}
            <!-- First Name -->
            <div class="control-group {{ $errors->has('first-name') ? 'has-error' : '' }}">
                <label class="control-label" for="first-name">Vorname</label>

                <div class="controls">
                    {{ Form::text('first_name', $user->first_name, array('class'=>'form-control', 'id' => 'first_name', 'placeholder'=>'Vorname', 'value'=>Input::old('first_name'))) }}
                    @if ($errors->first('first-name'))
                    <span class="help-block">{{ $errors->first('first-name') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <!-- Last Name -->
            <div class="control-group {{ $errors->has('last-name') ? 'has-error' : '' }}">
                <label class="control-label" for="last-name">Nachname</label>

                <div class="controls">
                    {{ Form::text('last_name', $user->last_name, array('class'=>'form-control', 'id' => 'last_name', 'placeholder'=>'Nachname', 'value'=>Input::old('last_name'))) }}
                    @if ($errors->first('last-name'))
                    <span class="help-block">{{ $errors->first('last-name') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <!-- Email -->
            <div class="control-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label class="control-label" for="email">E-Mail</label>

                <div class="controls">
                    {{ Form::text('email', $user->email, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-Mail', 'value'=>Input::old('email'))) }}
                    @if ($errors->first('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <!-- Form actions -->
            {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-success')) }}
            <a href="{{ url('admin/user') }}"
               class="btn btn-default">
                &nbsp;Aufheben
            </a>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop