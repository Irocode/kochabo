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







                    @foreach( $joinaufbautest as $v ) 

                    <pre> 
                    <b>product_name: {{ $v->product_name}}</b>
                    calendarweek: {{ $v->calendarweek}}/ year: {{ $v->year}} - packetid: {{ $v->packetid}} <br>    
                    productid: {{ $v->productid}} <br> 
                    sorting: {{ $v->sorting}} <br> 
                    recipeid: {{ $v->recipeid}} <br> 
                    title: {{ $v->title}} <br>
                    titleid: {{ $v->id}}<br>
                    
                    ID: {{ $v->id}}
               
                    <hr>
                    </pre>
                     @endforeach
                


<br>










<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


  {{Form::open( array( 'action' => array( 'App\Controllers\Admin\CalendarweekController@update', $calendarweek->packetid ),'files'=>true, 'method' => 'PATCH'))}}

       



@if($joinaufbau->count())

@foreach( $joinaufbau as $v ) 
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