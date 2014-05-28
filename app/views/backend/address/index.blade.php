@extends('backend/_layout/layout')
@section('content')
   {{ Notification::showAll() }}
<script type="text/javascript">
   $(document).ready(function () {
   
     
   
       // publish settings
       $(".publish").bind("click", function (e) {
           var id = $(this).attr('id');
           e.preventDefault();
           $.ajax({
               type: "POST",
               url: "{{ url('/admin/address/" + id + "/toggle-publish/') }}",
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

   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Kunden Adressen</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <!--<a href="{{ URL::route('admin.address.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Kunden Adresse
               </a>
               -->
               <a href="{{ URL::route('admin.customer.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Kunden anlegen (In Folge die Adresse)
               </a>
            </div>
         </div>
         <br>
         <br>
         <br>
         @if($address->count())
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>ID</th>                    
                     <th>Vorname</th>
                     <th>Nachname</th>
                     <th>Telefon</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach( $address as $v )
                  <tr>
                     <td> {{ link_to_route( 'admin.address.edit', $v->id, $v->user_id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>                   
                     <td>{{{ $v->first_name }}}</td>
                     <td>{{{ $v->last_name }}}</td>
                     <td>{{{ $v->telephone }}}</td>
                     <td>
                        <div class="btn-group">
                           <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                           Aktion
                           <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu">
                           
                              <li>
                                 <a href="{{ URL::route('admin.address.edit', array($v->user_id)) }}">
                                   <span class="glyphicon glyphicon-edit"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b>

                                
                                 </a>
                              </li>
                            
                              <!--<li>
                                 <a href="{{ URL::route('admin.address.delete', array($v->user_id)) }}">
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
         {{ $address->links() }}
      </ul>
   </div>
</div>
@stop