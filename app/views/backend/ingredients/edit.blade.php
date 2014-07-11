@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 
{{ HTML::script('ckfinder/ckfinder.js') }} 
<script type="text/javascript">
   function BrowseServer()
   {
     // You can use the "CKFinder" class to render CKFinder in a page:
     var finder = new CKFinder();
     finder.basePath = '../';  // The path for the installation of CKFinder (default = "/ckfinder/").
     finder.selectActionFunction = SetFileField;
     finder.popup();
   
     // It can also be done in a single line, calling the "static"
     // popup( basePath, width, height, selectFunction ) function:
     // CKFinder.popup( '../', null, null, SetFileField ) ;
     //
     // The "popup" function can also accept an object as the only argument.
     // CKFinder.popup( { basePath : '../', selectActionFunction : SetFileField } ) ;
   }
   
   // This is a sample function which is called when a file is selected in CKFinder.
   function SetFileField( fileUrl )
   {
     document.getElementById( 'xFilePath' ).value = fileUrl;
   }
   
     
</script>
{{ HTML::script('assets/js/jquery.slug.js') }}
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Neue Zutat erstellen</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/ingredients','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
  {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\IngredientsController@update', $ingredients->id), 'method' => 'PATCH')) }}
   <div class="row">
      <div class="col-md-6">
         <br> 
         <!-- name -->
         <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label class="control-label" for="name">Name <span class="stern" >*</span></label>
            <div class="controls">         
             {{ Form::text('name', $ingredients->name, array('class'=>'form-control', 'id' => 'ingredients',  'placeholder'=>'Name', 'value'=>Input::old('name'))) }}              
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
                {{ Form::textarea('description', $ingredients->description, array('class'=>'form-control', 'id' => 'ingredients',  'placeholder'=>'Beschreibung', 'value'=>Input::old('description'))) }}                 
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
                   {{ Form::text('kcal100g', $ingredients->kcal100g, array('class'=>'form-control', 'id' => 'ingredients',  'placeholder'=>'Kcal pro 100g', 'value'=>Input::old('kcal100g'))) }}                  
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
                   {{{$ingredients->defaultunit}}}
                   
                   @if ($ingredients->defaultunit == 0)
                   {{ Form::checkbox('defaultunit', '1', Input::old('defaultunit', 0))}}
                   @else
                   {{ Form::checkbox('defaultunit', '1', Input::old('defaultunit', 1))}}
                     @endif                     
                     @if ($errors->first('defaultunit '))
                     <span class="help-block">{{ $errors->first('defaultunit  ') }}</span>
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
         <!-- Server durchsuchen -->
         <br>
         <script type="text/javascript">
            function popup (url) {
             fenster = window.open(url, "Popupfenster", "width=950,height=600,resizable=yes");
             fenster.focus();
             return false;
            }
         </script>
         <a class ="btn btn-u" href="<?php echo asset('filemanager/show?CKEditor=content&CKEditorFuncNum=1&langCode=de')?>" target="_blank" onclick="return popup(this.href);">Dokumente uploaden / durchsuchen</a>
         <input type="button" onclick="BrowseServer();"  class ="btn btn-u" value="Dokumente uploaden / durchsuchen NEU TEST">
         <br><br>
         <div class="control-group {{ $errors->has('image') ? 'has-error' : '' }}">
            <label class="control-label" for="image">Bild einfügen</label>
            <div class="controls">
              {{ Form::textarea('image', $ingredients->image, array('class'=>'form-control', 'id' => 'ingredients',  'placeholder'=>'Bild einfügen', 'value'=>Input::old('image'))) }}             
               @if ($errors->first('image'))
               <span class="help-block">{{ $errors->first('image') }}</span>
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
   
   
            CKEDITOR.replace('description', {
           "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
           uiColor: '#85b81d',
           language: 'de',
           height: '150px',
           customConfig: 'ckeditor_config_recipe.js',
   
         });                        
   
   
    CKEDITOR.replace('image', {
   
            language: 'de',
           "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
            uiColor: '#85b81d',
           height: '180px',           
           customConfig: 'ckeditor_config_single.js'
         });  
   
   
   
   };
   
</script>
@stop