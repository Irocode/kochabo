@extends('frontend/_layout/layout')
@section('content')
<div class="breadcrumbs margin-bottom-40">
   <div class="container">
      <h1 class="pull-left">E-Mail Newsletter</h1>
      <ul class="pull-right breadcrumb">
         <li>
            <a href="http://127.0.0.1/laravel/kochabo">Home</a>
         </li>
         <li class="active">Newsletter</li>
      </ul>
   </div>
</div>
<div  class="container">
   <div class="row">
      <div class="col-md-12 col-sm-12">
         <!-- will be used to show any messages -->
         @if (Session::has('message'))
         <div class="alert alert-info">{{ Session::get('message') }}</div>
         @endif
      </div>
   </div>
   <div class="row">
      <div class="col-md-3 col-sm-3">
         <style>
            ul {list-style-type: none;
            color:#fed51c;
            margin-left: -37px; 
            ul li
            {  
            list-style-type: none;
            color:#fed51c;
            }
         </style>
         {{ HTML::ul($errors->all() )}}
         {{ Form::open(array('url' => 'newslettereintrag')) }}
         <form class="footer-subsribe">
            <div class="input-group">
               <input type="text" name="email" class="form-control" placeholder="E-Mail Adresse">   
               <input type="hidden" name="code" class="form-control" value="{{$code = str_pad(rand(0, 9999999), 4, '0', STR_PAD_LEFT);}}">                            
               <span class="input-group-btn">
               <button class="btn-u" type="submit">Eintragen</button>
               </span>
            </div>
            <!-- /input-group -->                    
         </form>
         {{ Form::close() }}
      </div>
   </div>
</div>
@stop