@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 

{{ HTML::script('assets/js/jquery.slug.js') }}

<div class="container">


 <!--HEADER mit Zurück ANFANG-->
     <div class="headline">
      <h2>  Neuen Kunden erstellen</h2>
        <div class="pull-right">
       {{ HTML::link('/admin/customer_management','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </div>
         <!--HEADER mit Zurück ENDE-->

   {{ Form::open(array('action' => 'UseradminController@store')) }}


<div class="row">
  <div class="col-md-6">


 <div class="row">
  <div class="col-md-3">
     <!-- gender -->
   <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
       <label class="control-label" for="gender">Anrede <span class="stern" >*</span></label>
      <div class="controls">
  {{ Form::select('gender', $gender, 'Auswahl', array( 'id' => 'gender' ,'class'=>'form-control','style'=>'','value'=>Input::old('gender') )) }}
         @if ($errors->first('gender'))
         <span class="help-block">{{ $errors->first('gender') }}</span>
         @endif
      </div>
   </div>

   </div>

     <div class="col-md-6">
     <!-- kundengruppe -->
   <div class="control-group {{ $errors->has('kundengruppe') ? 'has-error' : '' }}">
       <label class="control-label" for="kundengruppe">Kundengruppe <span class="stern" >*</span></label>
      <div class="controls">
  <select name="customers_groups_id" class="form-control"> 
                          @foreach( $list_kundengruppe as $x ) 
                          <option value="{{ $x->customers_groups_id }}">{{ $x->groupname }}</option>
                           @endforeach                  
                        </select>   
            @if ($errors->first('kundengruppe'))
         <span class="help-block">{{ $errors->first('kundengruppe') }}</span>
         @endif





      </div>
   </div>

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


   <div class="row">
  <div class="col-md-3">
      <!-- Day -->
   <div class="control-group {{ $errors->has('day') ? 'has-error' : '' }}">
      <label class="control-label" for="day">Geburttag <span class="stern" >*</span></label>
      <div class="controls">         
{{ Form::select('day', $day, 'Auswahl', array( 'id' => 'day' ,'class'=>'form-control','style'=>'','value'=>Input::old('day') )) }}

                

        
         @if ($errors->first('day'))
         <span class="help-block">{{ $errors->first('day') }}</span>
         @endif

 
      </div>
   </div> 
  


  </div>
  <div class="col-md-3">

  <!-- Month -->
     <div class="control-group {{ $errors->has('month') ? 'has-error' : '' }}">
      <label class="control-label" for="month">Geburtsmonat <span class="stern" >*</span></label>
      <div class="controls">         
      





{{ Form::select('month', $day, 'Auswahl', array( 'id' => 'month' ,'class'=>'form-control','style'=>'','value'=>Input::old('month') )) }}


         @if ($errors->first('month'))
         <span class="help-block">{{ $errors->first('month') }}</span>
         @endif
      </div>
   </div> 
   <br>

   </div><div class="col-md-6">


  </div>
  <div class="col-md-4">
       <!-- Year -->
   <div class="control-group {{ $errors->has('year') ? 'has-error' : '' }}">
      <label class="control-label" for="year">Geburtsjahr <span class="stern" >*</span></label>
      <div class="controls">  


         {{ Form::text('year', null, array('class'=>'form-control', 'id' => 'year', 'placeholder'=>'JJJJ', 'size' => '4', 'maxlength' => '4','value'=>Input::old('year'))) }}
         @if ($errors->first('year'))
         <span class="help-block">{{ $errors->first('year') }}</span>
         @endif
      </div>
   </div> 


  </div>
</div>



     

   <br>
   </div><div class="col-md-6">

  <!-- email -->
   <div class="control-group {{ $errors->has('email') ? 'has-error' : '' }}">
      <label class="control-label" for="email">E-Mail <span class="stern" >*</span></label>
      <div class="controls">
            {{ Form::text('email', null, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-Mail',  'value'=>Input::old('email'))) }}
            
            
           @if ($errors->first('email'))
         <span class="help-block">{{ $errors->first('email') }}</span>
         @endif
      </div>
   </div>
   <br>
         <!-- telephone -->
   <div class="control-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name">Telefon (Nur Ziffern) <span class="stern" >*</span></label>
      <div class="controls">

       {{ Form::text('telephone', null, array('class'=>'form-control', 'id' => 'telephone', 'placeholder'=>'Telefon',  'value'=>Input::old('telephone'))) }}

               
               
            @if ($errors->first('telephone'))
         <span class="help-block">{{ $errors->first('telephone') }}</span>
         @endif
      </div>
   </div>
   <br>


     <!-- password -->
   <div class="control-group {{ $errors->has('password') ? 'has-error' : '' }}">
      <label class="control-label" for="password">Passwort (Mindestens 6 Zeichen) <span class="stern" >*</span></label>
      <div class="controls">

       {{ Form::text('password', null, array('class'=>'form-control', 'id' => 'password', 'placeholder'=>'Passwort',  'value'=>Input::old('password'))) }}
  
           
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
 




       </div></div>

   <br>
   
         <!-- Plichtfeld Anfang -->
     
<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->
<!--Formular Registrierung Ende-->

 {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
  {{ Form::hidden('check_yes', 'yes', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
            {{ Form::submit('Registrieren', array('class' => 'btn btn-u')) }}

</div>
 <!-- Plichtfeld Ende -->
   
   <br>





   <br>
   <!-- Published -->
   <input type="hidden" value="is_published">
   <!--  <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
      <div class="controls">
          <label class="checkbox">{{ Form::checkbox('is_published', 'is_published') }} Veröffentlichen ?</label>
          @if ($errors->first('is_published'))
          <span class="help-block">{{ $errors->first('is_published') }}</span>
          @endif
      </div>
      </div>
      <br>
      -->

</div>









   <script type="text/javascript" src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>
   <script type="text/javascript" src="{{ URL::to('assets/js/locales/bootstrap-datetimepicker.de.js') }}" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
        showMeridian: 1
    });
   $('.form_date').datetimepicker({
        language:  'de',
        weekStart: 1,
        todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
   $('.form_time').datetimepicker({
        language:  'de',
        weekStart: 1,
        todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 1,
      minView: 0,
      maxView: 1,
      forceParse: 0
    });
</script>
@stop