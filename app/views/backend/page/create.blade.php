@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/backend/plugins/ckeditor/ckeditor.js') }} 
<div class="container">
    <div class="page-header">
        <h3>
            Neue Seite
            <div class="pull-right">
                {{ HTML::link('/admin/page','Zurück', array('class'=>'btn btn-u')) }}
            </div>
        </h3>
    </div>
    {{ Form::open(array('action' => 'App\Controllers\Admin\PageController@store')) }}
    <!-- Title -->
    <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Titel</label>

        <div class="controls">
            {{ Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Titel', 'value'=>Input::old('title'))) }}
            @if ($errors->first('title'))
            <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
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




      <br>
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
   
   
   </div>
    
    <!-- Content -->
    <div class="control-group {{ $errors->has('content') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Content</label>

        <div class="controls">
            {{ Form::textarea('content', null, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>Input::old('content'))) }}
            @if ($errors->first('content'))
            <span class="help-block">{{ $errors->first('content') }}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Published -->
    <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">

        <div class="controls">
            <label class="checkbox">{{ Form::checkbox('is_published', 'is_published') }} Veröffentlichung ?</label>
            @if ($errors->first('is_published'))
            <span class="help-block">{{ $errors->first('is_published') }}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Form actions -->
    {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}
    {{ Form::close() }}
    <script>
        window.onload = function () {
            CKEDITOR.replace('content', {
                    uiColor: '#85b81d',
                language: 'de',
                "filebrowserBrowseUrl": "{{ url('filemanager/show') }}"
            });
        };
    </script>
</div>
@stop
