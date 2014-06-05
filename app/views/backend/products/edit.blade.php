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
   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\ProductsController@update', $products->id), 'method' => 'PATCH')) }}
   <div class="row">
  <div class="col-md-6">

   <!-- product_name -->
   <div class="control-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
      <label class="control-label" for="product_name">Artikel Name <span class="stern" >*</span></label>
      <div class="controls">
         {{ Form::text('product_name', $products->product_name, array('class'=>'form-control', 'id' => 'product_name', 'placeholder'=>'Artikel Name', 'value'=>Input::old('product_name'))) }}
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
         {{ Form::text('description', $products->description, array('class'=>'form-control', 'id' => 'description', 'placeholder'=>'Beschreibung', 'value'=>Input::old('description'))) }}
         @if ($errors->first('description'))
         <span class="help-block">{{ $errors->first('description') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- type -->
   <div class="control-group {{ $errors->has('type') ? 'has-error' : '' }}">
      <label class="control-label" for="kundeseit">Type</label>
      <div class="controls">
         <select name="type" class="form-control">
            <option value="{{$products->type}}" selected>{{$products->type}}</option>
            @foreach( $list_type as $x )  
            <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
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
      <label class="control-label" for="price">Preis</label>
      <div class="controls">
         {{ Form::text('price', $products->price, array('class'=>'form-control', 'id' => 'price', 'placeholder'=>'Preis', 'value'=>Input::old('price'))) }}
         @if ($errors->first('price'))
         <span class="help-block">{{ $errors->first('price') }}</span>
         @endif
      </div>
   </div>
   <br>
      </div><div class="col-md-6">
            <!-- currency -->
   <div class="control-group {{ $errors->has('price') ? 'has-error' : '' }}">
      <label class="control-label" for="currency">Währung</label>
      <div class="controls">
       <select name="currency" class="form-control">
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
      <label class="control-label" for="ust">Ust</label>
      <div class="controls">
       <div class="input-group">
         <select name="ust" class="form-control">
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
     </div><div class="col-md-6">
   <!-- recipetype -->
   <div class="control-group {{ $errors->has('recipetype') ? 'has-error' : '' }}">
      <label class="control-label" for="recipetype">Rezept Typ</label>
      <div class="controls">
         <select name="recipetype" class="form-control">
            <option value="{{$products->recipetype}}" selected>{{$products->recipetype}}</option>
            @foreach( $list_recipe_type as $x )  
            <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
            @endforeach                 
         </select>
         @if ($errors->first('recipetype'))
         <span class="help-block">{{ $errors->first('recipetype') }}</span>
         @endif
      </div>
   </div>
   <br>
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
      <label class="control-label" for="nr_of_recipes">Number of Recipes</label>
      <div class="controls">
         {{ Form::text('nr_of_recipes', $products->nr_of_recipes, array('class'=>'form-control', 'id' => 'nr_of_recipes', 'placeholder'=>'Number of Recipes', 'value'=>Input::old('nr_of_recipes'))) }}
         @if ($errors->first('nr_of_recipes'))
         <span class="help-block">{{ $errors->first('nr_of_recipes') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- nr_of_persons -->
   <div class="control-group {{ $errors->has('nr_of_persons') ? 'has-error' : '' }}">
      <label class="control-label" for="nr_of_persons">Number of Persons</label>
      <div class="controls">
         {{ Form::text('nr_of_persons', $products->nr_of_persons, array('class'=>'form-control', 'id' => 'nr_of_persons', 'placeholder'=>'Number of Persons', 'value'=>Input::old('nr_of_persons'))) }}          
         @if ($errors->first('nr_of_persons'))
         <span class="help-block">{{ $errors->first('nr_of_persons') }}</span>
         @endif
      </div>
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