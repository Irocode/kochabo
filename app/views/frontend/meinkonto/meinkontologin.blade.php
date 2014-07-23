<!-- CSS Global Compulsory-->
   
            {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
            {{ HTML::style('assets/css/style.css') }}
             {{ HTML::style('assets/css/company.css') }}
            {{ HTML::style('assets/css/headers/header1.css') }}
            {{ HTML::style('assets/css/responsive.css') }}
            {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css') }}
            {{ HTML::style('assets/css/pages/page_log_reg_v2.css') }}
            {{ HTML::style('assets/css/themes/default.css') }}
            {{ HTML::style('assets/css/bootstrap-datetimepicker.min.css') }}
           



<!--=== Content Part ===-->    
<div class="container" >
    <!--Reg Block-->
    <div class="reg-block">
      @if(Session::has('error_msg'))
                <div class="alert alert-danger">{{Session::get('error_msg')}}</div>
                @endif                
                @if(Session::has('success_msg'))
                <div class="alert alert-success">{{Session::get('success_msg')}}</div>
                @endif


      {{Form::open(array('url'=>'/login','method'=>'post'))}}
        <div class="reg-block-header">
            <h2>Login</h2>
            <ul class="list-inline style-icons text-center">

            

                <li><a href="{{URL::to('')}}"><i class="icon-home icon-round icon-round-sm icon-color-grey"></i></a></li>
               <!-- <li><a href="#"><i class="icon-linkedin icon-round icon-round-sm icon-color-grey"></i></a></li>-->
                <li><a href="https://www.facebook.com/KochAbo"><i class="icon-facebook icon-round icon-round-sm icon-color-grey"></i></a></li>
                <li><a href="https://twitter.com/kochabo_at"><i class="icon-twitter icon-round icon-round-sm icon-color-grey"></i></a></li>               

                <li><a href="{{URL::to('article')}}"><i class="icon-rss icon-round icon-round-sm icon-color-grey"></i></a></li>
            </ul>
        </div>

        <div class="input-group margin-bottom-20 {{ ($errors->has('email')) ? 'has-error' : '' }} ">
            <span class="input-group-addon"><i class="icon-envelope"></i></span>
            <input value="{{Input::old('identity')}}" class="form-control" type="text" placeholder="Username/Email" autofocus required="" id="username" name="identity"/>

        
          {{ ($errors->has('email') ? $errors->first('email') : '') }}
        </div>
        <div class="input-group margin-bottom-20 {{ ($errors->has('password')) ? 'has-error' : '' }}">
            <span class="input-group-addon"><i class="icon-lock"></i></span>
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Passwort'))}}
             {{ ($errors->has('password') ?  $errors->first('password') : '') }}
        </div>
        <hr>
        <label class="checkbox">
            <input type="checkbox"> 
            <p>Merken</p>
        </label>
                                
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <button type="submit" class="btn-u btn-block">Mit E-Mail anmelden</button>
            </div>
        </div>
<div style="height:5px"></div>
 <div class="row">
 <div class="col-md-10 col-md-offset-1" style="text-align:center"> oder </div>
  </div>
  <div style="height:5px"></div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1"> 
 <a href="{{URL::to('http://local.kochabo.at')}}/social/Facebook" class="btn btn-facebook btn-lg btn-block"><span style="margin-left:-40px"><img src="{{ URL::to('')}}/assets/img/frontend/images/bg/fb.png" width="22" height="21"></span>  &nbsp;&nbsp;&nbsp;mit Facebook anmelden</a>

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





















<!-- ALT und gut


<!--=== Content Part ===-->   <!--   
<div class="container" >
    <!--Reg Block-->  <!--
    <div class="reg-block">
        {{ Form::open(array('action' => 'SessionController@store')) }}
        <div class="reg-block-header">
            <h2>Login</h2>
            <ul class="list-inline style-icons text-center">

            

                <li><a href="{{URL::to('')}}"><i class="icon-home icon-round icon-round-sm icon-color-grey"></i></a></li>
               <!-- <li><a href="#"><i class="icon-linkedin icon-round icon-round-sm icon-color-grey"></i></a></li>-->  <!--
                <li><a href="https://www.facebook.com/KochAbo"><i class="icon-facebook icon-round icon-round-sm icon-color-grey"></i></a></li>
                <li><a href="https://twitter.com/kochabo_at"><i class="icon-twitter icon-round icon-round-sm icon-color-grey"></i></a></li>

               

                <li><a href="{{URL::to('article')}}"><i class="icon-rss icon-round icon-round-sm icon-color-grey"></i></a></li>
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
        </div>
        <hr>
        <label class="checkbox">
            <input type="checkbox"> 
            <p>Merken</p>
        </label>
                                
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <button type="submit" class="btn-u btn-block">Mit E-Mail anmelden</button>
            </div>
        </div>
 <br>
 <div class="row">
 <div class="col-md-10 col-md-offset-1" style="text-align:center"> oder </div>
  </div>
  <br>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 <button class="btn btn-facebook btn-lg btn-block" type="button" data-dismiss="modal">mit Facebook anmelden</button>
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