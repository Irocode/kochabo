<!--=== Top ===-->    
<div class="top" style="background-color:#fafafa">
   <div class="container">
      <ul class="loginbar pull-right">


{{var_dump(Session::all())}}

<br><br>



{{ Session::get('id') }}






<br><br>
      
         <li><a href="{{URL::to('page/5')}}" target="_top" >Hilfe</a></li>
         <li class="devider"></li>



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