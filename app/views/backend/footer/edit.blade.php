@extends('backend/_layout/layout')
@section('content')

{{ HTML::script('assets/backend/plugins/ckeditor/ckeditor.js') }} 

{{ HTML::script('assets/backend/js/jquery.slug.js') }}


<script type="text/javascript">
    $(document).ready(function () {
        $("#title").slug();

       
    });
</script>
<div class="container">
    <div class="page-header">
        <h3>
            Footer bearbeiten
            <div class="pull-right">
                {{ HTML::link('/admin/footer','Zurück', array('class'=>'btn btn-u')) }}
            </div>
        </h3>
    </div>
    {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\FooterController@update', $footer->id), 'method' => 'PATCH')) }}


    <br>

  








    <!-- Headline Contact -->
<div class="control-group {{ $errors->has('hl_ueberuns') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Überschrift Über Uns</label>

        <div class="controls">
            {{ Form::text('hl_ueberuns', $footer->hl_ueberuns, array('class'=>'form-control', 'id' => 'hl_ueberuns', 'placeholder'=>'Überschrift Über uns', 'value'=>Input::old('hl_ueberuns'))) }}
            @if ($errors->first('hl_ueberuns'))
            <span class="help-block">{{ $errors->first('hl_ueberuns') }}</span>
            @endif
        </div>
    </div>
    <br>


       <!-- Content Contakt -->
    <div class="control-group {{ $errors->has('ct_ueberuns') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Über uns Text</label>

        <div class="controls">
            {{ Form::textarea('ct_ueberuns', $footer->ct_ueberuns, array('class'=>'form-control', 'id' => 'ct_ueberuns', 'placeholder'=>'Über uns Text', 'value'=>Input::old('ct_ueberuns'))) }}
            @if ($errors->first('ct_ueberuns'))
            <span class="help-block">{{ $errors->first('ct_ueberuns') }}</span>
            @endif
        </div>
    </div>
    <br>



    <!-- Headline Contact -->
<div class="control-group {{ $errors->has('hl_rezepte') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Überschrift Rezepte</label>

        <div class="controls">
            {{ Form::text('hl_rezepte', $footer->hl_rezepte, array('class'=>'form-control', 'id' => 'hl_rezepte', 'placeholder'=>'Überschrift Kontakt', 'value'=>Input::old('hl_rezepte'))) }}
            @if ($errors->first('hl_rezepte'))
            <span class="help-block">{{ $errors->first('hl_rezepte') }}</span>
            @endif
        </div>
    </div>
    <br>


       <!-- Content Contakt -->
    <div class="control-group {{ $errors->has('ct_rezepte') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Rezepte Text</label>

        <div class="controls">
            {{ Form::textarea('ct_rezepte', $footer->ct_rezepte, array('class'=>'form-control', 'id' => 'ct_rezepte', 'placeholder'=>'Kontakt Adresse', 'value'=>Input::old('ct_rezepte'))) }}
            @if ($errors->first('ct_rezepte'))
            <span class="help-block">{{ $errors->first('ct_rezepte') }}</span>
            @endif
        </div>
    </div>
    <br>




    <!-- Headline Contact -->
<div class="control-group {{ $errors->has('hl_contact') ? 'has-error' : '' }}">
    <label class="control-label" for="title">Überschrift Kontakt</label>

        <div class="controls">
            {{ Form::text('hl_contact', $footer->hl_contact, array('class'=>'form-control', 'id' => 'hl_contact', 'placeholder'=>'Überschrift Kontakt', 'value'=>Input::old('hl_contact'))) }}
            @if ($errors->first('hl_contact'))
            <span class="help-block">{{ $errors->first('hl_contact') }}</span>
            @endif
        </div>
    </div>
    <br>


       <!-- Content Contakt -->
    <div class="control-group {{ $errors->has('ct_contact') ? 'has-error' : '' }}">
        <label class="control-label" for="title">Kontakt Adresse</label>

        <div class="controls">
            {{ Form::textarea('ct_contact', $footer->ct_contact, array('class'=>'form-control', 'id' => 'ct_contact', 'placeholder'=>'Kontakt Adresse', 'value'=>Input::old('ct_contact'))) }}
            @if ($errors->first('ct_contact'))
            <span class="help-block">{{ $errors->first('ct_contact') }}</span>
            @endif
        </div>
    </div>
    <br>





    <!-- Published -->
    <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">

        <div class="controls">
            <label class="checkbox">{{ Form::checkbox('is_published', 'is_published',$footer->is_published) }} Veröffentlichen ?</label>
            @if ($errors->first('is_published'))
            <span class="help-block">{{ $errors->first('is_published') }}</span>
            @endif
        </div>
    </div>
    <br>
    {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-u')) }}
    {{ Form::close() }}
    <script>
        window.onload = function () {
            CKEDITOR.replace('ct_rezepte', {
                    uiColor: '#85b81d',
                language: 'de',
                "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
                height: '100px',
            });

 CKEDITOR.replace('ct_contact', {
        uiColor: '#85b81d',
                language: 'de',
                "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
                height: '100px',
            });

  CKEDITOR.replace('ct_ueberuns', {
        uiColor: '#85b81d',
                language: 'de',
                "filebrowserBrowseUrl": "{{ url('filemanager/show') }}",
                height: '100px',
            });

        };
    </script>
</div>
@stop