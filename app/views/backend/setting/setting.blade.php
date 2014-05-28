@extends('backend/_layout/layout')
@section('content')
<script type="text/javascript">
    $(document).ready(function () {
        $('#notification').show().delay(4000).fadeOut(700);
    });
</script>
<div class="container">
    {{ Notification::showAll() }}
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
        <li><a href="#info" data-toggle="tab">Info</a></li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane active" id="settings">
            <br>
            <h4><i class="glyphicon glyphicon-cog"></i> Settings</h4>

            <br>
            {{ Form::open() }}

            <!-- Title -->
            <div class="control-group {{ $errors->has('site_title') ? 'has-error' : '' }}">
                <label class="control-label" for="title">Title</label>

                <div class="controls">
                    {{ Form::text('site_title', $setting->site_title, array('class'=>'form-control', 'id' => 'site_title', 'placeholder'=>'Title', 'value'=>Input::old('site_title'))) }}
                    @if ($errors->first('title'))
                    <span class="help-block">{{ $errors->first('site_title') }}</span>
                    @endif
                </div>
            </div>
            <br>

            <!-- Google Analytics Code -->
            <div class="control-group {{ $errors->has('ga_code') ? 'has-error' : '' }}">
                <label class="control-label" for="title"> Google Analytics Code</label>

                <div class="controls">
                    {{ Form::text('ga_code', $setting->ga_code, array('class'=>'form-control', 'id' => 'ga_code', 'placeholder'=>' Google Analytics Code', 'value'=>Input::old('ga_code'))) }}
                    @if ($errors->first('ga_code'))
                    <span class="help-block">{{ $errors->first('ga_code') }}</span>
                    @endif
                </div>
            </div>
            <br>

            <!-- Meta Keywords -->
            <div class="control-group {{ $errors->has('meta_keywords') ? 'has-error' : '' }}">
                <label class="control-label" for="title">Meta Keywords</label>

                <div class="controls">
                    {{ Form::text('meta_keywords', $setting->meta_keywords, array('class'=>'form-control', 'id' => 'meta_keywords', 'placeholder'=>'Meta Keywords', 'value'=>Input::old('meta_keywords'))) }}
                    @if ($errors->first('meta_keywords'))
                    <span class="help-block">{{ $errors->first('meta_keywords') }}</span>
                    @endif
                </div>
            </div>
            <br>

            <!-- Meta Description -->
            <div class="control-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                <label class="control-label" for="title">Meta Description</label>

                <div class="controls">
                    {{ Form::text('meta_description', $setting->meta_description, array('class'=>'form-control', 'id' => 'meta_description', 'placeholder'=>'Meta Description', 'value'=>Input::old('meta_description'))) }}
                    @if ($errors->first('meta_description'))
                    <span class="help-block">{{ $errors->first('meta_description') }}</span>
                    @endif
                </div>
            </div>
            <br>
            {{ Form::submit('Änderungen übernehmen', array('class' => 'btn btn-u')) }}
            {{ Form::close() }}
        </div>
        <div class="tab-pane" id="info">
            <br>
            <h4><i class="glyphicon glyphicon-info-sign"></i> Info</h4>
            <br>
            Programmiert von Bernd Obendorfer für die Firma KochAbo.at. Beginn April 2014. 
            <p></p>
        </div>
    </div>
</div>
@stop