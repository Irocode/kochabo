@extends('backend/_layout/layout')
@section('content')

   
     

<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Neuen Wochenplan erstellen</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/calendarweek','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->


   

{{ Form::text('packetid', $calendarweek->packetid, array('class'=>'form-control', 'id' => 'packetid',  'placeholder'=>'packetid', 'pattern' =>'.{2,}', 'required', 'value'=>Input::old('packetid'))) }}        



      {{ Form::text('calendarweek', $calendarweek->calendarweek, array('class'=>'form-control', 'id' => 'calendarweek',  'placeholder'=>'calendarweek', 'pattern' =>'.{2,}', 'required', 'value'=>Input::old('packetid'))) }}        


      {{ Form::text('year', $calendarweek->year, array('class'=>'form-control', 'id' => 'year',  'placeholder'=>'year', 'pattern' =>'.{2,}', 'required', 'value'=>Input::old('year'))) }}        









   @if($products->count())
                     @foreach( $products as $v )                  
                    id: {{ $v->id}} / product_name: {{ $v->product_name}}<br>
                     @endforeach
                     @else
                     <div class="alert alert-danger">Keine products vorhanden</div>
                     @endif 






</div>
         <br>
         <!-- Published --><!--
         <input type="hidden" value="is_published">
         <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
            <div class="controls">
               <label class="checkbox">{{ Form::checkbox('is_published', 'is_published') }} Veröffentlichen ?</label>
               @if ($errors->first('is_published'))
               <span class="help-block">{{ $errors->first('is_published') }}</span>
               @endif
            </div>
         </div>
         <br>
      </div>
   </div>
   <br>
   <!-- Plichtfeld Anfang -->
   <div  style="margin-top:20px; margin-bottom:10px;">
      <p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
   </div>
   <!-- Plichtfeld Ende -->
   <!--Formular Registrierung Ende-->
   {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::hidden('check_yes', 'yes', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}
</div>
<!-- Plichtfeld Ende -->
<br>
<br>
</div>

</div>
</div>

@stop