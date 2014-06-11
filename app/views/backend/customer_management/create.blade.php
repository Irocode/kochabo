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
            {{ Form::text('email', null, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-Mail',  'value'=>Input::old('email'))) }}
            
            
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

       {{ Form::text('telephone', null, array('class'=>'form-control', 'id' => 'telephone', 'placeholder'=>'Telefon',  'value'=>Input::old('telephone'))) }}

               
               
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
 {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
            {{ Form::submit('Registrieren', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}
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