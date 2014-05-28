@extends('backend/_layout/layout')
@section('content')
<div class="container">
    {{ Form::open( array( 'route' => array( 'admin.user.destroy', $user->id ) ) ) }}
    {{ Form::hidden( '_method', 'DELETE' ) }}
    <div class="alert alert-warning">
        <div class="pull-left"><b>Sei vorsichtig!</b> Bist du sicher beim Löschen von Benutzer <b>{{{ $user->username }}} </b> ?
        </div>
        <div class="pull-right">
            {{ Form::submit( 'Ja ich bin sicher', array( 'class' => 'btn btn-danger' ) ) }}
            {{ link_to( URL::previous(), 'Nein', array( 'class' => 'btn btn-primary' ) ) }}
        </div>
        <div class="clearfix"></div>
    </div>
    {{ Form::close() }}
</div>
@stop