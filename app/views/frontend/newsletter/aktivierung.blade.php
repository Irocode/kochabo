@extends('frontend/_layout/layout')
@section('content')
<div class="container">
   @if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
   @endif
   {{Request::query("email") }}
   {{Request::query("code") }}   

   <img class="img-responsive" alt="" src="{{URL::to('http://irocode.com/projekt/kochabo/filemanager/userfiles/logo/logogross.png')}}">
   <h1>Du bist nun bei KochAbo.at registriert.</h1>
   <div class="jumbotron text-center">
      <h2>Hi!</h2>
      <p>Deine E-Mail Adresse: {{$email = Input::get('email');}}</p>
      <p><strong>E-Mail:</strong>  {{$email = Input::get('email');}} <br></p>
   </div>
</div>
@stop