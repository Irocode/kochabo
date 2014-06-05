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
               url: "{{ url('/admin/customer/" + id + "/toggle-publish/') }}",
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
         <h3 class="panel-title">Kunden verwalten</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ URL::route('admin.customer.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neuen Kunden erstellen
               </a>
            </div>
         </div>
         <br>
         <br>
         <br>
         @if($customer->count())
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Vorname</th>
                     <th>Nachname</th>
                     <th>Kunde seit</th>
                     <th>Abo Box</th>
                     <th>Abo Lieferung</th>
                     <th>Abo Typ</th>
                     <th>Abo Weine</th>
                     <th>Abo Biere</th>
                     <th>Anzahl Obstboxen</th>
                     <th>Abo Status</th>
                     <th>Gruppen</th>
                     <!--<th>Veröffentlichung</th>-->
                  </tr>
               </thead>
               <tbody>
                  @foreach( $customer as $v )
                  <tr>
                     <td> {{ link_to_route( 'admin.customer.edit', $v->id, $v->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                     <td>{{{ $v->first_name }}}</td>
                     <td>{{{ $v->last_name }}}</td>
                     <td>{{{ $v->kundeseit }}}</td>
                     <td>{{{ $v->abobox }}}</td>
                     <td>{{{ $v->abolieferung }}}</td>
                     <td>{{{ $v->abotyp }}}</td>
                     <td>{{{ $v->aboweine }}}</td>
                     <td>{{{ $v->abobiere }}}</td>
                     <td>{{{ $v->anzahlobstboxen }}}</td>
                     <td>{{{ $v->abostatus }}}</td>
                     <td>{{{ $v->gruppen }}}</td>
                     <td>
                        <div class="btn-group">
                           <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                           Aktion
                           <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu">
                              <li>
                                 <a href="{{ URL::route('admin.customer.edit', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-edit"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b>
                                 </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                 <a href="{{ URL::route('admin.customer.delete', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}}  <strong>löschen</strong>
                                 </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                 <a href="{{ URL::route('admin.address.edit', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-edit"></span>&nbsp; <strong>Adresse von</strong> {{{ $v->first_name }}} {{{ $v->last_name }}}
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </td>
                     <td>
                        <!--  <a href="#" id="{{ $v->id }}" class="publish">
                           <img id="publish-image-{{ $v->id }}" src="{{url('/')}}/assets/img/backend/images/{{ ($v->is_published) ? 'publish.png' : 'not_publish.png'  }}"/>
                           </a>-->
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         @else
         <div class="alert alert-danger">Keine Daten vorhanden</div>
         @endif
      </div>
   </div>
   <div class="pull-left">
      <ul class="pagination">
         {{ $customer->links() }}
      </ul>
   </div>
</div>
@stop