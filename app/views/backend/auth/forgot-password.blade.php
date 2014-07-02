<!DOCTYPE html>
<html>
<head>
    <title>KochAbo.at CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- CSS are placed here -->
       
       {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
       {{ HTML::style('assets/css/style.css') }}
       {{ HTML::style('assets/css/headers/header1.css') }}
       {{ HTML::style('assets/css/responsive.css') }}
       {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css') }}
       {{ HTML::style('assets/css/pages/page_log_reg_v2.css') }}
       {{ HTML::style('assets/css/themes/default.css') }}
       {{ HTML::style('assets/css/bootstrap-datetimepicker.min.css') }}
       {{ HTML::style('assets/plugins/bootstrap-notify/pnotify.custom.min.css') }}

       {{ HTML::script('assets/plugins/bootstrap-notify/pnotify.custom.min.js') }}   

</head>

<div class="container">
    <div class="row">
        <div style="text-align: center" class="col-md-4 col-md-offset-4">
            <h1 style="color: #FFFFFF">KochAbo.at CMS</h1>

            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center"><b>Passwort vergessen</b></h5>
                    {{ Form::open(array('action' => 'SessionController@forgotperemail', 'method' => 'post')) }}

                    @if ($errors->has('forgot-password'))
                    <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{{ $errors->first('forgot-password', ':message') }}
                    </div>
                    @endif

                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>{{ $errors->first('email', ':message') }}
                    </div>
                    @endif

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            {{ Form::text('email', null,array('class' => 'form-control', 'placeholder'=>'E-Mail', 'autofocus'=>'')) }}
                        </div>
                    </div>
                      
                    
                       

                    {{ Form::submit('Passwort senden', array('class' => 'btn-u btn-block', 'role'=>'button')) }}<br>
                    <br>
                    {{ Session::get('message') }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JS Global Compulsory -->  
 {{ HTML::script('assets/plugins/jquery-1.10.2.min.js') }}
 {{ HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') }}
 {{ HTML::script('assets/plugins/jquery-1.10.2.min.js') }}
 {{ HTML::script('assets/plugins/jquery-migrate-1.2.1.min.js') }}
 {{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
 {{ HTML::script('assets/plugins/hover-dropdown.min.js') }}
 {{ HTML::script('assets/plugins/countdown/jquery.countdown.js') }}
 {{ HTML::script('assets/plugins/back-to-top.js') }}
 {{ HTML::script('assets/plugins/backstretch/jquery.backstretch.min.js') }}                                             
                                  


<script type="text/javascript">
    $.backstretch([

        "{{ URL::to('assets/img/bg/5.jpg') }}",
        "{{ URL::to('assets/img/bg/4.jpg') }}",
    
     
      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<!-- JS Page Level -->           
      {{ HTML::script('assets/js/app.js') }}

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
<![endif]-->
</body>
</html>
