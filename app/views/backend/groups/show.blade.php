@extends('backend/_layout/layout')
@section('content')

{{-- Web site Title --}}
@section('title')
@parent
View Group
@stop

{{-- Content --}}




<div class="container">
<nav class="navbar navbar-inverse">
    
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('/admin/groups') }}">Gruppen gesamt</a></li>
        <li><a href="{{ URL::to('/admin//groups/create') }}">Neue Gruppe</a>
    </ul>
</nav>



<div class="pull-right">
<a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
</div>
<div style="margin-top:40px">

</div>

<h4>{{ $group['name'] }} Gruppe</h4>
<div class="well clearfix">
	<div class="col-md-10">
	    <strong>Permissions:</strong>
	    <ul>
	    	@foreach ($group->getPermissions() as $key => $value)
	    		<li>{{ ucfirst($key) }}</li>
	    	@endforeach
	    </ul>
	</div>
	<div class="col-md-2">
		<button class="btn-u" onClick="location.href='{{ action('GroupadminController@edit', array($group->id)) }}'">Ändere Gruppe</button>
	</div> 
</div>
<hr />

<div>
  
</div>
</div>

@stop
