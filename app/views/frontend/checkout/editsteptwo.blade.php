@extends('frontend/_layout/layout')
@section('content')
{{ HTML::script('assets/frontend/plugins/ckeditor/ckeditor.js') }} 
{{ Notification::showAll() }}
<!-- Menü Wechsler für ACTIVE CLASS Linkanfrage -->
<script>
   indexzwo =15;  
</script>
<!-- Menü Wechsler für ACTIVE CLASS Linkanfrage ENDE -->
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
   <div class="container">
      <h1 class="pull-left">Bestellung - Schritt 2</h1>
      <ul class="pull-right breadcrumb">
         <li>
            <a href="{{URL::to('')}}/cart">Warenkorb</a>
         </li>
         <li class="active">Bestellung</li>
      </ul>
   </div>
</div>
<!--/breadcrumbs-->
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Deine Rechnungsadresse</h2>
      <div class="pull-right">
         <a href="javascript:history.back();">
         <button class="btn btn-u"><< Zurück</button>
         </a>
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->

<!-- Rechnungsadresse Anfang-->

  {{ Form::text('last_name', $address_lieferung->last_name, array('class'=>'form-control', 'id' => 'last_name',  'placeholder'=>'Nachname', 'value'=>Input::old('last_name'))) }}
 {{ Form::text('zip', $address_lieferung->zip, array('class'=>'form-control', 'id' => 'zip',  'placeholder'=>'zip', 'value'=>Input::old('zip'))) }}
              

</div>

@stop