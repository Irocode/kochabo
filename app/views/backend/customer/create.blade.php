@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 

{{ HTML::script('assets/js/jquery.slug.js') }}

<div class="container">


 <!--HEADER mit Zurück ANFANG-->
     <div class="headline">
      <h2>  Neuen Kunden erstellen</h2>
        <div class="pull-right">
       {{ HTML::link('/admin/customer','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </div>
         <!--HEADER mit Zurück ENDE-->

   {{ Form::open(array('action' => 'App\Controllers\Admin\CustomerController@store')) }}




     <!-- gender -->
   <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
      <label class="control-label" for="gender">Anrede</label>
      <div class="controls">
  <?php 
      echo Form::select('gender', array('Herr' => 'Herr', 'Frau' => 'Frau'), 'Herr');
  ?>     
         @if ($errors->first('gender'))
         <span class="help-block">{{ $errors->first('gender') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- first_name -->
   <div class="control-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
      <label class="control-label" for="first_name">Vorname <span class="stern" >*</span></label>
      <div class="controls">         
         {{ Form::text('first_name', null, array('class'=>'form-control', 'id' => 'first_name', 'placeholder'=>'Vorname', 'value'=>Input::old('first_name'))) }}
         @if ($errors->first('first_name'))
         <span class="help-block">{{ $errors->first('first_name') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- last_name -->
   <div class="control-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name">Nachname <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('last_name', null, array('class'=>'form-control', 'id' => 'last_name', 'placeholder'=>'Nachname', 'value'=>Input::old('last_name'))) }}          
         @if ($errors->first('last_name'))
         <span class="help-block">{{ $errors->first('last_name') }}</span>
         @endif
      </div>
   </div>
   <br>
      <!-- Datetime -->
   <div class="control-group {{ $errors->has('datetime') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Geburtsdatum <span class="stern" >*</span></label>
      <div class="controls">
  <div class="input-group date form_date col-md-15" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
         {{ Form::text('datetime', null, array('class'=>'form-control', 'id' => 'datetime', 'placeholder'=>'Geburtsdatum',  'value'=>Input::old('datetime'))) }}
         @if ($errors->first('datetime'))
         <span class="help-block">{{ $errors->first('datetime') }}</span>
         @endif
                
          <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
         </div>

      </div>
   </div>
   <br>
   <!-- kundeseit -->
   <div class="control-group {{ $errors->has('kundeseit') ? 'has-error' : '' }}">
      <label class="control-label" for="kundeseit">Kunde seit</label>
      <div class="controls">
         {{ Form::text('kundeseit', null, array('class'=>'form-control', 'id' => 'kundeseit', 'placeholder'=>'Kunde seit', 'value'=>Input::old('kundeseit'))) }}           
         @if ($errors->first('kundeseit'))
         <span class="help-block">{{ $errors->first('kundeseit') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- abobox -->
   <div class="control-group {{ $errors->has('abobox') ? 'has-error' : '' }}">
      <label class="control-label" for="abobox">Abo Box</label>
      <div class="controls">
         {{ Form::text('abobox', null, array('class'=>'form-control', 'id' => 'abobox', 'placeholder'=>'Abo Box', 'value'=>Input::old('abobox'))) }}          
         @if ($errors->first('title'))
         <span class="help-block">{{ $errors->first('abobox') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- abolieferung -->
   <div class="control-group {{ $errors->has('abolieferung') ? 'has-error' : '' }}">
      <label class="control-label" for="abolieferung">Abo Lieferung</label>
      <div class="controls">
         {{ Form::text('abolieferung', null, array('class'=>'form-control', 'id' => 'abolieferung', 'placeholder'=>'Abo Lieferung', 'value'=>Input::old('abolieferung'))) }}         
         @if ($errors->first('abolieferung'))
         <span class="help-block">{{ $errors->first('abolieferung') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- abotyp -->
   <div class="control-group {{ $errors->has('abotyp') ? 'has-error' : '' }}">
      <label class="control-label" for="abotyp">Abo Typ</label>
      <div class="controls">
        <select name="abotyp" class="form-control">
                           <option value="" selected>Auswahl Abo Typ</option>
                          @foreach( $list_abotyp as $x )  
                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>   
         @if ($errors->first('abotyp'))
         <span class="help-block">{{ $errors->first('abotyp') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- aboweine -->
   <div class="control-group {{ $errors->has('aboweine') ? 'has-error' : '' }}">
      <label class="control-label" for="aboweine">Abo Weine</label>
      <div class="controls">
         {{ Form::text('aboweine', null, array('class'=>'form-control', 'id' => 'aboweine', 'placeholder'=>'Abo Weine', 'value'=>Input::old('aboweine'))) }}             
         @if ($errors->first('aboweine'))
         <span class="help-block">{{ $errors->first('aboweine') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- abobiere -->
   <div class="control-group {{ $errors->has('abobiere') ? 'has-error' : '' }}">
      <label class="control-label" for="abobiere">Abo Biere</label>
      <div class="controls">
         {{ Form::text('abobiere', null, array('class'=>'form-control', 'id' => 'abobiere', 'placeholder'=>'Abo Biere', 'value'=>Input::old('abobiere'))) }}            
         @if ($errors->first('abobiere'))
         <span class="help-block">{{ $errors->first('abobiere') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- anzahlobstboxen -->
   <div class="control-group {{ $errors->has('anzahlobstboxen') ? 'has-error' : '' }}">
      <label class="control-label" for="anzahlobstboxen">Anzahl Obstboxen</label>
      <div class="controls">
         {{ Form::text('anzahlobstboxen', null, array('class'=>'form-control', 'id' => 'anzahlobstboxen', 'placeholder'=>'Anzahl Obstboxen', 'value'=>Input::old('anzahlobstboxen'))) }}           
         @if ($errors->first('anzahlobstboxen'))
         <span class="help-block">{{ $errors->first('anzahlobstboxen') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- abostatus -->
   <div class="control-group {{ $errors->has('abostatus') ? 'has-error' : '' }}">
      <label class="control-label" for="abostatus">Abo Status</label>
      <div class="controls">

      

 <select name="abostatus" class="form-control">
                           <option value="" selected>Auswahl Status</option>
                          @foreach( $list_status as $x )  
                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>

                    
         @if ($errors->first('abostatus'))
         <span class="help-block">{{ $errors->first('abostatus') }}</span>
         @endif


      </div>
   </div>
   <br>
   <!-- gruppen -->
   <div class="control-group {{ $errors->has('gruppen') ? 'has-error' : '' }}">
      <label class="control-label" for="gruppen">Gruppe</label>
      <div class="controls">
         <select name="gruppen" class="form-control">
                           <option value="" selected>Auswahl Gruppe</option>
                          @foreach( $list_gruppe as $x )  
                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>      
         @if ($errors->first('gruppen'))
         <span class="help-block">{{ $errors->first('gruppen') }}</span>
         @endif
      </div>
         <!-- Plichtfeld Anfang -->
     
<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->
   </div>
   <br>





   <br>
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
   {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}
</div>









   <script type="text/javascript" src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>
   <script type="text/javascript" src="{{ URL::to('assets/js/locales/bootstrap-datetimepicker.de.js') }}" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
        showMeridian: 1
    });
   $('.form_date').datetimepicker({
        language:  'de',
        weekStart: 1,
        todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
   $('.form_time').datetimepicker({
        language:  'de',
        weekStart: 1,
        todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 1,
      minView: 0,
      maxView: 1,
      forceParse: 0
    });
</script>
@stop