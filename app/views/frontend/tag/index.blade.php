@extends('frontend/_layout/layout')
@section('content')
{{ HTML::script('assets/frontend/js/moment-with-langs.min.js') }}
<script type="text/javascript">
    moment().format();
    moment.lang('en');
    jQuery(document).ready(function($){
        var now = moment();
        $('.time').each(function(i, e) {
            var time = moment($(e).attr('datetime'));
            $(e).text(time.from(now));
        });
    });
</script>





    <!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Blog Tag</h1>  

               
{{ Breadcrumbs::render('blog', $articles) }}   

    </div>
</div><!--/breadcrumbs-->


    <div class="col-md-11">
        <div class="row">
            @foreach( $articles as $article )
            <div class="row">
                <div class="col-sm-12">
                    <h4>{{ $article->title }}<span datetime="{{ $article->created_at }}" class="label label-default label-arrow label-arrow-left time">sefa</span></h4>
                    <hr>
                </div>
             
                <div class="col-sm-12">
                    <p>{{{ mb_substr(strip_tags($article->content),0,600) }}}</p>
                    <div class="pull-right">
                        @foreach($article->tags as $tag)
                        <a href="{{ URL::route('dashboard.tag', array('tag'=>$tag->name)) }}"><span class="label label-warning">{{ $tag->name }}</span></a>
                        @endforeach
                    </div>
                    <p>
                        <a href="{{ URL::route('dashboard.article.show', array('id'=>$article->id, 'slug'=>$article->slug)) }}" class="btn btn-xs btn-u">Weiterlesen</a>
                    </p>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
    <div class="pull-left">
        <ul class="pagination">
            {{ $articles->links() }}
        </ul>
    </div>
</div>
@stop

