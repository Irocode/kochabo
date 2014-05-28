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
               url: "{{ url('/admin/page/" + id + "/toggle-publish/') }}",
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
         <h3 class="panel-title">Seiten</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ URL::route('admin.page.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Seite erstellen
               </a>
            </div>
         </div>
         <br>
         <br>
         <br>
         @if($pages->count())
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>Titel</th>
                     <th>Erstellt am</th>
                     <th>Update am</th>
                     <th>Aktion</th>
                     <th>Veröffentlichung</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach( $pages as $page )
                  <tr>
                     <td> {{ link_to_route( 'admin.page.edit', $page->title, $page->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                     <td> {{{  $page->created_at->format('d-m-Y (H:i:s)') }}} </td>
                     <td> {{{  $page->updated_at->format('d-m-Y (H:i:s)') }}}</td>
                     <td>
                        <div class="btn-group">
                           <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                           Aktion
                           <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu">
                              <!--    <li>
                                 <a href="{{ URL::route('admin.page.show', array($page->id)) }}">
                                     <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Seite ansehen
                                 </a>
                                 </li>-->
                              <li>
                                 <a href="{{ URL::route('admin.page.edit', array($page->id)) }}">
                                 <span class="glyphicon glyphicon-edit"></span>&nbsp;Seite ansehen/bearbeiten
                                 </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                 <a href="{{ URL::route('admin.page.delete', array($page->id)) }}">
                                 <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Seite löschen
                                 </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                 <a target="_blank" href="{{ URL::to('')}}{{ $page->url }}">
                                 <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Voransicht
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </td>
                     <td>
                        <a href="#" id="{{ $page->id }}" class="publish"><img id="publish-image-{{ $page->id }}" src="{{url('/')}}/assets/img/backend/images/{{ ($page->is_published) ? 'publish.png' : 'not_publish.png'  }}"/></a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         @else
         <div class="alert alert-danger">Keine Seite gefunden</div>
         @endif
      </div>
   </div>
   <div class="pull-left">
      <ul class="pagination">
         {{ $pages->links() }}
      </ul>
   </div>
</div>
@stop