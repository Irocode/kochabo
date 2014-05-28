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
               url: "{{ url('/admin/logisticianmanager/" + id + "/toggle-publish/') }}",
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
         <h3 class="panel-title">Logistiker verwalten</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ URL::route('admin.logisticianmanager.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neuen Logistiker erstellen
               </a>
            </div>
         </div>
         <br>
         <br>
         <br>
         @if($logisticianmanager->count())
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Logistiker</th>
                     <th>Adresse</th>
                     <th>Kontakt Person</th>
                     <th>Telefon</th>
                     <th>E-Mail</th>
                     <!--<th>Veröffentlichung</th>-->
                  </tr>
               </thead>
               <tbody>
                  @foreach( $logisticianmanager as $v )
                  <tr>
                     <td> {{ link_to_route( 'admin.logisticianmanager.edit', $v->id, $v->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                     <td>{{{ $v->name }}}</td>
                     <td>{{{ $v->street }}} <br>{{{ $v->zip }}} {{{ $v->city }}}<br>{{{ $v->stateprovince }}}<br>{{{ $v->country_id }}}      </td>
                     <td>{{{ $v->contactPerson }}}</td>
                     <td>{{{ $v->phone }}}</td>
                     <td>{{{ $v->email }}}</td>
                     <td>
                        <div class="btn-group">
                           <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                           Aktion
                           <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu">
                              <li>
                                 <a href="{{ URL::route('admin.logisticianmanager.group_sefa_free', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-edit"></span>&nbsp;{{{ $v->name }}} {{{ $v->last_name }}} <b> ansehen/bearbeiten</b>
                                 </a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                 <a href="{{ URL::route('admin.logisticianmanager.delete', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;{{{ $v->name }}} {{{ $v->last_name }}}  <strong>löschen</strong>
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
         {{ $logisticianmanager->links() }}
      </ul>
   </div>
</div>





<div class="container">
   {{ Notification::showAll() }}
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Logistiker verwalten</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ URL::route('admin.logisticianmanager.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neuen Logistiker erstellen
               </a>
            </div>
         </div>
         <br>
         <br>
         <br>
          <div class="table-responsive">
           @if($logisticianmanager->count())
  <!-- Darf nur direkt im Blade verwendet werden da sonst Error in anderen Seiten-->
  {{ HTML::style('assets/plugins/tablesorter/media/css/dataTables.bootstrap.css') }}
  {{ HTML::script('assets/plugins/tablesorter/media/js/jquery.dataTables.js') }} 
  {{ HTML::script('assets/plugins/tablesorter/media/js/dataTables.bootstrap.js') }} 
  {{ HTML::script('assets/plugins/tablesorter/TableTools-2.2.1/js/dataTables.tableTools.js') }} 
  {{ HTML::style('assets/plugins/tablesorter/TableTools-2.2.1/css/dataTables.tableTools.min.css') }} 
  <script type="text/javascript" language="javascript" class="init">
  $(document).ready(function() {
  var table = $('#example').dataTable(
    { 

"language": {
                "url": "{{URL::to('assets/plugins/tablesorter/media/german.json')}}"
            },



            "dom": 'T<"clear">lfrtip',
        "tableTools": {
          "sRowSelect": "single",
           "sSwfPath": "{{URL::to('assets/plugins/tablesorter/TableTools-2.2.1/swf/copy_csv_xls_pdf.swf')}}",
            "aButtons": [
                {
                    "sExtends": "copy",
                    "sButtonText": "Zwischenablage"
                },
                {
                    "sExtends": "csv",
                    "sButtonText": "Als CSV speichern"
                },
                {
                    "sExtends": "pdf",
                    "sButtonText": "Als PDF speichern"
                },
                 {
                    "sExtends": "print",
                    "sButtonText": "Drucken"
                },
            ]

        },

       
        "ajax": {
            "url": "data_index_logisticianmanager",
            "dataSrc": ""
        },



   "columnDefs": [
            {
               
            },
            {
              "targets": -1,
            "data": null,
            "defaultContent": "<button>Click!</button>"
            }
        ],



        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "street" },
            { "data": "contactPerson" },
            { "data": "phone" },
            { "data": "email" }  ,    
            { "data": "url" }         
        ]






    } );




} );





</script>

        <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Logistiker</th>            
            <th>Adresse</th>
            <th>Kontakt Person</th>
            <th>Telefon</th>
            <th>E-Mail</th>
             <th>Aktion</th>
          
          </tr>
        </thead>

        <tfoot>
          <tr>
            <th>ID</th>
            <th>Logistiker</th>            
            <th>Adresse</th>
            <th>Kontakt Person</th>
            <th>Telefon</th>
            <th>E-Mail</th>
            <th>Aktion</th>
          </tr>
        </tfoot>
      </table>








</div>
         @else
         <div class="alert alert-danger">Keine Daten vorhanden</div>
         @endif
      </div>
   </div>
   <div class="pull-left">
      <ul class="pagination">
         {{ $logisticianmanager->links() }}
      </ul>
   </div>
</div>





<script>

$(document).ready(function() {
    var table = $('#example2').DataTable( {
        "ajax": "data_index_logisticianmanager",
        "columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<div class='btn-group'><a class='btn btn-danger dropdown-toggle' data-toggle='dropdown' href='#'>Aktion<span class='caret'></span></a><ul class='dropdown-menu'><li><a href='{{ URL::route('admin.logisticianmanager.group_sefa_free', array($v->id)) }}'><span class='glyphicon glyphicon-edit'></span>&nbsp;{{{ $v->name }}} {{{ $v->last_name }}} <b> ansehen/bearbeiten</b></a></li><li class='divider'></li><li><a href='{{ URL::route('admin.logisticianmanager.delete', array($v->id)) }}'><span class='glyphicon glyphicon-remove-circle'></span>&nbsp;{{{ $v->name }}} {{{ $v->last_name }}}  <strong>löschen</strong></a></li></ul></div>                                "
        } ]
    } );
 
    $('#example2 tbody').on( 'click', 'button', function () {
        var data = table.row( $(this).parents('tr') ).data();
        alert( data[0] +"'s salary is: "+ data[ 3 ] );
    } );



} );

</script>

        <table id="example2" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Logistiker</th>            
            <th>Adresse</th>
            <th>Kontakt Person</th>
            <th>Telefon</th>
            <th>E-Mail</th>
             <th>Aktion</th>
          
          </tr>
        </thead>

        <tfoot>
          <tr>
            <th>ID</th>
            <th>Logistiker</th>            
            <th>Adresse</th>
            <th>Kontakt Person</th>
            <th>Telefon</th>
            <th>E-Mail</th>
            <th>Aktion</th>
          </tr>
        </tfoot>
      </table>

@stop