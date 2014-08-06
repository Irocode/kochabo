<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title> 
			@section('title') 
			@show 
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap 3.0: Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
	

		 <link rel="stylesheet" href="{{$myuserurl}}assets/backend/plugins/bootstrap/css/bootstrap.css">
		 <link rel="stylesheet" href="{{$myuserurl}}assets/backend/css/style.css">
   		 <link rel="stylesheet" href="{{$myuserurl}}assets/backend/css/headers/header1.css">
  		 <link rel="stylesheet" href="{{$myuserurl}}assets/backend/css/responsive.css">
  		 <link rel="shortcut icon" href="favicon.ico">        
    	<!-- CSS Implementing Plugins -->    

  		  <link rel="stylesheet" href="{{$myuserurl}}assets/backend/plugins/font-awesome/css/font-awesome.css">

		<!-- Optional theme -->
	
	

    <link rel="stylesheet" href="{{$myuserurl}}assets/backend/css/style_template.css">
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="{{$myuserurl}}assets/backend/plugins/font-awesome/css/font-awesome.css">
        <!-- CSS Page Style -->    
    <link rel="stylesheet" href="{{$myuserurl}}assets/backend/css/pages/page_pricing.css">    
    <!-- CSS Theme -->    
     <link rel="stylesheet" href="{{$myuserurl}}assets/backend/css/themes/default.css" id="style_color">   

		<style>
		@section('styles')
			body {
				padding-top: 60px;
			}
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	
	</head>

	<body>
		
@if (Sentry::check() )
		<!-- Navbar -->
		<div class="navbar navbar-default navbar">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        <a class="navbar-brand" href="{{ URL::route('home' ) }}">Information</a><!-- <a class="navbar-brand " href="{{$myuserurl}}start") }}">Information</a>--> 
  			<a class="navbar-brand" href="{{ URL::to('users') }}/{{ Session::get('userId') }}">Meine Daten</a><!-- <a class="navbar-brand" href="{{$myuserurl}}start") }}">Meine Daten</a>--> 
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
				@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
					<li {{ (Request::is('users*') ? 'class="active"' : '') }}><a href="{{ URL::to('/users') }}">Benutzer</a></li>
					<li {{ (Request::is('groups*') ? 'class="active"' : '') }}><a href="{{ URL::to('/groups') }}">Gruppen</a></li>
						@endif
					@if (Sentry::check() && Sentry::getUser()->hasAccess('users'))
					<!--<li {{ (Request::is('artikel*') ? 'class="active"' : '') }}><a href="{{ URL::to('/artikel') }}">Mein Artikel</a></li>-->
					@endif
					@if (Sentry::check() && Sentry::getUser()->hasAccess('users'))
					<!--<li {{ (Request::is('groups*') ? 'class="active"' : '') }}><a href="{{ URL::to('/groups') }}">Newsletter</a></li>-->
					@endif

				



	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	            @if (Sentry::check())
				<li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}><a href="{{ URL::to('users') }}/{{ Session::get('userId') }}">Meine Übersicht: {{ Session::get('email') }}</a></li>
				<!-- <li><a href="{{ URL::to('logout') }}">Logout</a></li>-->
				@else
				<li {{ (Request::is('/meinkontologin') ? 'class="active"' : '') }}><a href="{{ URL::to('/meinkontologin') }}" target="_top">Login</a></li>
			<!--	<li {{ (Request::is('users/create') ? 'class="active"' : '') }}><a href="{{ URL::to('users/create') }}">Registrieren</a></li>-->
				@endif
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>

@endif





		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container">
			<!-- Notifications -->
			@include('layouts/notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>

		<!-- ./ container -->

		<!-- Javascripts
		================================================== -->
		<script src="{{ asset('js/jquery-2.0.2.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	


<script type="text/javascript" src="{{$myuserurl}}assets/backend/plugins/restfulizer.js"></script>


<script type="text/javascript" src="{{$myuserurl}}assets/backend/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="{{$myuserurl}}assets/backend/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{$myuserurl}}assets/backend/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="{{$myuserurl}}assets/backend/plugins/hover-dropdown.min.js"></script> 
<script type="text/javascript" src="{{$myuserurl}}assets/backend/plugins/back-to-top.js"></script>




  


		<!-- Thanks to Zizaco for the Restfulizer script.  http://zizaco.net  -->
	</body>
</html>
