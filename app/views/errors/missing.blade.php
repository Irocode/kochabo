{{ HTML::style('assets/backend/bootstrap/css/backend_bootstrap.css') }}
{{ HTML::style('assets/backend/bootstrap/css/theme.css') }}
   {{ HTML::script('assets/backend/js/jquery.2.0.3.js') }}
            {{ HTML::style('assets/backend/css/pages/page_pricing.css') }}
            {{ HTML::style('assets/backend/plugins/fancybox/source/jquery.fancybox.css') }}
            {{ HTML::style('assets/backend/plugins/bootstrap/css/bootstrap.min.css') }}
            {{ HTML::style('assets/backend/css/style.css') }}
            {{ HTML::style('assets/backend/css/company.css') }}
            {{ HTML::style('assets/backend/css/headers/header1.css') }}
            {{ HTML::style('assets/backend/css/responsive.css') }}
            {{ HTML::style('assets/backend/plugins/font-awesome/css/font-awesome.css') }}
            {{ HTML::style('assets/backend/plugins/flexslider/flexslider.css') }}
            {{ HTML::style('assets/backend/plugins/parallax-slider/css/parallax-slider.css') }}
            {{ HTML::style('assets/backend/css/pages/portfolio-v1.css') }}
            {{ HTML::style('assets/backend/css/style_template.css') }}

<style>
    .center {text-align: center; margin-left: auto; margin-right: auto; margin-bottom: auto; margin-top: auto; color:#ffffff;}
</style>
<div class="container">
  <div class="row">
    <div class="span12">
      <div class="hero-unit center">
          <h1 style="font-size: 120px;">Oops!</h1>
          <h2>Es tut mir leid, aber die Seite, die Sie aufgerufen haben, gibt es nicht mehr, hat es nie gegeben oder wurde verlegt.

           </h2> <p style="color:#ffffff;">Es kann natürlich auch sein, dass diese Seite gleich wieder verfügbar ist.</p>


          <h1>Seite nicht gefunden <small><font face="Tahoma" color="#fed51c">Error 404</font></small></h1>
          <br />
          
          @if (Request::is('admin/*'))<br>
          <a href="{{ url('/admin') }}" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Bring mich zurück</a>
          @else <br>
          <a href="{{ url('/') }}" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Bring mich auf die Startseite</a>
          @endif

          <br><br><br>

                Dein KochAbo Team

        </div>
    </div>
  </div>
</div>


{{ HTML::script('assets/backend/plugins/backstretch/jquery.backstretch.min.js') }}    
 
   <script type="text/javascript">
      $.backstretch([
      
          "{{URL::to('assets/backend/img/bg/5.jpg')}}",
          "{{URL::to('assets/backend/img/bg/4.jpg')}}",
      
      
        ], {
          fade: 1000,
          duration: 7000
      });
   </script>
   <!-- JS Page Level -->           
 
   <!--[if lt IE 9]>
   {{ HTML::script('assets/backend/plugins/respond.js') }}    
   <![endif]-->
