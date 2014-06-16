@extends('frontend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 
{{ Notification::showAll() }}
<!-- Menü Wechsler für ACTIVE CLASS Linkanfrage -->
<script>
   indexzwo =15;  
</script>
<!-- Menü Wechsler für ACTIVE CLASS Linkanfrage ENDE -->
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
   <div class="container">
      <h1 class="pull-left">Bestellung</h1>
      <ul class="pull-right breadcrumb">
         <li>
            <a href="{{URL::to('')}}/cart">Warenkorb</a>
         </li>
         <li class="active">Bestellung</li>
      </ul>
   </div>
</div>
<!--/breadcrumbs-->
<!-- Rechnungsadresse Anfang-->
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
   <!--{{{$address_rechnung->id}}}-->
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-3">
               <!-- gender -->
               <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                  <label class="control-label" for="gender">Anrede <span class="stern" >*</span></label>
                  <div class="controls">
                     <select name="gender" class="form-control">
                        <option value="{{$address_rechnung->gender}}" selected>{{$address_rechnung->gender}}</option>
                        @foreach( $list_gender as $x )  
                        <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                        @endforeach   
                     </select>
                     <!-- {{ Form::select('gender', $gender, 'Auswahl', array( 'id' => 'gender' ,'class'=>'form-control','style'=>'','value'=>Input::old('gender') )) }}-->
                     <span class="help-block">{{ $errors->first('gender') }}</span>
                  </div>
               </div>
            </div>
         </div>
         <!-- first_name --> 
         <div class="control-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
            <label class="control-label" for="last_name">Vorname <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('first_name', $address_rechnung->first_name, array('class'=>'form-control', 'id' => 'Vorname',  'placeholder'=>'Vorname', 'value'=>Input::old('first_name'))) }}
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
               {{ Form::text('last_name', $address_rechnung->last_name, array('class'=>'form-control', 'id' => 'last_name',  'placeholder'=>'Nachname', 'value'=>Input::old('last_name'))) }}
               @if ($errors->first('last_name'))
               <span class="help-block">{{ $errors->first('last_name') }}</span>
               @endif
            </div>
         </div>
         <br>
         <!-- street -->
         <div class="control-group {{ $errors->has('street') ? 'has-error' : '' }}">
            <label class="control-label" for="street">Straße/Gasse <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('street', $address_rechnung->street, array('class'=>'form-control', 'id' => 'street', 'placeholder'=>'Straße', 'value'=>Input::old('street'))) }}
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
                     {{ Form::text('housenumber', $address_rechnung->housenumber, array('class'=>'form-control', 'id' => 'housenumber', 'placeholder'=>'Hausnummer', 'value'=>Input::old('housenumber'))) }}
                     @if ($errors->first('housenumber'))
                     <span class="help-block">{{ $errors->first('housenumber') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <!-- stairway_number -->
               <div class="control-group {{ $errors->has('stairway_number') ? 'has-error' : '' }}">
                  <label class="control-label" for="street">Stiege </label>
                  <div class="controls">
                     {{ Form::text('stairway_number', $address_rechnung->stairway_number, array('class'=>'form-control', 'id' => 'stairway_number', 'placeholder'=>'Stiege', 'value'=>Input::old('stairway_number'))) }}
                     @if ($errors->first('stairway_number'))
                     <span class="help-block">{{ $errors->first('stairway_number') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <!-- floor -->
               <div class="control-group {{ $errors->has('floor') ? 'has-error' : '' }}">
                  <label class="control-label" for="floor">Stock</label>
                  <div class="controls">
                     {{ Form::text('floor', $address_rechnung->floor, array('class'=>'form-control', 'id' => 'floor', 'placeholder'=>'Stock', 'value'=>Input::old('floor'))) }}
                     @if ($errors->first('floor'))
                     <span class="help-block">{{ $errors->first('floor') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <!-- appartement_number -->
               <div class="control-group {{ $errors->has('appartement_number') ? 'has-error' : '' }}">
                  <label class="control-label" for="appartement_number">Türnummer</label>
                  <div class="controls">
                     {{ Form::text('appartement_number', $address_rechnung->appartement_number, array('class'=>'form-control', 'id' => 'appartement_number', 'placeholder'=>'Türnummer', 'value'=>Input::old('appartement_number'))) }}
                     @if ($errors->first('appartement_number'))
                     <span class="help-block">{{ $errors->first('appartement_number') }}</span>
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="controls" style="margin-top:68px">
            <!--Control for the Form-->
         </div>
         <!-- city -->
         <div class="control-group {{ $errors->has('city') ? 'has-error' : '' }}">
            <label class="control-label" for="city">Stadt <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('city', $address_rechnung->city, array('class'=>'form-control', 'id' => 'city', 'placeholder'=>'Stadt', 'value'=>Input::old('city'))) }}
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
               {{ Form::text('zip', $address_rechnung->zip, array('class'=>'form-control', 'id' => 'zip', 'placeholder'=>'PLZ', 'value'=>Input::old('zip'))) }}
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
               {{ Form::text('stateprovince', $address_rechnung->stateprovince, array('class'=>'form-control', 'id' => 'stateprovince', 'placeholder'=>'Bundesland', 'value'=>Input::old('stateprovince'))) }}
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
               <select name="gender" class="form-control">
                  <option value="{{$address_rechnung->gender}}" selected>{{$address_rechnung->country}}</option>
                  @foreach( $list_country as $x )  
                  <option value="{{ $x->de }}">{{ $x->de }}</option>
                  @endforeach   
               </select>
               <!-- {{ Form::select('country', $country, 'Auswahl', array( 'id' => 'country' ,'class'=>'form-control','style'=>'','value'=>Input::old('country') )) }}-->
               @if ($errors->first('country'))
               <span class="help-block">{{ $errors->first('country') }}</span>
               @endif
            </div>
         </div>
         <br>
      </div>
   </div>
</div>
<!-- Rechnungsadresse Ende-->
<br>
<hr>
<!-- Lieferaddresse Anfang-->
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Deine Lieferadresse</h2>
      <div class="pull-right">
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
   <!-- {{{$address_lieferung->id}}}-->
   <div class="row">
      <div class="col-md-6">
         <!-- gender -->
         <div class="row">
            <div class="col-md-3">
               <!-- gender -->
               <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                  <label class="control-label" for="gender">Anrede <span class="stern" >*</span></label>
                  <div class="controls">
                     <select name="gender" class="form-control">
                        <option value="{{$address_lieferung->gender}}" selected>{{$address_lieferung->gender}}</option>
                        @foreach( $list_gender as $x )  
                        <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                        @endforeach   
                     </select>
                     <!-- {{ Form::select('gender', $gender, 'Auswahl', array( 'id' => 'gender' ,'class'=>'form-control','style'=>'','value'=>Input::old('gender') )) }}-->
                     <span class="help-block">{{ $errors->first('gender') }}</span>
                  </div>
               </div>
            </div>
         </div>
         <!-- first_name --> 
         <div class="control-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
            <label class="control-label" for="last_name">Vorname <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('first_name', $address_lieferung->first_name, array('class'=>'form-control', 'id' => 'Vorname',  'placeholder'=>'Vorname', 'value'=>Input::old('first_name'))) }}
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
               {{ Form::text('last_name', $address_lieferung->last_name, array('class'=>'form-control', 'id' => 'last_name',  'placeholder'=>'Nachname', 'value'=>Input::old('last_name'))) }}
               @if ($errors->first('last_name'))
               <span class="help-block">{{ $errors->first('last_name') }}</span>
               @endif
            </div>
         </div>
         <br>
         <!-- street -->
         <div class="control-group {{ $errors->has('street') ? 'has-error' : '' }}">
            <label class="control-label" for="street">Straße/Gasse <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('street', $address_lieferung->street, array('class'=>'form-control', 'id' => 'street', 'placeholder'=>'Straße', 'value'=>Input::old('street'))) }}
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
                  <label class="control-label" for="housenumber">Hausnummer</label>
                  <div class="controls">
                     {{ Form::text('housenumber', $address_lieferung->housenumber, array('class'=>'form-control', 'id' => 'housenumber', 'placeholder'=>'Hausnummer', 'value'=>Input::old('housenumber'))) }}
                     @if ($errors->first('housenumber'))
                     <span class="help-block">{{ $errors->first('housenumber') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <!-- stairway_number -->
               <div class="control-group {{ $errors->has('stairway_number') ? 'has-error' : '' }}">
                  <label class="control-label" for="street">Stiege</label>
                  <div class="controls">
                     {{ Form::text('stairway_number', $address_lieferung->stairway_number, array('class'=>'form-control', 'id' => 'stairway_number', 'placeholder'=>'Stiege', 'value'=>Input::old('stairway_number'))) }}
                     @if ($errors->first('stairway_number'))
                     <span class="help-block">{{ $errors->first('stairway_number') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <!-- floor -->
               <div class="control-group {{ $errors->has('floor') ? 'has-error' : '' }}">
                  <label class="control-label" for="floor">Stock</label>
                  <div class="controls">
                     {{ Form::text('floor', $address_lieferung->floor, array('class'=>'form-control', 'id' => 'floor', 'placeholder'=>'Stock', 'value'=>Input::old('floor'))) }}
                     @if ($errors->first('floor'))
                     <span class="help-block">{{ $errors->first('floor') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <!-- appartement_number -->
               <div class="control-group {{ $errors->has('appartement_number') ? 'has-error' : '' }}">
                  <label class="control-label" for="appartement_number">Türnummer</label>
                  <div class="controls">
                     {{ Form::text('appartement_number', $address_lieferung->appartement_number, array('class'=>'form-control', 'id' => 'appartement_number', 'placeholder'=>'Türnummer', 'value'=>Input::old('appartement_number'))) }}
                     @if ($errors->first('appartement_number'))
                     <span class="help-block">{{ $errors->first('appartement_number') }}</span>
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="controls" style="margin-top:68px">
            <!--Control for the Form-->
         </div>
         <!-- city -->
         <div class="control-group {{ $errors->has('city') ? 'has-error' : '' }}">
            <label class="control-label" for="city">Stadt <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('city', $address_lieferung->city, array('class'=>'form-control', 'id' => 'city', 'placeholder'=>'Stadt', 'value'=>Input::old('city'))) }}
               @if ($errors->first('city'))
               <span class="help-block">{{ $errors->first('city') }}</span>
               @endif
            </div>
         </div>
         <br>  
         <!--Abfrage Postleitzahl Anfang-->   
         <script type="text/javascript">
            localStorage.removeItem("nimm");
            $(window).load(function(){
            
            $('#zipy').keyup(function(){
            
            
               if (this.value.length >= 4 || this.value == '')
            {
            
               
                var searchField = $('#zipy').val();
                var regex = new RegExp(searchField, "i");
                var output = '<div class="row">';
                var count = 1;
               
                $.getJSON('../../postleitzahl_check', function(data) {
                  $.each(data, function(key, val){
            
                    if ((val.name.search(regex) != -1) || (val.location.search(regex) != -1)) {
            
            
            var oidanimm=val.location;
            
            localStorage.setItem('nimm', oidanimm);
            
      
                      
            
                  
                      count++;
                    }
                  });                
            
            
            
            
              
            
            
            
            nimm= localStorage.getItem('nimm');        console.log(nimm);   
            if (searchField ==nimm) {  
            output2 = '<div class="alert alert-success">Dieses Gebiet wird beliefert</div>';
            $('#results').html(output2);
            
            
            } else {  
            output2 = '<div class="alert alert-danger">Dieses Gebiet wird nicht beliefert</div>';
            $('#results').html(output2);
            };
            

  }); 

            
                };
            
            });
            });
         </script>
        <!--Abfrage Postleitzahl Ende-->
         <div id="results"></div>
         <form role="form">
            <div class="control-group {{ $errors->has('zip') ? 'has-error' : '' }}">
            <label class="control-label" for="zip">PLZ <span class="stern" >*</span></label>
            <div class="controls">
                 {{ Form::text('zip', $address_lieferung->zip, array('class'=>'form-control', 'id' => 'zipy', 'placeholder'=>'PLZ', 'value'=>Input::old('zip'))) }}
                  @if ($errors->first('zip'))
                   <span class="help-block">{{ $errors->first('zip') }}</span>
               @endif
            </div></div>
         </form>
         <!--Abfrage Postleitzahl Ende-->
       <br>
         <!-- state -->
         <div class="control-group {{ $errors->has('stateprovince') ? 'has-error' : '' }}">
            <label class="control-label" for="stateprovince">Bundesland <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('stateprovince', $address_lieferung->stateprovince, array('class'=>'form-control', 'id' => 'stateprovince', 'placeholder'=>'Bundesland', 'value'=>Input::old('stateprovince'))) }}
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
               <select name="gender" class="form-control">
                  <option value="{{$address_lieferung->gender}}" selected>{{$address_lieferung->country}}</option>
                  @foreach( $list_country as $x )  
                  <option value="{{ $x->de }}">{{ $x->de }}</option>
                  @endforeach   
               </select>
               <!-- {{ Form::select('country', $country, 'Auswahl', array( 'id' => 'country' ,'class'=>'form-control','style'=>'','value'=>Input::old('country') )) }}-->
               @if ($errors->first('country'))
               <span class="help-block">{{ $errors->first('country') }}</span>
               @endif
            </div>
         </div>
         <br>
      </div>
   </div>
</div>
<!-- Lieferaddresse Ende-->
<div class="container">
   <br><br>
   <div class="row">
      <div class="col-md-12">
         <br>
         <!-- Published -->
         <input type="hidden" value="is_published">
         <!-- Tabs Ende Teil 1 -->
      </div>
   </div>
   <br>
   <br>
   <!-- Tabs End -->   
   {{ Form::submit('Daten speichern und weiter', array('class' => 'btn btn-success')) }}
   {{ Form::close() }}
</div>
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
<div  class="container">
   <div class="row">
      <div class="col-md-12 col-sm-12" >
         <!--ABFRAGE OB EINGELOGGT ANFANG-->
         @if (Sentry::check() )  
         <!--Bestellung ansehen ANFANG-->
         <div class="headline">
            <h2>Deine Bestellung</h2>
         </div>
         <div class="row">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>Produkt</th>
                     <th>Anzahl</th>
                     <th class="text-center">Preis</th>
                     <th class="text-center">Total</th>
                     <th> </th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($cartContent as $cartItem)
                  <tr>
                     <td class="col-sm-8 col-md-6">
                        <h4 class="media-heading"><a href="{{URL::to('')}}{{$cartItem->productlink}}">{{$cartItem->name}}</a></h4>
                     </td>
                     <td class="col-sm-1 col-md-1" style="text-align: center">
                        <form action="{{URL::to('update')}}" method="post" >
                           <input type="hidden" name="rowid" value="{{$cartItem->rowid}}" />
                           <input type="number" name="updater" value="{{$cartItem->qty}}" class="input-qty form-control text-center" onchange="submit()" />
                        </form>
                     </td>
                     <td class="col-sm-1 col-md-1 text-center">
                        <strong>{{$cartItem->price}} €</strong>
                     </td>
                     <td class="col-sm-2 col-md-2 text-center">
                        <strong>{{$cartItem->subtotal}} €</strong>
                     </td>
                     <td class="col-sm-2 col-md-2 text-right" >
                        <a href="{{URL::to('delete/'.$cartItem->rowid)}}" class="btn-u btn-u-red">
                        Enfternen <span class="glyphicon glyphicon-remove"></span>
                        </a>
                     </td>
                  </tr>
                  @endforeach
                  <tr>
                     <td colspan="7">
                        <div class="row">
                           <div class="col-md-8">
                              <h4>Total Summe</h4>
                           </div>
                           <div class="col-md-4 pull-right" style="margin-right: -40px">
                              <h4><strong>{{Cart::total()}} €</strong></h4>
                           </div>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="3">
                        <a href="{{URL::to('/shop')}}" class="btn btn-u">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Weitershoppen
                        </a>
                        <a href="{{URL::to('/terminate')}}" class="btn-u btn-u-red">
                        Warenkob löschen <span class="glyphicon glyphicon-remove"></span>
                        </a>
                     </td>
                     <td>                            
                     </td>
                     <td class="text-right">
                        <a href="{{URL::to('/checkout')}}" class="btn-u btn-u-red">
                        Jetzt bezahlen <span class="glyphicon glyphicon-thumbs-up"></span>
                        </a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <!--Bestellung ansehen ENDE-->
         <!--Nicht eingeloggt Anfang-->
         @else
         <div class="col-md-12">
            <div class="headline">
               <h2>Hinweis</h2>
            </div>
            <blockquote class="hero">
               <p>Um den Bestellvorgang abschließen zu können musst du entweder über ein Konto verfügen, oder die nachfolgende Regstrierung durchlaufen. </p>
               <small class="color-red">
               <cite title="Source Title"><a href='{{URL::to('')}}/meinkontologinzurbestellung' target="_self"; class='btn-u btn-u-red btn-u-large'>Ich habe schon einen Konto bitte hier weiter</a></cite>
               </small>
               <small class="color-red">
               <cite title="Source Title"><strong>Kein Konto?</strong> Bitte nachfolgendes Registrierung-Formular ausfüllen und Regstrierung durchlaufen.</cite>
               </small>
            </blockquote>
         </div>
         Dein KochAbo Team steht dir jederzeit mit Rat und Tat zur Verfügung. Erreichbar unter der Hotline-Nummer +43 1-544 39 00.
         <hr>
         <br>
         <!--Formular Registrierung ANGANG-->
         <!--HEADER mit Zurück ANFANG-->
         <div class="headline">
            <h2>Registrierung meiner Daten</h2>
            <div class="pull-right">
               <!--{{ HTML::link('/admin/customer_management','Zurück', array('class'=>'btn btn-u')) }}-->
            </div>
         </div>
         <!--HEADER mit Zurück ENDE-->
         {{ Form::open(array('action' => 'UserController@store')) }}
         <div class="row">
            <div class="col-md-6">
               <!-- gender -->
               <div class="row">
                  <div class="col-md-3">
                     <!-- gender -->
                     <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
                        <label class="control-label" for="gender">Anrede <span class="stern" >*</span></label>
                        <div class="controls">
                           {{ Form::select('gender', $select_gender, 'Auswahl', array( 'id' => 'gender', 'class'=>'form-control','style'=>'','value'=>Input::old('gender') )) }}
                           <span class="help-block">{{ $errors->first('gender') }}</span>
                        </div>
                     </div>
                  </div>
               </div>
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
               <div class="control-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
                  <label class="control-label" for="title">Geburtsdatum <span class="stern" >*</span></label>
                  <div class="controls">
                     <div class="input-group date form_date col-md-15" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
                        {{ Form::text('date_of_birth', null, array('class'=>'form-control', 'id' => 'date_of_birth', 'placeholder'=>'Geburtsdatum',  'value'=>Input::old('date_of_birth'))) }}
                        @if ($errors->first('date_of_birth'))
                        <span class="help-block">{{ $errors->first('date_of_birth') }}</span>
                        @endif
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                     </div>
                  </div>
               </div>
               <br>
            </div>
            <div class="col-md-6">
               <!-- email -->
               <div class="control-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  <label class="control-label" for="email">E-Mail <span class="stern" >*</span></label>
                  <div class="controls">
                     {{ Form::text('email', null, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-Mail',  'value'=>Input::old('email'))) }}
                     @if ($errors->first('email'))
                     <span class="help-block">{{ $errors->first('email') }}</span>
                     @endif
                  </div>
               </div>
               <br>
               <!-- telephone -->
               <div class="control-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                  <label class="control-label" for="last_name">Telefon <span class="stern" >*</span></label>
                  <div class="controls">
                     {{ Form::text('telephone', null, array('class'=>'form-control', 'id' => 'telephone', 'placeholder'=>'Telefon',  'value'=>Input::old('telephone'))) }}
                     @if ($errors->first('telephone'))
                     <span class="help-block">{{ $errors->first('telephone') }}</span>
                     @endif
                  </div>
               </div>
               <br>
               <!-- password -->
               <div class="control-group {{ $errors->has('password') ? 'has-error' : '' }}">
                  <label class="control-label" for="password">Passwort <span class="stern" >*</span></label>
                  <div class="controls">
                     {{ Form::text('password', null, array('class'=>'form-control', 'id' => 'password', 'placeholder'=>'Passwort',  'value'=>Input::old('password'))) }}
                     @if ($errors->first('password'))
                     <span class="help-block">{{ $errors->first('password') }}</span>
                     @endif
                  </div>
               </div>
               <br>
               <!-- password_confirmation -->
               <div class="control-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                  <label class="control-label" for="password_confirmation">Passwort bestätigen <span class="stern" >*</span></label>
                  <div class="controls">
                     {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Passwort bestätigen')) }}
                     @if ($errors->first('password_confirmation'))
                     <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                     @endif
                  </div>
               </div>
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
         {{ Form::submit('Registrieren', array('class' => 'btn btn-u')) }}
      </div>
      <div class="col-lg-9">
         <div class="form-group {{ ($errors->has('terms')) ? 'has-error' : '' }}">
            <label class="checkbox">
            {{ Form::checkbox('terms', 'yes', false); }}
            {{ ($errors->has('terms') ?  $errors->first('terms') : '') }}    
            <a href="page_terms.html" class="color-green">AGB's</a> und <a href="page_terms.html" class="color-green">Rücktrittsrecht</a> gelesen und akzeptiert.
            </label>  
         </div>
      </div>
      {{ Form::close() }}
      <!--Nicht eingeloggt Ende-->
      @endif
      <!--ABFRAGE OB EINGELOGGT ENDE-->
      <br>
      <hr>
      <br>
      <!-- DATEN START-->
      <h1>Session</h1>
      <p style="background-color:#fed51c;color:#ffffff;padding:3px">{{var_dump(Session::all());}}</p>
      <h1>Session Cart</h1>
      <p style="background-color:#cccccc;color:#ffffff;padding:3px">{{Cart::content();}}</p>
      <!-- DATEN ENDe-->
      <!--ABFRAGE OB EINGELOGGT ANFANG-->
      @if (Sentry::check() )  
      <br>
      <h1>Eingeloggt mit User</h1>
      <p style="background-color:#000000;color:#ffffff;padding:3px">Du bist mit deiner E-Mail Adresse {{ Session::get('email') }} eingeloggt.</p>
      @else
      <!--<button class='btn-u btn-u-red' type='button'>Einloggen</button>-->
      @endif
      <!--ABFRAGE OB EINGELOGGT ENDE-->
   </div>
</div>
</div>
</div>
@stop