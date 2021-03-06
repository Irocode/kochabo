@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/backend/plugins/ckeditor/ckeditor.js') }} 
{{ HTML::script('ckfinder/ckfinder.js') }} 

   
     

{{ HTML::script('assets/backend/js/jquery.slug.js') }}
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Neue Zutat erstellen</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/ingredients','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
     {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\IngredientsController@update', $ingredients->id ),'files'=>true, 'method' => 'PATCH')) }}

   <div class="row">
      <div class="col-md-6">
         <br> 
         <!-- name -->
         <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label class="control-label" for="name">Name <span class="stern" >*</span></label>
            <div class="controls">         
             {{ Form::text('name', $ingredients->name, array('class'=>'form-control', 'id' => 'ingredients',  'placeholder'=>'Name', 'pattern' =>'.{2,}', 'required', 'value'=>Input::old('name'))) }}              
               @if ($errors->first('name'))
               <span class="help-block">{{ $errors->first('name') }}</span>
               @endif
            </div>
         </div>
         <br>
         <!-- description -->
       
         <div class="control-group {{ $errors->has('description') ? 'has-error' : '' }}">
            <label class="control-label" for="description">Beschreibung <span class="stern" >*</span></label>
            <div class="controls">     
                {{ Form::textarea('description', $ingredients->description, array('class'=>'form-control', 'id' => 'ingredients',  'placeholder'=>'Beschreibung', 'pattern' =>'.{5,}', 'required', 'value'=>Input::old('description'))) }}                 
               @if ($errors->first('description'))
               <span class="help-block">{{ $errors->first('description') }}</span>
               @endif
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-md-6">

               <!-- kcal100g -->
               <div class="control-group {{ $errors->has('kcal100g') ? 'has-error' : '' }}">
                  <label class="control-label" for="kcal100g">Kcal pro 100g<span class="stern" >*</span></label>
                  <div class="controls">         
                   {{ Form::text('kcal100g', $ingredients->kcal100g, array('class'=>'form-control',  'onkeypress' =>'return isNumberKey(event)', 'id' => 'ingredients',  'placeholder'=>'Kcal pro 100g [Zahl angeben]', 'required', 'value'=>Input::old('kcal100g'))) }}                  
                     @if ($errors->first('kcal100g'))
                     <span class="help-block">{{ $errors->first('kcal100g') }}</span>
                     @endif
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <!-- defaultunit  -->


               <div class="control-group {{ $errors->has('defaultunit ') ? 'has-error' : '' }}">
                  <label class="control-label" for="defaultunit ">Default</label>
                  <div class="controls">  
                
                  {{ Form::hidden('defaultunit', 0); }}  
                  {{ Form::checkbox('defaultunit', '1', Input::old('defaultunit', $ingredients->defaultunit)) }}

                     @if ($errors->first('defaultunit '))
                     <span class="help-block">{{ $errors->first('defaultunit') }}</span>
                     @endif
                  </div>
               </div>
               <br>
            </div>
         </div>
         <br>
      </div>
      <div class="col-md-6">
         <div style="height:30px;"> </div>
     

     <br>
       <!-- Image -->
<label class="control-label" for="image">Bild einfügen (Derzeit 200 x 200px)</label>
<div id="zone">
<span>
    <input  type="file" 
            style="visibility:hidden; width: 1px;" 
            id='files' name='imagex'  
            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
            <input id="btnclick" class="btn btn-u" type="button" value="Bild auswählen" onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
     
   <div id="zonepicandtitle"><span  class="badge badge-important" ></span><br><output id="list"></output></div>
</span>

<div id="stored" >
<span style="background-color:#fed51c; color:#000000" >Derzeit gespeichert</span><br><span>
<img src="{{ $ingredients->imagex }}" width="120" height="120"> </span>
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
<input type="hidden" name="hiddenupdateimagex" value="{{$ingredients->imagex}}">


</div>
         <br>
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
         <br>
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
   {{ Form::hidden('check_yes', 'yes', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}
</div>
<!-- Plichtfeld Ende -->
<br>
<br>
</div>

@stop