@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 



<div class="container">




   <div class="page-header">
      <h3>
         Bestellung {{$order->order_id}}
         <div class="pull-right">
            {{HTML::link('admin/customer_management/'.$order->customercustomer_id.'/edit','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </h3>
   </div>
   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\OrderController@update', $order->id), 'method' => 'PATCH')) }}
   <!-- Title -->
   <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
      <label class="control-label" for="title">BestellID</label>
      <div class="controls">
         {{ Form::text('order_id', $order->order_id, array('class'=>'form-control', 'order_id' => 'title', 'placeholder'=>'ID', 'value'=>Input::old('title'))) }}
         @if ($errors->first('order_id'))
         <span class="help-block">{{ $errors->first('order_id') }}</span>
         @endif
      </div>
   </div>
   <br>

      <!-- delivery_date -->
   <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Bestelldatum</label>
      <div class="controls">
         {{ Form::text('delivery_date', $order->delivery_date, array('class'=>'form-control', 'delivery_date' => 'delivery_date', 'placeholder'=>'Bestelldatum', 'value'=>Input::old('delivery_date'))) }}
         @if ($errors->first('delivery_date'))
         <span class="help-block">{{ $errors->first('delivery_date') }}</span>
         @endif
      </div>
   </div>
   <br>


      <!-- order_increment_id -->
   <div class="control-group {{ $errors->has('order_increment_id') ? 'has-error' : '' }}">
      <label class="control-label" for="order_increment_id">order_increment_id</label>
      <div class="controls">
         {{ Form::text('order_increment_id', $order->order_increment_id, array('class'=>'form-control', 'id' => 'order_increment_id', 'placeholder'=>'order_increment_id', 'value'=>Input::old('order_increment_id'))) }}
         @if ($errors->first('order_increment_id'))
         <span class="help-block">{{ $errors->first('order_increment_id') }}</span>
         @endif
      </div>
   </div>
   <br>



      <!-- deliverable -->
   <div class="control-group {{ $errors->has('deliverable') ? 'has-error' : '' }}">
      <label class="control-label" for="deliverable">deliverable</label>
      <div class="controls">
         {{ Form::text('deliverable', $order->deliverable, array('class'=>'form-control', 'id' => 'deliverable', 'placeholder'=>'deliverable', 'value'=>Input::old('deliverable'))) }}
         @if ($errors->first('deliverable'))
         <span class="help-block">{{ $errors->first('deliverable') }}</span>
         @endif
      </div>
   </div>
   <br>

      <!-- customercustomer_id -->
   <div class="control-group {{ $errors->has('customercustomer_id') ? 'has-error' : '' }}">
      <label class="control-label" for="customercustomer_id">customercustomer_id</label>
      <div class="controls">
         {{ Form::text('customercustomer_id', $order->customercustomer_id, array('class'=>'form-control', 'id' => 'customercustomer_id', 'placeholder'=>'customercustomer_id', 'value'=>Input::old('customercustomer_id'))) }}
         @if ($errors->first('customercustomer_id'))
         <span class="help-block">{{ $errors->first('customercustomer_id') }}</span>
         @endif
      </div>
   </div>
   <br>


         <!-- created_at -->
   <div class="control-group {{ $errors->has('created_at') ? 'has-error' : '' }}">
      <label class="control-label" for="created_at">created_at</label>
      <div class="controls">
         {{ Form::text('created_at', $order->created_at, array('class'=>'form-control', 'id' => 'created_at', 'placeholder'=>'created_at', 'value'=>Input::old('created_at'))) }}
         @if ($errors->first('created_at'))
         <span class="help-block">{{ $errors->first('created_at') }}</span>
         @endif
      </div>
   </div>
   <br>


         <!-- updated_at -->
   <div class="control-group {{ $errors->has('updated_at') ? 'has-error' : '' }}">
      <label class="control-label" for="updated_at">updated_at</label>
      <div class="controls">
         {{ Form::text('updated_at', $order->updated_at, array('class'=>'form-control', 'id' => 'updated_at', 'placeholder'=>'updated_at', 'value'=>Input::old('updated_at'))) }}
         @if ($errors->first('updated_at'))
         <span class="help-block">{{ $errors->first('updated_at') }}</span>
         @endif
      </div>
   </div>
   <br>



         <!-- order_id -->
   <div class="control-group {{ $errors->has('order_id') ? 'has-error' : '' }}">
      <label class="control-label" for="order_id">order_id</label>
      <div class="controls">
         {{ Form::text('order_id', $order->order_id, array('class'=>'form-control', 'id' => 'order_id', 'placeholder'=>'order_id', 'value'=>Input::old('order_id'))) }}
         @if ($errors->first('order_id'))
         <span class="help-block">{{ $errors->first('order_id') }}</span>
         @endif
      </div>
   </div>
   <br>




 
   <br>
   {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}
   <!--CKEDITOR ANFANG--> 





   @if($order_status_historyx->count())
                     @foreach( $order_status_history as $v )                  
                    Bestellnummer:  NameFirst: {{ $v->status}}<br>
                     @endforeach
                     @else
                     <div class="alert alert-danger">Keine Adresse vorhanden</div>
                     @endif 


Debugbar::startMeasure('render','Time for rendering');
Debugbar::stopMeasure('render');
Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
Debugbar::measure('My long operation', function() {
    //Do something..
});
</div>
@stop