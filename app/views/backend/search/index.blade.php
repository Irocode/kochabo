@extends('backend/_layout/layout')
@section('content')
{{ Notification::showAll() }}
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Postleitzahl Suchergebniss</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/deliveryzipcode','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
</div>
<br><br>
<div class="container">
   <div>
      @foreach($deliveryzipcodes as $deliveryzipcode)
      @if($deliveryzipcode->count())
      <button type="submit" class="btn btn-u" id="update"> {{{ $deliveryzipcode->zip }}}</button>
      @else       
      <div class="alert alert-danger">Keine Postleitzahl gefunden</div>
      @endif   
      @endforeach
      <div>
         <br><br>
         <hr>
         <a id="button_" class="btn btn-u" href="{{URL::to('admin/deliveryzipcode/create')}}" title="" target=""> Postleitzahl anlegen</a>
      </div>
      <br>
      <a id="button_" class="btn btn-danger" href="{{URL::to('admin/deliveryassign/187/group')}}" title="" target=""> Änderungen vornehmen </a>
   </div>
</div>
<br><br>
<br><br><br><br><br>
@stop