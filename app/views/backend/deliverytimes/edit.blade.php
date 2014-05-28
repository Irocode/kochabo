@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('ckeditor/ckeditor.js') }}
{{ HTML::style('assets/bootstrap/css/bootstrap-tagsinput.css') }}
{{ HTML::script('assets/bootstrap/js/bootstrap-tagsinput.js') }}
{{ HTML::script('assets/js/jquery.slug.js') }}
{{ HTML::style('bootstrap_datepicker/css/datepicker.css') }}
{{ HTML::script('assets/bootstrap-datetimepicker-0.0.11/js/bootstrap-datetimepicker.min.js') }}
<link rel="stylesheet" href="{{$myuserurl}}assets/bootstrap-datetimepicker-0.0.11/css/bootstrap-datetimepicker.min.css">



<!-- Tab Regulierung-->
<?php 
   $deliverytimes_delivery_billx = $deliverytimes->deliverytimes_delivery_bill;   
   if ($deliverytimes_delivery_billx=="option1") {  ?>
<style>#hi{display:none;}</style>
<?php } else {};
   if ($deliverytimes_delivery_billx=="option2") {} else {};  
   if (empty($deliverytimes_delivery_billx)){}  else  {};
   ?> 
<div class="container">
   <div class="page-header">
      <h3>
         Adresse
         <div class="pull-right">
            <a href="javascript:history.back();">
            <button class="btn btn-u"><< Zurück</button>
            </a>
         </div>
      </h3>
   </div>
   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\DeliverytimesController@update', $deliverytimes->user_id), 'method' => 'PATCH')) }}
   <div class="row">
      <div class="col-md-3">
         <div class="radio">
            <label>
               <?php 
                  if (empty($deliverytimes_delivery_billx)){
                  ?>
               <style>#hi{display:none;}</style>
               <?php
                  echo" <input type='radio' name='deliverytimes_delivery_bill' id='optionsRadios1' value='option1'  checked onchange='copyTextValue(this);'>
                   Rechnugsadresse ident mit Lieferadresse
                  </label>
                  </div>
                  
                  <div class='radio'>
                  <label>
                   <input type='radio' name='deliverytimes_delivery_bill' id='optionsRadios2' value='option2'  onchange='copyTextValuereturn(this);'>
                   Rechnugsadresse anders als Lieferadresse
                  </label>
                  ";
                  }  else  {
                  
                  
                  if ($deliverytimes_delivery_billx=="option1") {
                  echo" <input type='radio' name='deliverytimes_delivery_bill' id='optionsRadios1' value='option1'  checked onchange='copyTextValue(this);'>
                   Rechnugsadresse ident mit Lieferadresse
                  </label>
                  </div>
                  
                  <div class='radio'>
                  <label>
                   <input type='radio' name='deliverytimes_delivery_bill' id='optionsRadios2' value='option2'  onchange='copyTextValuereturn(this);'>
                   Rechnugsadresse anders als Lieferadresse
                  </label>";
                   }
                   else  {};  
                   
                   
                  echo"<br>";
                  
                    if ($deliverytimes_delivery_billx=="option2") {
                  
                   echo"<input type='radio' name='deliverytimes_delivery_bill' id='optionsRadios1' value='option1'   onchange='copyTextValue(this);'>
                   Rechnugsadresse ident mit Lieferadresse
                  </label>
                  </div>
                  
                  <div class='radio'>
                  <label>
                   <input type='radio' name='deliverytimes_delivery_bill' id='optionsRadios2' value='option2'  checked onchange='copyTextValuereturn(this);'>
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
      <label class="control-label" for="gender">Gender</label>
      <div class="controls " >
      <?php $genderselectchoice =$deliverytimes->gender; 
     

         if (empty($genderselectchoice)){ echo Form::select('gender', array('male' => 'male', 'female' => 'female'), 'male');}  else  {
         if ($genderselectchoice=="male") { $genderselectchange="female";} else  {$genderselectchange="male";} 
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
      <label class="control-label" for="last_name">First Name</label>
      <div class="controls">
      {{ Form::text('first_name', $deliverytimes->first_name, array('class'=>'form-control', 'id' => 'Vorname', 'placeholder'=>'First Name', 'value'=>Input::old('first_name'))) }}
      @if ($errors->first('first_name'))
      <span class="help-block">{{ $errors->first('first_name') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- last_name -->  
      <div class="control-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name">Last Name</label>
      <div class="controls">
      {{ Form::text('last_name', $deliverytimes->last_name, array('class'=>'form-control', 'id' => 'last_name', 'placeholder'=>'Nachname', 'value'=>Input::old('last_name'))) }}
      @if ($errors->first('last_name'))
      <span class="help-block">{{ $errors->first('last_name') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- prefix --> <!-- 
         <div class="control-group {{ $errors->has('prefix') ? 'has-error' : '' }}">
             <label class="control-label" for="prefix">Prefix</label>
         
             <div class="controls">
                 {{ Form::text('prefix', $deliverytimes->prefix, array('class'=>'form-control', 'id' => 'prefix', 'placeholder'=>'Prefix', 'value'=>Input::old('prefix'))) }}
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
                 {{ Form::text('suffix', $deliverytimes->suffix, array('class'=>'form-control', 'id' => 'suffix', 'placeholder'=>'Suffix', 'value'=>Input::old('suffix'))) }}
                 @if ($errors->first('suffix'))
                 <span class="help-block">{{ $errors->first('suffix') }}</span>
                 @endif
             </div>
         </div>
         <br>
           <!-- company -->
      <div class="control-group {{ $errors->has('company') ? 'has-error' : '' }}">
      <label class="control-label" for="company">Company</label>
      <div class="controls">
      {{ Form::text('company', $deliverytimes->company, array('class'=>'form-control', 'id' => 'company', 'placeholder'=>'Company', 'value'=>Input::old('company'))) }}
      @if ($errors->first('company'))
      <span class="help-block">{{ $errors->first('company') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- street -->
      <div class="control-group {{ $errors->has('street') ? 'has-error' : '' }}">
      <label class="control-label" for="street">Street</label>
      <div class="controls">
      {{ Form::text('street', $deliverytimes->street, array('class'=>'form-control', 'id' => 'street', 'placeholder'=>'Street', 'value'=>Input::old('street'))) }}
      @if ($errors->first('street'))
      <span class="help-block">{{ $errors->first('street') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- city -->
      <div class="control-group {{ $errors->has('city') ? 'has-error' : '' }}">
      <label class="control-label" for="city">City</label>
      <div class="controls">
      {{ Form::text('city', $deliverytimes->city, array('class'=>'form-control', 'id' => 'city', 'placeholder'=>'City', 'value'=>Input::old('city'))) }}
      @if ($errors->first('city'))
      <span class="help-block">{{ $errors->first('city') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- zip -->
      <div class="control-group {{ $errors->has('zip') ? 'has-error' : '' }}">
      <label class="control-label" for="zip">Zip</label>
      <div class="controls">
      {{ Form::text('zip', $deliverytimes->zip, array('class'=>'form-control', 'id' => 'zip', 'placeholder'=>'Zip', 'value'=>Input::old('zip'))) }}
      @if ($errors->first('zip'))
      <span class="help-block">{{ $errors->first('zip') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- state -->
      <div class="control-group {{ $errors->has('stateprovince') ? 'has-error' : '' }}">
      <label class="control-label" for="stateprovince">State/Province</label>
      <div class="controls">
      {{ Form::text('stateprovince', $deliverytimes->stateprovince, array('class'=>'form-control', 'id' => 'stateprovince', 'placeholder'=>'State/Province', 'value'=>Input::old('stateprovince'))) }}
      @if ($errors->first('stateprovince'))
      <span class="help-block">{{ $errors->first('stateprovince') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- country -->
      <div class="control-group {{ $errors->has('country') ? 'has-error' : '' }}">
      <label class="control-label" for="country">Country</label>
      <div class="controls">
      {{ Form::text('country', $deliverytimes->country, array('class'=>'form-control', 'id' => 'country', 'placeholder'=>'Country', 'value'=>Input::old('country'))) }}
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
      {{ Form::text('email', $deliverytimes->email, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-Mail', 'value'=>Input::old('email'))) }}
      @if ($errors->first('email'))
      <span class="help-block">{{ $errors->first('email') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- telephone -->
      <div class="control-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
      <label class="control-label" for="telephone">Telephone</label>
      <div class="controls">
      {{ Form::text('telephone', $deliverytimes->telephone, array('class'=>'form-control', 'id' => 'telephone', 'placeholder'=>'Telephone', 'value'=>Input::old('telephone'))) }}
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
      {{ Form::text('fax', $deliverytimes->fax, array('class'=>'form-control', 'id' => 'fax', 'placeholder'=>'Fax', 'value'=>Input::old('fax'))) }}
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
                 {{ Form::text('latitude', $deliverytimes->latitude, array('class'=>'form-control', 'id' => 'latitude', 'placeholder'=>'Latitude', 'value'=>Input::old('latitude'))) }}
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
                 {{ Form::text('longitude', $deliverytimes->longitude, array('class'=>'form-control', 'id' => 'longitude', 'placeholder'=>'Longitude', 'value'=>Input::old('longitude'))) }}
                 @if ($errors->first('longitude'))
                 <span class="help-block">{{ $errors->first('longitude') }}</span>
                 @endif
             </div>
         </div>
         <br>
            <!-- dateofbirth -->
      <div class="control-group {{ $errors->has('dateofbirth') ? 'has-error' : '' }}">
      <label class="control-label" for="dateofbirth">Date of Birth</label>
      <div class="controls">
      {{ Form::text('dateofbirth', $deliverytimes->dateofbirth, array('class'=>'form-control', 'id' => 'dateofbirth', 'placeholder'=>'Date of Birth', 'value'=>Input::old('dateofbirth'))) }}
      @if ($errors->first('dateofbirth'))
      <span class="help-block">{{ $errors->first('dateofbirth') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- Delivery Information< -->
      <div class="control-group {{ $errors->has('deliveryinformation') ? 'has-error' : '' }}">
      <label class="control-label" for="deliveryinformation">Delivery Information</label>
      <div class="controls">
      {{ Form::textarea('deliveryinformation', $deliverytimes->deliveryinformation, array('class'=>'form-control', 'id' => 'deliveryinformation', 'placeholder'=>'Delivery Information', 'value'=>Input::old('deliveryinformation'))) }}
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
      <label class="control-label" for="gender_delivery">Gender</label>
      <div class="controls " >
      <?php $genderselectchoice_delivery =$deliverytimes->gender_delivery;  
     

      if (empty($genderselectchoice_delivery)){ echo Form::select('gender_delivery', array('male' => 'male', 'female' => 'female'), 'male');}  else  {
      if ($genderselectchoice_delivery=="male") { $genderselectchange_delivery="female";} else  {$genderselectchange_delivery="male";} 
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
      <label class="control-label" for="last_name_delivery">First Name</label>
      <div class="controls">
      {{ Form::text('first_name_delivery', $deliverytimes->first_name_delivery, array('class'=>'form-control', 'id' => 'Vorname', 'placeholder'=>'First Name', 'value'=>Input::old('first_name_delivery'))) }}
      @if ($errors->first('first_name_delivery'))
      <span class="help-block">{{ $errors->first('first_name_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- last_name_delivery -->  
      <div class="control-group {{ $errors->has('last_name_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="last_name_delivery">Last Name</label>
      <div class="controls">
      {{ Form::text('last_name_delivery', $deliverytimes->last_name_delivery, array('class'=>'form-control', 'id' => 'last_name_delivery', 'placeholder'=>'Nachname', 'value'=>Input::old('last_name_delivery'))) }}
      @if ($errors->first('last_name_delivery'))
      <span class="help-block">{{ $errors->first('last_name') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- prefix --> <!-- 
         <div class="control-group {{ $errors->has('prefix') ? 'has-error' : '' }}">
             <label class="control-label" for="prefix">Prefix</label>
         
             <div class="controls">
                 {{ Form::text('prefix', $deliverytimes->prefix, array('class'=>'form-control', 'id' => 'prefix', 'placeholder'=>'Prefix', 'value'=>Input::old('prefix'))) }}
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
                 {{ Form::text('suffix', $deliverytimes->suffix, array('class'=>'form-control', 'id' => 'suffix', 'placeholder'=>'Suffix', 'value'=>Input::old('suffix'))) }}
                 @if ($errors->first('suffix'))
                 <span class="help-block">{{ $errors->first('suffix') }}</span>
                 @endif
             </div>
         </div>
         <br>
           <!-- company_delivery -->
      <div class="control-group {{ $errors->has('company_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="company_delivery">Company</label>
      <div class="controls">
      {{ Form::text('company_delivery', $deliverytimes->company_delivery, array('class'=>'form-control', 'id' => 'company_delivery', 'placeholder'=>'Company', 'value'=>Input::old('company_delivery'))) }}
      @if ($errors->first('company_delivery'))
      <span class="help-block">{{ $errors->first('company') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- street_delivery -->
      <div class="control-group {{ $errors->has('street_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="street_delivery">Street</label>
      <div class="controls">
      {{ Form::text('street_delivery', $deliverytimes->street_delivery, array('class'=>'form-control', 'id' => 'street_delivery', 'placeholder'=>'Street', 'value'=>Input::old('street_delivery'))) }}
      @if ($errors->first('street_delivery'))
      <span class="help-block">{{ $errors->first('street_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- city_delivery -->
      <div class="control-group {{ $errors->has('city_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="city_delivery">City</label>
      <div class="controls">
      {{ Form::text('city_delivery', $deliverytimes->city_delivery, array('class'=>'form-control', 'id' => 'city_delivery', 'placeholder'=>'City', 'value'=>Input::old('city_delivery'))) }}
      @if ($errors->first('city_delivery'))
      <span class="help-block">{{ $errors->first('city_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- zip_delivery -->
      <div class="control-group {{ $errors->has('zip_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="zip_delivery">Zip</label>
      <div class="controls">
      {{ Form::text('zip_delivery', $deliverytimes->zip_delivery, array('class'=>'form-control', 'id' => 'zip_delivery', 'placeholder'=>'Zip', 'value'=>Input::old('zip_delivery'))) }}
      @if ($errors->first('zip_delivery'))
      <span class="help-block">{{ $errors->first('zip_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>  
      <!-- state_delivery -->
      <div class="control-group {{ $errors->has('stateprovince_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="stateprovince_delivery">State/Province</label>
      <div class="controls">
      {{ Form::text('stateprovince_delivery', $deliverytimes->stateprovince_delivery, array('class'=>'form-control', 'id' => 'stateprovince_delivery', 'placeholder'=>'State/Province', 'value'=>Input::old('stateprovince_delivery'))) }}
      @if ($errors->first('stateprovince_delivery'))
      <span class="help-block">{{ $errors->first('stateprovince_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- country_delivery -->
      <div class="control-group {{ $errors->has('country_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="country_delivery">Country</label>
      <div class="controls">
      {{ Form::text('country_delivery', $deliverytimes->country_delivery, array('class'=>'form-control', 'id' => 'country_delivery', 'placeholder'=>'Country', 'value'=>Input::old('country_delivery'))) }}
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
      {{ Form::text('email_delivery', $deliverytimes->email_delivery, array('class'=>'form-control', 'id' => 'email_delivery', 'placeholder'=>'E-Mail', 'value'=>Input::old('email_delivery'))) }}
      @if ($errors->first('email_delivery'))
      <span class="help-block">{{ $errors->first('email_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- telephone_delivery -->
      <div class="control-group {{ $errors->has('telephone_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="telephone_delivery">Telephone</label>
      <div class="controls">
      {{ Form::text('telephone_delivery', $deliverytimes->telephone_delivery, array('class'=>'form-control', 'id' => 'telephone_delivery', 'placeholder'=>'Telephone', 'value'=>Input::old('telephone_delivery'))) }}
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
      {{ Form::text('fax_delivery', $deliverytimes->fax_delivery, array('class'=>'form-control', 'id' => 'fax_delivery', 'placeholder'=>'Fax', 'value'=>Input::old('fax_delivery'))) }}
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
                 {{ Form::text('latitude', $deliverytimes->latitude, array('class'=>'form-control', 'id' => 'latitude', 'placeholder'=>'Latitude', 'value'=>Input::old('latitude'))) }}
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
                 {{ Form::text('longitude', $deliverytimes->longitude, array('class'=>'form-control', 'id' => 'longitude', 'placeholder'=>'Longitude', 'value'=>Input::old('longitude'))) }}
                 @if ($errors->first('longitude'))
                 <span class="help-block">{{ $errors->first('longitude') }}</span>
                 @endif
             </div>
         </div>
         <br>
            <!-- dateofbirth_delivery -->
      <div class="control-group {{ $errors->has('dateofbirth_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="dateofbirth_delivery">Date of Birth</label>
      <div class="controls">
      {{ Form::text('dateofbirth_delivery', $deliverytimes->dateofbirth_delivery, array('class'=>'form-control', 'id' => 'dateofbirth_delivery', 'placeholder'=>'Date of Birth', 'value'=>Input::old('dateofbirth_delivery'))) }}
      @if ($errors->first('dateofbirth_delivery'))
      <span class="help-block">{{ $errors->first('dateofbirth_delivery') }}</span>
      @endif
      </div>
      </div>
      <br>
      <!-- Delivery Information_delivery< -->
      <div class="control-group {{ $errors->has('deliveryinformation_delivery') ? 'has-error' : '' }}">
      <label class="control-label" for="deliveryinformation_delivery">Delivery Information</label>
      <div class="controls">
      {{ Form::textarea('deliveryinformation_delivery', $deliverytimes->deliveryinformation_delivery, array('class'=>'form-control', 'id' => 'deliveryinformation_delivery', 'placeholder'=>'Delivery Information', 'value'=>Input::old('deliveryinformation_delivery'))) }}
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
            });       
      
          CKEDITOR.replace('deliveryinformation_delivery', {
             "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
              height: '150px',
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
</div>
@stop