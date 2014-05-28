@extends('backend/_layout/layout')
@section('content')

{{-- Web site Title --}}
@section('title')
@parent
Home
@stop

{{-- Content --}}
@section('content')

<div class="container">
<div class="row">

<div class="headline">
<h2>Meine Daten</h2>
</div>
  <p>Hier findest du alle wichtigen Informationen zu deinem Konto. </p>
</div>
</div>




	
  	<div class="well clearfix">
	    <div class="col-md-8">

	   

		    @if ($user->first_name)
		    	<p><strong>Vorname:</strong> {{ $user->first_name }} </p>
			@endif
			@if ($user->last_name)
		    	<p><strong>Nachname:</strong> {{ $user->last_name }} </p>
			@endif
		    <p><strong>E-Mail:</strong> {{ $user->email }} </p>
		    
		</div>
		<div class="col-md-4">
			<p><em>Zugang seit: {{ $user->created_at }}</em></p>
			<p><em>Letzer Login: {{ $user->updated_at }}</em></p>
			<button class="btn-u" onClick="location.href='{{ action('UserController@edit', array($user->id)) }}'">Ändere deine Profildaten</button>
		</div>
	</div>

	



<div class="container">
<div class="row">

<div class="headline">
<h2>Meine gekauften Artikel</h2>
</div>


 <div class="row servive-block margin-bottom-10">
        <div class="col-md-3 col-sm-6">
            <div class="servive-block-in">
               @if ($user->produkt) <h4>{{ $user->produkt }} </h4>@endif
                @if ($user->produkttyp) <p>{{ $user->produkttyp }} </p>@endif                 
                  @if ($user->price_produkt) <p>{{ $user->price_produkt }} € </p>@endif
                  <hr>
                   @if ($user->obstbox) <p>{{ $user->obstbox }} @endif @if ($user->obstbox){{ $user->price_adobstbox }} €</p>@endif
                    @if ($user->obstbox)  <hr> @endif
                     @if ($user->wein) <p>{{ $user->wein }}@endif @if ($user->wein) <p>{{ $user->price_adwein }} €</p>@endif
                     	  @if ($user->wein)  <hr> @endif
                       @if ($user->summe)  <p>WERT: {{ $user->summe }} €</p>@endif
            

                <div><i class="icon-comments-alt"></i></div>
                <p>Das KochAbo.at Team dankt!</p>                        
            </div>
        </div>
       

        
   

</div>

	


	<div class="container">
<div class="row">

<div class="headline">
<h2>Status</h2>
</div>

</div>
</div>


	<?php $userGroups = $user->getGroups(); ?>
	<div class="well">
	    <ul>
	    	@if (count($userGroups) >= 1)
		    	@foreach ($userGroups as $group)
					<li>{{ $group['name'] }}</li>
				@endforeach
			@else 
				<li>No Group Memberships.</li>
			@endif
	    </ul>
	</div>
	
	<hr />

<!--

	<h4>User Object</h4>
	<div>
		<p>{{ var_dump($user) }}</p>
	</div>

	-->

@stop
