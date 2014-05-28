@extends('frontend/_layout/layout')
@section('content')


<!--=== Breadcrumbs Manuel ===-->
<div class="breadcrumbs margin-bottom-40">
   <div class="container">
      <h1 class="pull-left">Bestellung</h1>
      <ul class="pull-right breadcrumb">
         <li><a href="javascript:history.back()">Kochabobox</a></li>
         <li class="active">Bestellung</li>
   </div>
   </ul>
</div>
</div>
<!--/breadcrumbs-->
<!--*********************************************************************************************************************************************************************************************************************************** -->
<!--PRICELISTE  ANFANG-->
<?php
   //Daten weiterreichen an die nächste Seite
   $produkt = Input::get('produkt');
   $produkttyp = Input::get('produkttyp');
   
   
   
   // Ausrechnung 
   ?>
@include('frontend.bestellung.bestellung_pricing')
<?php
   //Session ausrechnung----------------------------------------------------------------------
   $session_price_produkt = Session::get('price_produkt');
   
   
   
   //Variablen mitschicken in Seesion----------------------------------------------------------------------   
   Session::put('produkt', $produkt);
   Session::put('produkttyp', $produkttyp);


//Damit sich die checks vorher reinigen um hier nur nach dem login zu erscheinen
   //Session::forget('obstboxcheck');
 //  Session::forget('weincheck');

   
 //var_dump(Session::all());
   ?>
<!--PRICELISTE  ENDE-->
<div class="container">
   <div class="row">
      <div class="col-md-3">
         <!-- Warenkorb -->
         <div class="margin-bottom-30">
            <!--Warenkorb  ANFANG-->
            <div class="warenkorb" >
               <h4><strong>Mein Warenkorb</strong></h4>
               <?php
                  if (isset($produkt)){echo"<table width='100%' border='0'><tr><td>$produkt</td><td></td></tr></table>";}  else  {};
                  if (isset($produkttyp)){echo"<table width='100%' border='0'><tr> <td width='75%'>$produkttyp</td> <td width='25%';style='text-align:right'></td> </tr></table>";}  else  {};
                  if (isset($session_price_produkt)){echo"<br><div class='hr'><hr /></div><br>";}  else  {};
                  if (isset($session_price_produkt)){echo"<table width='100%' border='0'><tr><td>ZWISCHENSUMME:</td><td width='25%';style='text-align:right'><u>$session_price_produkt €</u></td></tr></table>";}  else  {};
                  
                  echo"<br>";
                  
                  
                  
                  ?>
               </ul>
            </div>
            <!-- Warenkorb Ende -->
         </div>
         <div class="who margin-bottom-20">
            <!--Abstandhalter-->
         </div>
         <a href="javascript:history.back()"><button class="btn-u btn-u-red btn-u-large" >Zurück</button></a>
         <br>
         <div class="who margin-bottom-10">
            <!--Abstandhalter-->
         </div>
         <div class="who margin-bottom-30">
            <p> Die Lieferung ist versandkostenfrei in ganz Österreich. Wir liefern Mo, Di, Do und Fr - deinen genauen Liefertag kannst du im nächten Bestellschritt festlegen.</p>
            <ul class="list-unstyled">
               <li><i class="icon-ok color-green"></i> Keine feste Bindung</li>
               <li><i class="icon-ok color-green"></i> Kostenlose Lieferung</li>
               <li><i class="icon-ok color-green"></i> Frische Lebensmittel</li>
               <li><i class="icon-ok color-green"></i> Passende Rezepte</li>
               <li><i class="icon-ok color-green"></i> Wöchentlich</li>
               <li><i class="icon-ok color-green"></i> oder alle 2 Wochen</li>
            </ul>
         </div>
         <!-- Contact Us -->
         <div class="who margin-bottom-30">
            <div class="headline">
               <h2>Kontakt</h2>
            </div>
            <p>Wenn du noch weitere Fragen hast, kannst du uns gerne kontaktieren. Wir beraten dich gerne und freuen uns auf deinen Anruf.</p>
            <ul class="list-unstyled">
               <li><a href="#"><i class="icon-home"></i>Strobachgasse 4/6</a></li>
               <li><a href="#"><i class="icon-envelope-alt"></i>infp@example.com</a></li>
               <li><a href="#"><i class="icon-phone-sign"></i>1(222) 5x86 x97x</a></li>
               <li><a href="#"><i class="icon-globe"></i>http://www.kochabo.at</a></li>
            </ul>
         </div>
      </div>
      <!--/col-md-3-->
      <div class="col-md-9">
         <!-- Our Services -->
         <div class="headline">
            <h2>Bestell deine KochAbo-Box! Jederzeit pausieren!</h2>
         </div>
         <div class="row servive-block servive-block-in margin-bottom-20">
         </div>
         <!--/welcome-block-->
         <!-- End Our Services -->
         <!-- Blockquotes -->
         <p> <strong class="color-green">Die Obstbox: </strong> 
            Die Obstbox mit der Extraportion Vitamine dazubestellen? 
         </p>
         <br>
         <!--Obstbox bestellen Anfang--> 
         <div class="tag-box tag-box-v2">
            <div class="row">
               <div class="col-md-5 search-img">
                  <img class="img-responsive" src="uploads/doksoft_uploader/bestellung_add/obstbox.jpg" alt="">
               </div>
               <div class="col-md-6">



                  <form action="{{ URL::to('meinkontoregistrierung')}}" method="POST">
                  <h2>Jetzt neu - auch mit Obstbox!</h2>
                  <li><i class="icon-ok color-green"></i> 3 kg Obst</li>
                  <li><i class="icon-ok color-green"></i> 5 bis 6 Obstsorten</li>
                  <li><i class="icon-ok color-green"></i> Für die Extraportion Vitamine</li>
                  <!-- <li><i class="icon-ok color-green"></i> Einfach im nächsten Schritt dazu bestellen</li>--><br>
                  <strong><input type="checkbox" name="obstboxcheck" value="obstbox_checked">&nbsp; Ja, bitte mitliefern. </strong><br>
               </div>
            </div>
         </div>
         <!--Obstbox bestellen Ende--> 
         <!--Wein bestellen Anfang--> 
         <div class="tag-box tag-box-v2">
            <div class="row">
               <div class="col-md-2 search-img">
                  <img class="img-responsive" src="uploads/doksoft_uploader/bestellung_add/wein.jpg" alt="">
               </div>
               <div class="col-md-9">
               
                  <form action="{{ URL::to('meinkontoregistrierung') }}" method="POST">
                  <h2>Den perfekt passenden Wein mit dazu bestellen?</h2>
                  <p>Du erhältst jede Woche einen von unserem Sommelier perfekt abgestimmten Qualitätswein zu einem Gericht mit dazu. Zum Beispiel nächste Woche mit dabei:</p>
                  <br>
                  <h2>MORGANTE Nero d´Avola 2011</h2>
                  <p>Zum Hüftsteak mit Rosmarin-Kartoffelspalten ist der MORGANTE Nero d’Avola der ideale Tropfen. Sein intensives Rubinrot und die würzig aromatischen Anklänge von reifen, dunklen Beeren sind bezeichnend für diesen edlen Roten. Er ist kraftvoll, dabei weich, harmonisch und langanhaltend. </p>
                  <!-- <li><i class="icon-ok color-green"></i> Einfach im nächsten Schritt dazu bestellen</li>--><br>
                  <strong><input type="checkbox" name="weincheck" value="wein_checked">&nbsp; Ja, bitte mitliefern. </strong><br>
               </div>
            </div>
         </div>
         <input type="submit" class="btn-u btn-u-red btn-u-large" name="Abschicken" value="Weiter im Bestellvorgang">
         {{ Form::hidden('produkt', $produkt, array('class' => 'form-control', 'placeholder' => 'produkt'   )) }}
         {{ Form::hidden('produkttyp', $produkttyp, array('class' => 'form-control', 'placeholder' => 'produkttyp'   )) }}
         {{ Form::close() }}
         <!--Wein bestellen Ende--> 
      </div>
   </div>
</div>
<!--/container-->     
<!--=== End Content Part ===-->
</div>
@stop