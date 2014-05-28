@extends('backend/_layout/layout')
@section('content')
<script type="text/javascript">
   $(document).ready(function () {
   
       $('#notification').show().delay(4000).fadeOut(700);
   
       // publish settings
       $(".publish").bind("click", function (e) {
           var id = $(this).attr('id');
           e.preventDefault();
           $.ajax({
               type: "POST",
               url: "{{ url('/admin/deliveryassign/" + id + "/toggle-publish/') }}",
               success: function (response) {
                   if (response['result'] == 'success') {
                       var imagePath = (response['changed'] == 1) ? "{{url('/')}}/assets/img/backend/images/publish.png" : "{{url('/')}}/assets/img/backend/images/not_publish.png";
                       $("#publish-image-" + id).attr('src', imagePath);
                   }
               },
               error: function () {
                   alert("error");
               }
           })
       });
   });
</script>
<div class="container">
   {{ Notification::showAll() }}
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Liefergebiete hinzufügen</h3>
      </div>




      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <!--<a href="{{ URL::route('admin.deliveryassign.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Kunden Adresse
               </a>
               -->
               <a href="{{ URL::route('admin.deliveryassign.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Postleitzahl anlengen
               </a>
            </div>
         </div>
         <br>
         <br>


{{ Form::open(array( 'keyword'=>'form_postleitzahl', 'action' => 'App\Controllers\Admin\SearchbackenddeliveryassignController@search')) }}
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
              



  </div>  <div class="col-md-8">  
</div>  
</div>  

 {{ Form::close() }}


<div id="output_search"> </div>
         <br>
         @if($deliveryassign->count())
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>User_ID</th>
                     <th>Postleitzahl</th>
                     
                  </tr>
               </thead>
               <tbody>
                  @foreach( $deliveryassign as $v )
                  <tr>
                     <td> {{ link_to_route( 'admin.deliveryassign.edit', $v->id, $v->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                     <td>{{{ $v->user_id }}}</td>
                        <!--<td>{{{ $v->zip }}}</td> -->
              
                     <td>
                        <div class="btn-group">
                           <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                           Aktion
                           <span class="caret"></span>
                           </a>
                            <!--
                           <ul class="dropdown-menu">
                          
                              <li>
                                 <a href="{{ URL::route('admin.deliveryassign.edit', array($v->id)) }}">
                                   <span class="glyphicon glyphicon-edit"></span>&nbsp;{{{ $v->zip }}} {{{ $v->id }}} <b>ansehen/bearbeiten</b>

                                
                                 </a>
                              </li>
     <li class="divider"></li>
                             <li>
                                 <a href="{{ URL::route('admin.deliveryassign.delete', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;{{{ $v->zip }}} {{{ $v->id }}}  <strong>löschen</strong>
                                 </a>
                              </li>
                         
                              
                            
                              <!--<li>
                                 <a href="{{ URL::route('admin.deliveryassign.delete', array($v->user_id)) }}">
                                 <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Kunden Adresse löschen
                                 </a>
                              </li>
                           


                           </ul>   -->
                        </div>
                     </td>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         @else
         <div class="alert alert-danger">Keine Postleitzahl gefunden</div>
         @endif
      </div>
   </div>

      <!-- Plichtfeld Anfang -->
     
<div  style="margin-top:20px; margin-bottom:10px;">
<p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
 <!-- Plichtfeld Ende -->

   <div class="pull-left">
      <ul class="pagination">
         {{ $deliveryassign->links() }}
      </ul>
   </div>




</div>




           
         
    


<!-- AJAX FORM POST SCRIPT ANFANG-->

<!--
              <?php $keyword="1";?>
               <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
               <script>
                  $(document).ready(function(){
                  
                  $('#form_postleitzahl').submit(function(e){
                  
                  
                  
                              $("#flash").show();
                              $("#flash").fadeIn(1000).html('<img src="{{$myuserurl}}assets/img/backend/icons/ajax-loader.gif" />'); 
                              $("#flash").fadeOut(1000);


                              

                                 $("#output_search").show();
                  
                  
                  //Hinweis Anfang
                      $(function(){
                       new PNotify({     
                      title: 'Hinweis',
                      text: 'Suche hat Ergebnisse gefunden.',
                       type: 'success',
                      mouse_reset: false
                  });
                      });
                  
                  //Hinweis ENDE   
                  
                  e.preventDefault();
                  
                  //formData 
                  var formData = new FormData();
                  
                  formData.append('keyword', $('#keyword').val());
       
                  
                  $.ajax ({
                  url:'search/{{$keyword}}',          
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

@stop