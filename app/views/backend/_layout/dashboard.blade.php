@extends('backend/_layout/layout')
@section('content')
@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
<style>
   a:link {color:#ffffff;}      /* unvisited link */
   a:visited {color:#ffffff;}  /* visited link */
   a:hover {color:#cccccc;}  /* mouse over link */
   a:active {color:#0000FF;}  /* selected link */
   a.left:link {  color:#000000; }
   a.left:visited {  color:#000000; }
   a.left:hover {  color:#85b81d; }
   a.left:active {  color:#85b81d; }
</style>
<div class="container ">
<div class="row">
   <div class="col-md-2">
      <a  class="left" href="#"><strong><i class="glyphicon glyphicon-briefcase"></i> Quick Shortcuts</strong></a>
      <hr>
      <div class="panel panel-default">
         <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
               <li><a class="left" href="{{ route('admin.form-post.index') }}"><i class="glyphicon glyphicon-envelope"></i> Inbox</a></li>
               <li><a class="left" href="{{ route('admin.log') }}"><i class="glyphicon glyphicon-tasks"></i> Logs</a></li>
               <li><a class="left" href="{{ route('admin.settings') }}"><i class="glyphicon glyphicon-cog"></i> Einstellungen</a></li>
               <li @if(isset($active) && $active=="logs") class="active" @endif><a class="left" href="{{ url('/admin/log') }}"><span class="glyphicon glyphicon-pushpin"></span>Logs</a></li>
                              
            </ul>
            <hr>
            <img class="img-responsive hidden-xs" alt="" src="<?php echo asset('assets/img/logos/logogross.png')?>">
         </div>
      </div>
   </div>
   <div class="col-md-10">
      <a class="left" href="#"><strong><i class="glyphicon glyphicon-briefcase"></i> Module</strong></a>
      <hr>
      <div class="row">
         <div class="col-xs-6 col-md-12">
            <a href="{{ route('admin.menu.index') }}" class="btn btn-danger btn " role="button"><span class="glyphicon glyphicon-list-alt"></span> Menüs</a>
            <a href="{{ route('admin.news.index') }}" class="btn btn-success btn " role="button" disabled><span class="glyphicon glyphicon-book"></span> Start</a>
            <a href="{{ route('admin.news.index') }}" class="btn btn-success btn " role="button" disabled><span class="glyphicon glyphicon-book"></span> So funktioniert's</a>
            <a href="{{ route('admin.news.index') }}" class="btn btn-success btn " role="button" disabled><span class="glyphicon glyphicon-book"></span> KochAbo Box</a>
            <a href="{{ route('admin.news.index') }}" class="btn btn-success btn " role="button" disabled><span class="glyphicon glyphicon-book"></span> Aktuelle Rezepte</a>
            <a href="{{ route('admin.news.index') }}" class="btn btn-success btn " role="button" disabled><span class="glyphicon glyphicon-book"></span> Obstbox</a>
            <a href="{{ route('admin.news.index') }}" class="btn btn-success btn " role="button" disabled><span class="glyphicon glyphicon-book"></span> Beispiel-Box</a>
            <br><br>    <a href="{{ route('admin.news.index') }}" class="btn btn-success btn " role="button" disabled><span class="glyphicon glyphicon-book"></span> Gutschein</a>
            <a href="{{ route('admin.news.index') }}" class="btn btn-success btn " role="button"><span class="glyphicon glyphicon-book"></span> News</a>
            <a href="{{ route('admin.offer.index') }}" class="btn btn-success btn " role="button"><span class="glyphicon glyphicon-download"></span> Angebot</a>
            <a href="{{ route('admin.article.index') }}" class="btn btn-success btn " role="button"><span class="glyphicon glyphicon-book"></span> Artikel</a>
            <a href="{{ route('admin.page.index') }}" class="btn btn-success btn " role="button"><span class="glyphicon glyphicon-book"></span> Seiten</a>
            <br><br>   <a href="{{ route('admin.photo_gallery.index') }}" class="btn btn-primary btn " role="button"><span class="glyphicon glyphicon-picture"></span> Photo Galerien</a>
            <a href="{{ route('admin.footer.index') }}" class="btn btn-danger btn " role="button"><span class="glyphicon glyphicon-sort-by-attributes"></span> Footer</a>
            <hr>
         </div>
         <div class="col-xs-6 col-md-12">
            <a href="{{ route('admin.slider.index') }}" class="btn btn-success btn " role="button" disabled><span class="glyphicon glyphicon-tint"></span> Sliders</a>
            <a href="{{ route('admin.userverwaltung.index') }}" class="btn btn-warning btn " role="button"><span class="glyphicon glyphicon-user"></span> Benutzer</a>
            <a href="{{ route('admin.form-post.index') }}" class="btn btn-info btn " role="button"><span class="glyphicon glyphicon-envelope"></span> Inbox</a>
            <a  href="{{ route('admin.settings') }}" class="btn btn-default btn  left" role="button"><span class="glyphicon glyphicon-cog"></span> Einstellungen</a>
         </div>
         </div
         <br>
         <br> <br>
         <a target="_blank" href="{{ route('dashboard') }}" class="btn btn-success btn btn-left" role="button"><span class="glyphicon glyphicon-globe"></span> KochAbo.at Website Voransicht</a>
      </div>
   </div>
   <br>
</div>
@else 
@endif
@stop