<!DOCTYPE html>



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


            {{ HTML::script('assets/js/jquery.2.0.3.js') }}
            {{ HTML::style('assets/css/pages/page_pricing.css') }}
            {{ HTML::style('assets/plugins/fancybox/source/jquery.fancybox.css') }}
            {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
            {{ HTML::style('assets/css/style.css') }}
            {{ HTML::style('assets/css/company.css') }}
            {{ HTML::style('assets/css/headers/header1.css') }}
            {{ HTML::style('assets/css/responsive.css') }}
            {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css') }}
            {{ HTML::style('assets/plugins/flexslider/flexslider.css') }}
            {{ HTML::style('assets/plugins/parallax-slider/css/parallax-slider.css') }}
            {{ HTML::style('assets/css/pages/portfolio-v1.css') }}
            {{ HTML::style('assets/css/style_template.css') }}
            {{ HTML::style('assets/plugins/bootstrap-notify/pnotify.custom.min.css') }}

             @include('frontend/_layout/menu')

   
</head>

<body>





    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <a class="navbar-brand" href="{{URL::to('/shop')}}">KochAbo Shop</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{URL::to('/cart')}}">Warenkorb</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/cart')}}"> Du hast {{Cart::count()}} Produkt(e) im Warenkorb. Derzeitiger Wert: {{Cart::total()}}</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  






  
      
        <!-- /.row -->
        <!-- site content -->
        @yield('content')
        <!-- end site content -->
        <!-- /.row -->

        <hr><br>

       

  
    <!-- /.container -->

    <!-- JavaScript -->
    <!-- <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script> -->




    @include('frontend/footer/index')
            @yield('footeradd')
            @include('frontend/_layout/footer')
            {{ HTML::script('assets/plugins/jquery-1.10.2.min.js') }}
            {{ HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') }}
            {{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
            {{ HTML::script('assets/plugins/hover-dropdown.min.js') }}
            {{ HTML::script('assets/plugins/back-to-top.js') }}
            {{ HTML::script('assets/plugins/flexslider/jquery.flexslider-min.js') }}
            {{ HTML::script('assets/plugins/parallax-slider/js/modernizr.js') }}
            {{ HTML::script('assets/plugins/parallax-slider/js/jquery.cslider.js') }}
            {{ HTML::script('assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}
            {{ HTML::script('assets/js/pages/index.js') }}
            {{ HTML::script('assets/plugins/counter/waypoints.min.js') }}
            {{ HTML::script('assets/plugins/counter/jquery.counterup.min.js') }}
            {{ HTML::script('assets/plugins/circles-master/circles.js') }}
            {{ HTML::script('assets/js/app.js') }}
            {{ HTML::script('assets/js/plugins/circles-master.js') }}        
            {{ HTML::script('assets/plugins/bootstrap-notify/pnotify.custom.min.js') }} 
            <!--[if lt IE 9]>
            <script src="{{URL::to('assets/plugins/respond.js')}}"></script>
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
