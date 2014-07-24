@extends('backend/_layout/layout')
@section('content')
<div class="container">
       {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\RecipeingredientController@destroy', $recipe_ingredient->id ) ) ) }}
    {{ Form::hidden( '_method', 'DELETE' ) }}

<div class="tag-box tag-box-v2">

<p><div class="pull-left"><h2>Sei vorsichtig!</h2>Bist du sicher beim Löschen von der Zutat <b>{{{ $recipe_ingredient->id }}}  </b> ?</div>
<div class="pull-right">
            {{ Form::submit( 'Ja bitte löschen', array( 'class' => 'btn-u btn-u-red' ) ) }}<br><hr>
            {{ link_to( URL::previous(), 'Nein bitte zurück', array( 'class' => 'btn-u' ) ) }}
        </div>
        <div class="clearfix"></div>

<?php

if (isset($_GET["recipeid"])) {
    $recipeid = $_GET["recipeid"];
    echo"$recipeid";
}
?>

</p>

</div>
{{ Form::close() }}

@stop