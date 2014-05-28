@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 
<div class="container">
   <br>
   <div class="page-header">
      <h3>
         Photogalerie bearbeiten
         <div class="pull-right">
            {{ HTML::link('/admin/photo_gallery','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </h3>
   </div>
   <!-- Dropzone -->
   <label class="control-label" for="title">Fotos/Bilder</label>
</div>
<div class="container">
   @if ($photo_gallery->id == 1)
   @include('backend/plugins/index_g1')
   @elseif ($photo_gallery->id == 2)
   @include('backend/plugins/index_g2')
   @elseif ($photo_gallery->id == 3)
   @include('backend/plugins/index_g3')
   @else
   FEHLER!!!
   @endif
</div>
<div class="container">
   <br>
   {{ Form::open(array('action' => array('App\Controllers\Admin\PhotoGalleryController@update', $photo_gallery->id), 'method' => 'PATCH')) }}
   <!-- Title -->
   <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Titel</label>
      <div class="controls">
         {{ Form::text('title', $photo_gallery->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Titel', 'value'=>Input::old('title'))) }}
         @if ($errors->first('title'))
         <span class="help-block">{{ $errors->first('title') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- Content -->
   <div class="control-group {{ $errors->has('content') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Content</label>
      <div class="controls">
         {{ Form::textarea('content', $photo_gallery->content, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>Input::old('content'))) }}
         @if ($errors->first('content'))
         <span class="help-block">{{ $errors->first('content') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- Published -->
   <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
      <div class="controls">
         <label class="checkbox">{{ Form::checkbox('is_published', 'is_published',$photo_gallery->is_published) }} Veröffentlichung ?</label>
         @if ($errors->first('is_published'))
         <span class="help-block">{{ $errors->first('is_published') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- Form actions -->
   {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}
   <script type="text/javascript">
      window.onload = function () {
          CKEDITOR.replace('content', {
              "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
            height: '150px',
             uiColor: '#85b81d',
              language: 'de',
         
          });
      };
   </script>
</div>
@stop