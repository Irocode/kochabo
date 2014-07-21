@extends('master')

@section('content')

{{Form::open(array('url'=>'/register','method'=>'post'))}}
<h1>Register</h1>
<div>
	<input type="text" value="{{Input::old('email')}}" placeholder="Enter Email" required="" id="username" name="email"/>
</div>
<div>
	<input type="text" value="{{Input::old('username')}}" placeholder="Enter Username" required="" id="username" name="username"/>
</div>
<div>
	<input type="password"  placeholder="Enter Password" required="" id="password" name="password"/>
</div>
<div>
	<input type="password"  placeholder="Confirm Password" required="" id="password" name="password_confirmation"/>
</div>
<div>
	<input type="submit" value="Register" />
	<a href="{{URL::to('http://local.kochabo.at')}}/forgotpassword">Forgot password?</a>
	<a href="{{URL::to('http://local.kochabo.at')}}/login">Login</a>
</div>
{{Form::close()}}

@stop