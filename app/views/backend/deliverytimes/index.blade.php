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
               url: "{{ url('/admin/deliverytimes/" + id + "/toggle-publish/') }}",
               success: function (response) {
                   if (response['result'] == 'success') {
                       var imagePath = (response['changed'] == 1) ? "{{url('/')}}/assets/backend/img/backend/images/publish.png" : "{{url('/')}}/assets/backend/img/backend/images/not_publish.png";
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
         <h3 class="panel-title">Logistik Zeiten</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <!--<a href="{{ URL::route('admin.deliverytimes.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Kunden Adresse
               </a>
               -->
               <a href="{{ URL::route('admin.deliverytimes.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Logistik Zeit anlengen
               </a>
            </div>
         </div>
         <br>
         <br>
         <br>
         @if($deliverytimes->count())
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>User_ID</th>
                     <th>Name</th>
                     <th>von</th>
                     <th>bis</th>
                     <th>nightjump</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach( $deliverytimes as $v )
                  <tr>
                     <td> {{ link_to_route( 'admin.deliverytimes.edit', $v->id, $v->user_id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                     <td>{{{ $v->user_id }}}</td>
                     <td>{{{ $v->name }}}</td>
                     <td>{{{ $v->delivery_time_from }}}</td>
                     <td>{{{ $v->delivery_time_to }}}</td>
                      <td>{{{ $v->nightjump }}}</td>
                     <td>
                        <div class="btn-group">
                           <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                           Aktion
                           <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu">
                           
                              <li>
                                 <a href="{{ URL::route('admin.deliverytimes.edit', array($v->user_id)) }}">
                                   <span class="glyphicon glyphicon-edit"></span>&nbsp;{{{ $v->name }}} {{{ $v->name }}} <b>ansehen/bearbeiten</b>

                                
                                 </a>
                              </li>
     <li class="divider"></li>
                             <li>
                                 <a href="{{ URL::route('admin.deliverytimes.delete', array($v->user_id)) }}">
                                 <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;{{{ $v->name }}} {{{ $v->name }}}  <strong>löschen</strong>
                                 </a>
                              </li>
                         
                              
                            
                              <!--<li>
                                 <a href="{{ URL::route('admin.deliverytimes.delete', array($v->user_id)) }}">
                                 <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Kunden Adresse löschen
                                 </a>
                              </li>
                              -->
                           </ul>
                        </div>
                     </td>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         @else
         <div class="alert alert-danger">No results found</div>
         @endif
      </div>
   </div>
   <div class="pull-left">
      <ul class="pagination">
         {{ $deliverytimes->links() }}
      </ul>
   </div>
</div>
@stop