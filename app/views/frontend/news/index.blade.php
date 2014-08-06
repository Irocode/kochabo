@extends('frontend/_layout/layout')
@section('content')
{{ HTML::script('assets/frontend/js/moment-with-langs.min.js') }}
<script type="text/javascript">
    moment().format();
    moment.lang('en');

    jQuery(document).ready(function ($) {
        var now = moment();
        $('.time').each(function (i, e) {
            var time = moment($(e).attr('datetime'));
            $(e).text(time.from(now));

        });
    });
</script>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">News</h1>  

               
{{ Breadcrumbs::render('news', $news) }}   

    </div>
</div><!--/breadcrumbs-->




            @foreach( $news as $v )






<?php
// Free link fpr Images
$suchstring = '<p>';
$ersatzstring = '';
$result1 = str_replace($suchstring , $ersatzstring , $v->bild1);

$suchstring2 = '</p>';
$ersatzstring2 = '';
$result2=  str_replace($suchstring2 , $ersatzstring2, $result1);


$suchstring3 = 'alt=""';
$ersatzstring3 = 'alt="" class="img-responsive" ';
$bild1_ready_link=  str_replace($suchstring3 , $ersatzstring3, $result2);


?>

<div  class="container">    
 <div class="row">
 <div class="col-md-12 col-sm-12">
                <div class="col-md-12 col-sm-12">
                <a href="{{ URL::route('dashboard.news.show', array('id'=>$v->id, 'slug'=>$v->slug)) }}">
                    <h4>{{ $v->title }}&nbsp;&nbsp;<span datetime="{{ $v->created_at }}" class="label label-default label-arrow label-arrow-left time">sefa</span>
                    </h4></a>
                    <hr>
                </div>

                <div class="col-md-4 col-sm-4">
                <a href="#" class="">
                    {{ $bild1_ready_link }}
                      </a>
                </div>

                    <div class="col-md-8 col-sm-8">
                    <p>{{{ mb_substr(strip_tags($v->content),0,2000) }}}</p>
                    </div>
                    <div style="clear: both">
                    </div>
                        <p>
                        <a style="float: right" href="{{ URL::route('dashboard.news.show', array('id'=>$v->id, 'slug'=>$v->slug)) }}" class="btn-u">Weiterlesen</a>
                        </p><br><br><br><br>
              


</div>      
</div>
</div>

                 
@endforeach

<div  class="container">

     <hr>  
       </div>




<div  class="container">
   <div class="col-md-12">
       <div class="row">
            <div class="pull-left">
                <ul class="pagination">
                {{ $news->links() }}
                </ul>
            </div>
     </div>
   </div>

</div>



@stop

