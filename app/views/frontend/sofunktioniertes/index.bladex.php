@extends('frontend/_layout/layout')
@section('content')



{{ HTML::script('assets/js/moment-with-langs.min.js') }}
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
        <h1 class="pull-left">So funktioniert's</h1>  

               
{{ Breadcrumbs::render('sofunktioniertes', $sofunktioniertes) }}   

    </div>
</div><!--/breadcrumbs-->





























<!--*********************************************************************************************************************************************************************************************************************************** -->
<!--=== Content Part ===-->


<!--=== Content Part ===-->
<div class="container">     
    <!-- Service Blcoks -->
    <div class="row servive-block margin-bottom-10">
        <div class="col-md-3 col-sm-6">
            <div class="servive-block-in servive-block-colored servive-block-green">
                <h4>Awasome Green Box</h4>
                <div><i class="icon-bell"></i></div>
                <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>                        
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="servive-block-in servive-block-colored servive-block-red">
                <h4>Reddde Box</h4>
                <div><i class="icon-bullhorn"></i></div>
                <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="servive-block-in servive-block-colored servive-block-sea">            
                <h4>Amazing Box</h4>
                <div><i class="icon-lightbulb"></i></div>
                <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="servive-block-in servive-block-colored servive-block-grey">            
                <h4>Great Grey Box</h4>
                <div><i class="icon-globe"></i></div>
                <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
            </div>
        </div>
    </div><!--/servive-block-->

    <div class="row servive-block margin-bottom-10">
        <div class="col-md-3 col-sm-6">
            <div class="servive-block-in">
                <h4>Sample Default Box</h4>
                <div><i class="icon-comments-alt"></i></div>
                <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>                        
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="servive-block-in servive-block-colored servive-block-blue">
                <h4>Incridble Blue Box</h4>
                <div><i class="icon-cloud-download"></i></div>
                <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="servive-block-in servive-block-colored servive-block-orange">            
                <h4>Yahho Orange Box</h4>
                <div><i class="icon-thumbs-up"></i></div>
                <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="servive-block-in servive-block-colored servive-block-yellow">            
                <h4>Happy Yellow Box</h4>
                <div><i class="icon-map-marker"></i></div>
                <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus, tellus ac cursus comodo egetine metuss gorp.</p>
            </div>
        </div>
    </div><!--/servive-block-->
    <!-- End Service Blcoks -->

    <!-- Tabs and Carousel-->
    <div class="row margin-bottom-30">
        <!-- Accardion-->
        <div class="col-md-7">
            <div class="headline"><h2>Service Offers</h2></div>
            <div class="panel-group acc-v1" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">

                                    <img class="img-responsive" src="{{ URL::to('filemanager/userfiles/sofunktionierts/5.jpg') }}" alt="">
                                </div>
                                <div class="col-md-8">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="icon-ok color-green"></i> Donec id elit non mi porta gravida at eget metus..</li>
                                        <li><i class="icon-ok color-green"></i> Fusce dapibus, tellus ac cursus comodo egetine..</li>
                                        <li><i class="icon-ok color-green"></i> Food truck quinoa nesciunt laborum eiusmod runch..</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <img class="img-responsive" src="{{ URL::to('filemanager/userfiles/sofunktionierts/6.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                Collapsible Group Item #4
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div>
            </div><!--/acc-v1-->
        </div><!--/col-md-7-->
        <!--//End Accardion-->

        <!-- Latest Shots -->
        <div class="col-md-5">
            <div class="headline"><h2>Latest Shots</h2></div>
            <div id="myCarousel" class="carousel slide carousel-v1">
                <div class="carousel-inner">
                    <div class="item active">
                    
                    
                        <img src="{{ URL::to('filemanager/userfiles/sofunktionierts/5.jpg') }}" alt="">
                        <div class="carousel-caption">
                            <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ URL::to('filemanager/userfiles/sofunktionierts/4.jpg') }}" alt="">
                        <div class="carousel-caption">
                            <p>Cras justo odio, dapibus ac facilisis into egestas.</p>
                        </div>
                        </div>
                    <div class="item">
                        <img src="{{ URL::to('filemanager/userfiles/sofunktionierts/3.jpg') }}" alt="">
                        <div class="carousel-caption">
                            <p>Justo cras odio apibus ac afilisis lingestas de.</p>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-arrow">
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <i class="icon-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <i class="icon-angle-right"></i>
                    </a>
                </div>
            </div>
        </div><!--/col-md-5-->
        <!--//End Latest Shots -->
    </div><!--/row-->
    <!-- End Tabs and Carousel -->

     <!-- Our Clients -->
      <div id="clients-flexslider" class="flexslider home clients">
         <div class="headline">
            <h2>Bekannt aus</h2>
         </div>
         <ul class="slides">
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/vadafone_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/vadafone.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/walmart_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/walmart.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/shell_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/shell.png') }}" class="color-img" alt="" />
               </a>
            </li>

      
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/natural_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/natural.png') }}" class="color-img" alt="" />
               </a>
            </li>

            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/aztec_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/aztec.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/gamescast_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/gamescast.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/cisco_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/cisco.png') }}" class="color-img" alt="" />
               </a>
            </li>

          


            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/everyday_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/everyday.png') }}" class="color-img" alt="" />
               </a>
            </li>

            
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/cocacola_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/cocacola.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/spinworkx_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/spinworkx.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src=" {{ URL::to('filemanager/userfiles/clients/shell_grey.png') }}" alt="" /> 
               <img src=" {{ URL::to('filemanager/userfiles/clients/shell.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/natural_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/natural.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/gamescast_grey.png') }}" alt="" /> 
               <img src=" {{ URL::to('filemanager/userfiles/clients/gamescast.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/everyday_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/everyday.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/spinworkx_grey.png') }}" alt="" /> 
               <img src=" {{ URL::to('filemanager/userfiles/clients/spinworkx.png') }}" class="color-img" alt="" />


               


               </a>
            </li>
         </ul>
      </div>
      <!--/flexslider-->
      <!-- End Our Clients -->
</div><!--/container-->     
<!--=== End Content Part ===-->

<!--=== End Content Part ===-->

<!--*********************************************************************************************************************************************************************************************************************************** -->







@stop



            @foreach( $sofunktioniertes as $v )

<?php
// Free link fpr Images
$suchstring = '<p><img src="';
$ersatzstring = '';
$result1 = str_replace($suchstring , $ersatzstring , $v->bild1);

$suchstring2 = '"/> </p>';
$ersatzstring2 = '';
$result2=  str_replace($suchstring2 , $ersatzstring2, $result1);

$suchstring3 = '" />';
$ersatzstring3 = '';
$result3 = str_replace($suchstring3 , $ersatzstring3, $result2);

$suchstring4 = '</p>';
$ersatzstring4 = '';
$bild1_ready_link = str_replace($suchstring4 , $ersatzstring4, $result3);



?>







                 {{ $v->title }}
          {{{ mb_substr(strip_tags($v->content),0,2000) }}}</p>
               



                 
@endforeach


                {{ $sofunktioniertes->links() }}





@stop

