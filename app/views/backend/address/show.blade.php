@extends('backend/_layout/layout')
@section('content')
{{ HTML::style('ckeditor/contents.css') }}
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $address->street }}</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ url('admin/address') }}"
                       class="btn btn-primary">
                        <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Zurück
                    </a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Titel</strong></td>
                    <td>{{ $address->id }}</td>
                </tr>
                <

                <tr>
                    <td><strong>plz</strong></td>
                    <td>{{ $address->plz }}</td>
                </tr>
                <tr>
                    <td><strong>Erstellt am</strong></td>
                    <td>{{ $address->is_published }}</td>
                </tr>
                <tr>
                    <td><strong>Content</strong></td>
                    <td>{{ $address->street }}</td>
                </tr>
                    <td><strong>Datum</strong></td>
                    <td>{{ $address->created_at }}</td>
                </tr>
                <tr>
                    <td><strong>Update am</strong></td>
                    <td>{{ $address->updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop