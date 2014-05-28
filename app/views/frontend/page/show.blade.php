@extends('frontend/_layout/layout')
@section('content')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">{{ e($page->title) }}</h1>  

               
{{ Breadcrumbs::render('page.show', $page) }}   

    </div>
</div><!--/breadcrumbs-->


<div class="container">
 
    <div class="row">
        <div class="col-lg-12">
            <p>{{ $page->content }}</p>
        </div>
    </div>
</div>
@stop
