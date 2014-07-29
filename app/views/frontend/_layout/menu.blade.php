
<!--=== Top ===-->    
<div class="top" style="background-color:#fafafa">
   <div class="container">
      <ul class="loginbar pull-right">

<!--{{var_dump(Session::all()); }} -->






         <li><a href="{{URL::to('page/5')}}" target="_top" >Hilfe</a></li>
         <li class="devider"></li>

<!--
<pre>
-->


<?php



if  (empty($displayName)) {} else {
//echo "$displayName";
 Session::put('email', $email);  

}

if  (empty($email)) {} else {
//echo "$email";
}



if  (empty($userProfile)) {} else {
//echo "$userProfile";
}




(Session::get('userProfile'))




?>
<!--
  @if (Sentry::check())
ja
 @else
 nein
  @endif

</pre>
<br>  
<!--
<pre>
-->
<!--
@if(Session::has('email'))
   <span>Du bist eingeloggt {{ Session::get('email') }}
@else
   <span>Du bist nicht eingeloggt</span>
@endif
<!--
</pre>
-->


         <!-- <li><a href="{{URL::to('')}}" target="_top">Mein Konto</a></li>  -->  
         @if (Sentry::check())
         <!--  <li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}><a href="{{ URL::to('users') }}/{{ Session::get('userId') }}">{{ Session::get('email') }}</a></li> -->  
         <li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}>{{ Session::get('email') }}</li>
         <li class="devider"></li>
         <li><a href="{{ URL::to('logout') }}">Logout</a></li>
         @else
         <li {{ (Request::is('/meinkontologin') ? 'class="active"' : '') }}><a href="{{ URL::to('/meinkontologin') }}">Login</a></li>
         <!--  <li {{ (Request::is('users/create') ? 'class="active"' : '') }}><a href="{{ URL::to('users/create') }}">Register</a></li> -->  
         @endif
      </ul>
   </div>
   <br>
   <!--=== End Top ===-->   
   <!--=== Header TOP ===-->    
   <!--=== Content Part ===--> 
   <div class="container portfolio-4-columns hidden-xs" style="background-color:#fafafa">
      <div class="row">
         <div class="col-md-2 col-sm-2">
            <div class="thumbnails thumbnail-style">


               <img class="img-responsive hidden-xs" src="{{URL::to('filemanager/userfiles/logo/logogross.png')}}" alt="" />
            </div>
         </div>
         <div class="col-md-2 col-sm-2">
            <div class="view view-tenth">

               <img class="img-responsive hidden-xs" src="{{URL::to('filemanager/userfiles/startseite/teaser/1.png')}}" alt="" />
               <div class="mask">
                  <h3>Liefer Info</h3>


                  <a href="{{URL::to('kochabobox')}}" class="info">Mehr lesen</a>
               </div>
            </div>
         </div>
         <div class="col-md-2 col-sm-2">
            <div class="view view-tenth">
               <img class="img-responsive hidden-xs" src="{{URL::to('filemanager/userfiles/startseite/teaser/2.png')}}" alt="" />
               <div class="mask">
                  <h3>Sicherheit</h3>
                  <a href="{{URL::to('kochabobox')}}" class="info">Mehr lesen</a>
               </div>
            </div>
         </div>
         <div class="col-md-2 col-sm-2">
            <div class="view view-tenth">
               <img class="img-responsive hidden-xs" src="{{URL::to('filemanager/userfiles/startseite/teaser/3.png')}}" alt="" />
               <div class="mask">
                  <h3>01-544 39 00</h3>
               </div>
            </div>
         </div>
         <div class="col-md-2 col-sm-2">
            <div class="view view-tenth">
               <img class="img-responsive hidden-xs" src="{{URL::to('filemanager/userfiles/startseite/teaser/4.png')}}" alt="" />
               <div class="mask">
                  <h3>Gütesiegel</h3>
                  <a href="{{URL::to('kochabobox')}}" class="info">Mehr lesen</a>
               </div>
            </div>
         </div>
         <div class="col-md-2 col-sm-2">
            <div class="view view-tenth">
               <img class="img-responsive hidden-xs" src="{{URL::to('filemanager/userfiles/startseite/teaser/5.png')}}" alt="" />
               <div class="mask">
                  <h3>Lieferzeiten</h3>
                  <a href="{{URL::to('kochabobox')}}" class="info">Mehr lesen</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--/row-->
   <!--=== End Header TOP ===-->  
</div>
<!--=== Start logo mobil ===-->  
<div class="container visible-xs" style="background-color:#fafafa">
   <div class="row" style="background-color:#fafafa">

   
      <div class="col-xs-3 col-sm-1"> <img class="img-responsive " src="{{URL::to('filemanager/userfiles/logo/logoklein.jpg')}}" alt="" /></div>
      <div class="col-xs-3 col-sm-1">
         <h2>
         KochAbo.at</h1>
      </div>
   </div>
</div>
<!--=== End logo mobil ===-->  
<!--=== Header ===-->    
<div class="header" style="background-color:#fafafa">
   <div class="navbar navbar-default" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav navbar-right">
               {{ $menus }}    
               <li class="hidden-sm"><a class="search"><i class="icon-search search-btn"></i></a></li>
            </ul>
            <form action={{ url('/search') }} method="GET" class="navbar-form" role="search">
            <div class="search-open">
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Suche"  value="{{ $q or null }}""  name="search" id="srch-term"">
                  <span class="input-group-btn">
                  <button class="btn-u" type="submit">Go</button>
                  </span>
               </div>
               <!-- /input-group -->                     
            </div>
            </form>             
         </div>
         <!-- /navbar-collapse -->
      </div>
   </div>
</div>


<!--/header-->
<!--=== End Header ===-->    
<script type="text/javascript">

   // $('.menu-item').addClass('active');
   
   $('.navbar-nav .menu-item').on('click', function(event) {
   
       $(this).addClass('active');
   
       event.stopPropagation();
       var url = $(this).find('a').attr('href');
       
       //console.log(url);
       window.location.href = url;
   });
   
   $('.navbar-nav .menu-item').on('mouseover', function(event) {
   
      $(this).addClass('open');
   });
   
   $('.navbar-nav .menu-item').on('mouseleave', function(event) {
   
      $(this).removeClass('open');
   
    
   
   });
   
   $('ul.dropdown-menu [data-toggle=dropdown]').on('mouseover', function(event) {
   
       // Avoid following the href location when clicking
       event.preventDefault();
       // Avoid having the menu to close when clicking
       event.stopPropagation();
       // If a menu is already open we close it
       //$('ul.dropdown-menu [data-toggle=dropdown]').parent().removeClass('open');
       // opening the one you clicked on
       $(this).parent().addClass('open');
   
   
       var menu = $(this).parent().find("ul");
       var menupos = menu.offset();
   
       if ((menupos.left + menu.width()) + 30 > $(window).width()) {
           var newpos = - menu.width();
       } else {
           var newpos = $(this).parent().width();
       }
       menu.css({ left:newpos });
   });
</script>






<!-- AKTUELLE EMAIL ADDRESSE ANFANG-->
<?php
$conformemail = Session::get('conformemail');
$conformemailaddress = Session::get('conformemailaddress');
$conformuser_id = Session::get('conformuser_id');

if (isset($conformemail)) {
//if ($conformemail="yes") {echo "IST DAS DEINE RICHTIGE ADDRESSE";}


if ($conformemail="yes") {

  ?>
  <style>
.in {
background: rgba(0, 0, 0, 0.3);
}
</style>

     <script type="text/javascript">
            $(window).load(function(){
                $('#myModal').modal('show');
            });
        </script>

<!-- Button trigger modal -->

   {{ Form::open( array( 'action' => array( 'ConformeemailController@update', $conformuser_id), 'method' => 'PATCH')) }}
<!-- Modal -->
<div class="container">


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"u aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Schließen</span></button>
        <h4 class="modal-title" id="myModalLabel">Aktuelle E-Mail Adresse?</h4>
      </div>
      <div class="modal-body">
<br>
Ist <strong>


<?php
if (isset($conformemailaddress)) {
 echo " $conformemailaddress " ;


}


     ?></strong>
deine aktuelle E-Mail Adresse?<br>

<br>
Nein! Dann einfach im folgenden Eingabefeld ändern und speichern.<br><br>
   <div class="row">
      <div class="col-md-6">
      
         <!-- fbaktuelleemail -->
         <div class="control-group {{ $errors->has('fbaktuelleemail') ? 'has-error' : '' }}">
            <label class="control-label" for="fbaktuelleemail">Aktuelle E-Mail Adresse </label>
            <div class="controls">         
               {{ Form::text('fbaktuelleemail', $conformemailaddress, array('class'=>'form-control', 'id' => 'fbaktuelleemail',  'placeholder'=>'Aktuelle E-Mail Adresse', 'value'=>Input::old('fbaktuelleemail'))) }}
               @if ($errors->first('fbaktuelleemail'))
               <span class="help-block">{{ $errors->first('fbaktuelleemail') }}</span>
               @endif
            </div>
         </div>
 
          </div> </div>




<div class="row">
      <div class="col-md-12">
           <br><i>
      Info: Deine Facebook Login E-Mail Adressen muss nicht zwangsläufig deine aktuelle E-Mail Addresse sein. Um dich jederzeit für wichtige Nachrichten erreichen zu können, kannst du hier deine aktuelle E-Mail eintragen. </i>

 </div> </div>
      </div>

     


      <div class="modal-footer">

<div class="row">
  <div class="col-md-6">


         {{ Form::submit('Nein! Neue E-Mail Adresse wird gespeichert', array('class' => 'btn btn-u')) }} 
         {{ Form::close() }}

        </div>
  <div class="col-md-6">

         {{ Form::open( array( 'action' => array( 'ConformeemailController@destroy', $conformuser_id), 'method' => 'PATCH')) }}
         {{ Form::submit('E-Mail Adresse ist aktuell.', array('class' => 'btn btn-default')) }} 
         {{ Form::close() }}

        </div>
</div>
         
      </div>
    </div>
  </div>
</div>
</div>




<?php
}

}
?>
<!-- AKTUELLE EMAIL ADDRESSE Ende-->