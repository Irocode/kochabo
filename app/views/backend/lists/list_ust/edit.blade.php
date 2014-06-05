@extends('backend/_layout/layout')
@section('content')
<div class="container">
   <div class="page-header">
      <h3>
         Ust bearbeiten
         <div class="pull-right">
            {{ HTML::link('/admin/list_ust','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </h3>
   </div>
  {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\List_UstController@update', $list_ust->id), 'method' => 'PATCH')) }}
   <div class="row">
      <div class="col-md-4">
         <!-- Title -->
         <div class="control-group {{ $errors->has('bezeichnung') ? 'has-error' : '' }}">
            <label class="control-label" for="bezeichnung">Ust <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('bezeichnung', $list_ust->bezeichnung, array('class'=>'form-control', 'id' => 'bezeichnung', 'placeholder'=>'Ust', 'value'=>Input::old('bezeichnung'))) }}
               @if ($errors->first('bezeichnung'))
               <span class="help-block">{{ $errors->first('bezeichnung') }}</span>
               @endif
            </div>
         </div>
      </div>
   </div>
   <br>
   <br>
   {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-u')) }}
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