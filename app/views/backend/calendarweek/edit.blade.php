@extends('backend/_layout/layout')
@section('content')  
{{ HTML::style('assets/backend/plugins/selectize/dist/css/selectize.bootstrap3.css') }}
{{ HTML::script('assets/backend/plugins/selectize/dist/js/standalone/selectizenew.js') }}     

<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Neuen Wochenplan erstellen</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/calendarweek','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->

<strong>ID: {{$calendarweek->packetid}} - Kalenderwoche: {{$calendarweek->calendarweek}} Jahr: {{$calendarweek->year}}</strong><hr><br>
<strong>Ausgabe Produkte: (Mit Filterung)</strong><hr>

   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\CalendarweekController@update', $calendarweek->id ),'files'=>true, 'method' => 'PATCH')) }}



@if($products->count())

@foreach( $products as $v ) 
<?php
$random = rand(50, 15000);
$random2 = rand(40, 18000);
$random3 = rand(30, 14000);


?>

<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">{{ $v->product_name}} [id: {{ $v->id}}] </h3>
</div>
<div class="panel-body">
<div>  






<div class="row">
  <div class="col-md-6">



<!--selectize Rezept 2 auswählen Anfang-->   


      <label class="control-label" for="recipetype">Rezept 1</label>
    <div id="wrapper">    
          <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
            <select  id="select-beast_<?php echo "$random" ?>" name="title1"  style="width:auto"  placeholder=">Wähle / Suche "   >
                <option value="" selected>Wähle / Suche     </option> 
              @foreach( $recipe as $x ) 
              <option value="{{$x->id }}">{{ $x->title }}</option>
               @endforeach             
            </select>
@if ($errors->first('title1'))
<span class="help-block">{{ $errors->first('title1') }}</span>
@endif
        </div>
        <script>
        $('#select-beast_<?php echo "$random" ?>').selectize({
          create: true,
          sortField: {
            field: 'text',
            direction: 'asc'
          }
        });
        </script>
  
</div>

 

<!--selectize Rezept 1 auswählen Ende-->   


<!--selectize Rezept 2 auswählen Anfang-->  
<label class="control-label" for="recipetype">Rezept 2</label> 
    <div id="wrapper">    
          <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
            <select  id="select-beast_<?php echo "$random2" ?>" name="title1"  style="width:auto"  placeholder=">Wähle / Suche "   >
                <option value="" selected>Wähle / Suche     </option> 
              @foreach( $recipe as $x ) 
              <option value="{{$x->id }}">{{ $x->title }}</option>
               @endforeach             
            </select>
@if ($errors->first('title1'))
<span class="help-block">{{ $errors->first('title1') }}</span>
@endif
        </div>
        <script>
        $('#select-beast_<?php echo "$random2" ?>').selectize({
          create: true,
          sortField: {
            field: 'text',
            direction: 'asc'
          }
        });
        </script>
  
</div>
<!--selectize Rezept 2 auswählen Ende-->   



<!--selectize Rezept 3 auswählen Anfang-->  
<label class="control-label" for="recipetype">Rezept 3</label> 
    <div id="wrapper">    
          <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
            <select  id="select-beast_<?php echo "$random3" ?>" name="title1"  style="width:auto"  placeholder=">Wähle / Suche "   >
                <option value="" selected>Wähle / Suche     </option> 
              @foreach( $recipe as $x ) 
              <option value="{{$x->id }}">{{ $x->title }}</option>
               @endforeach             
            </select>
@if ($errors->first('title1'))
<span class="help-block">{{ $errors->first('title1') }}</span>
@endif
        </div>
        <script>
        $('#select-beast_<?php echo "$random3" ?>').selectize({
          create: true,
          sortField: {
            field: 'text',
            direction: 'asc'
          }
        });
        </script>
  
</div>
<!--selectize Rezept 3 auswählen Ende-->   



</div><div class="col-md-6">



       <!-- Image -->
<label class="control-label" for="image">PDF einfügen (Derzeit 200 x 200px)</label>
<div id="zone">
<span>
    <input  type="file" 
            style="visibility:hidden; width: 1px;" 
            id='files' name='imagex'  
            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
            <input id="btnclick" class="btn btn-u" type="button" value="PDF auswählen" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
     
   <div id="zonepicandtitle"><span  class="badge badge-important" ></span><br><output id="list"></output></div>
</span>

<div id="stored" >
<span style="background-color:#fed51c; color:#000000" >Derzeit gespeichert</span><br><span>
 </span>
</div>

<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }
      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);
      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }
  document.getElementById('files').addEventListener('change', handleFileSelect, false);



  $( "#btnclick" ).click(function() {
  $( "#stored" ).animate({
    opacity: 0.25,
    left: "+=10"
    
  }, 700, function() {
    $("#stored").css("visibility","hidden");
  });
});


</script>
<!--Aktuelles Bild-->
</div>
</div>








</div>

</div>
</div>
</div>
<br>
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
   {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}


    {{ Form::close() }}
</div>
<!-- Plichtfeld Ende -->
<br>
<br>
</div>

</div>
</div>

@stop