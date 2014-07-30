@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/js/jquery.slug.js') }}
<script type="text/javascript">
   $(document).ready(function () {
       $("#title").slug();  
      
   
   });
</script>

<!--Modal adds-->
<?php

if (isset($_GET["name"]))
  {
  $recipeid = $_GET["name"];
  }

if (isset($_GET["name"]))
  {
  $name = $_GET["name"];
  }

if (isset($_GET["idzt"]))
  {
  $idzt = $_GET["idzt"];
  }

?>

<!-- [Zahl angeben]-->
<script>
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
    return true;
}
</script>




<!--{{ HTML::style('assets/plugins/selectize/examples/css/normalize.css') }}-->

{{ HTML::style('assets/plugins/selectize/dist/css/selectize.bootstrap3.css') }}
{{ HTML::script('assets/plugins/selectize/dist/js/standalone/selectizenew.js') }}




<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>  Neues Rezept bearbeiten</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/recipe','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\RecipeController@update', $recipe->id ),'files'=>true, 'method' => 'PATCH')) }}
   <div class="row">
      <div class="col-md-6">
         <!-- Kochabo Rezept ID -->
         <div class="control-group {{ $errors->has('kochabo_id') ? 'has-error' : '' }}">
            <label class="control-label" for="kochabo_id">Kochabo Rezept ID <span class="stern" >*</span></label>
            <div class="controls">       
               {{ Form::text('kochabo_id', $recipe->kochabo_id, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Kochabo Rezept ID', 'required','value'=>Input::old('kochabo_id'))) }}  
               @if ($errors->first('kochabo_id'))
               <span class="help-block">{{ $errors->first('kochabo_id') }}</span>
               @endif
            </div>
         </div>
         <br /> 
         <!-- Title -->
         <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
            <label class="control-label" for="title">Titel</label>
            <div class="controls">
               {{ Form::text('title', $recipe->title, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Titel', 'required','value'=>Input::old('title'))) }}  
               @if ($errors->first('title'))
               <span class="help-block">{{ $errors->first('title') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- Slug -->
         <div class="control-group {{ $errors->has('slug') ? 'has-error' : '' }}">
            <label class="control-label" for="slug">Slug</label>
            <div class="controls">
               <div class="input-group">
                  <span class="input-group-addon">www.kochabo.at/</span>
                  {{ Form::text('slug', $recipe->slug, array('class'=>'form-control slug', 'id' => 'slug', 'placeholder'=>'Slug', 'required','value'=>Input::old('slug'))) }}
               </div>
               @if ($errors->first('slug'))
               <span class="help-block">{{ $errors->first('slug') }}</span>
               @endif
            </div>
         </div>
         <br /> 
         <div class="row">
            <div class="col-md-6">
               <!-- duration -->
               <div class="control-group {{ $errors->has('duration') ? 'has-error' : '' }}">
                  <label class="control-label" for="duration">Dauer (min)<span class="stern" >*</span></label>
                  <div class="controls">         
                     {{ Form::text('duration', $recipe->duration, array('class'=>'form-control', 'id' => 'recipe', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.', 'onkeypress' =>'return isNumberKey(event)', 'placeholder'=>'Dauer (min) [Zahl angeben]', 'required', 'value'=>Input::old('duration'))) }} 
                     @if ($errors->first('duration'))
                     <span class="help-block">{{ $errors->first('duration') }}</span>
                     @endif
                  </div>
               </div>
               <br /> 
            </div>
            <div class="col-md-6">
               <!-- cooking_time -->
               <div class="control-group {{ $errors->has('cooking_time') ? 'has-error' : '' }}">
                  <label class="control-label" for="cooking_time">Kochzeit (min) <span class="stern" >*</span></label>
                  <div class="controls">         
                     {{ Form::text('cooking_time', $recipe->cooking_time, array('class'=>'form-control', 'id' => 'recipe', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.', 'onkeypress' =>'return isNumberKey(event)',  'placeholder'=>'Kochzeit (min) [Zahl angeben]', 'required', 'value'=>Input::old('cooking_time'))) }}    
                     @if ($errors->first('cooking_time'))
                     <span class="help-block">{{ $errors->first('cooking_time') }}</span>
                     @endif
                  </div>
               </div>
               <br />
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <!-- nutrition_carbs -->
               <div class="control-group {{ $errors->has('nutrition_carbs') ? 'has-error' : '' }}">
                  <label class="control-label" for="nutrition_carbs">Nährwertangabe - Kohlenhydrate (g) <span class="stern" >*</span></label>
                  <div class="controls">        
                     {{ Form::text('nutrition_carbs', $recipe->nutrition_carbs, array('class'=>'form-control', 'id' => 'recipe', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.',  'onkeypress' =>'return isNumberKey(event)', 'placeholder'=>'Nährwertangabe - Kohlenhydrate (g) [Zahl angeben]', 'required', 'value'=>Input::old('nutrition_carbs'))) }}           
                     @if ($errors->first('nutrition_carbs'))
                     <span class="help-block">{{ $errors->first('nutrition_carbs') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <!-- nutrition_fat -->
               <div class="control-group {{ $errors->has('nutrition_fat') ? 'has-error' : '' }}">
                  <label class="control-label" for="nutrition_fat">Nährwertangabe - Fett (g) <span class="stern" >*</span></label>
                  <div class="controls">   
                     {{ Form::text('nutrition_fat', $recipe->nutrition_fat, array('class'=>'form-control', 'id' => 'recipe', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.',  'onkeypress' =>'return isNumberKey(event)', 'placeholder'=>'Nährwertangabe - Fett (g) [Zahl angeben]', 'required','value'=>Input::old('nutrition_fat'))) }}       
                     @if ($errors->first('nutrition_fat'))
                     <span class="help-block">{{ $errors->first('nutrition_fat') }}</span>
                     @endif
                  </div>
               </div>
               <br />
            </div>
            <div class="col-md-6">
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <!-- nutrition_protein  -->
               <div class="control-group {{ $errors->has('nutrition_protein ') ? 'has-error' : '' }}">
                  <label class="control-label" for="nutrition_protein ">Nährwertangabe - Eiweiß (g)<span class="stern" >*</span></label>
                  <div class="controls">    
                     {{ Form::text('nutrition_protein', $recipe->nutrition_protein, array('class'=>'form-control', 'id' => 'recipe',   'x-moz-errormessage' => 'Bitte eine Zahl eingeben.', 'onkeypress' =>'return isNumberKey(event)', 'placeholder'=>'Nährwertangabe - Eiweiß (g) [Zahl angeben]', 'required','value'=>Input::old('nutrition_protein'))) }}      
                     @if ($errors->first('nutrition_protein '))
                     <span class="help-block">{{ $errors->first('nutrition_protein') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <!-- nutrition_kcal -->
               <div class="control-group {{ $errors->has('nutrition_kcal') ? 'has-error' : '' }}">
                  <label class="control-label" for="nutrition_kcal">Nährwertangabe - Energie (kcal)<span class="stern" >*</span></label>
                  <div class="controls">  
                     {{ Form::text('nutrition_kcal', $recipe->nutrition_kcal, array('class'=>'form-control', 'id' => 'recipe', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.', 'onkeypress' =>'return isNumberKey(event)', 'placeholder'=>'Nährwertangabe - Energie (kcal) [Zahl angeben]','required', 'value'=>Input::old('nutrition_kcal'))) }}        
                     @if ($errors->first('nutrition_kcal'))
                     <span class="help-block">{{ $errors->first('nutrition_kcal') }}</span>
                     @endif
                  </div>
               </div>
               <br />
            </div>
         </div>
         <div style="height:67px;"> </div>
         <!-- tip -->
         <div class="control-group {{ $errors->has('tip') ? 'has-error' : '' }}">
            <label class="control-label" for="tip">Tipp <span class="stern" >*</span></label>
            <div class="controls">         
               {{ Form::textarea('tip', $recipe->tip, array('class'=>'form-control', 'id' => 'tip',  'placeholder'=>'Tipp', 'required', 'value'=>Input::old('tip'))) }}   
               @if ($errors->first('tip'))
               <span class="help-block">{{ $errors->first('tip') }}</span>
               @endif
            </div>
         </div>
         <br /> 
         <!-- athome -->
         <div class="control-group {{ $errors->has('athome') ? 'has-error' : '' }}">
            <label class="control-label" for="athome">Solltest zu Hause haben <span class="stern" >*</span></label>
            <div class="controls">         
               {{ Form::textarea('athome', $recipe->athome, array('class'=>'form-control', 'id' => 'athome',  'placeholder'=>'Solltest zu Hause haben', 'required',  'value'=>Input::old('athome'))) }}      
               @if ($errors->first('athome'))
               <span class="help-block">{{ $errors->first('athome') }}</span>
               @endif
            </div>
         </div>
         <br /> 
         <!-- description -->
         <div class="control-group {{ $errors->has('description') ? 'has-error' : '' }}">
            <label class="control-label" for="description">Beschreibung <span class="stern" >*</span></label>
            <div class="controls">         
               {{ Form::textarea('description', $recipe->description, array('class'=>'form-control', 'id' => 'description',  'placeholder'=>'Beschreibung', 'required', 'value'=>Input::old('description'))) }}       
               @if ($errors->first('description'))
               <span class="help-block">{{ $errors->first('description') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- Image -->
         <label class="control-label" for="imagesmall">Kleines Bild einfügen (Derzeit 200 x 200px)</label>
         <div id="zone">
            <span>
               <input  type="file" 
                  style="visibility:hidden; width: 1px;" 
                  id='files' name='imagesmall'  
                  onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
               <input id="btnclick" class="btn btn-u"  type="button" value="Bild auswählen" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
               <div id="zonepicandtitle"><span  class="badge badge-important" ></span><br /><output id="list"></output></div>
            </span>
            <div id="stored" >
               <span style="background-color:#fed51c; color:#000000" >Derzeit gespeichert</span><br /><span>
               <img src="{{ $recipe->imagesmall }}" width="120" height="120"> </span>
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
            <input type="hidden" name="hiddenupdateimagesmall" value="{{$recipe->imagesmall}}">
         </div>
         <br />
         <!-- Image -->
         <label class="control-label" for="imagemiddle">Mittelgroßes Bild einfügen (Derzeit 200 x 200px)</label>
         <div id="zone">
            <span>
               <input  type="file" 
                  style="visibility:hidden; width: 1px;" 
                  id='files2' name='imagemiddle'  
                  onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
               <input id="btnclick2" class="btn btn-u"  type="button" value="Bild auswählen" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
               <div id="zonepicandtitle"><span  class="badge badge-important" ></span><br /><output id="list2"></output></div>
            </span>
            <div id="stored2" >
               <span style="background-color:#fed51c; color:#000000" >Derzeit gespeichert</span><br /><span>
               <img src="{{ $recipe->imagemiddle }}" width="120" height="120"> </span>
            </div>
            <script>
               function handleFileSelect(evt2) {
                 var files2 = evt2.target.files; // FileList object

               
                 // Loop through the FileList and render image files as thumbnails.

                 for (var i = 0, f; f = files2[i]; i++) {

               
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
                       document.getElementById('list2').insertBefore(span, null);
                     };
                   })(f);

                   // Read in the image file as a data URL.

                   reader.readAsDataURL(f);
                 }
               }
               document.getElementById('files2').addEventListener('change', handleFileSelect, false);
               $( "#btnclick2" ).click(function() {
               $( "#stored2" ).animate({
                 opacity: 0.25,
                 left: "+=10"
                 
               }, 700, function() {
                 $("#stored2").css("visibility","hidden");
               });
               });
            </script>
            <!--Aktuelles Bild-->
            <input type="hidden" name="hiddenupdateimagemiddle" value="{{$recipe->imagemiddle}}">
         </div>
         <br />
         <!-- Image -->
         <label class="control-label" for="imagebig">Kleines Bild einfügen (Derzeit 200 x 200px)</label>
         <div id="zone">
            <span>
               <input  type="file" 
                  style="visibility:hidden; width: 1px;" 
                  id='files3' name='imagebig'  
                  onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
               <input id="btnclick3" class="btn btn-u"  type="button" value="Bild auswählen" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
               <div id="zonepicandtitle"><span  class="badge badge-important" ></span><br /><output id="list3"></output></div>
            </span>
            <div id="stored3" >
               <span style="background-color:#fed51c; color:#000000" >Derzeit gespeichert</span><br /><span>
               <img src="{{ $recipe->imagebig }}" width="120" height="120"> </span>
            </div>
            <script>
               function handleFileSelect(evt3) {
                 var files3 = evt3.target.files; // FileList object

               
                 // Loop through the FileList and render image files as thumbnails.

                 for (var i = 0, f; f = files3[i]; i++) {

               
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
                       document.getElementById('list3').insertBefore(span, null);
                     };
                   })(f);

                   // Read in the image file as a data URL.

                   reader.readAsDataURL(f);
                 }
               }
               document.getElementById('files3').addEventListener('change', handleFileSelect, false);
               $( "#btnclick3" ).click(function() {
               $( "#stored3" ).animate({
                 opacity: 0.25,
                 left: "+=10"
                 
               }, 700, function() {
                 $("#stored3").css("visibility","hidden");
               });
               });
            </script>
            <!--Aktuelles Bild-->
            <input type="hidden" name="hiddenupdateimagebig" value="{{$recipe->imagebig}}">
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-2">
               <!-- gluten_free  -->
               <div class="control-group {{ $errors->has('gluten_free ') ? 'has-error' : '' }}">
                  <label class="control-label" for="gluten_free ">Glutenfrei?</label>
                  <div class="controls"> 
                     {{ Form::hidden('gluten_free', 0); }}  
                     {{ Form::checkbox('gluten_free', '1', Input::old('gluten_free', $recipe->gluten_free)) }}
                     @if ($errors->first('gluten_free '))
                     <span class="help-block">{{ $errors->first('gluten_free  ') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-2">
               <!-- lactose_free -->
               <div class="control-group {{ $errors->has('lactose_free') ? 'has-error' : '' }}">
                  <label class="control-label" for="lactose_free">Laktosefrei?</label>
                  <div class="controls">    
                     {{ Form::hidden('lactose_free', 0); }}  
                     {{ Form::checkbox('lactose_free', '1', Input::old('lactose_free', $recipe->lactose_free)) }}
                     @if ($errors->first('lactose_free'))
                     <span class="help-block">{{ $errors->first('lactose_free') }}</span>
                     @endif
                  </div>
               </div>
               <br />
            </div>
            <div class="col-md-2">
               <!-- meat -->
               <div class="control-group {{ $errors->has('meat') ? 'has-error' : '' }}">
                  <label class="control-label" for="meat">Fleisch?</label>
                  <div class="controls">    
                     {{ Form::hidden('meat', 0); }}  
                     {{ Form::checkbox('meat', '1', Input::old('meat', $recipe->meat)) }}
                     @if ($errors->first('meat'))
                     <span class="help-block">{{ $errors->first('meat') }}</span>
                     @endif
                  </div>
               </div>
               <br />
            </div>
            <div class="col-md-2">
               <!-- fish -->
               <div class="control-group {{ $errors->has('fish') ? 'has-error' : '' }}">
                  <label class="control-label" for="fish">Fisch?</label>
                  <div class="controls">   
                     {{ Form::hidden('fish', 0); }}  
                     {{ Form::checkbox('fish', '1', Input::old('fish', $recipe->fish)) }}
                     @if ($errors->first('fish'))
                     <span class="help-block">{{ $errors->first('fish') }}</span>
                     @endif
                  </div>
               </div>
               <br />
            </div>
            <div class="col-md-2">
               <!-- vegetarien -->
               <div class="control-group {{ $errors->has('vegetarien') ? 'has-error' : '' }}">
                  <label class="control-label" for="vegetarien">Vegetarisch?</label>
                  <div class="controls"> 
                     {{ Form::hidden('vegetarien', 0); }}  
                     {{ Form::checkbox('vegetarien', '1', Input::old('vegetarien', $recipe->vegetarien)) }}
                     @if ($errors->first('vegetarien'))
                     <span class="help-block">{{ $errors->first('vegetarien') }}</span>
                     @endif
                  </div>
               </div>
               <br />
            </div>
            <div class="col-md-2">
               <!-- vegan -->
               <div class="control-group {{ $errors->has('vegan') ? 'has-error' : '' }}">
                  <label class="control-label" for="vegetarien">Vegan?</label>
                  <div class="controls">   
                     {{ Form::hidden('vegan', 0); }}  
                     {{ Form::checkbox('vegan', '1', Input::old('vegan', $recipe->vegan)) }}
                     @if ($errors->first('vegan'))
                     <span class="help-block">{{ $errors->first('vegan') }}</span>
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <!-- step_1 -->
         <div class="control-group {{ $errors->has('step_1') ? 'has-error' : '' }}">
            <label class="control-label" for="step_1">Schritt 1 <span class="stern" >*</span></label>
            <div class="controls">  
               {{ Form::textarea('step_1', $recipe->step_1, array('class'=>'form-control', 'id' => 'step_1',  'placeholder'=>'Schritt 1', 'required', 'value'=>Input::old('step_1'))) }}          
               @if ($errors->first('step_1'))
               <span class="help-block">{{ $errors->first('step_1') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- step_2 -->
         <div class="control-group {{ $errors->has('step_2') ? 'has-error' : '' }}">
            <label class="control-label" for="step_2">Schritt 2 <span class="stern" >*</span></label>
            <div class="controls">       
               {{ Form::textarea('step_2', $recipe->step_2, array('class'=>'form-control', 'id' => 'step_2',  'placeholder'=>'Schritt 2', 'required', 'value'=>Input::old('step_2'))) }}   
               @if ($errors->first('step_2'))
               <span class="help-block">{{ $errors->first('step_2') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- step_3 -->
         <div class="control-group {{ $errors->has('step_3') ? 'has-error' : '' }}">
            <label class="control-label" for="step_3">Schritt 3 <span class="stern" >*</span></label>
            <div class="controls">   
               {{ Form::textarea('step_3', $recipe->step_3, array('class'=>'form-control', 'id' => 'step_3',  'placeholder'=>'Schritt 3',  'required','value'=>Input::old('step_3'))) }}         
               @if ($errors->first('step_3'))
               <span class="help-block">{{ $errors->first('step_3') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- step_4 -->
         <div class="control-group {{ $errors->has('step_4') ? 'has-error' : '' }}">
            <label class="control-label" for="step_4">Schritt 4 <span class="stern" >*</span></label>
            <div class="controls">  
               {{ Form::textarea('step_4', $recipe->step_4, array('class'=>'form-control', 'id' => 'step_4',  'placeholder'=>'Schritt 4',  'required', 'value'=>Input::old('step_4'))) }}          
               @if ($errors->first('step_4'))
               <span class="help-block">{{ $errors->first('step_4') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- step_5 -->
         <div class="control-group {{ $errors->has('step_5') ? 'has-error' : '' }}">
            <label class="control-label" for="step_5">Schritt 5 <span class="stern" >*</span></label>
            <div class="controls"> 
               {{ Form::textarea('step_5', $recipe->step_5, array('class'=>'form-control', 'id' => 'step_5',  'placeholder'=>'Schritt 5', 'required', 'value'=>Input::old('step_5'))) }}         
               @if ($errors->first('step_5'))
               <span class="help-block">{{ $errors->first('step_5') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- step_6 -->
         <div class="control-group {{ $errors->has('step_6') ? 'has-error' : '' }}">
            <label class="control-label" for="step_6">Schritt 6 <span class="stern" >*</span></label>
            <div class="controls">     
               {{ Form::textarea('step_6', $recipe->step_6, array('class'=>'form-control', 'id' => 'step_6',  'placeholder'=>'Schritt 6',  'required','value'=>Input::old('step_6'))) }}       
               @if ($errors->first('step_6'))
               <span class="help-block">{{ $errors->first('step_6') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- step_7 -->
         <div class="control-group {{ $errors->has('step_7') ? 'has-error' : '' }}">
            <label class="control-label" for="step_7">Schritt 7 <span class="stern" >*</span></label>
            <div class="controls">    
               {{ Form::textarea('step_7', $recipe->step_7, array('class'=>'form-control', 'id' => 'step_7',  'placeholder'=>'Schritt 7',  'required','value'=>Input::old('step_7'))) }}       
               @if ($errors->first('step_7'))
               <span class="help-block">{{ $errors->first('step_7') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- Published --><!-- 
         <input type="hidden" value="is_published">
         <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
            <div class="controls">
               <label class="checkbox">{{ Form::checkbox('is_published', 'is_published') }} Veröffentlichen ?</label>
               @if ($errors->first('is_published'))
               <span class="help-block">{{ $errors->first('is_published') }}</span>
               @endif
            </div>
         </div>
         <br />
         -->
      </div>
   </div>
   <br />



   <div style="height:34px;"> </div>
  
   <!--Formular Registrierung Ende-->
   {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::hidden('check_yes', 'yes', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
    {{ Form::submit('Rezept speichern', array('class' => 'btn btn-u')) }}
<div class="stuck" align="right"><br /><br /><br />
   {{ Form::submit('Rezept speichern', array('class' => 'btn btn-u')) }}
</div>

</div>
<!-- Plichtfeld Ende -->
<br />
<br />
</div>
{{ Form::close() }}
  


<div class="container">

  </div>



<!--Anlegen und löschen Anfang-->
 <div id="zielanker_loeschen"></div>
   <div class="container">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h3 class="panel-title">Rezept Zutaten</h3>
         </div>
         <div class="panel-body">
            @if($recipe_ingredient->count())
           
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th>Name <span class="stern" >*</span></th>
                        <th>Menge für 2 Personen <span class="stern" >*</span></th>
                        <th>Menge für 2 Personen <span class="stern" >*</span></th>
                        <th>Menge für 6 Personen <span class="stern" >*</span></th>
                        <th>Einheit <span class="stern" >*</span></th>
                        <th>Auslieferung </th>
                         <th></th>
                          <th></th>
                          <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach( $recipe_ingredient as $v )
                     <?php
$ingredient_id_e = $v->id;
$ingredient_id_ee = "ingredient_id_$ingredient_id_e" ?>
                     <?php
$amount_2_persons_e = $v->id;
$amount_2_persons_ee = "amount_2_persons_$amount_2_persons_e" ?>
                     <?php
$amount_4_persons_e = $v->id;
$amount_4_persons_ee = "amount_4_persons_$amount_4_persons_e" ?>
                     <?php
$amount_6_persons_e = $v->id;
$amount_6_persons_ee = "amount_6_persons_$amount_6_persons_e" ?>
                     <?php
$einheit_e = $v->id;
$einheit_ee = "einheit_$einheit_e" ?> 
                     <?php
$ingredient_id_aktu_e = $v->id;
$ingredient_id_aktu_ee = "ingredient_id_aktu_$ingredient_id_aktu_e" ?>              
                  

                     <?php
$delivery_e = $v->id;
$delivery_ee = "delivery_$delivery_e" ?> 
                     <?php
$selectbeastx_e = $v->id;
$selectbeastx_ee = "selectbeastx_$selectbeastx_e" ?> 

                   

                     <form action="" method="PATCH" id="form_zutaten_{{$v->id}}">
                        <tr>
                           <td>





<!--selectize Zutenname auswählen Anfang-->


   
    <div id="wrapper">          
        <div class="control-group"> 
            <select id="{{$selectbeastx_ee}}" name="ingredient_id"  required class="demo-default"  style="width:260px;  placeholder="Wähle eine Zutat">
              <option value="{{$v->ingredient_id}}" selected >{{$v->name}}</option>
              @foreach( $ingredients as $x ) 
              <option value="{{$x->id }}">{{ $x->name }}</option>
               @endforeach             
            </select>
        </div>
        <script>
        $('#{{$selectbeastx_ee}}').selectize({
          create: true,
          sortField: {
            field: 'text',
            direction: 'asc'
          }
        });
        </script>
      </div>
</div>
<!--selectize Zutenname auswählen Ende-->





                                

                           </td>
                           <td>


                              <div class="control-group {{ $errors->has($amount_2_persons_ee) ? 'has-error' : '' }}">
                                 {{ Form::text('amount_2_persons', $v->amount_2_persons, array('class'=>'form-control', 'id' => $amount_2_persons_ee, 'placeholder'=>'[Zahl angeben]', 'required', 'onkeypress' =>'return isNumberKey(event)', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.','value'=>Input::old('amount_2_persons'))) }}
                                 @if ($errors->first($amount_2_persons_ee))
                                 <span class="help-block">{{ $errors->first($amount_2_persons_ee) }}</span>
                                 @endif
                              </div>
                           </td>
                           <td>
                              <div class="control-group {{ $errors->has($amount_4_persons_ee) ? 'has-error' : '' }}">
                                 {{ Form::text('amount_4_persons', $v->amount_4_persons, array('class'=>'form-control', 'id' => $amount_4_persons_ee, 'placeholder'=>'[Zahl angeben]',  'required', 'onkeypress' =>'return isNumberKey(event)', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.', 'value'=>Input::old('amount_4_persons'))) }}
                                 @if ($errors->first($amount_4_persons_ee))
                                 <span class="help-block">{{ $errors->first($amount_4_persons_ee) }}</span>
                                 @endif
                              </div>
                           </td>

                               <td>
                              <div class="control-group {{ $errors->has($amount_6_persons_ee) ? 'has-error' : '' }}">
                                 {{ Form::text('amount_6_persons', $v->amount_6_persons, array('class'=>'form-control', 'id' => $amount_6_persons_ee, 'placeholder'=>'[Zahl angeben]',  'required',  'onkeypress' =>'return isNumberKey(event)', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.','value'=>Input::old('amount_6_persons'))) }}
                                 @if ($errors->first($amount_6_persons_ee))
                                 <span class="help-block">{{ $errors->first($amount_6_persons_ee) }}</span>
                                 @endif
                              </div>
                           </td>

                            <td>
                              <div class="control-group {{ $errors->has('einheit') ? 'has-error' : '' }}">
                            

                            <select  required name="einheit" class="form-control" id="{{$einheit_ee}}">
                           <option value="{{$v->einheit}}" selected>{{$v->einheit}}</option>
                         
                        
                           @foreach( $list_einheit as $x )             
                           <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach  
                        </select>


                                 @if ($errors->first('einheit'))
                                 <span class="help-block">{{ $errors->first('einheit') }}</span>
                                 @endif
                              </div>
                           </td>

                           <td>

                     <div class="controls"> 
                     {{ Form::hidden('delivery', 0); }}
                       {{ Form::checkbox('delivery', '1', Input::old('delivery', $v->delivery) , ['id' => $delivery_ee])}}               
                      


                     @if ($errors->first('delivery '))
                     <span class="help-block">{{ $errors->first('delivery  ') }}</span>
                     @endif
                    </div>



 






                            
                              <input type="hidden" name="id" id="id" value="{{ $v->id}}">
                           <td>
                              <a id="button_" class="btn btn-danger publish" title="" href="{{ URL::route('admin.recipeingredient.delete', array($v->id, 'recipeid' => $recipe->id, 'name' => $v->name)  ) }}">Löschen</a>
                           </td>
                           <td>
                              <button type="submit" class="btn btn-u"  id="update_{{ $v->id}}"> Aktualisieren</button>
                           </td>
                           <td>
                              <div id="flash_{{$v->id}}">&nbsp;</div>
                           </td>
                     </form>
            </div>
            </td>
            <td>
            </td>
            </td>
            </tr>
            <!-- AJAX FORM POST SCRIPT ANFANG-->
     
            <script>
               $(document).ready(function(){
               
               $('#form_zutaten_{{$v->id}}').submit(function(e){
               
               
               
               
               
                           $("#flash_{{$v->id}}").show();
                           $("#flash_{{$v->id}}").fadeIn(1000).html('<img src="{{ URL::to('assets/img/backend/icons/ajax-loader.gif') }}" />'); 
                           $("#flash_{{$v->id}}").fadeOut(1000);

               
               
               // Hinweis Anfang

                   $(function(){
                    new PNotify({     
                   title: 'Hinweis',
                   text: 'Zutat wurde aktualisiert.',
                    type: 'success',
                   mouse_reset: false
               });
                   });

               
               // Hinweis ENDE   

               
               e.preventDefault();

               
               // formData 

               var formData = new FormData();   
               formData.append('ingredient_id', $('#selectbeastx_{{$v->id}}').val());              
               formData.append('amount_2_persons', $('#amount_2_persons_{{$v->id}}').val());
               formData.append('amount_4_persons', $('#amount_4_persons_{{$v->id}}').val());
               formData.append('amount_6_persons', $('#amount_6_persons_{{$v->id}}').val());
               formData.append('einheit', $('#einheit_{{$v->id}}').val());
                formData.append('delivery', $('#delivery_{{$v->id}}').val());
               
               
               $.ajax ({
               url:'../submitx/{{$v->id}}/toggle-publish',
               method:'post',
               processData:false,
               contentType:false,
               cache:false,
               dataType: 'json',
               data:formData,
               success:function(data) { 
               
               if(data.success) {               
                 
               
               $.each(data.errors, function(index, error){    
               });
               
               }else {    
               
               }
               
               },
               error:function(){}
               
               });
               
               });
               
               }); 
               
            </script>
            <!-- AJAX FORM POST SCRIPT ENDE-->
            @endforeach
            </tbody>
            </table>
         </div>
         @else
         <div class="alert alert-danger">Keine Zutat angelegt</div>
         @endif 






<!--Anlegen und löschen Ende-->
<!-- Zutaten Anfang -->



  
     <div id="zielanker_speichern"></div>

    {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\RecipeingredientController@store', 'recipeid' => $recipe->id) ) ) }}
    
   <hr>
   <div class="table-responsive">
      <table class="table table-striped">
         <thead>
            <tr>
               <th>Name <span class="stern" >*</span></th>
               <th>Menge für 2 Personen <span class="stern" >*</span></th>
               <th>Menge für 4 Personen <span class="stern" >*</span></th>
               <th>Menge für 6 Personen <span class="stern" >*</span></th>
               <th>Einheit <span class="stern" >*</span></th>
               <th>Auslieferung </th>
               <th></th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>
                

<!--selectize Zutenname auswählen Anfang-->




   
    <div id="wrapper">          
          <div class="control-group {{ $errors->has('ingredient_id') ? 'has-error' : '' }}">
            <select  id="select-beast" name="ingredient_id"  style="width:260px; "  placeholder="Wähle eine Zutat" required="required"  >

              <?php

if (isset($idzt))
  { ?>
               <option value="<?php
  if (isset($name))
    {
    echo "$idzt";
    } ?> " selected >{{$name}}</option>
              <?php
  }
  else
  { ?>
                <option value="" selected  >Wähle eine Zutat</option>
              <?php
  }

?>               

              @foreach( $ingredients as $x ) 
              <option value="{{$x->id }}">{{ $x->name }}</option>
               @endforeach             
            </select>
@if ($errors->first('ingredient_id'))
<span class="help-block">{{ $errors->first('ingredient_id') }}</span>
@endif

        </div>
        <script>
        $('#select-beast').selectize({
          create: true,
          sortField: {
            field: 'text',
            direction: 'asc'
          }
        });
        </script>
      </div>
</div>
<!--selectize Zutenname auswählen Ende-->





               </td>
               <td>
              

      
   


        





                  <div class="control-group {{ $errors->has('amount_2_persons') ? 'has-error' : '' }}">
                     {{ Form::text('amount_2_persons', null, array('class'=>'form-control', 'id' => 'amount_2_persons', 'onkeypress' =>'return isNumberKey(event)', 'placeholder'=>'[Zahl angeben]', 'required', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.', 'value'=>Input::old('amount_2_persons'))) }}   
                     @if ($errors->first('amount_2_persons'))
                     <span class="help-block">{{ $errors->first('amount_2_persons') }}</span>
                     @endif
                  </div>
               </td>
               <td>
                  <div class="control-group {{ $errors->has('amount_4_persons') ? 'has-error' : '' }}">
                     {{ Form::text('amount_4_persons', null, array('class'=>'form-control', 'id' => 'amount_4_persons', 'onkeypress' =>'return isNumberKey(event)', 'placeholder'=>'[Zahl angeben]','required', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.','value'=>Input::old('amount_4_persons'))) }}   
                     @if ($errors->first('amount_4_persons'))
                     <span class="help-block">{{ $errors->first('amount_4_persons') }}</span>
                     @endif
                  </div>
               </td>
               <td>
                  <div class="control-group {{ $errors->has('amount_6_persons') ? 'has-error' : '' }}">
                     {{ Form::text('amount_6_persons', null, array('class'=>'form-control', 'id' => 'amount_6_persons',  'onkeypress' =>'return isNumberKey(event)', 'placeholder'=>'[Zahl angeben]', 'required', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.','value'=>Input::old('amount_6_persons'))) }}   
                     @if ($errors->first('amount_6_persons'))
                     <span class="help-block">{{ $errors->first('amount_6_persons') }}</span>
                     @endif
                  </div>
<!--
                  <input type="text" name="zipc" x-moz-errormessage=Wrong  required="required"  pattern="[0-9]+"
        placeholder="Required information"
        data-errormessage="NENE" />

        -->

               </td>
               <td>
                  <div class="control-group {{ $errors->has('price') ? 'has-error' : '' }}">
                     <div class="controls">
                        <select required name="einheit" class="form-control"  >
                           <option placeholder="Einheit"value="" selected ></option>
                           @foreach( $list_einheit as $x )             
                           <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach  
                        </select>
                        @if ($errors->first('ust'))
                        <span class="help-block">{{ $errors->first('ust') }}</span>
                        @endif
                     </div>
                  </div>
               </td>
               <td>
                  <div class="control-group {{ $errors->has('delivery') ? 'has-error' : '' }}">  
                     {{ Form::checkbox('delivery', '1', Input::old('delivery', 0))}}    
                     @if ($errors->first('delivery'))
                     <span class="help-block">{{ $errors->first('delivery') }}</span>
                     @endif
                  </div>
               </td>

               <td>
               <!-- Button trigger modal -->
<button class="btn btn-u" data-toggle="modal" data-target="#myModal">
  Neue Zutat anlegen
</button>
               </td>
               <td>
                  {{ Form::submit('Neue Zutat hinzufügen', array('class' => 'btn btn-danger ')) }}
               </td>
              
            </tr>
         </tbody>
      </table>
   </div>
   
   


</div>

<input type="hidden" name="recipe_id" value="{{$recipe->id}}">
{{ Form::close() }}
</div>








 <!-- Plichtfeld Anfang -->
   <div  style="margin-top:20px; margin-bottom:10px;">
      <p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
   </div>
   <!-- Plichtfeld Ende -->

<br />
<!--Anlegen ENDE-->   




<!--Modal Form Anfang-->




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Schließen</span></button>
        <h4 class="modal-title" id="myModalLabel">Zutat</h4>
      </div>
      <div class="modal-body">
       <!-- FORM Anfang-->
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Neue Zutat erstellen</h2>
      <div class="pull-right">
         
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
   
   {{ Form::open(array('action' => 'App\Controllers\Admin\IngredientsController@store', 'files'=> true, 'method' => 'post' )) }}
   <div class="row">
      <div class="col-md-6">
         <br /> 
         <!-- name -->
         <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label class="control-label" for="name">Name <span class="stern" >*</span></label>
            <div class="controls">         
               {{ Form::text('name', null, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Name', 'required', 'value'=>Input::old('name'))) }}
               @if ($errors->first('name'))
               <span class="help-block">{{ $errors->first('name') }}</span>
               @endif
            </div>
         </div>
         <br />
         <!-- description -->
         <div class="control-group {{ $errors->has('description') ? 'has-error' : '' }}">
            <label class="control-label" for="description">Beschreibung <span class="stern" >*</span></label>
            <div class="controls">         
               {{ Form::textarea('description', null, array('class'=>'form-control', 'id' => 'description', 'placeholder'=>'Beschreibung',  'required', 'value'=>Input::old('description'))) }}
               @if ($errors->first('description'))
               <span class="help-block">{{ $errors->first('description') }}</span>
               @endif
            </div>
         </div>
         <br />
         <div class="row">
            <div class="col-md-9">
               <!-- kcal100g -->
               <div class="control-group {{ $errors->has('kcal100g') ? 'has-error' : '' }}">
                  <label class="control-label" for="kcal100g">Kcal pro 100g <span class="stern" >*</span></label>
                  <div class="controls">         
                     {{ Form::text('kcal100g', null, array('class'=>'form-control', 'id' => 'kcal100g',  'onkeypress' =>'return isNumberKey(event)', 'placeholder'=>'Kcal pro 100g',  'required', 'x-moz-errormessage' => 'Bitte eine Zahl eingeben.', 'value'=>Input::old('kcal100g'))) }}
                     @if ($errors->first('kcal100g'))
                     <span class="help-block">{{ $errors->first('kcal100g') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <!-- defaultunit  -->
               <div class="control-group {{ $errors->has('defaultunit ') ? 'has-error' : '' }}">
                  <label class="control-label" for="defaultunit ">Default</label>
                  <div class="controls">   
                     {{ Form::checkbox('defaultunit', '1', Input::old('defaultunit', 0))}}
                     @if ($errors->first('defaultunit '))
                     <span class="help-block">{{ $errors->first('defaultunit  ') }}</span>
                     @endif
                  </div>
               </div>
               <br />
            </div>
         </div>
         <br />
      </div>
      <div class="col-md-6">
         <div style="height:30px;"> </div>

         <!-- Image -->
 <label class="control-label" for="imagex">Bild einfügen (Derzeit 200 x 200px)</label>
         <div id="zone">
            <span>
               <input  type="file" 
                  style="visibility:hidden; width: 1px;" 
                  id='files4' name='imagex'  
                  onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
               <input id="btnclick4" class="btn btn-u"  type="button" value="Bild auswählen" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
               <div id="zonepicandtitle"><span  class="badge badge-important" ></span><br /><output id="list4"></output></div>
            </span>
         
            <script>
               function handleFileSelect(evt4) {
                 var files4 = evt4.target.files; // FileList object

               
                 // Loop through the FileList and render image files as thumbnails.

                 for (var i = 0, f; f = files4[i]; i++) {

               
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
                       document.getElementById('list4').insertBefore(span, null);
                     };
                   })(f);

                   // Read in the image file as a data URL.

                   reader.readAsDataURL(f);
                 }
               }
               document.getElementById('files4').addEventListener('change', handleFileSelect, false);
               $( "#btnclick4" ).click(function() {
               $( "#stored4" ).animate({
                 opacity: 0.25,
                 left: "+=10"
                 
               }, 700, function() {
                 $("#stored4").css("visibility","hidden");
               });
               });
            </script>
           
          
         </div>   
         <br />
         <!-- Published -->       
       
         <br />
      </div>
   </div>
   <br />
   <!-- Plichtfeld Anfang -->
   <div  style="margin-top:20px; margin-bottom:10px;">
      <p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
   </div>
   <!-- Plichtfeld Ende -->
   <!--Formular Registrierung Ende-->
   {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::hidden('check_yes', 'yes', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::hidden('modal', 'yes', array('class' => 'form-control' )) }} 
   {{ Form::hidden('recipeid', $recipe->id, array('class' => 'form-control' )) }}
   {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}
</div>
<!-- Plichtfeld Ende -->
<br />
<br />
</div>
       
      </div>
     
    </div>
  </div>
</div>
<!--Modal Form Ende-->
  @stop