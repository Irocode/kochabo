<!DOCTYPE html>
<html>
   <head>
      <title>sf CMS</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <!-- CSS are placed here -->
      <!-- CSS Global Compulsory-->
      {{ HTML::style('assets/bootstrap/css/backend_bootstrap.css') }}   
      {{ HTML::script('assets/js/holder.js') }}
      {{ HTML::script('assets/js/jquery-ui-1.10.4.custom/development-bundle/jquery-1.10.2.js') }}    
      {{ HTML::script('assets/js/jquery.2.0.3.js') }}  
      {{ HTML::script('assets/bootstrap/js/bootstrap.min.js') }}
      {{ HTML::script('assets/js/holder.js') }}
      {{ HTML::script('assets/js/jquery.2.0.3.js') }}
      {{ HTML::style('assets/plugins/fancybox/source/jquery.fancybox.css') }}
      {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
      {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.css') }}
      {{ HTML::style('assets/css/style.css') }}
      {{ HTML::style('assets/css/company.css') }}
      {{ HTML::style('assets/css/headers/header1.css') }}
      {{ HTML::style('assets/css/responsive.css') }}
      {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css') }}
      {{ HTML::style('assets/plugins/flexslider/flexslider.css') }}
      {{ HTML::style('assets/plugins/parallax-slider/css/parallax-slider.css') }}
      {{ HTML::style('assets/css/pages/portfolio-v1.css') }}
      {{ HTML::style('assets/css/style_template.css') }}
      {{ HTML::style('assets/css/pages/page_pricing.css') }}
      {{ HTML::style('assets/css/bootstrap-datetimepicker.min.css') }}
      {{ HTML::style('assets/plugins/bootstrap-notify/pnotify.custom.min.css') }}
      {{ HTML::style('assets/css/themes/default.css') }}
      {{ HTML::style('assets/css/pages/page_pricing.css') }}
      {{ HTML::style('assets/css/pages/portfolio-v1.css') }}
   </head>
   <div class="container">
      <div class="row">
         <div style="text-align: center" class="col-md-4 col-md-offset-4">
            <br><br>
            <div class="panel panel-default">
               <div class="panel-body">
                  <h1 style="color: #85b81d">KochAbo CMS</h1>
                  <ul class="list-inline style-icons text-center">
                  

                     <li><a href="{{URL::to('')}}"><i class="icon-home icon-round icon-round-sm icon-color-grey"></i></a></li>
                     <!-- <li><a href="#"><i class="icon-linkedin icon-round icon-round-sm icon-color-grey"></i></a></li>-->
                     <li><a href="https://www.facebook.com/KochAbo"><i class="icon-facebook icon-round icon-round-sm icon-color-grey"></i></a></li>
                     <li><a href="https://twitter.com/kochabo_at"><i class="icon-twitter icon-round icon-round-sm icon-color-grey"></i></a></li>

                     <li><a href="{{URL::to('article')}}"><i class="icon-rss icon-round icon-round-sm icon-color-grey"></i></a></li>
                  </ul>
                  {{ Form::open(array('class' => 'form-signup', 'id' => 'form-signin')) }}
                  @if ($errors->has('login'))
                  <div class="alert alert-danger">
                     <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{{ $errors->first('login', ':message') }}
                  </div>
                  @endif
                  <div class="form-group">
                     <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        {{ Form::text('email', null,array('class' => 'form-control', 'placeholder'=>'E-Mail', 'autofocus'=>'')) }}
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        {{ Form::password('password', array('class' => 'form-control','placeholder'=>'Passwort')) }}
                     </div>
                  </div>
                  <label style="text-align: left" class="checkbox">{{ Form::checkbox('rememberMe', 'rememberMe') }} Merken</label>
                  {{ Form::submit('Einloggen', array('class' => 'btn-u btn-block', 'role'=>'button')) }}
                  {{ Form::close() }}
                  <br>
                  {{ HTML::link('/admin/forgot-password','Passwort vergessen', array('class' => 'btn btn-sm btn-default btn-block')) }}
               </div>
            </div>
         </div>
      </div>
   </div>
   {{ HTML::script('assets/plugins/jquery-1.10.2.min.js') }}    
   {{ HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') }}    
   {{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}    
   {{ HTML::script('assets/plugins/hover-dropdown.min.js') }}    
   {{ HTML::script('assets/plugins/back-to-top.js') }}    
   {{ HTML::script('assets/plugins/bootstrap-notify/pnotify.custom.min.js') }}    
   {{ HTML::script('assets/plugins/countdown/jquery.countdown.js') }}    
   {{ HTML::script('assets/plugins/backstretch/jquery.backstretch.min.js') }}    
   {{ HTML::script('assets/js/app.js') }}    
   <script type="text/javascript">
      $.backstretch([
      
          "{{URL::to('assets/img/bg/5.jpg')}}",
          "{{URL::to('assets/img/bg/4.jpg')}}",
      
      
        ], {
          fade: 1000,
          duration: 7000
      });
   </script>
   <!-- JS Page Level -->           
   <script type="text/javascript">
      jQuery(document).ready(function() {
          App.init();
      });
   </script>
   <!--[if lt IE 9]>
   {{ HTML::script('assets/plugins/respond.js') }}    
   <![endif]-->
   </body>
</html>