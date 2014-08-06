<!DOCTYPE html>
 @include('frontend/_layout/menu')

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
    laravelcart | 
    @section('title') 
    @show 
    </title>

      <link href="{{URL::to('assets')}}/css/heroic-features.css" rel="stylesheet">

            {{ HTML::script('assets/frontend/js/jquery.2.0.3.js') }}
            {{ HTML::style('assets/frontend/css/pages/page_pricing.css') }}
            {{ HTML::style('assets/frontend/plugins/fancybox/source/jquery.fancybox.css') }}
            {{ HTML::style('assets/frontend/plugins/bootstrap/css/bootstrap.min.css') }}
            {{ HTML::style('assets/frontend/css/style.css') }}
            {{ HTML::style('assets/frontend/css/company.css') }}
            {{ HTML::style('assets/frontend/css/headers/header1.css') }}
            {{ HTML::style('assets/frontend/css/responsive.css') }}
            {{ HTML::style('assets/frontend/plugins/font-awesome/css/font-awesome.css') }}
            {{ HTML::style('assets/frontend/plugins/flexslider/flexslider.css') }}
            {{ HTML::style('assets/frontend/plugins/parallax-slider/css/parallax-slider.css') }}
            {{ HTML::style('assets/frontend/css/pages/portfolio-v1.css') }}
            {{ HTML::style('assets/frontend/css/style_template.css') }}



   
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{URL::to('/')}}">KochAbo Shop</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{URL::to('/cart')}}">Warenkorb</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/cart')}}"> Du hast {{Cart::count()}} Produkt im Warenkorb</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
       
        <hr>
        <!-- /.row -->
        <!-- site content -->
        @yield('content')
        <!-- end site content -->
        <!-- /.row -->

        <hr><br>

       

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <!-- <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script> -->




    @include('frontend/footer/index')
            @yield('footeradd')
            @include('frontend/_layout/footer')
            {{ HTML::script('assets/frontend/plugins/jquery-1.10.2.min.js') }}
            {{ HTML::script('assets/frontend/plugins/jquery-migrate-1.2.1.min.js') }}
            {{ HTML::script('assets/frontend/plugins/bootstrap/js/bootstrap.min.js') }}
            {{ HTML::script('assets/frontend/plugins/hover-dropdown.min.js') }}
            {{ HTML::script('assets/frontend/plugins/back-to-top.js') }}
            {{ HTML::script('assets/frontend/plugins/flexslider/jquery.flexslider-min.js') }}
            {{ HTML::script('assets/frontend/plugins/parallax-slider/js/modernizr.js') }}
            {{ HTML::script('assets/frontend/plugins/parallax-slider/js/jquery.cslider.js') }}
            {{ HTML::script('assets/frontend/plugins/fancybox/source/jquery.fancybox.pack.js') }}
            {{ HTML::script('assets/frontend/js/pages/index.js') }}
            {{ HTML::script('assets/frontend/plugins/counter/waypoints.min.js') }}
            {{ HTML::script('assets/frontend/plugins/counter/jquery.counterup.min.js') }}
            {{ HTML::script('assets/frontend/plugins/circles-master/circles.js') }}
            {{ HTML::script('assets/frontend/js/app.js') }}
            {{ HTML::script('assets/frontend/js/plugins/circles-master.js') }}
            <!--[if lt IE 9]>
            <script src="{{URL::to('assets/frontend/plugins/respond.js')}}"></script>
            <![endif]-->
            <script type="text/javascript">
               jQuery(document).ready(function() {
                   App.init();
                   App.initSliders();
                   Index.initParallaxSlider();
                   App.initFancybox();
               
               });
            </script>

</body>

</html>
