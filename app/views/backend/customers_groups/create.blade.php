@extends('backend/_layout/layout')
@section('content')


<div class="container">


 <!--HEADER mit Zurück ANFANG-->
     <div class="headline">
      <h2>  Neue Kundengruppe erstellen</h2>
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


<select name="default" class="form-control"> 
                          @foreach( $list_janein as $x ) 
                          <option value="{{ $x->wert }}">{{ $x->bezeichnung }}</option>
                           @endforeach                  
                        </select>   


  
         @if ($errors->first('default'))
         <span class="help-block">{{ $errors->first('default') }}</span>
         @endif
      </div>
   </div>
   </div>
   </div>


   <br>
 <div class="row">
  <div class="col-md-5">
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






<!-- Plichtfeld Anfang -->     
<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->
   






   <br>
 

</div>

</div>

</div>

   
@stop