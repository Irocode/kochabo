<!DOCTYPE html>
<html>
   <head>
      <title>KochAbo.at CMS</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css') }}
      {{ HTML::style('assets/css/pages/page_pricing.css') }}
      {{ HTML::style('assets/css/bootstrap-datetimepicker.min.css') }}
      {{ HTML::style('assets/plugins/bootstrap-notify/pnotify.custom.min.css') }}
      {{ HTML::style('assets/plugins/tablesorter/media/css/jquery.dataTables.css') }}


   



<link rel="stylesheet" href="{{URL::to('assets/plugins/bootstrap/css/stichpunkt0.css')}}" type="text/css" title="Standard" media="screen, projection">
<link rel="alternate stylesheet" href="{{URL::to('/assets/plugins/bootstrap/css/bootstrap_widescreen.css')}}" type="text/css" title="Systemeinstellungen" media="screen, projection">
 {{ HTML::script('assets/plugins/bootstrap/css/switch.js') }}    
    
      <!--
         Beispiele für Datepicker
         <script type="text/javascript">
             $('.form_datetime').datetimepicker({
                 //language:  'de',
                 weekStart: 1,
                 todayBtn:  1,
               autoclose: 1,
               todayHighlight: 1,
               startView: 2,
               forceParse: 0,
                 showMeridian: 1
             });
            $('.form_date').datetimepicker({
                 language:  'de',
                 weekStart: 1,
                 todayBtn:  1,
               autoclose: 1,
               todayHighlight: 1,
               startView: 2,
               minView: 2,
               forceParse: 0
             });
            $('.form_time').datetimepicker({
                 language:  'de',
                 weekStart: 1,
                 todayBtn:  1,
               autoclose: 1,
               todayHighlight: 1,
               startView: 1,
               minView: 0,
               maxView: 1,
               forceParse: 0
             });
         </script>
         
         
         -->
      <style>
         @section('styles')
         body {
         padding-top: 100px;
         }
         @show
      </style>
   </head>
   <body>
      @include('backend/_layout/menu')
      @if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
      @yield('content')
      @else
      <script type="text/javascript">
         window.location = "{{URL::to('admin/login')}}"
      </script>
      <div class="container" >
         <div class="row">
            <div class="col-xs-6 col-md-12">
               <h1 style='text-align:center'>Sie haben keinen Zugang! <br><br> 
                  {{ Sentry::logout();}}
                  <a href="{{ url('/admin/login') }}"><span class="glyphicon glyphicon-off"></span>Admin-Login</a>
               </h1>
               <br>
            </div>
         </div>
      </div>
      @endif
      @include('backend/_layout/footer')
      <div class="modal" id="addWidgetModal">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title">Add Widget</h4>
               </div>
               <div class="modal-body">
                  <p>Add a widget stuff here..</p>
               </div>
               <div class="modal-footer">
                  <a href="#" class="btn">Close</a>
                  <a href="#" class="btn btn-primary">Save changes</a>
               </div>
            </div>
         </div>
      </div>
      {{ HTML::script('assets/plugins/hover-dropdown.min.js') }}    
      {{ HTML::script('assets/plugins/back-to-top.js') }}    
      {{ HTML::script('assets/plugins/bootstrap-notify/pnotify.custom.min.js') }} 
      
     

   </body>
</html>