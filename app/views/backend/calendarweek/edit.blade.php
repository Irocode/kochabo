@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/backend/plugins/ckeditor/ckeditor.js') }} 


{{ HTML::script('assets/backend/js/jquery.slug.js') }}


<!-- Tab Regulierung-->
<?php 
   $address_delivery_billx = $address->address_delivery_bill;   
   if ($address_delivery_billx=="option1") {  ?>
<style>#hi{display:none;}</style>
<?php } else {};
   if ($address_delivery_billx=="option2") {} else {};  
   if (empty($address_delivery_billx)){}  else  {};
   ?> 
<div class="container">



 <!--HEADER mit Zurück ANFANG-->
     <div class="headline">
      <h2>Rechnungsadresse</h2>
        <div class="pull-right">
      <a href="javascript:history.back();">
            <button class="btn btn-u"><< Zurück</button>
            </a>
         </div>
      </div>
         <!--HEADER mit Zurück ENDE-->



   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\AddressController@update', $address->id), 'method' => 'PATCH')) }}


<div class="row">
  <div class="col-md-6">

      <!-- gender -->
   <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
       <label class="control-label" for="gender">Anrede <span class="stern" >*</span></label>
      <div class="controls">
      <select name="gender" class="form-control" required>
                          
                           <option value="{{$address->gender}}" selected>{{$address->gender}}</option>
                          @foreach( $list_gender as $x )  
                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>   
         @if ($errors->first('gender'))
         <span class="help-block">{{ $errors->first('gender') }}</span>
         @endif
      </div>
   </div>
   <br>
      <!-- first_name --> 
      <div class="control-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name">Vorname <span class="stern" >*</span></label>
      <div class="controls">
      {{ Form::text('first_name', $address->first_name, array('class'=>'form-control', 'id' => 'Vorname',  'placeholder'=>'Vorname', 'required', 'value'=>Input::old('first_name'))) }}
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
      {{ Form::text('last_name', $address->last_name, array('class'=>'form-control', 'id' => 'last_name',  'placeholder'=>'Nachname',  'required','value'=>Input::old('last_name'))) }}
      @if ($errors->first('last_name'))
      <span class="help-block">{{ $errors->first('last_name') }}</span>
      @endif
      </div>
      </div>
      <br>


      <!-- street -->
      <div class="control-group {{ $errors->has('street') ? 'has-error' : '' }}">
      <label class="control-label" for="street">Straße <span class="stern" >*</span></label>
      <div class="controls">
      {{ Form::text('street', $address->street, array('class'=>'form-control', 'id' => 'street', 'placeholder'=>'Straße',  'required','value'=>Input::old('street'))) }}
      @if ($errors->first('street'))
      <span class="help-block">{{ $errors->first('street') }}</span>
      @endif
      </div>
      </div>
      <br>




  <div class="row">
  <div class="col-md-3">


          <!-- housenumber -->
      <div class="control-group {{ $errors->has('housenumber') ? 'has-error' : '' }}">
      <label class="control-label" for="housenumber">Hausnummer <span class="stern" >*</span></label>
      <div class="controls">
      {{ Form::text('housenumber', $address->housenumber, array('class'=>'form-control', 'id' => 'housenumber', 'placeholder'=>'Hausnummer', 'required', 'value'=>Input::old('housenumber'))) }}
      @if ($errors->first('housenumber'))
      <span class="help-block">{{ $errors->first('housenumber') }}</span>
      @endif
      </div>
      </div>


      </div><div class="col-md-3">

          <!-- stairway_number -->
      <div class="control-group {{ $errors->has('stairway_number') ? 'has-error' : '' }}">
      <label class="control-label" for="street">Stiege</label>
      <div class="controls">
      {{ Form::text('stairway_number', $address->stairway_number, array('class'=>'form-control', 'id' => 'stairway_number', 'placeholder'=>'Stiege',  'value'=>Input::old('stairway_number'))) }}
      @if ($errors->first('stairway_number'))
      <span class="help-block">{{ $errors->first('stairway_number') }}</span>
      @endif
      </div>
      </div>
      

</div><div class="col-md-3">
     


          <!-- floor -->
      <div class="control-group {{ $errors->has('floor') ? 'has-error' : '' }}">
      <label class="control-label" for="floor">Stock</label>
      <div class="controls">
      {{ Form::text('floor', $address->floor, array('class'=>'form-control', 'id' => 'floor', 'placeholder'=>'Stock', 'value'=>Input::old('floor'))) }}
      @if ($errors->first('floor'))
      <span class="help-block">{{ $errors->first('floor') }}</span>
      @endif
      </div>
      </div>
    


</div><div class="col-md-3">

          <!-- appartement_number -->
      <div class="control-group {{ $errors->has('appartement_number') ? 'has-error' : '' }}">
      <label class="control-label" for="appartement_number">Türnummer</label>
      <div class="controls">
      {{ Form::text('appartement_number', $address->appartement_number, array('class'=>'form-control', 'id' => 'appartement_number', 'placeholder'=>'Türnummer', 'value'=>Input::old('appartement_number'))) }}
      @if ($errors->first('appartement_number'))
      <span class="help-block">{{ $errors->first('appartement_number') }}</span>
      @endif
      </div>
      </div>
      


</div></div>


</div><div class="col-md-6">




      <!-- city -->
      <div class="control-group {{ $errors->has('city') ? 'has-error' : '' }}">
      <label class="control-label" for="city">Stadt <span class="stern" >*</span></label>
      <div class="controls">
      {{ Form::text('city', $address->city, array('class'=>'form-control', 'id' => 'city', 'required', 'placeholder'=>'Stadt', 'value'=>Input::old('city'))) }}
      @if ($errors->first('city'))
      <span class="help-block">{{ $errors->first('city') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- zip -->
      <div class="control-group {{ $errors->has('zip') ? 'has-error' : '' }}">
      <label class="control-label" for="zip">PLZ <span class="stern" >*</span></label>
      <div class="controls">
      {{ Form::text('zip', $address->zip, array('onkeypress' =>'return isNumberKey(event)','class'=>'form-control', 'id' => 'zip', 'placeholder'=>'PLZ [Zahl angeben]',  'required', 'value'=>Input::old('zip'))) }}
      @if ($errors->first('zip'))
      <span class="help-block">{{ $errors->first('zip') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- state -->
      <div class="control-group {{ $errors->has('stateprovince') ? 'has-error' : '' }}">
      <label class="control-label" for="stateprovince">Bundesland <span class="stern" >*</span></label>
      <div class="controls">
      {{ Form::text('stateprovince', $address->stateprovince, array('class'=>'form-control', 'id' => 'stateprovince', 'placeholder'=>'Bundesland', 'required', 'value'=>Input::old('stateprovince'))) }}
      @if ($errors->first('stateprovince'))
      <span class="help-block">{{ $errors->first('stateprovince') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- country -->
      <div class="control-group {{ $errors->has('country') ? 'has-error' : '' }}">
      <label class="control-label" for="country">Land <span class="stern" >*</span></label>
      <div class="controls">
      {{ Form::text('country', $address->country, array('class'=>'form-control', 'id' => 'country', 'placeholder'=>'Land', 'required','value'=>Input::old('country'))) }}
      @if ($errors->first('country'))
      <span class="help-block">{{ $errors->first('country') }}</span>
      @endif
      </div>
      </div>
      <br>
      
     
      
        </div></div>

</div>



<div class="container">

  <br><br>

<div class="row">
  <div class="col-md-12"> <label class="control-label" for="deliveryinformation">Lieferinformationen<label></div>

</div>


<div class="row">
  <div class="col-md-12">



      <!-- Delivery Information< -->
      <div class="control-group {{ $errors->has('deliveryinformation') ? 'has-error' : '' }}">
     
      <div class="controls">
      {{ Form::textarea('deliveryinformation', $address->deliveryinformation, array('class'=>'form-control', 'id' => 'deliveryinformation', 'placeholder'=>'Lieferinformationen', 'value'=>Input::old('deliveryinformation'))) }}
      @if ($errors->first('deliveryinformation'))
      <span class="help-block">{{ $errors->first('deliveryinformation') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- Published -->
      <input type="hidden" value="is_published">
      <!-- Tabs Ende Teil 1 -->
   




</div></div>
   
      <br>
      <br>
    
      <!-- Tabs End -->   
      {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-success')) }}
      {{ Form::close() }}
      </div>
 
   <!--Texteditor-->
   <script>
      window.onload = function () {      
      
          CKEDITOR.replace('deliveryinformation', {
             "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
                 height: '150px',
                  width: '100%',
               uiColor: '#85b81d',
                language: 'de',
            });       
      
          CKEDITOR.replace('deliveryinformation_delivery', {
             "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
                  height: '150px',
               uiColor: '#85b81d',
                language: 'de',
            });    
      
      };
      
   </script>





 <!--Datepicker ANFANG-->   
   
   <script type="text/javascript" src="{{ URL::to('assets/backend/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>
   <script type="text/javascript" src="{{ URL::to('assets/backend/js/locales/bootstrap-datetimepicker.de.js') }}" charset="UTF-8"></script>
   <script type="text/javascript">
      $(".form_date").datetimepicker({
            language:  'de',
            
          weekStart: 1,
          todayBtn:  1,
          autoclose: 1,
          todayHighlight: 1,
          startView: 2,
          minView: 2,
          forceParse: 0
      });
   </script>    
   <!--Datepicker ENDE--> 






@stop