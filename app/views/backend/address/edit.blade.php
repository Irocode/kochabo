@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 


{{ HTML::script('assets/js/jquery.slug.js') }}


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
      <h2>Adresse</h2>
        <div class="pull-right">
      <a href="javascript:history.back();">
            <button class="btn btn-u"><< Zurück</button>
            </a>
         </div>
      </div>
         <!--HEADER mit Zurück ENDE-->



   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\AddressController@update', $address->user_id), 'method' => 'PATCH')) }}
   <div class="row">
      <div class="col-md-3">
         <div class="radio">
            <label>
               <?php 
                  if (empty($address_delivery_billx)){
                  ?>
               <style>#hi{display:none;}</style>
               <?php
                  echo" <input type='radio' name='address_delivery_bill' id='optionsRadios1' value='option1'  >
                   Rechnugsadresse ident mit Lieferadresse
                  </label>
                  </div>
                  
                  <div class='radio'>
                  <label>
                   <input type='radio' name='address_delivery_bill' id='optionsRadios2' value='option2'  >
                   Rechnugsadresse anders als Lieferadresse
                  </label>
                  ";
                  }  else  {
                  
                  
                  if ($address_delivery_billx=="option1") {
                  echo" <input type='radio' name='address_delivery_bill' id='optionsRadios1' value='option1'  >
                   Rechnugsadresse ident mit Lieferadresse
                  </label>
                  </div>
                  
                  <div class='radio'>
                  <label>
                   <input type='radio' name='address_delivery_bill' id='optionsRadios2' value='option2'  >
                   Rechnugsadresse anders als Lieferadresse
                  </label>";
                   }
                   else  {};  
                   
                   
                  echo"<br>";
                  
                    if ($address_delivery_billx=="option2") {
                  
                   echo"<input type='radio' name='address_delivery_bill' id='optionsRadios1' value='option1'   >
                   Rechnugsadresse ident mit Lieferadresse
                  </label>
                  </div>
                  
                  <div class='radio'>
                  <label>
                   <input type='radio' name='address_delivery_bill' id='optionsRadios2' value='option2'  >
                   Rechnugsadresse anders als Lieferadresse
                  </label>";
                  
                  
                  
                   }
                   else  {};   
                  
                  };
                     
                  
                   ?>
         </div>
      </div>
      <div class="col-md-9">
      <!-- Nav tabs -->
      <div  id="hi" >
      <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Rechnungsadresse</a></li>
      <li><a href="#profile" data-toggle="tab">Lieferadresse</a></li>
      </ul>  
      </div>   
      <!-- Tab panes -->
      <div class="tab-content">
      <div class="tab-pane active" id="home">
      <!-- gender -->
      <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
      <label class="control-label" for="gender">Anrede</label>
      <div class="controls " >
      <?php $genderselectchoice =$address->gender; 
     

         if (empty($genderselectchoice)){ echo Form::select('gender', array('Herr' => 'Herr', 'Frau' => 'Frau'), 'Herr');}  else  {
         if ($genderselectchoice=="Herr") { $genderselectchange="Frau";} else  {$genderselectchange="Herr";} 
         echo Form::select('gender', array($genderselectchange => $genderselectchange, $genderselectchoice => $genderselectchoice), $genderselectchoice);
           };
           ?>
      @if ($errors->first('title'))
      <span class="help-block">{{ $errors->first('gender') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- first_name --> 
      <div class="control-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name">Vorname</label>
      <div class="controls">
      {{ Form::text('first_name', $address->first_name, array('class'=>'form-control', 'id' => 'Vorname', 'disabled' => 'disabled', 'placeholder'=>'Vorname', 'value'=>Input::old('first_name'))) }}
      @if ($errors->first('first_name'))
      <span class="help-block">{{ $errors->first('first_name') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- last_name -->  
      <div class="control-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name">Nachname</label>
      <div class="controls">
      {{ Form::text('last_name', $address->last_name, array('class'=>'form-control', 'id' => 'last_name', 'disabled' => 'disabled', 'placeholder'=>'Nachname', 'value'=>Input::old('last_name'))) }}
      @if ($errors->first('last_name'))
      <span class="help-block">{{ $errors->first('last_name') }}</span>
      @endif
      </div>
      </div>
      <br>

               <!-- dateofbirth -->
      <div class="control-group {{ $errors->has('dateofbirth') ? 'has-error' : '' }}">
      <label class="control-label" for="dateofbirth">Geburtstag</label>
      <div class="controls">
      {{ Form::text('dateofbirth', $address->dateofbirth, array('class'=>'form-control', 'id' => 'dateofbirth', 'disabled' => 'disabled', 'placeholder'=>'Geburtstag', 'value'=>Input::old('dateofbirth'))) }}
      @if ($errors->first('dateofbirth'))
      <span class="help-block">{{ $errors->first('dateofbirth') }}</span>
      @endif
      </div>
      </div>
      <br>

      <!-- prefix --> <!-- 
         <div class="control-group {{ $errors->has('prefix') ? 'has-error' : '' }}">
             <label class="control-label" for="prefix">Prefix</label>
         
             <div class="controls">
                 {{ Form::text('prefix', $address->prefix, array('class'=>'form-control', 'id' => 'prefix', 'placeholder'=>'Prefix', 'value'=>Input::old('prefix'))) }}
                 @if ($errors->first('prefix'))
                 <span class="help-block">{{ $errors->first('prefix') }}</span>
                 @endif
             </div>
         </div>
         <br>
           <!-- suffix --> <!-- 
         <div class="control-group {{ $errors->has('suffix') ? 'has-error' : '' }}">
             <label class="control-label" for="suffix">Suffix</label>
         
             <div class="controls">
                 {{ Form::text('suffix', $address->suffix, array('class'=>'form-control', 'id' => 'suffix', 'placeholder'=>'Suffix', 'value'=>Input::old('suffix'))) }}
                 @if ($errors->first('suffix'))
                 <span class="help-block">{{ $errors->first('suffix') }}</span>
                 @endif
             </div>
         </div>
         <br>
           <!-- company -->
      <div class="control-group {{ $errors->has('company') ? 'has-error' : '' }}">
      <label class="control-label" for="company">Firma</label>
      <div class="controls">
      {{ Form::text('company', $address->company, array('class'=>'form-control', 'id' => 'company', 'placeholder'=>'Firma', 'value'=>Input::old('company'))) }}
      @if ($errors->first('company'))
      <span class="help-block">{{ $errors->first('company') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- street -->
      <div class="control-group {{ $errors->has('street') ? 'has-error' : '' }}">
      <label class="control-label" for="street">Straße</label>
      <div class="controls">
      {{ Form::text('street', $address->street, array('class'=>'form-control', 'id' => 'street', 'placeholder'=>'Straße', 'value'=>Input::old('street'))) }}
      @if ($errors->first('street'))
      <span class="help-block">{{ $errors->first('street') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- city -->
      <div class="control-group {{ $errors->has('city') ? 'has-error' : '' }}">
      <label class="control-label" for="city">Stadt</label>
      <div class="controls">
      {{ Form::text('city', $address->city, array('class'=>'form-control', 'id' => 'city', 'placeholder'=>'Stadt', 'value'=>Input::old('city'))) }}
      @if ($errors->first('city'))
      <span class="help-block">{{ $errors->first('city') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- zip -->
      <div class="control-group {{ $errors->has('zip') ? 'has-error' : '' }}">
      <label class="control-label" for="zip">PLZ</label>
      <div class="controls">
      {{ Form::text('zip', $address->zip, array('class'=>'form-control', 'id' => 'zip', 'placeholder'=>'PLZ', 'value'=>Input::old('zip'))) }}
      @if ($errors->first('zip'))
      <span class="help-block">{{ $errors->first('zip') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- state -->
      <div class="control-group {{ $errors->has('stateprovince') ? 'has-error' : '' }}">
      <label class="control-label" for="stateprovince">Bundesland</label>
      <div class="controls">
      {{ Form::text('stateprovince', $address->stateprovince, array('class'=>'form-control', 'id' => 'stateprovince', 'placeholder'=>'Bundesland', 'value'=>Input::old('stateprovince'))) }}
      @if ($errors->first('stateprovince'))
      <span class="help-block">{{ $errors->first('stateprovince') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- country -->
      <div class="control-group {{ $errors->has('country') ? 'has-error' : '' }}">
      <label class="control-label" for="country">Land</label>
      <div class="controls">
      {{ Form::text('country', $address->country, array('class'=>'form-control', 'id' => 'country', 'placeholder'=>'Land', 'value'=>Input::old('country'))) }}
      @if ($errors->first('country'))
      <span class="help-block">{{ $errors->first('country') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- email -->
      <div class="control-group {{ $errors->has('email') ? 'has-error' : '' }}">
      <label class="control-label" for="email">E-Mail</label>
      <div class="controls">
      {{ Form::text('email', $address->email, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-Mail', 'value'=>Input::old('email'))) }}
      @if ($errors->first('email'))
      <span class="help-block">{{ $errors->first('email') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- telephone -->
      <div class="control-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
      <label class="control-label" for="telephone">Telefon</label>
      <div class="controls">
      {{ Form::text('telephone', $address->telephone, array('class'=>'form-control', 'id' => 'telephone', 'placeholder'=>'Telefon', 'value'=>Input::old('telephone'))) }}
      @if ($errors->first('telephone'))
      <span class="help-block">{{ $errors->first('telephone') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- fax -->
      <div class="control-group {{ $errors->has('fax') ? 'has-error' : '' }}">
      <label class="control-label" for="fax">Fax</label>
      <div class="controls">
      {{ Form::text('fax', $address->fax, array('class'=>'form-control', 'id' => 'fax', 'placeholder'=>'Fax', 'value'=>Input::old('fax'))) }}
      @if ($errors->first('fax'))
      <span class="help-block">{{ $errors->first('fax') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- latitude --><!--
         <div class="control-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
             <label class="control-label" for="latitude">Latitude</label>
         
             <div class="controls">
                 {{ Form::text('latitude', $address->latitude, array('class'=>'form-control', 'id' => 'latitude', 'placeholder'=>'Latitude', 'value'=>Input::old('latitude'))) }}
                 @if ($errors->first('latitude'))
                 <span class="help-block">{{ $errors->first('latitude') }}</span>
                 @endif
             </div>
         </div>
         <br>
         <!-- longitude --><!--
         <div class="control-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
             <label class="control-label" for="longitude">Longitude</label>
         
             <div class="controls">
                 {{ Form::text('longitude', $address->longitude, array('class'=>'form-control', 'id' => 'longitude', 'placeholder'=>'Longitude', 'value'=>Input::old('longitude'))) }}
                 @if ($errors->first('longitude'))
                 <span class="help-block">{{ $errors->first('longitude') }}</span>
                 @endif
             </div>
         </div>
         <br>
   
      <!-- Delivery Information< -->
      <div class="control-group {{ $errors->has('deliveryinformation') ? 'has-error' : '' }}">
      <label class="control-label" for="deliveryinformation">Lieferinformationen<label>
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
      </div>
      <!-- Tabs Anfang Teil 2 -->
      <div class="tab-pane" id="profile">
      <!-- gender_delivery -->
      <div class="control-group {{ $errors->has('gender_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="gender_delivery">Anrede</label>
      <div class="controls " >
      <?php $genderselectchoice_delivery =$address->gender_delivery;  
     

      if (empty($genderselectchoice_delivery)){ echo Form::select('gender_delivery', array('Herr' => 'Herr', 'Frau' => 'Frau'), 'Herr');}  else  {
      if ($genderselectchoice_delivery=="Herr") { $genderselectchange_delivery="Frau";} else  {$genderselectchange_delivery="Herr";} 
      echo Form::select('gender_delivery', array($genderselectchange_delivery => $genderselectchange_delivery, $genderselectchoice_delivery => $genderselectchoice_delivery), $genderselectchoice_delivery);
          };
           ?>
      @if ($errors->first('gender'))
      <span class="help-block">{{ $errors->first('gender') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- first_name_delivery --> 
      <div class="control-group {{ $errors->has('first_name_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name_delivery">Vorname</label>
      <div class="controls">
      {{ Form::text('first_name_delivery', $address->first_name_delivery, array('class'=>'form-control', 'id' => 'Vorname', 'placeholder'=>'Vorname', 'value'=>Input::old('first_name_delivery' ))) }}
      @if ($errors->first('first_name_delivery'))
      <span class="help-block">{{ $errors->first('first_name_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- last_name_delivery -->  
      <div class="control-group {{ $errors->has('last_name_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name_delivery">Nachname</label>
      <div class="controls">
      {{ Form::text('last_name_delivery', $address->last_name_delivery, array('class'=>'form-control', 'id' => 'last_name_delivery', 'placeholder'=>'Nachname', 'value'=>Input::old('last_name_delivery'))) }}
      @if ($errors->first('last_name_delivery'))
      <span class="help-block">{{ $errors->first('last_name') }}</span>
      @endif
      </div>
      </div>
      <br>

   

   



   <!-- Datetime -->
   <div class="control-group {{ $errors->has('dateofbirth_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Geburtsdatum</label>
      <div class="controls">
         <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
         {{ Form::text('datetime', $address->dateofbirth_delivery,  array( 'class'=>'form-control input-append date input-group date form_date col-md-5 ', 'id' => 'dateofbirth_delivery', 'readonly', 'value'=>Input::old('dateofbirth_delivery'))) }}
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
         </div>
         @if ($errors->first('dateofbirth_delivery'))
         <span class="help-block">{{ $errors->first('dateofbirth_delivery') }}</span>
         @endif
      </div>
      <input type="hidden" id="dtp_input2" value="" /><br/>
   </div>









<br>

      <!-- prefix --> <!-- 
         <div class="control-group {{ $errors->has('prefix') ? 'has-error' : '' }}">
             <label class="control-label" for="prefix">Prefix</label>
         
             <div class="controls">
                 {{ Form::text('prefix', $address->prefix, array('class'=>'form-control', 'id' => 'prefix', 'placeholder'=>'Prefix', 'value'=>Input::old('prefix'))) }}
                 @if ($errors->first('prefix'))
                 <span class="help-block">{{ $errors->first('prefix') }}</span>
                 @endif
             </div>
         </div>
         <br>
           <!-- suffix --> <!-- 
         <div class="control-group {{ $errors->has('suffix') ? 'has-error' : '' }}">
             <label class="control-label" for="suffix">Suffix</label>
         
             <div class="controls">
                 {{ Form::text('suffix', $address->suffix, array('class'=>'form-control', 'id' => 'suffix', 'placeholder'=>'Suffix', 'value'=>Input::old('suffix'))) }}
                 @if ($errors->first('suffix'))
                 <span class="help-block">{{ $errors->first('suffix') }}</span>
                 @endif
             </div>
         </div>
         <br>
           <!-- company_delivery -->
      <div class="control-group {{ $errors->has('company_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="company_delivery">Firma</label>
      <div class="controls">
      {{ Form::text('company_delivery', $address->company_delivery, array('class'=>'form-control', 'id' => 'company_delivery', 'placeholder'=>'Firma', 'value'=>Input::old('company_delivery'))) }}
      @if ($errors->first('company_delivery'))
      <span class="help-block">{{ $errors->first('company') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- street_delivery -->
      <div class="control-group {{ $errors->has('street_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="street_delivery">Straße</label>
      <div class="controls">
      {{ Form::text('street_delivery', $address->street_delivery, array('class'=>'form-control', 'id' => 'street_delivery', 'placeholder'=>'Straße', 'value'=>Input::old('street_delivery'))) }}
      @if ($errors->first('street_delivery'))
      <span class="help-block">{{ $errors->first('street_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- city_delivery -->
      <div class="control-group {{ $errors->has('city_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="city_delivery">Stadt</label>
      <div class="controls">
      {{ Form::text('city_delivery', $address->city_delivery, array('class'=>'form-control', 'id' => 'city_delivery', 'placeholder'=>'Stadt', 'value'=>Input::old('city_delivery'))) }}
      @if ($errors->first('city_delivery'))
      <span class="help-block">{{ $errors->first('city_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- zip_delivery -->
      <div class="control-group {{ $errors->has('zip_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="zip_delivery">PLZ</label>
      <div class="controls">
      {{ Form::text('zip_delivery', $address->zip_delivery, array('class'=>'form-control', 'id' => 'zip_delivery', 'placeholder'=>'PLZ', 'value'=>Input::old('zip_delivery'))) }}
      @if ($errors->first('zip_delivery'))
      <span class="help-block">{{ $errors->first('zip_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- state_delivery -->
      <div class="control-group {{ $errors->has('stateprovince_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="stateprovince_delivery">Bundesland</label>
      <div class="controls">
      {{ Form::text('stateprovince_delivery', $address->stateprovince_delivery, array('class'=>'form-control', 'id' => 'stateprovince_delivery', 'placeholder'=>'Bundesland', 'value'=>Input::old('stateprovince_delivery'))) }}
      @if ($errors->first('stateprovince_delivery'))
      <span class="help-block">{{ $errors->first('stateprovince_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- country_delivery -->
      <div class="control-group {{ $errors->has('country_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="country_delivery">Land</label>
      <div class="controls">
      {{ Form::text('country_delivery', $address->country_delivery, array('class'=>'form-control', 'id' => 'country_delivery', 'placeholder'=>'Land', 'value'=>Input::old('country_delivery'))) }}
      @if ($errors->first('country_delivery'))
      <span class="help-block">{{ $errors->first('country_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- email_delivery -->
      <div class="control-group {{ $errors->has('email') ? 'has-error' : '' }}">
      <label class="control-label" for="email">E-Mail</label>
      <div class="controls">
      {{ Form::text('email_delivery', $address->email_delivery, array('class'=>'form-control', 'id' => 'email_delivery', 'placeholder'=>'E-Mail', 'value'=>Input::old('email_delivery'))) }}
      @if ($errors->first('email_delivery'))
      <span class="help-block">{{ $errors->first('email_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- telephone_delivery -->
      <div class="control-group {{ $errors->has('telephone_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="telephone_delivery">Telefon</label>
      <div class="controls">
      {{ Form::text('telephone_delivery', $address->telephone_delivery, array('class'=>'form-control', 'id' => 'telephone_delivery', 'placeholder'=>'Telefon', 'value'=>Input::old('telephone_delivery'))) }}
      @if ($errors->first('telephone_delivery'))
      <span class="help-block">{{ $errors->first('telephone_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- fax_delivery -->
      <div class="control-group {{ $errors->has('fax_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="fax_delivery">Fax</label>
      <div class="controls">
      {{ Form::text('fax_delivery', $address->fax_delivery, array('class'=>'form-control', 'id' => 'fax_delivery', 'placeholder'=>'Fax', 'value'=>Input::old('fax_delivery'))) }}
      @if ($errors->first('fax_delivery'))
      <span class="help-block">{{ $errors->first('fax') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- latitude --><!--
         <div class="control-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
             <label class="control-label" for="latitude">Latitude</label>
         
             <div class="controls">
                 {{ Form::text('latitude', $address->latitude, array('class'=>'form-control', 'id' => 'latitude', 'placeholder'=>'Latitude', 'value'=>Input::old('latitude'))) }}
                 @if ($errors->first('latitude'))
                 <span class="help-block">{{ $errors->first('latitude') }}</span>
                 @endif
             </div>
         </div>
         <br>
         <!-- longitude --><!--
         <div class="control-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
             <label class="control-label" for="longitude">Longitude</label>
         
             <div class="controls">
                 {{ Form::text('longitude', $address->longitude, array('class'=>'form-control', 'id' => 'longitude', 'placeholder'=>'Longitude', 'value'=>Input::old('longitude'))) }}
                 @if ($errors->first('longitude'))
                 <span class="help-block">{{ $errors->first('longitude') }}</span>
                 @endif
             </div>
         </div>
         <br>
     
      <!-- Delivery Information_delivery< -->
      <div class="control-group {{ $errors->has('deliveryinformation_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="deliveryinformation_delivery">Lieferinformationen</label>
      <div class="controls">
      {{ Form::textarea('deliveryinformation_delivery', $address->deliveryinformation_delivery, array('class'=>'form-control', 'id' => 'deliveryinformation_delivery', 'placeholder'=>'Lieferinformationen', 'value'=>Input::old('deliveryinformation_delivery'))) }}
      @if ($errors->first('deliveryinformation_delivery'))
      <span class="help-block">{{ $errors->first('deliveryinformation_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <br>
      <!-- Tabs Ende Teil 2 -->   
      </div>
      </div>
      <!-- Tabs End -->   
      {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-success')) }}
      {{ Form::close() }}
      </div>
   </div>
   <!--Texteditor-->
   <script>
      window.onload = function () {      
      
          CKEDITOR.replace('deliveryinformation', {
             "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
                 height: '150px',
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
   <!--Tabs-->
   <script>
      $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      
        $('#myTab a[href="#profile"]').tab('show') // Select tab by name
      $('#myTab a:first').tab('show') // Select first tab
      $('#myTab a:last').tab('show') // Select last tab
      $('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)
      })
   </script>
   <!--Rechnungs und Lieferadresse-->
   <script>
      $("#optionsRadios1").click(function(){
        $("#hi").hide();
      });
      
      $("#optionsRadios2").click(function(){
        $("#hi").show();
      });
      
   </script>




 <!--Datepicker ANFANG-->   
   
   <script type="text/javascript" src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>
   <script type="text/javascript" src="{{ URL::to('assets/js/locales/bootstrap-datetimepicker.de.js') }}" charset="UTF-8"></script>
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






</div>
@stop