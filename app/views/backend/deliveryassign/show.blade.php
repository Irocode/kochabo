@extends('backend/_layout/layout')
@section('content')
{{ HTML::style('ckeditor/contents.css') }}
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $deliveryzipcode->zip }}</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ url('admin/deliveryzipcode') }}"
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
                    <td><strong>ID</strong></td>
                    <td>{{ $deliveryzipcode->id }}</td>
                </tr>
                <

                <tr>
                    <td><strong>User_id</strong></td>
                    <td>{{ $deliveryzipcode->user_id }}</td>
                </tr>
               
                <tr>
                    <td><strong>Postleitzhal</strong></td>
                    <td>{{ $deliveryzipcode->zip }}</td>
                </tr>
                    <td><strong>Datum</strong></td>
                    <td>{{ $deliveryzipcode->created_at }}</td>
                </tr>
                <tr>
                    <td><strong>Update am</strong></td>
                    <td>{{ $deliveryzipcode->updated_at }}</td>
                </tr>

                 <tr>
                    <td><strong>Erstellt am</strong></td>
                    <td>{{ $deliveryzipcode->is_published }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop