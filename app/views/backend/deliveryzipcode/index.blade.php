@extends('backend/_layout/layout')
@section('content')

<div class="container">
   {{ Notification::showAll() }}
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Liefergebiete hinzufügen</h3>
      </div>




      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <!--<a href="{{ URL::route('admin.deliveryzipcode.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Kunden Adresse
               </a>
               -->
               <a href="{{ URL::route('admin.deliveryzipcode.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Postleitzahl anlegen
               </a>
            </div>
         </div>
         <br>
         <br>


{{ Form::open(array( 'keyword'=>'form_postleitzahl', 'action' => 'App\Controllers\Admin\SearchbackenddeliveryzipcodeController@search')) }}
<div class="row">

  <div class="col-md-4">
    

      
            <div class="search-open">
               <div class="input-group">

                    <!--   <form action="" method="POST" id="form_postleitzahl">-->
               
              {{ Form::text('keyword', null, array('class'=>'form-control', 'id' => 'zip', 'placeholder'=>'Postleitzahl Suche', 'value'=>Input::old('keyword'))) }}      
         
                     
                  <span class="input-group-btn">
                  <button class="btn-u" type="submit">Go</button><span id="flash"></span>   
                  </span>
               </div>
               <!-- /input-group -->                     
            </div>
              



  </div>  <div class="col-md-2">  
</div>  
</div>  

 {{ Form::close() }}


<div id="output_search"> </div>
         <br>



</div></div></div>


<div class="container">
 

     <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Postleitzahlen</h3>
      </div>  </div>  



 <div class="row">
         @if($deliveryzipcode->count())
         @foreach( $deliveryzipcode as $v ) 
<div class="col-md-4">
<div class="row">

<div class="col-md-2">
<a class="btn-u "> {{{ $v->zip }}}</a>
</div>

<div class="col-md-2">
  <a class="btn-u btn-u-red" href="{{ URL::route('admin.deliveryzipcode.delete', array($v->id)) }}">Löschen</a><br>   <br>       
</div>
   </div>
  </div>
  @endforeach
         @else
         <div class="alert alert-danger">Keine Postleitzahl gefunden</div>
         @endif


      </div>
    </div> 


<div class="container">
      <!-- Plichtfeld Anfang -->

<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->



   <div class="pull-left">
      <ul class="pagination">
         {{ $deliveryzipcode->links() }}
      </ul>
   </div>




</div>




           
         
    




@stop