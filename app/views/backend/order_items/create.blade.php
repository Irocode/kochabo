@extends('backend/_layout/layout')
@section('content')

{{ HTML::script('ckeditor/ckeditor.js') }}
{{ HTML::style('assets/bootstrap/css/bootstrap-tagsinput.css') }}
{{ HTML::script('assets/bootstrap/js/bootstrap-tagsinput.js') }}
{{ HTML::script('assets/js/jquery.slug.js') }}

{{ HTML::style('bootstrap_datepicker/css/datepicker.css') }}
{{ HTML::script('bootstrap_datepicker/js/bootstrap-datepicker.js') }}
{{ HTML::script('bootstrap_datepicker/js/locales/bootstrap-datepicker.tr.js') }}
<script type="text/javascript">
    $(document).ready(function () {
        $("#title").slug();

        $('#datetime').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            orientation: "top auto"
        });

        if ($('#tag').length != 0) {
            var elt = $('#tag');
            elt.tagsinput();
        }
    });
</script>
<div class="container">
    <div class="page-header">
        <h3>
            News erstellen
            <div class="pull-right">
                {{ HTML::link('/admin/news','Zurück', array('class'=>'btn btn-primary')) }}
            </div>
        </h3>
    </div>
    {{ Form::open(array('action' => 'App\Controllers\Admin\NewsController@store')) }}

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
            {{ Form::text('datetime', null, array('class'=>'form-control', 'id' => 'datetime', 'value'=>Input::old('datetime'))) }}
            @if ($errors->first('datetime'))
            <span class="help-block">{{ $errors->first('datetime') }}</span>
            @endif
        </div>
    </div>
    <br>

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









    {{ Form::submit('Anlegen', array('class' => 'btn btn-success')) }}
    {{ Form::close() }}
 <script>

        window.onload = function () {

       

            CKEDITOR.replace('content', {
               "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
                height: '150px',
              });  

 
                  CKEDITOR.replace('bild1', { customConfig: "{{$myuserurl}}ckeditor/config_images.js",
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
</div>
@stop