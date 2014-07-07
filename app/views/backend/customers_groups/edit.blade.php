@extends('backend/_layout/layout')
@section('content')
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Kundengruppe bearbeiten</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/customers_groups','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\CustomersGroupsController@update', $customers_groups->id), 'method' => 'PATCH')) }}
   <div class="row">
  <div class="col-md-6">

   <!-- Janein -->
   <div class="control-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
      <label class="control-label" for="product_name">Artikel Name <span class="stern" >*</span></label>
       <div class="controls">
       <div class="input-group">

       <?php if ($customers_groups->default=='1'   ) {$default='Ja';} else {$default='Nein';} ?>
       
         <select name="ust" class="form-control">
            <option value="{{$default}}" selected>{{$default}}</option>
            @foreach( $list_janein as $x ) 
            <option value="{{ $x->wert }}">{{ $x->bezeichnung }}</option>
            @endforeach               
         </select>
          <span class="input-group-addon">%</span></div>
         @if ($errors->first('title'))
         <span class="help-block">{{ $errors->first('ust') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- groupname -->
   <div class="control-group {{ $errors->has('groupname') ? 'has-error' : '' }}">
      <label class="control-label" for="groupname">Kunden Gruppenname <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('groupname', $customers_groups->groupname, array('class'=>'form-control', 'id' => 'groupname', 'placeholder'=>'Kunden Gruppenname', 'value'=>Input::old('groupname'))) }}
         @if ($errors->first('description'))
         <span class="help-block">{{ $errors->first('groupname') }}</span>
         @endif
      </div>
   </div>
   <br>
  


  
     </div><div class="col-md-6">


   </div></div>



   <!--
      <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
      
          <div class="controls">
              <label class="checkbox">{{ Form::checkbox('is_published', 'is_published',$customers_groups->is_published) }} Veröffentlichen ?</label>
              @if ($errors->first('is_published'))
              <span class="help-block">{{ $errors->first('is_published') }}</span>
              @endif
          </div>
      </div>
      <br>
      -->

   {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}

<!-- Plichtfeld Anfang -->     
<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->

 
</div>
@stop