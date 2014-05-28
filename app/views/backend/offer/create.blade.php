@extends('backend/_layout/layout')
@section('content')

{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 
{{ HTML::style('assets/bootstrap/css/bootstrap-tagsinput.css') }}
{{ HTML::script('assets/bootstrap/js/bootstrap-tagsinput.js') }}
{{ HTML::script('assets/js/jquery.slug.js') }}


<script type="text/javascript">
    $(document).ready(function () {
        $("#title").slug();       

    });
</script>
<div class="container">
    <div class="page-header">
        <h3>
           Angebot erstellen
            <div class="pull-right">
                {{ HTML::link('/admin/offer','Zurück', array('class'=>'btn btn-u')) }}
            </div>
        </h3>
    </div>
    {{ Form::open(array('action' => 'App\Controllers\Admin\OfferController@store')) }}

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
    <br>
    <!-- Slug -->
    <div class="control-group {{ $errors->has('slug') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Slug</label>

        <div class="controls">
            <div class="input-group">
                <span class="input-group-addon">www.kochabo.at/</span>
                {{ Form::text('slug', null, array('class'=>'form-control slug', 'id' => 'slug', 'placeholder'=>'Slug', 'value'=>Input::old('slug'))) }}
            </div>
            @if ($errors->first('slug'))
            <span class="help-block">{{ $errors->first('slug') }}</span>
            @endif
        </div>
    </div>
    <br>

          <!-- Datetime -->
   <div class="control-group {{ $errors->has('datetime') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Datum</label>
      <div class="controls">
         <div class="input-group date form_date " data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
           {{ Form::text('datetime', null, array('class'=>'form-control', 'id' => 'form-control input-append date', 'readonly','value'=>Input::old('datetime'))) }}
            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
         </div>
         @if ($errors->first('datetime'))
         <span class="help-block">{{ $errors->first('datetime') }}</span>
         @endif
      </div>
      <input type="hidden" id="dtp_input2" value="" /><br/>
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
<div class="control-group {{ $errors->has('bild1') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Teaserbild einfügen</label>

        <div class="controls">
           {{ Form::textarea('bild1', null, array('class'=>'form-control', 'id' => 'bild1', 'value'=>Input::old('bild1'))) }}
            @if ($errors->first('bild1'))
            <span class="help-block">{{ $errors->first('bild1') }}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Published -->
    <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">

        <div class="controls">
            <label class="checkbox">{{ Form::checkbox('is_published', 'is_published') }} Veröffentlichen ?</label>
            @if ($errors->first('is_published'))
            <span class="help-block">{{ $errors->first('is_published') }}</span>
            @endif
        </div>
    </div>
    <br>

    {{ Form::submit('Create', array('class' => 'btn btn-u')) }}
    {{ Form::close() }}
  
    <!--CKEDITOR ANFANG--> 
     <script>
        window.onload = function () {       

            CKEDITOR.replace('content', {
               "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
                height: '150px',
                    uiColor: '#85b81d',
                language: 'de',
              });  
 
                  CKEDITOR.replace('bild1', { customConfig: "{{ URL::to('assets/plugins/ckeditor/config_images.js') }}",
                    extraPlugins: 'doksoft_image',
                     toolbar: 'customToolbar',
                     toolbar_customToolbar: [ ['doksoft_image'] ],
                        allowedContent: true,
                        height: 200,
                        width: 400,
                
                  "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",       
            });

        };

    </script>
<!--CKEDITOR Ende--> 

   <!--Datepicker ANFANG-->   
   <script type="text/javascript" src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>
   <script type="text/javascript" src="{{ URL::to('assets/js/locales/bootstrap-datetimepicker.de.js') }}" charset="UTF-8"></script>
   <script type="text/javascript">
      $(".form_date").datetimepicker({
            language:  'de',
          weekStart: 1,
          todayBtn:  1,
          autoclose: 1,
          todayHighlight: 1,
          startView: 2,
          minView: 2,
          forceParse: 0
      });
   </script>    
   <!--Datepicker ENDE--> 

@stop