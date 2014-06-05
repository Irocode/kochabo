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

@stop