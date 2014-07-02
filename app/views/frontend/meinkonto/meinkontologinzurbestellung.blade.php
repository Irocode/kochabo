<!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/headers/header1.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="favicon.ico">        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/pages/page_log_reg_v2.css">    
    <!-- CSS Theme -->    



<!--=== Content Part ===-->    
<div class="container" >
    <!--Reg Block-->
    <div class="reg-block">
        {{ Form::open(array('action' => 'SessionController@store')) }}
        <div class="reg-block-header">
            <h2>Login</h2>
{{$user_id= Input::get('user_id'); }} 

<?php echo"$user_id";?>





            <ul class="list-inline style-icons text-center">
                <li><a href="{{ URL::to('') }}"><i class="icon-home icon-round icon-round-sm icon-color-grey"></i></a></li>
               <!-- <li><a href="#"><i class="icon-linkedin icon-round icon-round-sm icon-color-grey"></i></a></li>-->
                <li><a href="https://www.facebook.com/KochAbo"><i class="icon-facebook icon-round icon-round-sm icon-color-grey"></i></a></li>
                <li><a href="https://twitter.com/kochabo_at"><i class="icon-twitter icon-round icon-round-sm icon-color-grey"></i></a></li>
                <li><a href="{{ URL::to('article') }}"><i class="icon-rss icon-round icon-round-sm icon-color-grey"></i></a></li>
            </ul>
        </div>

        <div class="input-group margin-bottom-20 {{ ($errors->has('email')) ? 'has-error' : '' }} ">
            <span class="input-group-addon"><i class="icon-envelope"></i></span>
        {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-Mail Adresse', 'autofocus')) }}
          {{ ($errors->has('email') ? $errors->first('email') : '') }}
        </div>
        <div class="input-group margin-bottom-20 {{ ($errors->has('password')) ? 'has-error' : '' }}">
            <span class="input-group-addon"><i class="icon-lock"></i></span>
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Passwort'))}}
            {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            {{ Form::hidden('user_id', $user_id); }}              
            {{  Form::hidden('zurbestellung', '1'); }}
            
        </div>
        <hr>
        <label class="checkbox">
            <input type="checkbox"> 
              <p>Merken</p>
        </label>
                                
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <button type="submit" class="btn-u btn-block">Eintreten</button>
            </div>
        </div>
 <br>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <a style="text-align:center" class='btn btn-sm btn-default btn-block'  target="_top" href="{{URL::to('forgot')}}">Passwort vergessen?</a>
            </div>
        </div>


 {{ Form::close() }}  

    </div>
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->


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
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
<![endif]-->
