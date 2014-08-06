@extends('backend/_layout/layout')
@section('content')
{{ Notification::showAll() }}

<div id="Notification2" class="Notification2"></div>
<div class="container">
   <div class="row">

      <div id="info" class="alert alert-info info" style="display: none;">
         <ul></ul>
      </div>
   </div>
</div>
</div>  
<div class="container">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">{{ $logisticianmanager->name }}</h3>
         Letztes mal verändert: {{ $logisticianmanager->updated_at }} 
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ url('admin/logisticianmanager') }}"
                  class="btn btn-u">
               <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Zurück
               </a>
            </div>
         </div>
         <br>
         <br>
         <div class="row">
            <div class="col-md-5">
               <div class="headline">
                  <h2>Logistiker wählen</h2>
               </div>
               <form name="form1" method="post" action=""  >
                  <select  name="select" size="5" class="notinvalid">
                     @foreach($logisticianmanager_all as $x)
                     <option   id="change_{{ $x->id }}" value="{{ $x->id }}">{{ $x->name }} </option>
                     <!--  Handler for change url-->
                     <script>
                        $( "#change_{{ $x->id }}" ).click(function() {
                        
                        
                       
                        
                          $("#flash").show();
                          $("#flash").fadeIn(1000).html('<img src="  {{ URL::to('assets/backend/img/backend/icons/ajax-loader_long.gif') }}" />'); 
                          $("#flash").fadeOut(1000);
                        
                        


                        setTimeout(function() { 
                        window.location = "{{URL::to('admin/deliveryassign')}}/{{ $x->id }}/group"; 
                        }, 300);
                        
                        });
                     </script>
                     @endforeach
                  </select>
               </form>
            </div>
            <div class="col-md-3">
               <div id="flash">&nbsp;</div>
            </div>
            <div class="col-md-4">
               <div class="headline">
                  <h2>Hinweis</h2>
               </div>
               <blockquote class="hero">
                  <p>Geprüfte Postleitzahlen können durch einfaches klicken versetzt werden. </p>
               </blockquote>
            </div>
         </div>
      </div>
   </div>
</div>


<!--Display Result-->
 
@if ( $logisticianmanager->id > 1)

 <style>
.result {display: inline;}
</style>


@else
<div class="container">
  <div class="alert alert-success"><h1>Hinweis</h1>Bitte Logistiker auswählen.</div>
</div>


<style>

.result {display:none;}
</style>

@endif









                 

<div class="result"> 

<div class="container">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Postleitzahlen zuordnen</h3>
      </div>
      <div class="panel-body">
         <div>
         </div>
         <div>
            <div class="row">
               <div class="col-md-6">
                  <div class="headline">
                     <h2>Freie Postleitzahlen</h2>
                  </div>
                  <!--  TAble_nulle-->
                  <div id="toogle_null" >
   @if($deliveryzipcode_all_nulls->count())
                     @foreach( $deliveryzipcode_all_nulls as $x )  









                       
                     <form action="" method="POST" id="form_zipcodes_{{$x->zip}}">
                        <!--  <button  class="btn btn-warning btn blockxx_{{$x->zip}}" id='go_{{$x->zip}}' type="button">  <span class="glyphicon glyphicon-log-out"></span> {{ $x->id}}/{{ $x->zip}}</button> <br>-->
                        <input name="zip" id="zip_hidden_{{$x->zip}}" type="hidden" value="{{$x->zip}}">
                        <input name="id" id="id_hidden_{{$x->zip}}" type="hidden" value="{{$x->id}}">
                        <input name="id" id="id_id_{{ $logisticianmanager->id }}" type="hidden" value="{{ $logisticianmanager->id }}">
                        <div class="row">
                           <div class="col-md-5">
                              <button type="submit" class="btn btn-warning "  id="update_{{ $x->zip}}"> <span class="glyphicon glyphicon-log-out"></span>{{ $x->zip}}</button> 
                           </div>
                           <div class="col-md-1">
                              <div id="flash_{{$x->zip}}">&nbsp;</div>
                           </div>
                        </div>
                     </form>
                     <br>
                     <script>
                        $( "#go_{{$x->zip}}" ).click(function( event ) {
                        
                        
                         
                        
                        
                          event.preventDefault();      
                        
                        
                           $( this ).animate({
                          opacity: .5,
                          height: "50%"
                        }, {
                          step: function( now, fx ) {
                            var data = fx.elem.id + " " + fx.prop + ": " + now;
                            $( "body" ).append( "<div>" + data + "</div>" );
                          }
                        
                        }
                        
                        
                        
                        );
                        }                      
                        
                        
                        
                        );
                        
                     </script>
                     <!-- AJAX FORM POST SCRIPT ANFANG-->
                   
                     <script>
                        $(document).ready(function(){
                        
                        $('#form_zipcodes_{{$x->zip}}').submit(function(e){                       
                        
                        
                                    $("#flash_{{$x->zip}}").show();
                                    $("#flash_{{$x->zip}}").fadeIn(1000).html('<img src="{{URL::to('assets/backend/img/backend/icons/ajax-loader.gif')}}" />'); 
                                    $("#flash_{{$x->zip}}").fadeOut(1000);                        
                        
                        //Hinweis Anfang
                            $(function(){
                             new PNotify({     
                            title: 'Hinweis',
                            text: 'Postleitzahl wird übernommen.',
                             type: 'success',
                            mouse_reset: false
                        });                        
                        
                            });                       
                        
                        
                        setTimeout(function() { 
                       window.location = "{{URL::to('admin/deliveryassign')}}/{{ $logisticianmanager->id }}/group"; 
                        }, 1500);                       
                        
                        
                        //Hinweis ENDE   
                        
                        e.preventDefault();
                        
                        //formData 
                        var formData = new FormData();
                        
                        formData.append('user_id', $('#id_id_{{ $logisticianmanager->id }}').val());
                        formData.append('id', $('#id_hidden_{{$x->zip}}').val());                      
                        
                        
                        $.ajax ({
                        url:'../../zip_repository',
                        method:'post',
                        processData:false,
                        contentType:false,
                        cache:false,
                        dataType: 'json',
                        data:formData,
                        success:function(data) { 
                        
                        if(data.success) {               
                          
                        
                        $.each(data.errors, function(index, error){    
                        });
                        
                        
                        }else {    
                        
                        }
                        
                        },
                        error:function(){}
                        
                        });                                               
                        
                        });                                               
                        
                        }); 
                        
                     </script>
                     <!-- AJAX FORM POST SCRIPT ENDE-->               
                     @endforeach
                     @else
                     <div class="alert alert-danger">Keine Postleitzahl vorhanden</div>
                     @endif 
                  </div>


               </div>
               <div class="col-md-6">
                  <div class="headline">
                     <h2>Zugeordnete Postleitzahlen</h2>
                  </div>


                  <!--  Table add-->
                  <div id="toogle_add" >
                     @if($deliveryzipcode->count())
                     @foreach( $deliveryzipcode as $x )  
                      <form action="" method="POST" id="form_zipcodes_aktive_{{$x->zip}}">              
                  
                           <input name="zip" id="zip_hidden_{{$x->zip}}" type="hidden" value="{{$x->zip}}">
                        <input name="id" id="id_hidden_{{$x->zip}}" type="hidden" value="{{$x->id}}">
                        <input name="id" id="id_id_{{ $logisticianmanager->id }}" type="hidden" value="{{ $logisticianmanager->id }}">
                          <div class="row">
                           <div class="col-md-5">   <span class="glyphicon glyphicon-arrow-left"></span>
                              <button type="submit" class="btn btn-u "  id="update_{{ $x->zip}}"> <span class="glyphicon glyphicon-ok"></span>{{ $x->zip}}</button> 
                           </div>
                           <div class="col-md-1">
                              <div id="flash_{{$x->zip}}">&nbsp;</div>
                           </div>
                        </div>

 </form>
                     <br>
                            <script>
                        $( "#go_{{$x->zip}}" ).click(function( event ) {
                        
                        
                         
                        
                        
                          event.preventDefault();      
                        
                        
                           $( this ).animate({
                          opacity: .5,
                          height: "50%"
                        }, {
                          step: function( now, fx ) {
                            var data = fx.elem.id + " " + fx.prop + ": " + now;
                            $( "body" ).append( "<div>" + data + "</div>" );
                          }
                        
                        }
                        
                        
                        
                        );
                        }                      
                        
                        
                        
                        );
                        
                     </script>
                     <!-- AJAX FORM POST SCRIPT ANFANG-->
                    
                     <script>
                        $(document).ready(function(){
                        
                        $('#form_zipcodes_aktive_{{$x->zip}}').submit(function(e){
                        
                        
                        
                                    $("#flash_{{$x->zip}}").show();
                                    $("#flash_{{$x->zip}}").fadeIn(1000).html('<img src="{{URL::to('assets/backend/img/backend/icons/ajax-loader.gif')}}" />'); 
                                    $("#flash_{{$x->zip}}").fadeOut(1000);
                        
                        
                        //Hinweis Anfang
                            $(function(){
                             new PNotify({     
                            title: 'Hinweis',
                            text: 'Postleitzahl wird wieder zurückgestellt.',
                             type: 'success',
                            mouse_reset: false
                        });
                        
                        
                            });
                        
                        
                        
                        setTimeout(function() { 
                        window.location = "{{URL::to('admin/deliveryassign')}}/{{ $logisticianmanager->id }}/group"; 
                        }, 1500);
                        
                        
                        
                        //Hinweis ENDE   
                        
                        e.preventDefault();
                        
                        //formData 
                        var formData = new FormData();
                        
                        formData.append('user_id', $('#id_id_{{ $logisticianmanager->id }}').val());
                        formData.append('id', $('#id_hidden_{{$x->zip}}').val());
                        
                        
                        
                        $.ajax ({
                          url:'../../zip_logistiker',
                        method:'post',
                        processData:false,
                        contentType:false,
                        cache:false,
                        dataType: 'json',
                        data:formData,
                        success:function(data) { 
                        
                        if(data.success) {               
                          
                        
                        $.each(data.errors, function(index, error){    
                        });
                        
                        
                        
                        
                        }else {    
                        
                        }
                        
                        },
                        error:function(){}
                        
                        });
                        
                        
                        
                        });
                        
                        
                        
                        }); 
                        
                     </script>
                     @endforeach
                     @else
                     <div class="alert alert-danger">Keine Postleitzahl vorhanden</div>
                     @endif 
                  </div>
               </div>
            </div>
         </div>
      </div>

<!-- Result end-->
  </div>


   </div>
</div>
@stop