@extends('backend/_layout/layout')
@section('content')
<!--CUSTOMER-->
<div class="container">
   <div class="page-header">
      <h3>
         Kunden- und Adressen Bereich Filter
         <div class="pull-right">
            <a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
         </div>
      </h3>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <br>
         <div class="row">
            <div class="col-md-6">
               <a href="{{URL::to('admin/list_abotyp')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Abo Typ
               </a>               
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-md-6">
               <a href="{{URL::to('admin/list_gruppe')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Gruppe
               </a>               
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-md-6">
               <a href="{{URL::to('admin/list_status')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Status
               </a>               
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="headline">
            <h2>Hinweis</h2>
         </div>
         <blockquote class="hero">
            <p>Damit kannst du die Suchfilter im Kunden-Bereich anpassen. </p>
            <small class="color-green">
            Abo Typ
            <cite title="Source Title"></cite>
            </small>
            <small class="color-green">
            Gruppen 
            <cite title="Source Title"> </cite>
            </small>
            <small class="color-green">
            Status (Wird zugleich im Kundenanlage-, sowie im Adress Bereich verwendet)
            <cite title="Source Title"> </cite>
            </small>
         </blockquote>
      </div>
   </div>
</div>
<br>
<br>
</div>
</div>  
<!--Products-->
<div class="container">
   <div class="page-header">
      <h3>
         Produkte-Bereich Filter 
         <div class="pull-right">
            <a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
         </div>
      </h3>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <br>
         <div class="row">
            <div class="col-md-6">
               <a href="{{URL::to('admin/list_ust')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Ust
               </a>               
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-md-6">
               <a href="{{URL::to('admin/list_recipe_type')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Rezept Typ
               </a>               
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-md-6">
               <a href="{{URL::to('admin/list_type')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Typ
               </a>               
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-md-6">
               <a href="{{URL::to('admin/list_currency')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Währung
               </a>               
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="headline">
            <h2>Hinweis</h2>
         </div>
         <blockquote class="hero">
            <p>Damit kannst du die Suchfilter im Produkte-Bereich anpassen. </p>
            <small class="color-green">
            Ust
            <cite title="Source Title"></cite>
            </small>
            <small class="color-green">
            Rezept Filter 
            <cite title="Source Title"> </cite>
            </small>
            <small class="color-green">
            Typ
            <cite title="Source Title"> </cite>
            </small>
            <small class="color-green">
            Währung
            <cite title="Source Title"> </cite>
            </small>
         </blockquote>
      </div>
   </div>
</div>
<br>
<br>
</div>
</div>  
<!--Logistik-->
<div class="container">
   <div class="page-header">
      <h3>
         Logistik-Bereich Filter
         <div class="pull-right">
            <a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
         </div>
      </h3>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <br>
         <div class="row">
            <div class="col-md-6">
               <a href="{{URL::to('admin/list_bundesland')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Bundesländer
               </a>               
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="headline">
            <h2>Hinweis</h2>
         </div>
         <blockquote class="hero">
            <p>Damit kannst du die Suchfilter im Logistiker-Bereich anpassen. </p>
            <small class="color-green">
            Bundesländer
            <cite title="Source Title"></cite>
            </small>
         </blockquote>
      </div>
   </div>
</div>
<br>
<br>
</div>
</div>  
<!--Rezepte-->
<div class="container">
   <div class="page-header">
      <h3>
         Rezept-Bereich Filter
         <div class="pull-right">
            <a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
         </div>
      </h3>
   </div>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <br>
         <div class="row">
            <div class="col-md-6">
               <a href="{{URL::to('admin/list_einheit')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Einheit
               </a>               
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="headline">
            <h2>Hinweis</h2>
         </div>
         <blockquote class="hero">
            <p>Damit kannst du die Suchfilter im Rezept-Bereich anpassen. </p>
            <small class="color-green">
            Einheit
            <cite title="Source Title"></cite>
            </small>
         </blockquote>
      </div>
   </div>
</div>
<br>
<br>
</div>
</div>  
@stop