<!DOCTYPE html>
<!--[if IE 8]> 
<html lang="en" class="ie8">
   <![endif]-->  
   <!--[if IE 9]> 
   <html lang="en" class="ie9">
   
      <![endif]-->  
      <!--[if !IE]><!--> 
      <html lang="en">
         <!--<![endif]-->  
         <head>
            <title>{{ $settings['site_title'] or "title" }}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="{{ isset($meta_description) ? $meta_description : ($settings['meta_description']) }}">
            <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : ($settings['meta_keywords']) }}">
            <meta name="author" content="Bernd Obendorfer">
            <link rel="icon" href="<?php echo asset('assets/frontend/img/favicon_1.png')?>" type="image/x-icon" />
            {{ HTML::script('assets/frontend/js/jquery.2.0.3.js') }}
            {{ HTML::script('assets/frontend/js/company.js') }} 
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
            {{ HTML::style('assets/frontend/plugins/bootstrap-notify/pnotify.custom.min.css') }}
            {{{ stylesheet_link_tag() }}}
            {{{ javascript_include_tag() }}}
            
            <script type="text/javascript">
               var _gaq = _gaq || [];
               _gaq.push(['_setAccount', "{{ $settings['ga_code']  or 'ga_code' }}"]);
               _gaq.push(['_trackPageview']);
               (function () {
                   var ga = document.createElement('script');
                   ga.type = 'text/javascript';
                   ga.async = true;
                   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
               
                   var s = document.getElementsByTagName('script')[0];
                   s.parentNode.insertBefore(ga, s);
               })();
            </script>
            @include('frontend/_layout/menu')
            @yield('content')
            <!-- Menü Wechsler für ACTIVE CLASS Add ANFANG -->
            <script>
               $(".para").on("click", function(e){
                   //  e.preventDefault();
                       //console.log ('drück');
                               ///Anfangswert eigentlich 0 aber 1 minus wird danach gerechnet
                    var currTab = $(this).data("tab");
                      //console.log(currTab); 
                     var currTab =(currTab-1);
                     localStorage.setItem("active", currTab);
                } 
                   );
               
               //var index =1;
                function MenuChange(index) {    
                
               //  console.log(index); 
                 if (index == null) { //console.log("leer");
                   
               
               if(typeof indexzwo!='undefined'){
                   index =indexzwo; //Linkanfrage Manuel gesetzt
               } else {
                index =0;
               };              
               
                  }
                           else {//console.log("voll");
               
                       }
               
                           var currentLink = $(".menu-item").get(index);
                           //console.log(currentLink);
               
                           /*if (currentLink < 0) {console.log("NO"); }
                           else {console.log("YO");}*/
               
               
                       $(currentLink).addClass("active");
                   }
               
                MenuChange(localStorage.getItem("active"));
                  localStorage.removeItem("active");
               //localStorage.setItem("active", "4");
               
               // retrieve
               //console.log(localStorage.getItem("active"));
               
            </script>
            <!-- Menü Wechsler für ACTIVE CLASS Add ENDE -->
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
            {{ HTML::script('assets/frontend/plugins/bootstrap-notify/pnotify.custom.min.js') }} 
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