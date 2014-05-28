@extends('backend/_layout/layout')
@section('content')
{{ HTML::style('ckeditor/contents.css') }}
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $footer->title }}</h3>
        </div>
        <div class="panel-body">
            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{{ url('admin/footer') }}"
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
                    <td>{{ $footer->title }}</td>
                </tr>
                <tr>
                    <td><strong>Slug</strong></td>
                    <td>{{ $footer->slug }}</td>
                </tr>
                <tr>
                    <td><strong>Veröffentlicht</strong></td>
                    <td>{{ $footer->is_published }}</td>
                </tr>



                <tr>
                    <td><strong>Überschrift Über uns</strong></td>
                    <td>{{ $footer->hl_ueberuns }}</td>
                </tr>


                <tr>
                    <td><strong>Über uns Text</strong></td>
                    <td>{{ $footer->ct_ueberuns }}</td>
                </tr>


                <tr>
                    <td><strong>Überschrift Rezepte</strong></td>
                    <td>{{ $footer->hl_rezepte }}</td>
                </tr>



                <tr>
                    <td><strong>Rezepte Text</strong></td>
                    <td>{{ $footer->ct_rezepte }}</td>
                </tr>


                <tr>
                    <td><strong>Überschrift Kontakt</strong></td>
                    <td>{{ $footer->hl_contact }}</td>
                </tr>


                <tr>
                    <td><strong>Kontakt Text</strong></td>
                    <td>{{ $footer->ct_contact }}</td>
                </tr>




                    <td><strong>ERstallt am</strong></td>
                    <td>{{ $footer->created_at }}</td>
                </tr>
                <tr>
                    <td><strong>Update am</strong></td>
                    <td>{{ $footer->updated_at }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop