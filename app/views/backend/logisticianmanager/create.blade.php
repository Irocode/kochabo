@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 



<div class="container">





     <!--HEADER mit Zurück ANFANG-->
     <div class="headline">
      <h2> Neuen Logistiker erstellen</h2>
        <div class="pull-right">
            {{ HTML::link('/admin/logisticianmanager','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </div>
         <!--HEADER mit Zurück ENDE-->
     
  


   {{ Form::open(array('action' => 'App\Controllers\Admin\LogisticianmanagerController@store')) }}



<div class="row">
  <div class="col-md-6">

     <!-- logistiker -->
   <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
      <label class="control-label" for="name">Logistiker <span class="stern" >*</span></label>
      <div class="controls">
        {{ Form::text('name', null, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Logistiker', 'value'=>Input::old('name'))) }}
         @if ($errors->first('name'))
         <span class="help-block">{{ $errors->first('name') }}</span>
         @endif
      </div>
   </div>
   <br>


  <!-- street -->
   <div class="control-group {{ $errors->has('street') ? 'has-error' : '' }}">
      <label class="control-label" for="street">Straße <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('street', null, array('class'=>'form-control', 'id' => 'street', 'placeholder'=>'Straße', 'value'=>Input::old('street'))) }}
         @if ($errors->first('street'))
         <span class="help-block">{{ $errors->first('street') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- strettno -->
   <div class="control-group {{ $errors->has('strettno') ? 'has-error' : '' }}">
      <label class="control-label" for="strettno">Adress Zusatz</label>
      <div class="controls">
        {{ Form::text('streetno', null, array('class'=>'form-control', 'id' => 'streetno', 'placeholder'=>'Adress Zusatz', 'value'=>Input::old('streetno'))) }}
         @if ($errors->first('strettno'))
         <span class="help-block">{{ $errors->first('strettno') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- zip -->
   <div class="control-group {{ $errors->has('zip') ? 'has-error' : '' }}">
      <label class="control-label" for="zip">PLZ <span class="stern" >*</span> </label>
      <div class="controls">
      {{ Form::text('zip', null, array('class'=>'form-control', 'id' => 'zip', 'placeholder'=>'PLZ', 'value'=>Input::old('zip'))) }}
         @if ($errors->first('title'))
         <span class="help-block">{{ $errors->first('zip') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- city -->
   <div class="control-group {{ $errors->has('city') ? 'has-error' : '' }}">
      <label class="control-label" for="city">Ort <span class="stern" >*</span> </label>
      <div class="controls">
      {{ Form::text('city', null, array('class'=>'form-control', 'id' => 'city', 'placeholder'=>'Ort', 'value'=>Input::old('city'))) }}
         @if ($errors->first('city'))
         <span class="help-block">{{ $errors->first('city') }}</span>
         @endif
      </div>
   </div>
   <br>

     </div><div class="col-md-6">


   <!-- stateprovince -->
   <div class="control-group {{ $errors->has('stateprovince') ? 'has-error' : '' }}">
      <label class="control-label" for="stateprovince">Bundesland <span class="stern" >*</span></label>
      <div class="controls">
    {{ Form::text('stateprovince', null, array('class'=>'form-control', 'id' => 'stateprovince', 'placeholder'=>'Bundesland', 'value'=>Input::old('stateprovince'))) }}
         @if ($errors->first('stateprovince'))
         <span class="help-block">{{ $errors->first('stateprovince') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- country_id -->
   <div class="control-group {{ $errors->has('country_id') ? 'has-error' : '' }}">
      <label class="control-label" for="country_id">Land <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('country_id', null, array('class'=>'form-control', 'id' => 'country_id', 'placeholder'=>'Land', 'value'=>Input::old('country_id'))) }}
         @if ($errors->first('country_id'))
         <span class="help-block">{{ $errors->first('country_id') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- contactPerson -->
   <div class="control-group {{ $errors->has('contactPerson') ? 'has-error' : '' }}">
      <label class="control-label" for="contactPerson">Kontakt Person <span class="stern" >*</span></label>
      <div class="controls">
       {{ Form::text('contactPerson', null, array('class'=>'form-control', 'id' => 'contactPerson', 'placeholder'=>'Kontakt Person', 'value'=>Input::old('contactPerson'))) }}
         @if ($errors->first('contactPerson'))
         <span class="help-block">{{ $errors->first('contactPerson') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- phone -->
   <div class="control-group {{ $errors->has('phone') ? 'has-error' : '' }}">
      <label class="control-label" for="phone">Telefon <span class="stern" >*</span></label>
      <div class="controls">
      {{ Form::text('phone', null, array('class'=>'form-control', 'id' => 'phone', 'placeholder'=>'Telefon', 'value'=>Input::old('phone'))) }}
         @if ($errors->first('phone'))
         <span class="help-block">{{ $errors->first('phone') }}</span>
         @endif
      </div>
   </div>
   <br>
     <!-- email -->
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


  </div></div>









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
   {{ Form::submit('Logistiker anlegen', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}

      <!-- Plichtfeld Anfang -->
     
   <!-- Plichtfeld Anfang -->
     
<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->
</div>



@stop