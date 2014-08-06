@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
Log In
@stop

{{-- Content --}}
@section('content')

 <link rel="stylesheet" href="assets/backend/css/pages/page_log_reg_v1.css">  

<!--=== Content Part ===-->
<div class="container">     
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
          {{ Form::open(array('action' => 'SessionController@store')) }}
        
                <div class="reg-header">            
                    <h2>Anmelden</h2>
                </div>

                <div class="input-group margin-bottom-30 {{ ($errors->has('email')) ? 'has-error' : '' }}">
                    <span class="input-group-addon"><i class="icon-user"></i></span>

                      {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-Mail Adresse', 'autofocus')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
                  
                </div>                    
                <div class="input-group margin-bottom-30 {{ ($errors->has('password')) ? 'has-error' : '' }}">
                    <span class="input-group-addon"><i class="icon-lock"></i></span>
{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Passwort'))}}
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}

                 
                </div>                    

                <div class="row">
                    <div class="col-md-6">
                        <label class="checkbox"><input type="checkbox"> Merken</label>                        
                    </div>
                    <div class="col-md-6">
                    {{ Form::submit('Eintreten', array('class' => 'btn-u pull-right'))}}
                                        
                    </div>
                </div>

                <hr>

                <h4>Passwort vergessen ?</h4>
                <p>Kein Problem, <a class="color-green" href="{{ route('forgotPasswordForm') }}">Klick hier</a> um dein Passwort neu zu setzen.</p>
       

              {{ Form::close() }}          
        </div>
    </div><!--/row-->
</div><!--/container-->     
<!--=== End Content Part ===-->

@stop