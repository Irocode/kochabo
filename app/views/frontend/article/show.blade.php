@extends('frontend/_layout/layout')
@section('content')

{{ HTML::style('assets/frontend/css/style.css') }}
{{ HTML::style('assets/frontend/plugins/code_prettify/css/prettify.css') }}
{{ HTML::script('assets/frontend/plugins/code_prettify/js/prettify.js') }}
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Blog</h1>  

               
{{ Breadcrumbs::render('blog.post.show', $article) }}   

    </div>
</div><!--/breadcrumbs-->





<div class="container">
   

    <div class="row">
        <div class="col-lg-8">
            <div class="pull-left">
                @foreach($article->tags as $tag)
                <a href="{{ URL::route('dashboard.tag', array('tag'=>$tag->slug)) }}"><span class="label label-warning">{{ $tag->name }}</span></a>
                @endforeach
            </div>
           
           <h4>{{ $article->title }}</h4>
            <p><i class="icon-time"></i> Gepostet am {{ $article->created_at }}  
            </p>
            {{ $article->content }}

        </div>
        <div class="col-lg-4">
            <div class="row">
                <h4>Kategorien</h4>

                <div class="tagcloud tabbed_tag">
                    @foreach($categories as $category)
                    <a href="{{ URL::route('dashboard.category', array('category'=>$category->title)) }}">{{ $category->title }}</a>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <h4>Tags</h4>

                <div class="tagcloud tabbed_tag">
                    @foreach($tags as $tag)
                    <a href="{{ URL::route('dashboard.tag', array('tag'=>$tag->slug)) }}">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    !function ($) {
        $(function () {
            window.prettyPrint && prettyPrint()
        })
    }(window.jQuery)
</script>
@stop
