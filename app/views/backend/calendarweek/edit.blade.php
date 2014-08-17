@extends('backend/_layout/layout')
@section('content')  
{{ HTML::style('assets/backend/plugins/selectize/dist/css/selectize.bootstrap3.css') }}
{{ HTML::script('assets/backend/plugins/selectize/dist/js/standalone/selectizenew.js') }}     

<div class="container">


<hr>



   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
         <h2>Neuen Wochenplan für KW: {{$calendarweek->calendarweek}} / Jahr: {{$calendarweek->year}} bearbeiten</h2>
 
      <div class="pull-right">
         {{ HTML::link('/admin/calendarweek','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->

<?php

$calendarweekstructure = array
   (
   array("rezept1",22,18),
   array("rezept1",15,13),
   array("rezept3",5,2),
   array("rezept4",17,15)
   );
   

   
   
   //echo count ( $calendarweekstructure ); 
   $counter=count ( $calendarweekstructure );


//Durchgaenge

$counterminus=$counter-1;

$productsx = array(
    0 => "fressibox1",
    1 => "fressibox1",
    2 => "megaalibox",
    3 => "alibox"
);
// elimnierung von duplicaten   
$result = array_unique($outproducts);
  echo "<pre>";
        echo print_r($result);
        echo "</pre>";

          echo "<pre>dddddddddddddddddddddddddddd";
        echo print_r($outproductsrecipe);
        echo "</pre>";
     
     
for ($row = 0; $row <  $counter; $row++) {
foreach ($result as $key => $value) {
   // echo "Key: $key; Value: $value<br />\n";
  
  if ($key==$row){echo "<hr><div  style='border: solid 1px #000000; background-color:#fed51c'><h1><b>HEADLINE $value</b></h1> ";}else {echo "<div style='background-color:#ggd51c'>";};
}




   for ($col = 0; $col <  $counterminus; $col++) {
 
   
  
  
   }
  
   
  
   for ($col = 0; $col <  $counterminus; $col++) {
 
     echo "".$outproductsrecipe[$row][$col]."<br>";
  
  
  

foreach ($result as $key => $value) {
   // echo "Key: $key; Value: $value<br />\n";
  
  if ($key==$row){echo "</div>";}else {};
}
  
  
   }
  
   
   
}



?>
<br>









                


<br>










<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


  {{Form::open( array( 'action' => array( 'App\Controllers\Admin\CalendarweekController@update', $calendarweek->packetid ),'files'=>true, 'method' => 'PATCH'))}}

       



@if($joinaufbaugesamt->count())

@foreach( $joinaufbaugesamt as $v ) 
<?php
$random = rand(50, 15000);
$random2 = rand(40, 18000);
$random3 = rand(30, 14000);


?>
<!--Leerzeichen , Sonderzeichen entfernen-->
<?php
$dateiname = $v->product_name;
$dateiname = preg_replace('/[^A-Za-z 0-9]/', '', $dateiname); // alles weg, bis auf Buchstaben, Ziffern und Leerzeichen
$dateiname = preg_replace('/\s\s+/', ' ', $dateiname);        // überflüssige Leerzeichen auf eines reduzieren
$dateiname = preg_replace('/\s/', '_', $dateiname);           // Leerzeichen durch Unterstrich ersetzen
//echo strtolower($dateiname);
$product_name_var= strtolower($dateiname);
?>




<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">{{$v->product_name}} [id: {{ $v->id}}] </h3>
</div>
<div class="panel-body">
<div>  
<div class="row">
  <div class="col-md-6">



<!--selectize Rezept DYNAMISCH auswählen Anfang-->   




    @foreach( $joinaufbaugesamt as $v )  </b>
            
                   <b>product_name: {{ $v->product_name}}</b>
                    calendarweek: {{ $v->calendarweek}}/ year: {{ $v->year}} - packetid: {{ $v->packetid}} <br>    
                    productid: {{ $v->productid}} <br> 
                    sorting: {{ $v->sorting}} <br> 
                    recipeid: {{ $v->recipeid}} <br> 
                    title: {{ $v->title}} <br>
                    titleid: {{ $v->id}}<br>
                    
                    ID: {{ $v->id}}
               
                    <hr>
                     @endforeach








</div><div class="col-md-6">
       <!-- Image -->
<label class="control-label" for="image">PDF einfügen </label>
<div id="zone">
BILD
</div>
</div>
</div>
</div>
</div></div>
<br>


 <input type="hidden" name="{{$product_name_var}}[recipes][]" value="{{$calendarweek->packetid}}">
 <input type="hidden" name="{{$product_name_var}}[recipes][]" value="{{$calendarweek->calendarweek}}">


@endforeach


@else
<div class="alert alert-danger">Keine Produkte vorhanden</div>
@endif 


  <br>  
   <!-- Plichtfeld Anfang -->
   <div  style="margin-top:20px; margin-bottom:10px;">
      <p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
   </div>
   <!-- Plichtfeld Ende -->
   <!--Formular Registrierung Ende-->
   {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::hidden('check_yes', 'yes', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::submit('Ändern', array('class' => 'btn btn-u')) }}


    {{ Form::close() }}
</div>
<!-- Plichtfeld Ende -->
<br>
<br>
</div>

</div>
</div>

@stop