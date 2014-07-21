@extends('master')

@section('content')
{{Form::open(array('url'=>'/login','method'=>'post'))}}
<h1>Login Form</h1>
<div>
	<input value="{{Input::old('identity')}}" type="text" placeholder="Username/Email" required="" id="username" name="identity"/>
</div>
<div>
	<input type="password" placeholder="Password" required="" id="password" name="password"/>
</div>
<div>
	<input type="submit" value="Log in" />
	<a href="{{URL::to('http://local.kochabo.at')}}/forgotpassword">Lost your password?</a>
	<a href="{{URL::to('http://local.kochabo.at')}}/register">Register</a>

</div>

{{Form::close()}}
<a href="{{URL::to('http://local.kochabo.at')}}/social/Facebook" class="zocial facebook">Sign in with Facebook</a>
<a href="{{URL::to('http://local.kochabo.at')}}/social/google" class="zocial googleplus">Sign in with Google+</a>
<a href="{{URL::to('http://local.kochabo.at')}}/social/twitter" class="zocial twitter">Sign in with Twitter</a>



@stop