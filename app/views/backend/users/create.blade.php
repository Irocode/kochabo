@extends('backend/_layout/layout')
@section('content')
<div class="container">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Benutzer anlegen</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ url('admin/user') }}"
                       class="btn btn-primary">
                        <span class="glyphicon glyphicon-arrow-left "></span>&nbsp;Zurück
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            {{ Form::open(array('action' => 'HureController@store')) }}

            <!-- First Name -->
            <div class="control-group {{ $errors->has('first-name') ? 'has-error' : '' }}">
                <label class="control-label" for="first-name">Vorname</label>

                <div class="controls">
                    {{ Form::text('first_name', null, array('class'=>'form-control', 'id' => 'first_name', 'placeholder'=>'Vorname', 'value'=>Input::old('first_name'))) }}
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
                    {{ Form::text('last_name', null, array('class'=>'form-control', 'id' => 'last_name', 'placeholder'=>'Nachname', 'value'=>Input::old('last_name'))) }}
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
                    {{ Form::text('email', null, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-Mail', 'value'=>Input::old('email'))) }}
                    @if ($errors->first('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <legend>Password</legend>
            <!-- Password -->
            <div class="control-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label class="control-label" for="password">Passwort</label>

                <div class="controls">
                    {{ Form::password('password', array('class'=>'form-control', 'id' => 'password', 'placeholder'=>'Passwort', 'value'=>Input::old('password'))) }}
                    @if ($errors->first('password'))
                    <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <!-- Confirm Password -->
            <div class="control-group {{ $errors->has('confirm-password') ? 'has-error' : '' }}">
                <label class="control-label" for="confirm-password">Passwort bestätigen</label>

                <div class="controls">
                    {{ Form::password('confirm_password', array('class'=>'form-control', 'id' => 'confirm_password', 'placeholder'=>'Passwort bestätigen', 'value'=>Input::old('confirm_password'))) }}
                    @if ($errors->first('confirm-password'))
                    <span class="help-block">{{ $errors->first('confirm-password') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <!-- Form actions -->
            {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}
            
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop