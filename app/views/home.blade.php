@extends('layouts.default')
{{-- Web site Title --}}
@section('title')
@parent
{{trans('pages.helloworld')}}
@stop
{{-- Content --}}
@section('content')




<div class="container">
   <div class="row">
      <div class="col-lg-12">
         <p>
            <!-- CSS Global Compulsory--><!-- CSS Implementing Plugins --><!-- CSS Theme --><!-- CSS Implementing Plugins --><!-- CSS Theme -->
            @if (Sentry::check() )
         <div class="row">
            <div class="headline">
               <h2>Information</h2>
            </div>
            <h4>Hier findest du alle wichtigen Informationen zu deinen gekauften Artikeln.</h4>
            <p>Zur <a href="{{ URL::to('users')}}/{{ Session::get('userId')}}" target="_self">Übersicht</a> meiner Bestellung.</p>
         </div>
         @else
         <div class="row">
            <div class="headline">
               <h2>Information</h2>
            </div>
            <p> Um in dein Konto zu gelangen musst du dich davor anmelden. Benutze dazu bitte unser <a class='btn-u btn-u-red btn-u-large'  target="_top" href="{{URL::to('meinkontologin')}}">LOGIN</a></p>
         </div>
         @endif 
         <!--
            @if (Sentry::check() )
                <div class="panel panel-success">
                     <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-ok"></span> {{trans('pages.loginstatus')}}</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>{{trans('pages.sessiondata')}}:</strong></p>
                        <pre>{{ var_dump(Session::all()) }}</pre>
                    </div>
                </div>
            @endif 
            -->
         @if (Sentry::check() )
         <br><br>
         <div class="row">
            <div class="headline">
               <h2>Angebot der Woche</h2>
            </div>
         </div>
         <div class="row servive-block margin-bottom-10">
            <div class="col-md-3 col-sm-6">
               <div class="servive-block-in">
                  <h4>Megafressibox</h4>
                  <div><i class="icon-comments-alt"></i></div>
                  <p>Direkt von McFit mit vielen Ballaststoffen.</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="servive-block-in">
                  <h4>Multisaufibox</h4>
                  <div><i class="icon-comments-alt"></i></div>
                  <p>Direkt von McFit mit Kraftcocktails.</p>
               </div>
            </div>
         </div>
         @endif 
      </div>
   </div>
</div>
@stop