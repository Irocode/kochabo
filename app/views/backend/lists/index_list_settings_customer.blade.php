@extends('backend/_layout/layout')
@section('content')
<div class="container">
   <div class="page-header">
      <h3>
         Filter auswählen und bearbeiten
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


  </div>  <br>
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

@stop