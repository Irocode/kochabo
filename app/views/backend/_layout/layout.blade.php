<!DOCTYPE html>
<html>
   <head>
      <title>KochAbo.at CMS</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      {{ HTML::style('assets/backend/bootstrap/css/backend_bootstrap.css') }}   
      {{ HTML::script('assets/backend/js/holder.js') }}
      {{ HTML::script('assets/backend/js/jquery-ui-1.10.4.custom/development-bundle/jquery-1.10.2.js') }}    
      {{ HTML::script('assets/backend/js/company.js') }}    
      {{ HTML::script('assets/backend/js/jquery.2.0.3.js') }}  
      {{ HTML::script('assets/backend/bootstrap/js/bootstrap.min.js') }}
      {{ HTML::script('assets/backend/js/holder.js') }}
      {{ HTML::script('assets/backend/js/jquery.2.0.3.js') }}
      {{ HTML::style('assets/backend/plugins/fancybox/source/jquery.fancybox.css') }}
      {{ HTML::style('assets/backend/plugins/bootstrap/css/bootstrap.min.css') }}
      {{ HTML::style('assets/backend/plugins/bootstrap/css/bootstrap.css') }}
      {{ HTML::style('assets/backend/css/style.css') }}
      {{ HTML::style('assets/backend/css/company.css') }}
      {{ HTML::style('assets/backend/css/headers/header1.css') }}
      {{ HTML::style('assets/backend/css/responsive.css') }}
      {{ HTML::style('assets/backend/plugins/font-awesome/css/font-awesome.css') }}
      {{ HTML::style('assets/backend/plugins/flexslider/flexslider.css') }}
      {{ HTML::style('assets/backend/plugins/parallax-slider/css/parallax-slider.css') }}
      {{ HTML::style('assets/backend/css/pages/portfolio-v1.css') }}
      {{ HTML::style('assets/backend/css/style_template.css') }}
      {{ HTML::style('assets/backend/plugins/font-awesome/css/font-awesome.css') }}
      {{ HTML::style('assets/backend/css/pages/page_pricing.css') }}
      {{ HTML::style('assets/backend/css/bootstrap-datetimepicker.min.css') }}
      {{ HTML::style('assets/backend/plugins/bootstrap-notify/pnotify.custom.min.css') }}
      {{ HTML::style('assets/backend/plugins/tablesorter/media/css/jquery.dataTables.css') }}


   




<link rel="alternate stylesheet" href="{{URL::to('assets/backend/plugins/bootstrap/css/normal.css')}}" type="text/css" title="Normal" media="screen, projection">
<link rel="stylesheet" href="{{URL::to('/assets/backend/plugins/bootstrap/css/bootstrap_widescreen.css')}}" type="text/css" title="Standard" media="screen, projection">
 {{ HTML::script('assets/backend/plugins/bootstrap/css/switch.js') }}    
    
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
      {{ HTML::script('assets/backend/plugins/hover-dropdown.min.js') }}    
      {{ HTML::script('assets/backend/plugins/back-to-top.js') }}    
      {{ HTML::script('assets/backend/plugins/bootstrap-notify/pnotify.custom.min.js') }} 
      
     

   </body>
</html>