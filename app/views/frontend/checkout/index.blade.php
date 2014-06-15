@extends('frontend/_layout/layout')
@section('content')
{{ HTML::script('assets/js/moment-with-langs.min.js') }}
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


<div  class="container">    
<div class="row">
<div class="col-md-12 col-sm-12" >





            



<!--ABFRAGE OB EINGELOGGT ANFANG-->
@if (Sentry::check() )  

Du bist mit deiner E-Mail Adresse {{ Session::get('email') }} eingeloggt.<br>Bitte wähle Deine Lieferadresse aus.


                     @foreach( $users as $v )                  
                    Bestellnummer: {{ $v->id}} / Datum: {{ $v->first_name}}<br>
                     @endforeach
                   


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
                        <th> </th>
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
  <div class="col-md-8"><h4>Total Summe</h4></div>
  <div class="col-md-4 pull-right" style="margin-right: -40px"><h4><strong>{{Cart::total()}} €</strong></h4></div>
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


<hr><br>
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


 <div class="row">
  <div class="col-md-3">
     <!-- gender -->
   <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
       <label class="control-label" for="gender">Anrede <span class="stern" >*</span></label>
      <div class="controls">
      <select name="gender" class="form-control" >
                           <option value="" selected>Auswahl Anrede</option>
                          @foreach( $list_gender as $x )  
                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>   
         @if ($errors->first('gender'))
         <span class="help-block">{{ $errors->first('gender') }}</span>
         @endif
      </div>
   </div>

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


   <div class="row">
  <div class="col-md-3">
      <!-- Day -->
   <div class="control-group {{ $errors->has('day') ? 'has-error' : '' }}">
      <label class="control-label" for="day">Geburttag <span class="stern" >*</span></label>
      <div class="controls">         
     <select name="day" class="form-control">
                           <option value="" selected>Geburttag</option>
                          @foreach( $list_day as $x )  

                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>   

                

        
         @if ($errors->first('day'))
         <span class="help-block">{{ $errors->first('day') }}</span>
         @endif

 
      </div>
   </div> 
  


  </div>
  <div class="col-md-3">

  <!-- Month -->
     <div class="control-group {{ $errors->has('month') ? 'has-error' : '' }}">
      <label class="control-label" for="month">Geburtsmonat <span class="stern" >*</span></label>
      <div class="controls">         
      






      <select name="month" class="form-control">
                           <option value="" selected>Geburtsmonat</option>


                          @foreach( $list_month as $x )  

                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>   


         @if ($errors->first('month'))
         <span class="help-block">{{ $errors->first('month') }}</span>
         @endif
      </div>
   </div> 
   <br>

   </div><div class="col-md-6">


  </div>
  <div class="col-md-4">
       <!-- Year -->
   <div class="control-group {{ $errors->has('year') ? 'has-error' : '' }}">
      <label class="control-label" for="year">Geburtsjahr <span class="stern" >*</span></label>
      <div class="controls">  


         {{ Form::text('year', null, array('class'=>'form-control', 'id' => 'year', 'placeholder'=>'JJJJ', 'size' => '4', 'maxlength' => '4','value'=>Input::old('year'))) }}
         @if ($errors->first('year'))
         <span class="help-block">{{ $errors->first('year') }}</span>
         @endif
      </div>
   </div> 


  </div>
</div>



     

   <br>
   </div><div class="col-md-6">

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
      <label class="control-label" for="last_name">Telefon (Nur Ziffern) <span class="stern" >*</span></label>
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
      <label class="control-label" for="password">Passwort (Mindestens 6 Zeichen) <span class="stern" >*</span></label>
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
 




       </div></div>

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


<br><hr><br>



<!-- DATEN START-->

{{var_dump(Session::all());}}



{{ $user_id = Session::get('userId');}}
{{ $name = Session::get('name');}}
{{ $user_id = Session::get('userId');}}
{{ $user_id = Session::get('userId');}}
{{ $user_id = Session::get('userId');}}

<?php echo"<br><br>";echo"<br>";
echo"User:ID: $user_id"; echo"<br>";
echo"Produkt:ID: $name"; echo"<br>";
echo"User:ID: $user_id"; echo"<br>";
echo"User:ID: $user_id"; echo"<br>";
echo"User:ID: $user_id"; echo"<br>";

?>

{{Cart::content();}}

<!-- DATEN ENDe-->


  <!--ABFRAGE OB EINGELOGGT ANFANG-->
@if (Sentry::check() )  
  <div class="headline">
  <h2>Bestellung abschließen</h2>
  </div>




         <div class="headline">
            <h2>Da du Kunde bist kannst du den kürzeren Weg gehen.</h2>
         </div>
         <div class="row servive-block servive-block-in margin-bottom-20">
         </div>
         <!--/welcome-block-->
         <!-- End Our Services -->
         <!-- Blockquotes -->
         <p>Du bist mit {{ Session::get('email') }} eingeloggt und kannst daher schneller den Bezahlweg durchgehen!</p>
         </p>
         <button class='btn-u btn-u-red' type='button'>Jetzt bezahlen!</button>
         <br>
         @else
<button class='btn-u btn-u-red' type='button'>Einloggen</button>
            @endif
<!--ABFRAGE OB EINGELOGGT ENDE-->





</div>      
</div>
</div>

</div>






 







@stop

