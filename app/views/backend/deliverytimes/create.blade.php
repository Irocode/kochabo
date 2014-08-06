@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('ckeditor/ckeditor.js') }}
{{ HTML::style('assets/backend/bootstrap/css/bootstrap-tagsinput.css') }}
{{ HTML::script('assets/backend/bootstrap/js/bootstrap-tagsinput.js') }}
{{ HTML::script('assets/backend/js/jquery.slug.js') }}
{{ HTML::style('bootstrap_datepicker/css/datepicker.css') }}
{{ HTML::script('bootstrap_datepicker/js/bootstrap-datepicker.js') }}
{{ HTML::script('bootstrap_datepicker/js/locales/bootstrap-datepicker.tr.js') }}
<script type="text/javascript">
   $(document).ready(function () {
   
   
       $('#datetime').datepicker({
           format: "yyyy-mm-dd",
           todayBtn: "linked",
           orientation: "top auto"
       });
   
       if ($('#tag').length != 0) {
           var elt = $('#tag');
           elt.tagsinput();
       }
   });
</script>
<div class="container">
   <div class="page-header">
      <h3>
         Lieferzeit erstellen
         <div class="pull-right">
            {{ HTML::link('/admin/deliverytimes','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </h3>
   </div>


   {{ Form::open(array('action' => 'App\Controllers\Admin\DeliverytimesController@store')) }}



<div class="row">
  <div class="col-md-3">

  <!-- name -->
   <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
      <label class="control-label" for="name">Logistiker Name</label>
      <div class="controls">
         {{ Form::text('name', null, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Logistiker Name', 'value'=>Input::old('name'))) }}           
         @if ($errors->first('name'))
         <span class="help-block">{{ $errors->first('name') }}</span>
         @endif
      </div>
   </div>
   <br>

  </div>
  <div class="col-md-2">


<!-- delivery_time_from -->
   <div class="control-group {{ $errors->has('delivery_time_from') ? 'has-error' : '' }}">
      <label class="control-label" for="delivery_time_from">Lieferung von</label>
      <div class="controls">
         {{ Form::text('delivery_time_from', null, array('class'=>'form-control', 'id' => 'delivery_time_from', 'placeholder'=>'Lieferung von', 'value'=>Input::old('delivery_time_from'))) }}          
         @if ($errors->first('delivery_time_from'))
         <span class="help-block">{{ $errors->first('delivery_time_from') }}</span>
         @endif
      </div>
   </div>
   <br>

  </div>
  <div class="col-md-2">

  <!-- delivery_time_to -->
   <div class="control-group {{ $errors->has('delivery_time_to') ? 'has-error' : '' }}">
      <label class="control-label" for="delivery_time_to">Lieferung bis</label>
      <div class="controls">
         {{ Form::text('delivery_time_to', null, array('class'=>'form-control', 'id' => 'delivery_time_to', 'placeholder'=>'Lieferung bis', 'value'=>Input::old('delivery_time_to'))) }}          
         @if ($errors->first('delivery_time_to'))
         <span class="help-block">{{ $errors->first('delivery_time_to') }}</span>
         @endif
      </div>
   </div>
   <br>

  </div>
  <div class="col-md-2">
     
<!-- nightjump -->
   <div class="control-group {{ $errors->has('nightjump') ? 'has-error' : '' }}">
      <label class="control-label" for="nightjump">Nachtsprung</label>
      <div class="controls">
         {{ Form::text('nightjump', null, array('class'=>'form-control', 'id' => 'nightjump', 'placeholder'=>'Abo Lieferung', 'value'=>Input::old('nightjump'))) }}      
         @if ($errors->first('nightjump'))
         <span class="help-block">{{ $errors->first('nightjump') }}</span>
         @endif
      </div>
   </div>
   <br>

  </div>

  <div class="col-md-3">
    <label class="control-label" for="nightjump">&nbsp;</label>
      <div class="controls">
 {{ Form::submit('Anlegen', array('class' => 'btn btn-success')) }}
 </div>
</div>

</div>


 
   

    




   
   
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
  
   {{ Form::close() }}
</div>
@stop