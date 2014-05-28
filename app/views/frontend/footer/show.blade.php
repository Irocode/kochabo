
@section('content')
{{ HTML::style('ckeditor/contents.css') }}
{{ HTML::style('assets/css/style.css') }}


<div class="container">
    <div class="row">
        <div class="col-lg12">
            <h1 class="page-header">
                <small>{{ $footer->title }}</small>
            </h1>
            @yield('partial/breadcrumbs', Breadcrumbs::render('footer.show', $footer))
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p><i class="icon-time"></i> Posted on {{ $footer->created_at }} by <a href="www.kochabo.at">KochAbo.at</a>
            </p>
            {{ $footer->content }}
        </div>
    </div>
</div>
@stop-->




