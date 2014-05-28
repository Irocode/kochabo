@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Edit Profile
@stop

{{-- Content --}}
@section('content')

<h4>Edit 
@if ($user->email == Sentry::getUser()->email)
	Your
@else 
	{{ $user->email }}'s 
@endif 

Profildaten</h4>
<div class="well">
	{{ Form::open(array(
        'action' => array('UserController@update', $user->id), 
        'method' => 'put',
        'class' => 'form-horizontal', 
        'role' => 'form'
        )) }}


         <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}" for="email">
            {{ Form::label('edit_email', 'E-Mail', array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('email', $user->email, array('class' => 'form-control', 'placeholder' => 'E-Mail', 'id' => 'edit_email'))}}
            </div>
            {{ ($errors->has('email') ? $errors->first('email') : '') }}                
        </div>


        
        <div class="form-group {{ ($errors->has('firstName')) ? 'has-error' : '' }}" for="firstName">
            {{ Form::label('edit_firstName', 'Vorname', array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('firstName', $user->first_name, array('class' => 'form-control', 'placeholder' => 'Vorname', 'id' => 'edit_firstName'))}}
            </div>
            {{ ($errors->has('firstName') ? $errors->first('firstName') : '') }}    			
    	</div>


        <div class="form-group {{ ($errors->has('lastName')) ? 'has-error' : '' }}" for="lastName">
            {{ Form::label('edit_lastName', 'Nachname', array('class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('lastName', $user->last_name, array('class' => 'form-control', 'placeholder' => 'Nachname', 'id' => 'edit_lastName'))}}
            </div>
            {{ ($errors->has('lastName') ? $errors->first('lastName') : '') }}                
        </div>

        @if (Sentry::getUser()->hasAccess('admin'))
        <div class="form-group">
            {{ Form::label('edit_memberships', 'Group Memberships', array('class' => 'col-sm-2 control-label'))}}
            <div class="col-sm-10">
                @foreach ($allGroups as $group)
                    <label class="checkbox-inline">
                        <input type="checkbox" name="groups[{{ $group->id }}]" value='1' 
                        {{ (in_array($group->name, $userGroups) ? 'checked="checked"' : '') }} > {{ $group->name }}
                    </label>
                @endforeach
            </div>
        </div>
        @endif





@if (Sentry::getUser()->hasAccess('admin'))
        <div class="form-group">
         

         
        </div>
        @endif




        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::hidden('id', $user->id) }}
                {{ Form::submit('Änderungen genehmigen', array('class' => 'btn-u'))}}
            </div>
      </div>
    {{ Form::close()}}
</div>

<h4>Passwort ändern</h4>
<div class="well">
    {{ Form::open(array(
        'action' => array('UserController@change', $user->id), 
        'class' => 'form-inline', 
        'role' => 'form'
        )) }}
        
        <div class="form-group {{ $errors->has('oldPassword') ? 'has-error' : '' }}">
        	{{ Form::label('oldPassword', 'Altes Passwort', array('class' => 'sr-only')) }}
			{{ Form::password('oldPassword', array('class' => 'form-control', 'placeholder' => 'Altes Passwort')) }}
    	</div>

        <div class="form-group {{ $errors->has('newPassword') ? 'has-error' : '' }}">
        	{{ Form::label('newPassword', 'Neues Passwort', array('class' => 'sr-only')) }}
            {{ Form::password('newPassword', array('class' => 'form-control', 'placeholder' => 'Neues Passwort')) }}
    	</div>

    	<div class="form-group {{ $errors->has('newPassword_confirmation') ? 'has-error' : '' }}">
        	{{ Form::label('newPassword_confirmation', 'Passwort bestätigen', array('class' => 'sr-only')) }}
            {{ Form::password('newPassword_confirmation', array('class' => 'form-control', 'placeholder' => 'Passwort bestätigen')) }}
    	</div>

        {{ Form::submit('Neues Passwort genehmigen', array('class' => 'btn-u'))}}
	        	
      {{ ($errors->has('oldPassword') ? '<br />' . $errors->first('oldPassword') : '') }}
      {{ ($errors->has('newPassword') ?  '<br />' . $errors->first('newPassword') : '') }}
      {{ ($errors->has('newPassword_confirmation') ? '<br />' . $errors->first('newPassword_confirmation') : '') }}

      {{ Form::close() }}
  </div>

@stop