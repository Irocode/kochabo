@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/js/jquery.slug.js') }}
<script type="text/javascript">
   $(document).ready(function () {
       $("#title").slug();  
      
   
   });
</script>

<style>
#description, #tip, #athome, #step_1, #step_2, #step_3, #step_4, #step_5, #step_6, #step_7 {
height: 194px;
}
</style>

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
      {{ Form::text('kochabo_id', $recipe->kochabo_id, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Kochabo Rezept ID', 'value'=>Input::old('kochabo_id'))) }}  

         @if ($errors->first('kochabo_id'))
         <span class="help-block">{{ $errors->first('kochabo_id') }}</span>
         @endif
      </div>
   </div> 
  <br> 
   <!-- Title -->
  
   <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Titel</label>
      <div class="controls">
        {{ Form::text('title', $recipe->title, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Titel', 'value'=>Input::old('title'))) }}  
        
         @if ($errors->first('title'))
         <span class="help-block">{{ $errors->first('title') }}</span>
         @endif
      </div>
   </div>
   <br>

   <!-- Slug -->
   <div class="control-group {{ $errors->has('slug') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Slug</label>
      <div class="controls">
         <div class="input-group">
            <span class="input-group-addon">www.kochabo.at/</span>
            {{ Form::text('slug', $recipe->slug, array('class'=>'form-control slug', 'id' => 'slug', 'placeholder'=>'Slug', 'value'=>Input::old('slug'))) }}
         </div>
         @if ($errors->first('slug'))
         <span class="help-block">{{ $errors->first('slug') }}</span>
         @endif
      </div>
   </div>
     <br> 

         <div class="row">
  <div class="col-md-6">

   <!-- duration -->
   <div class="control-group {{ $errors->has('duration') ? 'has-error' : '' }}">
      <label class="control-label" for="duration">Dauer (min)<span class="stern" >*</span></label>
      <div class="controls">         
           {{ Form::text('duration', $recipe->duration, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Dauer (min)', 'value'=>Input::old('duration'))) }} 
         @if ($errors->first('duration'))
         <span class="help-block">{{ $errors->first('duration') }}</span>
         @endif
      </div>
   </div> 

          <br> 

  </div>
  <div class="col-md-6">

   <!-- cooking_time -->
   <div class="control-group {{ $errors->has('cooking_time') ? 'has-error' : '' }}">
      <label class="control-label" for="cooking_time">Kochzeit (min) <span class="stern" >*</span></label>
      <div class="controls">         
        {{ Form::text('cooking_time', $recipe->cooking_time, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Kochzeit (min)', 'value'=>Input::old('cooking_time'))) }}    
         @if ($errors->first('cooking_time'))
         <span class="help-block">{{ $errors->first('cooking_time') }}</span>
         @endif
      </div>
   </div>  
   <br>
   </div>
</div>


 <div class="row">
  <div class="col-md-6">
   <!-- nutrition_carbs -->
   <div class="control-group {{ $errors->has('nutrition_carbs') ? 'has-error' : '' }}">
      <label class="control-label" for="nutrition_carbs">Nährwertangabe - Kohlenhydrate (g) <span class="stern" >*</span></label>
      <div class="controls">        
      {{ Form::text('nutrition_carbs', $recipe->nutrition_carbs, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Nährwertangabe - Kohlenhydrate (g)', 'value'=>Input::old('nutrition_carbs'))) }}           
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
      {{ Form::text('nutrition_fat', $recipe->nutrition_fat, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Nährwertangabe - Fett (g)', 'value'=>Input::old('nutrition_fat'))) }}       
         @if ($errors->first('nutrition_fat'))
         <span class="help-block">{{ $errors->first('nutrition_fat') }}</span>
         @endif
      </div>
   </div> 
   <br>

   </div><div class="col-md-6">


  </div>

</div>

   <div class="row">
  <div class="col-md-6">
   <!-- nutrition_protein  -->
   <div class="control-group {{ $errors->has('nutrition_protein ') ? 'has-error' : '' }}">
      <label class="control-label" for="nutrition_protein ">Nährwertangabe - Eiweiß (g)<span class="stern" >*</span></label>
      <div class="controls">    
      {{ Form::text('nutrition_protein', $recipe->nutrition_protein, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Nährwertangabe - Eiweiß (g)', 'value'=>Input::old('nutrition_protein'))) }}      
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
      {{ Form::text('nutrition_kcal', $recipe->nutrition_kcal, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Nährwertangabe - Energie (kcal)', 'value'=>Input::old('nutrition_kcal'))) }}        
         @if ($errors->first('nutrition_kcal'))
         <span class="help-block">{{ $errors->first('nutrition_kcal') }}</span>
         @endif
      </div>
   </div> 
   <br>

   </div>

</div>



<div style="height:67px;"> </div>

   


 <!-- tip -->
   <div class="control-group {{ $errors->has('tip') ? 'has-error' : '' }}">
      <label class="control-label" for="tip">Tipp <span class="stern" >*</span></label>
      <div class="controls">         
      {{ Form::textarea('tip', $recipe->tip, array('class'=>'form-control', 'id' => 'tip',  'placeholder'=>'Tipp', 'value'=>Input::old('tip'))) }}   
         @if ($errors->first('tip'))
         <span class="help-block">{{ $errors->first('tip') }}</span>
         @endif
      </div>
   </div> 
       <br> 


        <!-- athome -->
   <div class="control-group {{ $errors->has('athome') ? 'has-error' : '' }}">
      <label class="control-label" for="athome">Solltest zu Hause haben <span class="stern" >*</span></label>
      <div class="controls">         
      {{ Form::textarea('athome', $recipe->athome, array('class'=>'form-control', 'id' => 'athome',  'placeholder'=>'Solltest zu Hause haben', 'value'=>Input::old('athome'))) }}      
         @if ($errors->first('athome'))
         <span class="help-block">{{ $errors->first('athome') }}</span>
         @endif
      </div>
   </div> 
       <br> 


     


   <!-- description -->
   <div class="control-group {{ $errors->has('description') ? 'has-error' : '' }}">
      <label class="control-label" for="description">Beschreibung <span class="stern" >*</span></label>
      <div class="controls">         
      {{ Form::textarea('description', $recipe->description, array('class'=>'form-control', 'id' => 'description',  'placeholder'=>'Beschreibung', 'value'=>Input::old('description'))) }}       
         @if ($errors->first('description'))
         <span class="help-block">{{ $errors->first('description') }}</span>
         @endif
      </div>
   </div> 
  
   <br>
     




      


 <!-- Image -->
<label class="control-label" for="imagesmall">Kleines Bild einfügen (Derzeit 200 x 200px)</label>
<div id="zone">
<span>
    <input  type="file" 
            style="visibility:hidden; width: 1px;" 
            id='files' name='imagesmall'  
            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
            <input id="btnclick" class="btn btn-u"  type="button" value="Bild auswählen" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
     
   <div id="zonepicandtitle"><span  class="badge badge-important" ></span><br><output id="list"></output></div>
</span>
<div id="stored" >
<span style="background-color:#fed51c; color:#000000" >Derzeit gespeichert</span><br><span>
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


<br>

<!-- Image -->
<label class="control-label" for="imagemiddle">Mittelgroßes Bild einfügen (Derzeit 200 x 200px)</label>
<div id="zone">
<span>
    <input  type="file" 
            style="visibility:hidden; width: 1px;" 
            id='files2' name='imagemiddle'  
            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
            <input id="btnclick2" class="btn btn-u"  type="button" value="Bild auswählen" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
     
   <div id="zonepicandtitle"><span  class="badge badge-important" ></span><br><output id="list2"></output></div>
</span>
<div id="stored2" >
<span style="background-color:#fed51c; color:#000000" >Derzeit gespeichert</span><br><span>
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


<br>

<!-- Image -->
<label class="control-label" for="imagebig">Kleines Bild einfügen (Derzeit 200 x 200px)</label>
<div id="zone">
<span>
    <input  type="file" 
            style="visibility:hidden; width: 1px;" 
            id='files3' name='imagebig'  
            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
            <input id="btnclick3" class="btn btn-u"  type="button" value="Bild auswählen" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
     
   <div id="zonepicandtitle"><span  class="badge badge-important" ></span><br><output id="list3"></output></div>
</span>
<div id="stored3" >
<span style="background-color:#fed51c; color:#000000" >Derzeit gespeichert</span><br><span>
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







   </div><div class="col-md-6">

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
   <br>

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
   <br>

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
   <br>

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
   <br>

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
       {{ Form::textarea('step_1', $recipe->step_1, array('class'=>'form-control', 'id' => 'step_1',  'placeholder'=>'Schritt 1', 'value'=>Input::old('step_1'))) }}          
            @if ($errors->first('step_1'))
         <span class="help-block">{{ $errors->first('step_1') }}</span>
         @endif
      </div>
   </div> 
   <br>
   <!-- step_2 -->
   <div class="control-group {{ $errors->has('step_2') ? 'has-error' : '' }}">
      <label class="control-label" for="step_2">Schritt 2 <span class="stern" >*</span></label>
      <div class="controls">       
       {{ Form::textarea('step_2', $recipe->step_2, array('class'=>'form-control', 'id' => 'step_2',  'placeholder'=>'Schritt 2', 'value'=>Input::old('step_2'))) }}   
     
         @if ($errors->first('step_2'))
         <span class="help-block">{{ $errors->first('step_2') }}</span>
         @endif
      </div>
   </div> 
<br>
    <!-- step_3 -->
   <div class="control-group {{ $errors->has('step_3') ? 'has-error' : '' }}">
      <label class="control-label" for="step_3">Schritt 3 <span class="stern" >*</span></label>
      <div class="controls">   
       {{ Form::textarea('step_3', $recipe->step_3, array('class'=>'form-control', 'id' => 'step_3',  'placeholder'=>'Schritt 3', 'value'=>Input::old('step_3'))) }}         
          @if ($errors->first('step_3'))
         <span class="help-block">{{ $errors->first('step_3') }}</span>
         @endif
      </div>
   </div> 
   <br>
   <!-- step_4 -->
   <div class="control-group {{ $errors->has('step_4') ? 'has-error' : '' }}">
      <label class="control-label" for="step_4">Schritt 4 <span class="stern" >*</span></label>
      <div class="controls">  
       {{ Form::textarea('step_4', $recipe->step_4, array('class'=>'form-control', 'id' => 'step_4',  'placeholder'=>'Schritt 4', 'value'=>Input::old('step_4'))) }}          
              @if ($errors->first('step_4'))
         <span class="help-block">{{ $errors->first('step_4') }}</span>
         @endif
      </div>
   </div> 
 <br>
    <!-- step_5 -->
   <div class="control-group {{ $errors->has('step_5') ? 'has-error' : '' }}">
      <label class="control-label" for="step_5">Schritt 5 <span class="stern" >*</span></label>
      <div class="controls"> 
       {{ Form::textarea('step_5', $recipe->step_5, array('class'=>'form-control', 'id' => 'step_5',  'placeholder'=>'Schritt 5', 'value'=>Input::old('step_5'))) }}         
                 @if ($errors->first('step_5'))
         <span class="help-block">{{ $errors->first('step_5') }}</span>
         @endif
      </div>
   </div> 
   <br>
   <!-- step_6 -->
   <div class="control-group {{ $errors->has('step_6') ? 'has-error' : '' }}">
      <label class="control-label" for="step_6">Schritt 6 <span class="stern" >*</span></label>
      <div class="controls">     
       {{ Form::textarea('step_6', $recipe->step_6, array('class'=>'form-control', 'id' => 'step_6',  'placeholder'=>'Schritt 6', 'value'=>Input::old('step_6'))) }}       
                 @if ($errors->first('step_6'))
         <span class="help-block">{{ $errors->first('step_6') }}</span>
         @endif
      </div>
   </div> 
 <br>
    <!-- step_7 -->
   <div class="control-group {{ $errors->has('step_7') ? 'has-error' : '' }}">
      <label class="control-label" for="step_7">Schritt 7 <span class="stern" >*</span></label>
      <div class="controls">    
       {{ Form::textarea('step_7', $recipe->step_7, array('class'=>'form-control', 'id' => 'step_7',  'placeholder'=>'Schritt 7', 'value'=>Input::old('step_7'))) }}       
                @if ($errors->first('step_7'))
         <span class="help-block">{{ $errors->first('step_7') }}</span>
         @endif
      </div>
   </div> 
   <br>

 
 <!-- Published -->
   <input type="hidden" value="is_published">
    <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
      <div class="controls">
          <label class="checkbox">{{ Form::checkbox('is_published', 'is_published') }} Veröffentlichen ?</label>
          @if ($errors->first('is_published'))
          <span class="help-block">{{ $errors->first('is_published') }}</span>
          @endif
      </div>
      </div>
      <br>



       </div></div>

   <br>





<div style="height:34px;"> </div>




   
         <!-- Plichtfeld Anfang -->
     
<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->
<!--Formular Registrierung Ende-->

 {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
  {{ Form::hidden('check_yes', 'yes', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
            {{ Form::submit('Ändern', array('class' => 'btn btn-u')) }}

</div>
 <!-- Plichtfeld Ende -->
   
   <br>





   <br>
  
      

</div>







   
@stop