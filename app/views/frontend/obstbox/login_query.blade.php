@extends('frontend/_layout/layout')
@section('content')
{{ HTML::script('assets/frontend/js/moment-with-langs.min.js') }}

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Obstbox</h1>  

      

               
{{ Breadcrumbs::render('obstbox', $obstbox) }}   

    </div>
</div><!--/breadcrumbs-->

<!--*********************************************************************************************************************************************************************************************************************************** -->
<!--=== Content Part ===--> 
<div class="container">
 


<?php


   $email = Session::get('email');
    $userId = Session::get('userId');
    var_dump(Session::all());
?>



  
      <div class="col-md-12">
         <!-- Registrierung ANFANG -->
         <!--   <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">-->
         @if (Sentry::check() )    
         <div class="headline">
            <h2>Da du Kunde bist kannst du den kürzeren Weg gehen.  {{$email}} {{$userId}}</h2>
         </div>
         <div class="row servive-block servive-block-in margin-bottom-20">
         </div>
         <!--/welcome-block-->
         <!-- End Our Services -->
         <!-- Blockquotes -->
         <p>Du bist eingeloggt und kannst daher schneller den Bezahlweg durchgehen!</p>
         </p>
         <button class='btn-u btn-u-red' type='button'>Jetzt bezahlen!</button>
         <br>
         @else
         {{ Form::open(array('action' => 'UserController@store')) }}
         <form class="reg-page">
         <div class="reg-header">
         <h2>Registrierung deiner Daten</h2>

         <div class="row"> 
<div class="col-md-6">

            <p><a href='{{URL::to('meinkontologinzurbestellung')}}' target="_self"; class='btn-u btn-u-red btn-u-large'>Ich habe schon einen Zugang</a>.
 </div><div class="col-md-6 ">

@if (Sentry::check() )   
         @else
         <a href="javascript:history.back()"><button class="btn-u pull-right" >Zurück</button></a>
         @endif

 </div> </div>

            <div class="who margin-bottom-20">
               <!--Abstandhalter-->
            </div>
         </div>

          <div class="row">
  <div class="col-md-6">

            <!-- gender -->
   <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
       <label class="control-label" for="gender">Anrede <span class="stern" >*</span></label>
      <div class="controls">
      <select name="gender" class="form-control">
                           <option value="" selected>Auswahl Anrede</option>
                          @foreach( $list_gender as $x )  
                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>   
         @if ($errors->first('gender'))
         <span class="help-block">{{ $errors->first('gender') }}</span>
         @endif
      </div>
   </div>
   <br>

          <!-- first_name -->
   <div class="control-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
      <label class="control-label" for="first_name">Vorname <span class="stern" >*</span></label>
      <div class="controls">         
         {{ Form::text('first_name', null, array('class'=>'form-control', 'id' => 'first_name', 'placeholder'=>'Vorname', 'value'=>Input::old('first_name'))) }}
         @if ($errors->first('first_name'))
         <span class="help-block">{{ $errors->first('first_name') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- last_name -->
   <div class="control-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name">Nachname <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('last_name', null, array('class'=>'form-control', 'id' => 'last_name', 'placeholder'=>'Nachname', 'value'=>Input::old('last_name'))) }}          
         @if ($errors->first('last_name'))
         <span class="help-block">{{ $errors->first('last_name') }}</span>
         @endif
      </div>
   </div>
   <br>
      <!-- Datetime -->
   <div class="control-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Geburtsdatum <span class="stern" >*</span></label>
      <div class="controls">
  <div class="input-group date form_date col-md-15" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
         {{ Form::text('date_of_birth', null, array('class'=>'form-control', 'id' => 'date_of_birth', 'placeholder'=>'Geburtsdatum',  'value'=>Input::old('date_of_birth'))) }}
         @if ($errors->first('date_of_birth'))
         <span class="help-block">{{ $errors->first('date_of_birth') }}</span>
         @endif
                
          <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
         </div>
      </div>
   </div>
   <br>
   </div><div class="col-md-6">

  <!-- email -->
   <div class="control-group {{ $errors->has('email') ? 'has-error' : '' }}">
      <label class="control-label" for="email">E-Mail <span class="stern" >*</span></label>
      <div class="controls">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-Mail')) }}
            
           @if ($errors->first('email'))
         <span class="help-block">{{ $errors->first('email') }}</span>
         @endif
      </div>
   </div>
   <br>
         <!-- telephone -->
   <div class="control-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name">Telefon <span class="stern" >*</span></label>
      <div class="controls">
                {{ Form::text('telephone', null, array('class' => 'form-control', 'placeholder' => 'Telefon')) }}
               
            @if ($errors->first('telephone'))
         <span class="help-block">{{ $errors->first('telephone') }}</span>
         @endif
      </div>
   </div>
   <br>


     <!-- password -->
   <div class="control-group {{ $errors->has('password') ? 'has-error' : '' }}">
      <label class="control-label" for="password">Passwort <span class="stern" >*</span></label>
      <div class="controls">
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Passwort')) }}
           
            @if ($errors->first('password'))
         <span class="help-block">{{ $errors->first('password') }}</span>
         @endif
      </div>
   </div>
   <br>
            <!-- password_confirmation -->
   <div class="control-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
      <label class="control-label" for="password_confirmation">Passwort bestätigen <span class="stern" >*</span></label>
      <div class="controls">
                {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Passwort bestätigen')) }}
              
             @if ($errors->first('password_confirmation'))
         <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
         @endif
      </div>
   </div>
 </div>

</div>
         <hr>
         <div class="row">
            <div class="col-lg-9">
               <div class="form-group {{ ($errors->has('terms')) ? 'has-error' : '' }}">
                  <label class="checkbox">
                  {{ Form::checkbox('terms', 'yes', false); }}
                  {{ ($errors->has('terms') ?  $errors->first('terms') : '') }}    
                  <a href="page_terms.html" class="color-green">AGB's</a> und <a href="page_terms.html" class="color-green">Rücktrittsrecht</a> gelesen und akzeptiert.
                  </label>  
               </div>
            </div>
            <div class="col-lg-3 text-right">
               
               {{ Form::submit('Jetzt kaufen', array('class' => 'btn-u btn-u-red btn-u-large')) }}                      
            </div>
         </div>
         <input type="hidden" name="activated" value="1">
    
         {{ Form::close() }}
         <!-- Registrierung ENDE -->
         @endif
      </div>
</div>







@stop