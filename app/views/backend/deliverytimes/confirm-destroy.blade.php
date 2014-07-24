@extends('backend/_layout/layout')
@section('content')

<?php
if (isset($_GET["logisticianmanagerid"])) {
    $logisticianmanagerid = $_GET["logisticianmanagerid"];  
}
?>


<div class="container">
    {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\DeliverytimesController@destroy', $deliverytimes->id, 'logisticianmanagerid'=> $logisticianmanagerid ) ) ) }}
    {{ Form::hidden( '_method', 'DELETE' ) }}




<div class="tag-box tag-box-v2">

<p><div class="pull-left"><h2>Sei vorsichtig!</h2>Bist du sicher beim Löschen der Zeit mit der Bezeichnung: <b>{{{ $deliverytimes->name }}} </b> ? </div>
<div class="pull-right">
            {{ Form::submit( 'Ja bitte löschen', array( 'class' => 'btn-u btn-u-red' ) ) }}<br><hr>
            {{ link_to( URL::previous(), 'Nein bitte zurück', array( 'class' => 'btn-u' ) ) }}
        </div>
        <div class="clearfix"></div>

</p>
<input name="user_id" type="hidden" value="{{$deliverytimes->user_id}}">
</div>
{{ Form::close() }}

@stop