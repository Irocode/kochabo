@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
<div class="navbar navbar-inverse navbar-fixed-top">

      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         {{ HTML::link('/admin','KochAbo CMS', array('class' => 'navbar-brand')) }}
      </div>
      <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
            <li @if(isset($active) && $active=="home") class="active" @endif><a href="{{ url('/admin') }}"><span class="glyphicon glyphicon-home"></span>Dashboard</a></li>
            <li><a href="{{ url('/admin/menu') }}"><span class="glyphicon glyphicon-list-alt"   ></span>Menu</a></li>
            <li class="dropdown {{ ((isset($active) && $active=='modules') ? 'active' : '') }}">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tint"></span>Module <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li>{{ HTML::link('/admin/menu','Menus') }}</li>
                  <!--  <li>{{ HTML::link('/admin/dashboard','Start') }}</li>-->
                  <!--   <li>{{ HTML::link('/admin/sofunktioniertes','So  funktionierts') }}</li> -->
                  <!--  <li>{{ HTML::link('/admin/kochabobox','KochAbo Box') }}</li>-->
                  <!--   <li>{{ HTML::link('/admin/aktuellerezepte','Aktuelle Rezepte') }}</li>-->
                  <!--    <li>{{ HTML::link('/admin/obstbox','Obstbox') }}</li>-->
                  <!--    <li>{{ HTML::link('/admin/beispielbox','Beispielbox') }}</li>-->
                  <!--   <li>{{ HTML::link('/admin/gutschein','Gutschein') }}</li>-->
                  <li>{{ HTML::link('/admin/news','News') }}</li>
                  <li>{{ HTML::link('/admin/offer','Angebote') }}</li>
                  <li>{{ HTML::link('/admin/page','Pages') }}</li>
                  <li>{{ HTML::link('/admin/photo_gallery','Photo Galerie') }}</li>
                  <li>{{ HTML::link('/admin/footer','Footer') }}</li>
               </ul>
            </li>
            <li class="dropdown {{ ((isset($active) && $active=='blog') ? 'active' : '') }}">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"></span>Blog <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li>{{ HTML::link('/admin/article','Artikel') }}</li>
                  <li>{{ HTML::link('/admin/category','Kategorien') }}</li>
               </ul>
            </li>
            <!--
               <li class="dropdown {{ ((isset($active) && $active=='plugins') ? 'active' : '') }}">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tint"></span>Plugins <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                       <li>{{ HTML::link('/admin/slider','Slider Managment') }}</li>
                   </ul>
               </li>
               -->
            <li class="dropdown {{ ((isset($active) && $active=='plugins') ? 'active' : '') }}">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Benutzer <b class="caret"></b></a>
               <ul class="dropdown-menu">
                 
                
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/users') }}"><span class="glyphicon glyphicon-user"></span>Benutzer Ban/Rechte</a></li>
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/groups') }}"><span class="glyphicon glyphicon-fire"></span>Benutzer Gruppen</a></li>
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/groups/create') }}"><span class="glyphicon glyphicon-fire"></span>Benutzer Neue Gruppen</a></li>
               </ul>
            </li>
            <li class="dropdown {{ ((isset($active) && $active=='plugins') ? 'active' : '') }}">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Kunden <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/customer_management') }}"><span class="glyphicon glyphicon-user"></span>Kunden verwalten</a></li>                
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/address') }}"><span class="glyphicon glyphicon-user"></span>Kunden Adressen (Alle)</a></li>
                   <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/customers_groups') }}"><span class="glyphicon glyphicon-user"></span>Kunden Gruppen</a></li>
                 
               </ul>
            </li>

 <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/newsletter') }}"><span class="glyphicon glyphicon-list-alt"></span>Newsletter</a></li>

              <li class="dropdown {{ ((isset($active) && $active=='plugins') ? 'active' : '') }}">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Bestellungen <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/order_all') }}"><span class="glyphicon glyphicon-shopping-cart"></span>Bestellungen verwalten</a></li>
                   <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/order_items') }}"><span class="glyphicon glyphicon-folder-close"></span>Artikel Bestellungen </a></li>
                   <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/order_status_history') }}"><span class="glyphicon glyphicon-screenshot"></span>Bestellung Historie</a></li>
           
               </ul>
            </li>



            <li class="dropdown {{ ((isset($active) && $active=='plugins') ? 'active' : '') }}">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span>Logistik <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/logisticianmanager') }}"><span class="glyphicon glyphicon-tasks"></span>Logistiker verwalten</a></li>
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/deliveryzipcode') }}"><span class="glyphicon glyphicon-globe"></span>Liefergebiete hinzufügen</a></li>
                  <!--  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/deliverytimes') }}"><span class="glyphicon glyphicon-tasks"></span>Logistik Zeiten</a></li>-->
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/deliveryassign/1/group') }}"><span class="glyphicon glyphicon-list-alt"></span>Liefergebiete zuweisen</a></li>
                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/deliverycalendar') }}"><span class="glyphicon glyphicon-calendar"></span>Lieferkalender</a></li>
                
               </ul>
            </li>


               <li class="dropdown {{ ((isset($active) && $active=='plugins') ? 'active' : '') }}">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-close"></span>Produkte <b class="caret"></b></a>
               <ul class="dropdown-menu">

                  <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/products') }}"><span class="glyphicon glyphicon-folder-close"></span>Produkte verwalten</a></li>
               </ul>
            </li>

                <li class="dropdown {{ ((isset($active) && $active=='plugins') ? 'active' : '') }}">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cutlery"></span>Rezepte <b class="caret"></b></a>
               <ul class="dropdown-menu">
             <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/recipe') }}"><span class="glyphicon glyphicon-cutlery"></span>Rezept</a></li>
             <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/ingredients') }}"><span class="glyphicon glyphicon-plus"></span>Zutaten</a></li>
             </ul>



         </ul>
         <ul class="nav navbar-nav navbar-right">
            <li @if(isset($active) && $active=="form-post") class="active" @endif><a href="{{ url('/admin/form-post') }}"><span class="glyphicon glyphicon-envelope"></span>Inbox <span class="label label-info">{{ $formPostCount }}</span></a></li>
            <li @if(isset($active) && $active=="settings") class="active" @endif><a href="{{ url('/admin/settings') }}"><span class="glyphicon glyphicon-cog"></span>Einst.</a></li>
            <li @if(isset($active) && $active=="user") class="active" @endif><a href="{{ url('/admin/list_settings_all') }}"><span class="glyphicon glyphicon-cog"></span>Filter Settings</a></li>

            <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
         </ul>



        

      </div>
   </div>

<!--GLOBALE VARIABLE FÜR FTP jquery-file-upload -->
<script>
   var urlpathdomain =window.location.host;
   // alert("Sie befinden sich auf dem Host " + window.location.host);
   
   
</script>
@endif