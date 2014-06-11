@extends('backend/_layout/layout')
@section('content') 
{{ HTML::style('ckeditor/contents.css') }}
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $customer->street }}</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ url('admin/customer') }}"
                       class="btn btn-u">
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
                    <td><strong>ID</strong></td>
                    <td>{{ $customer->id }}</td>
                </tr>
                <tr>
                    <td><strong>Vorname</strong></td>
                    <td>{{ $customer->first_name }}</td>
                </tr>
                <tr>
                    <td><strong>Nachname</strong></td>
                    <td>{{ $customer->last_name }}</td>
                </tr>
                <tr>
                    <td><strong>Kunde seit</strong></td>
                    <td>{{ $customer->kundeseit }}</td>
                </tr>
                    <td><strong>Abo Stauts</strong></td>
                    <td>{{ $customer->abostatus }}</td>
                </tr>
                <tr>
                    <td><strong>Letztes mal Online</strong></td>
                    <td>{{ $customer->updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop