@extends('backend/_layout/layout')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Editier Kategorie "{{ $category->title }}"</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ URL::route('admin.category.delete', array($category->id)) }}" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Lösche Kategorie
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            {{ Form::open( array( 'route' => array( 'admin.category.update', $category->id), 'method' => 'PATCH')) }}
            <!-- Title -->
            <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label class="control-label" for="first-name">Titel</label>
                <div class="controls">
                    {{ Form::text('title', $category->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Titel', 'value'=>Input::old('title'))) }}
                    @if ($errors->first('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
            </div>
            <br>
            <!-- Form actions -->
            {{ Form::submit('Anderungen speichern', array('class' => 'btn btn-u')) }}
       
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop