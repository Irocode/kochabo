@extends('backend/_layout/layout')
@section('content')
<div class="container">
   <div class="page-header">
      <h3>
         Typ erstellen
         <div class="pull-right">
            {{ HTML::link('/admin/list_type','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </h3>
   </div>
   {{ Form::open(array('action' => 'App\Controllers\Admin\List_TypeController@store')) }}
   <div class="row">
      <div class="col-md-4">
         <!-- Title -->
         <div class="control-group {{ $errors->has('bezeichnung') ? 'has-error' : '' }}">
            <label class="control-label" for="bezeichnung">Typ <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('bezeichnung', null, array('class'=>'form-control', 'id' => 'bezeichnung', 'placeholder'=>'Typ', 'required','value'=>Input::old('bezeichnung'))) }}
               @if ($errors->first('bezeichnung'))
               <span class="help-block">{{ $errors->first('bezeichnung') }}</span>
               @endif
            </div>
         </div>
      </div>
   </div>
   <br>
   <br>
   {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}
   <!-- Plichtfeld Anfang -->
   <div  style="margin-top:20px; margin-bottom:10px;">
      <p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
   </div>
   <!-- Plichtfeld Ende -->
</div>
</div>  
<!-- Plichtfeld Ende -->
@stop