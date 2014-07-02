@extends('frontend/_layout/layout')
@section('content')
<!-- CSS Global Compulsory-->
<!--=== Breadcrumbs Manuel ===-->
<div class="breadcrumbs margin-bottom-40">
   <div class="container">
      <h1 class="pull-left">Bestellung - Registrierung</h1>
      <ul class="pull-right breadcrumb">
         <li><a href="{{URL::to('kochabo')}}">Kochabobox</a></li>
         <li><a href="javascript:history.back()">Bestellung</a></li>
         <li class="active">Registrierung</li>
   </div>
   </ul>
</div>
</div>
<!--/breadcrumbs-->
<?php
   //Endsumme Layout und Sessionverwassltung ----------------------------------------------------------------------------------
   
   
   
   //Aus CHECKS aus Post request holen MUSS ALS ERSTER STEHEN:
         $obstboxcheck = Input::get('obstboxcheck');
         $weincheck = Input::get('weincheck');
   
   
   
         //Damit sich die checks vorher reinigen um hier nur nach dem login zu erscheinen
   
   
           ?>@if (Sentry::check() )   <?php
   ?> @else<?php
   if ($obstboxcheck=='obstbox_checked') { } else {Session::forget('obstboxcheck');};
   if ($obstboxcheck=='wein_checked') {  } else {Session::forget('weincheck');};
        
          ?> @endif <?php
   //Für Sessionübergabe
   $obstboxcheckvonsession = Session::get('obstboxcheck');
   $weincheckvonsession = Session::get('weincheck');
   
   
   //Daten holen nach LOGIN von der Session:

   //Preise aus Session holen. Da kommen diese aus der PriceListe
   $price_adobstbox = Session::get('price_adobstbox');
   $price_adwein = Session::get('price_adwein');
   $price_produkt = Session::get('price_produkt');
   
   //Varablen umschreiben fürs berechnen
   $price_adobstbox_rechnen=$price_adobstbox;
   $price_adwein_rechnen=$price_adwein;
   $price_produkt_rechnen=$price_produkt;
   
   
  
   
   
   //Wenn angehackt dann price weiterreichen an summi_brummi oder wenn nicht auf NULL seutzen für die Berechnung
   if ($obstboxcheck=='obstbox_checked') {$price_adobstbox_rechnen=$price_adobstbox_rechnen;} else {$price_adobstbox_rechnen=0;};
   if ($weincheck=='wein_checked') {$price_adwein_rechnen=$price_adwein_rechnen;} else {$price_adwein_rechnen=0;};
   
    //Wenn angehackt VON SESSIONdann price weiterreichen an summi_brummi oder wenn nicht auf NULL seutzen für die Berechnung
   if ($obstboxcheckvonsession=='obstbox_checked') {$price_adobstbox_rechnen=$price_adobstbox_rechnen;} else {$price_adobstbox_rechnen=0;};
   if ($weincheckvonsession=='wein_checked') {$price_adwein_rechnen=$price_adwein_rechnen;} else {$price_adwein_rechnen=0;};
   
   //Rechnungstellung
   $summi_brummi = ( $price_produkt_rechnen+$price_adobstbox_rechnen+$price_adwein_rechnen);
   
   
   
   
   //kaufmnänisch Runden mit Dezimale   
   $summi_brummi = sprintf("%01.2f", $summi_brummi);
   
   //session machen   
   Session::put('summi_brummi', $summi_brummi);
   
   
   ///Daten aus Sesssion holen ---------------------------------------------------------------------------------------
   $produkt = Session::get('produkt');
   $produkttyp = Session::get('produkttyp');
   $price_produkt = Session::get('price_produkt');
   
   $obstbox = Session::get('obstbox');
   $price_adobstbox = Session::get('price_adobstbox');
   
   $wein = Session::get('wein');
   $price_adwein = Session::get('price_adwein');
   
   
   //Preise aus Session 
   $session_price_adobstbox = Session::get('price_adobstbox');
   $session_price_adwein = Session::get('price_adwein');
   $session_summi_brummi = Session::get('summi_brummi');
   
   //checkwein
   
   //checkobstbox
   
   //Daten setzen in der Session für nach dem LOGIN
   
   
   
   if ($obstboxcheck=='obstbox_checked') {  Session::forget('obstboxchecked');  Session::put('obstboxcheck', 'obstbox_checked');   }     else { };
   if ($weincheck=='wein_checked') {   Session::forget('weinchecked');  Session::put('weincheck', 'wein_checked');  }   else { };
   
   
   //  Session::put('price_adobstbox_rechnen', $price_adobstbox_rechnen);
   // Session::put('price_adwein_rechnen', $price_adwein_rechnen);
   
   
   
   // var_dump(Session::all());
   ?>
<!--Reg Block-->
<!--=== Content Part ===-->
<div class="container">
   <!--WARENKORB ANFANG-->
   <div class="row">
      <div class="col-md-3">
         <div class="margin-bottom-30">
            <div class="warenkorb" >
               <h4><strong>Mein Warenkorb</strong></h4>
               <?php
                  Input::old($produkt);
                     if (isset($produkt)){echo"<table width='100%' border='0'><tr><td>$produkt</td><td></td></tr></table>";}  else  {};
                     
                     
                     if (isset($produkttyp)){echo"<table width='100%' border='0'><tr> <td width='75%'>$produkttyp</td> <td width='25%';style='text-align:right'> $price_produkt  €</td> </tr></table>";}  else  {};
                     
                     
                      //Oder Anweisung. Entweder von POSt oder SESSION 
                     if ($obstboxcheck || $obstboxcheckvonsession=='obstbox_checked') {
                     if (isset($produkt)){echo"<hr>";}  else  {};
                     if (isset($obstbox)){echo"<table width='100%' border='0'><tr> <td width='75%'>$obstbox</td> <td width='25%';style='text-align:right'>$session_price_adobstbox €</td> </tr></table>";}  else  {};
                    
                     } else {};
                     
                      //Oder Anweisung. Entweder von POSt oder SESSION 
                     if ($weincheck || $weincheckvonsession=='wein_checked') {
                     if (isset($wein)){echo"<hr>";}  else  {};  
                     if (isset($wein)){echo"<table width='100%' border='0'><tr> <td width='75%'>$wein</td> <td width='25%';style='text-align:right'>$session_price_adwein €</td> </tr></table>";}  else  {};
                     if (isset($wein)){echo"";}  else  {};
                     } else {};
                  
                  
                     if (isset($session_summi_brummi)){echo"<br><div class='hr'><hr /></div><br>";}  else  {};
                     
                     if (isset($session_summi_brummi)){echo"<table width='100%' border='0'><tr><td>ENDSUMME:</td><td width='25%';style='text-align:right'><u>$session_summi_brummi €</u></td></tr></table>";}  else  {};
                     
                     echo"<br>";
                     
                     
                     
                     ?>
               </ul>
            </div>
         </div>
         <div class="who margin-bottom-20">
            <!--Abstandhalter-->
         </div>
         @if (Sentry::check() )   
         @else
         <a href="javascript:history.back()"><button class="btn-u btn-u-red btn-u-large" >Zurück</button></a>
         @endif
         <!-- Warenkorb Ende -->
      </div>
      <div class="col-md-9">
         <!-- Registrierung ANFANG -->
         <!--   <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">-->
         @if (Sentry::check() )    
         <div class="headline">
            <h2>Da du Kunde bist kannst du den kürzeren Weg gehen.</h2>
         </div>
         <div class="row servive-block servive-block-in margin-bottom-20">
         </div>
         <!--/welcome-block-->
         <!-- End Our Services -->
         <!-- Blockquotes -->
         <p>Du bist eingeloggt und kannst daher schneller den Bezahlweg durchgehen!</p>
         </p>
         <button class='btn-u btn-u-red' type='button'>Jetzt bezahlen!</button>
         <br>
         @else
         {{ Form::open(array('action' => 'UserController@store')) }}
         <form class="reg-page">
         <div class="reg-header">
            <h2>Registrierung deiner Daten</h2>
            <p><a href='{{URL::to('meinkontologinzurbestellung')}}' target="_self"; class='btn-u btn-u-red btn-u-large'>Ich habe schon einen Zugang</a>.
            <div class="who margin-bottom-20">
               <!--Abstandhalter-->
            </div>
         </div>
         <div class="form-group {{ ($errors->has('first_name')) ? 'has-error' : '' }}">
            <label >Vorname</label>                
            {{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'Vorname')) }}
            {{ ($errors->has('first_name') ? $errors->first('first_name') : '') }}
         </div>
         <div class="form-group {{ ($errors->has('last_name')) ? 'has-error' : '' }}">
            <label>Nachname</label>              
            {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Nachname')) }}
            {{ ($errors->has('last_name') ? $errors->first('last_name') : '') }}
         </div>
         <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
            <label>E-Mail Addresse <span class="color-red">*</span></label>
            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-Mail')) }}
            {{ ($errors->has('email') ? $errors->first('email') : '') }}
         </div>
         <div class="row">
            <div class="col-sm-6 {{ ($errors->has('password')) ? 'has-error' : '' }} ">
               <label>Passwort (Mindestens 6 Zeichen)<span class="color-red">*</span></label>
               {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Passwort')) }}
               {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>
            <div class="col-sm-6 {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }} ">
               <label>Passwort bestätigen<span class="color-red">*</span></label>
               {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Passwort bestätigen')) }}
               {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
            </div>
         </div>
         <hr>
         <div class="row">
            <div class="col-lg-9">
               <div class="form-group {{ ($errors->has('terms')) ? 'has-error' : '' }}">
                  <label class="checkbox">
                  {{ Form::checkbox('terms', 'yes', false); }}
                  {{ ($errors->has('terms') ?  $errors->first('terms') : '') }}    
                  <a href="page_terms.html" class="color-green">AGB's</a> und <a href="page_terms.html" class="color-green">Rücktrittsrecht</a> gelesen und akzeptiert.
                  </label>  
               </div>
            </div>
            <div class="col-lg-3 text-right">
               {{ Form::hidden('produkt', $produkt, array('class' => 'form-control', 'placeholder' => 'produkt' )) }}                      
               {{ ($errors->has('produkt') ?  $errors->first('produkt') : '') }}                 
               {{ Form::hidden('produkttyp', $produkttyp, array('class' => 'form-control', 'placeholder' => 'produkttyp'   )) }}
               {{ ($errors->has('produkttyp') ?  $errors->first('produkttyp') : '') }}
               {{ Form::hidden('obstbox', $obstbox, array('class' => 'form-control', 'placeholder' => 'obstbox'   )) }}
               {{ Form::hidden('wein', $wein, array('class' => 'form-control', 'placeholder' => 'wein'   )) }}
               {{ Form::submit('Jetzt kaufen', array('class' => 'btn-u btn-u-red btn-u-large')) }}                      
            </div>
         </div>
         <input type="hidden" name="activated" value="1">
         {{ Form::hidden('price_produkt', $price_produkt, array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('price_adobstbox', $session_price_adobstbox, array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('price_adwein', $session_price_adwein, array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('summe', $session_summi_brummi, array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::close() }}
         <!-- Registrierung ENDE -->
         @endif
      </div>
   </div>
</div>
<!--===Container ENDE ===-->
<!--=== End Content Part ===-->
<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/plugins/hover-dropdown.min.js"></script> 
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
   jQuery(document).ready(function() {
       App.init();
   });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<![endif]-->





@stop