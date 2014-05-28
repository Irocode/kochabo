@extends('backend/_layout/layout')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Kategorie hinzufügen</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ url('admin/category') }}" class="btn btn-u">
                        <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Zurück
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            {{ Form::open(array('route' => array( 'admin.category.store' ))) }}
            <!-- Title -->
            <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="control-label" for="title">Kategorie</label>

                <div class="controls">
                    {{ Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Kategorie', 'value'=>Input::old('title'))) }}
                    @if ($errors->first('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
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