@extends('backend/_layout/layout')
@section('content')
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Artikel bearbeiten</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/products','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->

   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\ProductsController@update', $products->id ),'files'=>true, 'method' => 'PATCH')) }}
  
   <div class="row">
  <div class="col-md-6">

   <!-- product_name -->
   <div class="control-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
      <label class="control-label" for="product_name">Artikel Name <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('product_name', $products->product_name, array('class'=>'form-control', 'id' => 'product_name', 'placeholder'=>'Artikel Name', 'pattern' =>'.{2,}','required','value'=>Input::old('product_name'))) }}
         @if ($errors->first('product_name'))
         <span class="help-block">{{ $errors->first('product_name') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- description -->
   <div class="control-group {{ $errors->has('description') ? 'has-error' : '' }}">
      <label class="control-label" for="description">Beschreibung <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('description', $products->description, array('class'=>'form-control', 'id' => 'description', 'placeholder'=>'Beschreibung', 'pattern' =>'.{2,}', 'required','value'=>Input::old('description'))) }}
         @if ($errors->first('description'))
         <span class="help-block">{{ $errors->first('description') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- type -->
   <div class="control-group {{ $errors->has('type') ? 'has-error' : '' }}">
      <label class="control-label" for="kundeseit">Type <span class="stern" >*</span></label>
      <div class="controls">
         <select name="type" class="form-control">
            <option value="{{$products->type}}*{{$products->typename}}" selected>{{$products->typename}}</option>
            @foreach( $list_type as $x )  
            <option value="{{ $x->id }}*{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
            @endforeach                 
         </select>
         @if ($errors->first('type'))
         <span class="help-block">{{ $errors->first('type') }}</span>
         @endif
      </div>
   </div>
   <br>
        <div class="row">
   <div class="col-md-6">
   <!-- price -->
   <div class="control-group {{ $errors->has('price') ? 'has-error' : '' }}">
      <label class="control-label" for="price">Preis <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('price', $products->price, array('class'=>'form-control', 'id' => 'price', 'placeholder'=>'Preis',  'required',  'value'=>Input::old('price'))) }}
         @if ($errors->first('price'))
         <span class="help-block">{{ $errors->first('price') }}</span>
         @endif
      </div>
   </div>
   <br>
      </div><div class="col-md-6">
            <!-- currency -->
   <div class="control-group {{ $errors->has('price') ? 'has-error' : '' }}">
      <label class="control-label" for="currency">Währung <span class="stern" >*</span></label>
      <div class="controls">
       <select name="currency" class="form-control" required>
           <option value="{{$products->currency}}" selected>{{$products->currency}}</option>
            @foreach( $list_currency as $x )             
            <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
            @endforeach  
         </select>
         @if ($errors->first('ust'))
         <span class="help-block">{{ $errors->first('ust') }}</span>
         @endif
      </div>
   </div>
   <br>
</div></div>

   <!-- ust -->
   <div class="control-group {{ $errors->has('ust') ? 'has-error' : '' }}">
      <label class="control-label" for="ust">Ust <span class="stern" >*</span></label>
      <div class="controls">
       <div class="input-group">
         <select name="ust" class="form-control" required>
            <option value="{{$products->recipetype}}" selected>{{$products->ust}}</option>
            @foreach( $list_ust as $x )  
            <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
            @endforeach                 
         </select>
          <span class="input-group-addon">%</span></div>
         @if ($errors->first('title'))
         <span class="help-block">{{ $errors->first('ust') }}</span>
         @endif
      </div>
   </div>
   <br>
     <!-- recipetype -->
   <div class="control-group {{ $errors->has('recipetype') ? 'has-error' : '' }}">
      <label class="control-label" for="recipetype">Rezept Typ <span class="stern" >*</span></label>
      <div class="controls">
         <select name="recipetype" class="form-control"  required>
            <option value="{{$products->recipetype}},{{$products->recipetypenummer}}" selected>{{$products->recipetype}}</option>
            @foreach( $list_recipe_type as $x )  
            <option value="{{ $x->bezeichnung }},{{ $x->id }}">{{ $x->bezeichnung }}</option>
            @endforeach                 
         </select>
         @if ($errors->first('recipetype'))
         <span class="help-block">{{ $errors->first('recipetype') }}</span>
         @endif
      </div>
   </div>
   <br>
      <!-- productlink -->
   <div class="control-group {{ $errors->has('productlink') ? 'has-error' : '' }}">
      <label class="control-label" for="productlink">Produkt Link zur Seite</label>
      <div class="controls">
         {{ Form::text('productlink', $products->productlink, array('class'=>'form-control', 'id' => 'productlink', 'placeholder'=>'Produkt Link', 'value'=>Input::old('productlink'))) }}
         @if ($errors->first('productlink'))
         <span class="help-block">{{ $errors->first('productlink') }}</span>
         @endif
      </div>
   </div>
   <br>

     </div><div class="col-md-6">
 


   <!-- standalone -->
   <div class="control-group {{ $errors->has('standalone') ? 'has-error' : '' }}">
      <label class="control-label" for="standalone">Standalone</label>
      <div class="controls">
         {{ Form::text('standalone', $products->standalone, array('class'=>'form-control', 'id' => 'standalone', 'placeholder'=>'Standalone', 'value'=>Input::old('standalone'))) }}
         @if ($errors->first('standalone'))
         <span class="help-block">{{ $errors->first('standalone') }}</span>
         @endif
      </div>
   </div>
   <br>




   <!-- SKU -->
   <div class="control-group {{ $errors->has('sku') ? 'has-error' : '' }}">
      <label class="control-label" for="sku">SKU</label>
      <div class="controls">
         {{ Form::text('sku', $products->sku, array('class'=>'form-control', 'id' => 'sku', 'placeholder'=>'SKU', 'value'=>Input::old('sku'))) }}
         @if ($errors->first('sku'))
         <span class="help-block">{{ $errors->first('sku') }}</span>
         @endif
      </div>
   </div>
   <br>


  



   <!-- nr_of_recipes -->
   <div class="control-group {{ $errors->has('nr_of_recipes') ? 'has-error' : '' }}">
      <label class="control-label" for="nr_of_recipes">Anzahl der Rezepte</label>
      <div class="controls">
         {{ Form::text('nr_of_recipes', $products->nr_of_recipes, array('class'=>'form-control', 'id' => 'nr_of_recipes', 'placeholder'=>'Anzahl der Rezepte', 'value'=>Input::old('nr_of_recipes'))) }}
         @if ($errors->first('nr_of_recipes'))
         <span class="help-block">{{ $errors->first('nr_of_recipes') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- nr_of_persons -->
   <div class="control-group {{ $errors->has('nr_of_persons') ? 'has-error' : '' }}">
      <label class="control-label" for="nr_of_persons">Anzahl der Personen</label>
      <div class="controls">
         {{ Form::text('nr_of_persons', $products->nr_of_persons, array('class'=>'form-control', 'id' => 'nr_of_persons', 'placeholder'=>'Anzahl der Personen', 'value'=>Input::old('nr_of_persons'))) }}          
         @if ($errors->first('nr_of_persons'))
         <span class="help-block">{{ $errors->first('nr_of_persons') }}</span>
         @endif
      </div>
   </div>

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
<img src="{{ $products->imagex }}" width="120" height="120"> </span>
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
<input type="hidden" name="hiddenupdateimagex" value="{{$products->imagex}}">


</div>


   </div></div>



   <!--
      <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
      
          <div class="controls">
              <label class="checkbox">{{ Form::checkbox('is_published', 'is_published',$products->is_published) }} Veröffentlichen ?</label>
              @if ($errors->first('is_published'))
              <span class="help-block">{{ $errors->first('is_published') }}</span>
              @endif
          </div>
      </div>
      <br>
      -->

   {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}

<!-- Plichtfeld Anfang -->     
<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->

 
</div>
@stop