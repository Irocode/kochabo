@extends('frontend/_layout/layout')
@section('content')
{{ HTML::style('ckeditor/contents.css') }}
{{ HTML::style('assets/css/style.css') }}
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Gutschein</h1>  

               
{{ Breadcrumbs::render('gutschein.show', $gutschein) }}   

    </div>
</div><!--/breadcrumbs-->

<div class="container">
    <div class="row">
        <div class="col-lg12">
            <h1 class="page-header">
                <small>{{ $gutschein->title }}</small>
            </h1>
      
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p><i class="icon-time"></i> Posted on {{ $gutschein->created_at }} by <a href="www.kochabo.at">KochAbo.at</a>
            </p>
            {{ $gutschein->content }}
        </div>
    </div>
</div>
@stop