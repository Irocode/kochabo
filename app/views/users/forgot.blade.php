@extends('frontend/_layout/layout')
@section('content')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
   <div class="container">
      <h1 class="pull-left">Passwort vergessen</h1>
      <ul class="pull-right breadcrumb">
         <li><a href="#">Home</a></li>
         <li class="active">Passwort vergessen</li>
      </ul>
   </div>
</div>
<!--/breadcrumbs-->







<div class="container">
 @if (Session::has('message'))
 <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif

<div class="row">
  <div class="col-md-6">

  <!-- zip -->
   <div class="control-group {{ $errors->has('zip') ? 'has-error' : '' }}">
      {{ Form::open(array('action' => 'SessionController@forgotperemail', 'method' => 'post')) }}
            
            <h2>Passwort vergessen? Kein Problem.</h2>
            <p> Gib einfach deine E-Mail Adresse ein. Danach wird dir dein Passwort zugeschickt.</p>
            <div class="row">
             <div class="col-md-6">
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Meine E-Mail Adresse', 'autofocus')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>
            </div></div>
          
            {{ Form::submit('Passwort zusenden', array('class' => 'btn btn-u'))}}

        {{ Form::close() }}
         
   </div>
   <br>

  </div>
  <div class="col-md-6">
<div class="headline">
<h2>Hinweis</h2>
</div>
<blockquote class="hero">
<p>Die eingegeben E-Mail Adresse wird einer Prüfung unterzogen. </p>
<small class="color-green">
Ob 
<cite title="Source Title">vorhanden</cite>
</small>
<small class="color-green">
Ob  
<cite title="Source Title">aktiviert</cite>
</small>

</blockquote>
</div>
</div>
</div>


<br><br><br><br><br><br>
@stop