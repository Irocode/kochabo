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
               url: "{{ url('/admin/photo_gallery/" + id + "/toggle-publish/') }}",
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
         <h3 class="panel-title">Photo Galerien</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <!--
                  <a href="{{ URL::route('admin.photo_gallery.create') }}" class="btn btn-primary">
                      <span class="glyphicon glyphicon-plus"></span>&nbsp;New Photo Gallery
                  </a> -->
            </div>
         </div>
         <br>
         <br>
         <br>
         @if($photo_galleries->count())
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>Titel</th>
                     <th>Erstellt am</th>
                     <th>Update am</th>
                     <th>Aktion</th>
                     <th>Einstellung</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach( $photo_galleries as $photo_gallery )
                  <tr>
                     <td> {{ link_to_route( 'admin.photo_gallery.edit', $photo_gallery->title, $photo_gallery->id, array( 'class' => 'btn btn-link btn-xs' )) }}
                     <td> {{{  $photo_gallery->created_at->format('d-m-Y (H:i:s)') }}} </td>
                     <td> {{{  $photo_gallery->updated_at->format('d-m-Y (H:i:s)') }}}</td>
                     <td>
                        <div class="btn-group">
                           <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                           Aktion
                           <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu">
                              <!-- <li>
                                 <a href="{{ URL::route('admin.photo_gallery.show', array($photo_gallery->id)) }}">
                                     <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Photo Gallery anzeigen
                                 </a>
                                 </li>
                                 
                                 -->
                              <li>
                                 <a href="{{ URL::route('admin.photo_gallery.edit', array($photo_gallery->id)) }}">
                                 <span class="glyphicon glyphicon-edit"></span>&nbsp;Photo Gallerie ansehen/bearbeiten
                                 </a>
                              </li>
                              <!--
                                 <li class="divider"></li>
                                 <li>
                                     <a href="{{ URL::route('admin.photo_gallery.delete', array($photo_gallery->id)) }}">
                                         <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Delete Photo Gallery
                                     </a>
                                 </li>
                                  <li class="divider"></li>
                                 
                                 -->
                              <li> 
                                 <a target="_blank" href="{{URL::to('')}}{{$photo_gallery->url }}">
                                 <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Voransicht
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </td>
                     <td>
                        <a href="#" id="{{ $photo_gallery->id }}" class="publish"><img id="publish-image-{{ $photo_gallery->id }}" src="{{url('/')}}/assets/img/backend/images/{{ ($photo_gallery->is_published) ? 'publish.png' : 'not_publish.png'  }}"/></a>
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
         {{ $photo_galleries->links() }}
      </ul>
   </div>
</div>
@stop