@extends('backend/_layout/layout')
@section('content')
<script type="text/javascript">
$(document).ready(function(){

    $('.type').change(function(){
            var selected = $('input[class="type"]:checked').val();
            if(selected == "custom"){
                $('.modules').css('display', 'none');
                $('.url').css('display', 'block');
            }
            else {
                $('.modules').css('display', 'block');
                $('.url').css('display', 'none');
            }
        }
    );

    $(".type").trigger("change");
});
</script>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Menü hinzufügen</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ url('admin/menu') }}" class="btn btn-u">
                        <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Zurück
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            {{ Form::open(array('action' => 'App\Controllers\Admin\MenuController@store')) }}
            <!-- Title -->
            <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="control-label" for="title">Titel</label>

                <div class="controls">
                    {{ Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Titel', 'value'=>Input::old('title'))) }}
                    @if ($errors->first('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <br>
            </div>

            <!-- Type -->
            <label class="control-label" for="title">Type</label>

            <div class="controls">
                <div class="radio">
                    <label>
                        {{ Form::radio('type', 'module', true, array('id'=>'module', 'class'=>'type')) }}
                        <span>Modul</span>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        {{ Form::radio('type', 'custom', false, array('id'=>'custom', 'class'=>'type')) }}
                        <span>Url setzen</span>
                    </label>
                </div>
                <br>
            </div>

            <!-- Modules -->
             <div class="control-group {{ $errors->has('options') ? 'has-error' : '' }} modules">
                <label class="control-label" for="title">Option</label>

                <div class="controls">
                    {{ Form::select('option', $options, null, array('class'=>'form-control', 'id' => 'options', 'value'=>Input::old('options'))) }}
                    @if ($errors->first('options'))
                    <span class="help-block">{{ $errors->first('options') }}</span>
                    @endif
                </div>
                <br>
            </div>

            <!-- URL -->
            <div style="display:none" class="control-group {{ $errors->has('url') ? 'has-error' : '' }} url">
                <label class="control-label" for="first-name">URL</label>
                <div class="controls">
                    {{ Form::text('url',null, array('class'=>'form-control', 'id' => 'url', 'placeholder'=>'Url', 'value'=>Input::old('url'))) }}
                    @if ($errors->first('url'))
                    <span class="help-block">{{ $errors->first('url') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <!-- Form actions -->
            {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-u')) }}
            
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
