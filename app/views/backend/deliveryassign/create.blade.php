@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('ckeditor/ckeditor.js') }}
 {{ Notification::showAll() }}
<div class="container">


     <!--HEADER mit Zurück ANFANG-->
     <div class="headline">
      <h2> Neue Logistiker Postleitzahl erstellen</h2>
        <div class="pull-right">
            {{ HTML::link('/admin/deliveryzipcode','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </div>
         <!--HEADER mit Zurück ENDE-->
     




   {{ Form::open(array('action' => 'App\Controllers\Admin\DeliveryzipcodeController@store')) }}



<div class="row">
  <div class="col-md-6">

  <!-- zip -->
   <div class="control-group {{ $errors->has('zip') ? 'has-error' : '' }}">
      <label class="control-label" for="zip">Postleitzahl <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('zip', null, array('class'=>'form-control', 'id' => 'zip', 'placeholder'=>'Postleitzahl', 'value'=>Input::old('zip'))) }}           
         @if ($errors->first('zip'))
         <span class="help-block">{{ $errors->first('zip') }}</span>
         @endif
      </div><br><br>
      {{ Form::submit('Postleitzahl überprüfen und  anlegen', array('class' => 'btn btn-u')) }}
   </div>
   <br>

  </div>
  <div class="col-md-6">
<div class="headline">
<h2>Hinweis</h2>
</div>
<blockquote class="hero">
<p>Die eingegeben Postleitzahl wird einer Prüfung unterzogen. </p>
<small class="color-green">
Ob schon
<cite title="Source Title">vorhanden</cite>
</small>
<small class="color-green">
Ob mindestens 4 Ziffern
<cite title="Source Title">eingegeben wurden</cite>
</small>




</blockquote>
</div>
</div>
</div>  

   </div>  

<div class="container">
<div class="row">
   





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


    <!-- Plichtfeld Anfang -->
     
<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->

</div></div>  
 <!-- Plichtfeld Ende -->

@stop