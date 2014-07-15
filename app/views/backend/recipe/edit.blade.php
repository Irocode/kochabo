@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 


{{ HTML::script('assets/js/jquery.slug.js') }}

<div class="container">


 <!--HEADER mit Zurück ANFANG-->
     <div class="headline">
      <h2>  Neues Rezept bearbeiten</h2>
        <div class="pull-right">
       {{ HTML::link('/admin/recipe','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </div>
         <!--HEADER mit Zurück ENDE-->



   
   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\RecipeController@update', $recipe->id), 'method' => 'PATCH')) }}

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
   <!-- titel -->
   <div class="control-group {{ $errors->has('titel') ? 'has-error' : '' }}">
      <label class="control-label" for="titel">Titel <span class="stern" >*</span></label>
      <div class="controls">   
         {{ Form::text('titel', $recipe->titel, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Titel', 'value'=>Input::old('titel'))) }}  
         @if ($errors->first('titel'))
         <span class="help-block">{{ $errors->first('titel') }}</span>
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
<br><br><br>

 <!-- tip -->
   <div class="control-group {{ $errors->has('tip') ? 'has-error' : '' }}">
      <label class="control-label" for="tip">Tipp <span class="stern" >*</span></label>
      <div class="controls">         
      {{ Form::textarea('tip', $recipe->tip, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Tipp', 'value'=>Input::old('tip'))) }}   
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
      {{ Form::textarea('athome', $recipe->athome, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Solltest zu Hause haben', 'value'=>Input::old('athome'))) }}      
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
      {{ Form::textarea('description', $recipe->description, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Beschreibung', 'value'=>Input::old('description'))) }}       
         @if ($errors->first('description'))
         <span class="help-block">{{ $errors->first('description') }}</span>
         @endif
      </div>
   </div> 
  
   <br>
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
<br>
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
<br>


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

<!-- Server durchsuchen -->
   <div>
      <br>
      <script type="text/javascript">
         function popup (url) {
          fenster = window.open(url, "Popupfenster", "width=950,height=600,resizable=yes");
          fenster.focus();
          return false;
         }
      </script>
      <a class ="btn btn-u" href="<?php echo asset('filemanager/show?CKEditor=content&CKEditorFuncNum=1&langCode=de')?>" target="_blank" onclick="return popup(this.href);">Dokumente uploaden / durchsuchen</a>
      <br><br>
   </div>

<div style="height:34px;"> </div>

      <div class="control-group {{ $errors->has('img_small') ? 'has-error' : '' }}">
      <label class="control-label" for="img_small">Kleines Bild einfügen</label>
      <div class="controls">
       {{ Form::textarea('img_small', $recipe->img_small, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Kleines Bild einfügen', 'value'=>Input::old('img_small'))) }}   
          @if ($errors->first('img_small'))
         <span class="help-block">{{ $errors->first('img_small') }}</span>
         @endif
      </div>
   </div>
   <br>


      <div class="control-group {{ $errors->has('img_medium') ? 'has-error' : '' }}">
      <label class="control-label" for="img_medium">Mittleres Bild einfügen</label>
      <div class="controls">
       {{ Form::textarea('img_medium', $recipe->img_medium, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Mittleres Bild einfügen', 'value'=>Input::old('img_medium'))) }}   
                @if ($errors->first('img_medium'))
         <span class="help-block">{{ $errors->first('img_medium') }}</span>
         @endif
      </div>
   </div>
   <br>


      <div class="control-group {{ $errors->has('img_large') ? 'has-error' : '' }}">
      <label class="control-label" for="img_large">Großes Bild einfügen</label>
      <div class="controls">
       {{ Form::textarea('img_large', $recipe->img_large, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Großes Bild einfügen', 'value'=>Input::old('img_large'))) }}   
               @if ($errors->first('img_large'))
         <span class="help-block">{{ $errors->first('img_large') }}</span>
         @endif
      </div>
   </div>
   <br>



   </div><div class="col-md-6">



   <!-- step_1 -->
   <div class="control-group {{ $errors->has('step_1') ? 'has-error' : '' }}">
      <label class="control-label" for="step_1">Schritt 1 <span class="stern" >*</span></label>
      <div class="controls">  
       {{ Form::textarea('step_1', $recipe->step_1, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Schritt 1', 'value'=>Input::old('step_1'))) }}          
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
       {{ Form::textarea('step_2', $recipe->step_2, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Schritt 2', 'value'=>Input::old('step_2'))) }}     
     
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
       {{ Form::textarea('step_3', $recipe->step_3, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Schritt 3', 'value'=>Input::old('step_3'))) }}         
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
       {{ Form::textarea('step_4', $recipe->step_4, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Schritt 4', 'value'=>Input::old('step_4'))) }}          
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
       {{ Form::textarea('step_5', $recipe->step_5, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Schritt 5', 'value'=>Input::old('step_5'))) }}         
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
       {{ Form::textarea('step_6', $recipe->step_6, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Schritt 6', 'value'=>Input::old('step_6'))) }}       
                 @if ($errors->first('step_6'))
         <span class="help-block">{{ $errors->first('step_6') }}</span>
         @endif
      </div>
   </div> 

    <!-- step_7 -->
   <div class="control-group {{ $errors->has('step_7') ? 'has-error' : '' }}">
      <label class="control-label" for="step_7">Schritt 7 <span class="stern" >*</span></label>
      <div class="controls">    
       {{ Form::textarea('step_7', $recipe->step_7, array('class'=>'form-control', 'id' => 'recipe',  'placeholder'=>'Schritt 7', 'value'=>Input::old('step_7'))) }}       
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












<br>
-----------<br>
<br>


<img src="{{ $recipe->imagesmall }}" />
<br>

<br>
---------<br>


<div class="control-group {{ $errors->has('imagesmall') ? 'has-error' : '' }}">
      <label class="control-label" for="imagesmall">Kleines Bild einfügen</label>
      <div class="controls">
      {{ Form::file('imagesmall', null, array('class'=>'form-control', 'id' => 'imagesmall', 'placeholder'=>'Kleines Bild einfügen', 'value'=>Input::old('imagesmall'))) }}
         @if ($errors->first('imagesmall'))
         <span class="help-block">{{ $errors->first('imagesmall') }}</span>
         @endif
      </div>
   </div>
   <br>


      <div class="control-group {{ $errors->has('imagemiddle') ? 'has-error' : '' }}">
      <label class="control-label" for="imagemiddle">Mittleres Bild einfügen</label>
      <div class="controls">
       {{ Form::file('imagemiddle', null, array('class'=>'form-control', 'id' => 'imagemiddle', 'placeholder'=>'Mittleres Bild einfügen', 'value'=>Input::old('imagemiddle'))) }}
         @if ($errors->first('imagemiddle'))
         <span class="help-block">{{ $errors->first('imagemiddle') }}</span>
         @endif
      </div>
   </div>
   <br>


      <div class="control-group {{ $errors->has('imagebig') ? 'has-error' : '' }}">
      <label class="control-label" for="imagebig">Großes Bild einfügen</label>
      <div class="controls">
      {{ Form::file('imagebig', null, array('class'=>'form-control', 'id' => 'imagebig', 'placeholder'=>'Großes Bild einfügen', 'value'=>Input::old('imagebig'))) }}
         @if ($errors->first('imagebig'))
         <span class="help-block">{{ $errors->first('imagebig') }}</span>
         @endif
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






<!--CKEDITOR ANFANG--> 
   <script>
      window.onload = function () {
      
      
      
                         
      
      
       CKEDITOR.replace('img_small', {
      
               language: 'de',
            "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
               uiColor: '#85b81d',
              height: '150px',
              
              customConfig: 'ckeditor_config_single.js'
            });  



        CKEDITOR.replace('img_medium', {
      
               language: 'de',
            "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
               uiColor: '#85b81d',
              height: '300px',
              
              customConfig: 'ckeditor_config_single.js'
            });  
      
           CKEDITOR.replace(
            'img_large', 
            {extraPlugins: 'doksoft_image',
              toolbar: 'customToolbar',

               language: 'de',
              "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
               uiColor: '#85b81d',
              height: '450px',
              
              customConfig: 'ckeditor_config_single.js'
            });  
      
      
      
      
      };
      
   </script>
   
@stop