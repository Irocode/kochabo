@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 

{{ HTML::script('assets/js/jquery.slug.js') }}

<div class="container">


 <!--HEADER mit Zurück ANFANG-->
     <div class="headline">
      <h2>  Neue Kunden Gruppe erstellen</h2>
        <div class="pull-right">
       {{ HTML::link('/admin/customers_groups','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </div>
         <!--HEADER mit Zurück ENDE-->

   {{ Form::open(array('action' => 'App\Controllers\Admin\CustomersGroupsController@store')) }}


<div class="row">
  <div class="col-md-6">


 <div class="row">
  <div class="col-md-3">
     <!-- default -->
   <div class="control-group {{ $errors->has('default') ? 'has-error' : '' }}">
       <label class="control-label" for="default">Ja/Nein <span class="stern" >*</span></label>
      <div class="controls">
        {{ Form::select('default', $janein, $janeinwert, array( 'id' => 'default' ,'class'=>'form-control','style'=>'','value'=>Input::old('default') )) }}

     
         @if ($errors->first('default'))
         <span class="help-block">{{ $errors->first('default') }}</span>
         @endif
      </div>
   </div>
   </div>
   </div>


   <br>
 <div class="row">
  <div class="col-md-3">
   <!-- groupname -->
   <div class="control-group {{ $errors->has('groupname') ? 'has-error' : '' }}">
      <label class="control-label" for="groupname">Kunden Gruppenname <span class="stern" >*</span></label>
      <div class="controls">         
         {{ Form::text('groupname', null, array('class'=>'form-control', 'id' => 'groupname', 'placeholder'=>'Kunden Gruppenname', 'value'=>Input::old('groupname'))) }}
         @if ($errors->first('groupname'))
         <span class="help-block">{{ $errors->first('groupname') }}</span>
         @endif
      </div>
   </div> 
   </div>
   </div>



      <br>
 <div class="row">
  <div class="col-md-3">
   {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}

   </div>
   </div>






 <!-- Plichtfeld Ende -->
   






   <br>
 

</div>

</div>

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