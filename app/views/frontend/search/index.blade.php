@extends('frontend/_layout/layout')
@section('content')


<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Suche</h1>
        <ul class="pull-right breadcrumb">
<li><a href="#">Suche</a></li>
                <li class="active">Suchergebnis</li>
        </ul>
    </div>
</div><!--/breadcrumbs-->





<div class="container">
   
    <div class="col-md-12">
        <div class="row">
            @foreach( array_slice($paginator->toArray()['data'], (($paginator->getCurrentPage()-1) * $paginator->getPerPage()), $paginator->getPerPage()) as $v )
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ url($v['url']) }}">
                        <h4>{{ $v['title'] }}</h4>
                    </a>
                    <hr>
                </div>
                <div class="col-sm-12">
                    <p>{{{ mb_substr(strip_tags($v['content']),0,400) }}}</p>
                    <br>
                    <a href="{{ url($v['url']) }}">{{ url($v['url']) }}</a>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
     <div class="pull-left">
        <ul class="pagination">
            {{ $paginator->appends(array('search' => $q))->links() }}
        </ul>
    </div>
</div>
@stop

