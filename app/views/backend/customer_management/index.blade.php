@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/backend/plugins/fullcalendar/js/jquery.lightbox_me.min.js') }}
{{ Notification::showAll() }}
<div class="container">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Kunden verwalten</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ URL::route('admin.customer_management.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neuen Kunden anlegen
               </a>
            </div>
         </div>
         <div class="pull-right">
            <div class="btn-toolbar">
               <a href="{{URL::to('admin/list_settings_customer_management')}}" class="btn btn-u" disabled="">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter settings
               </a>               
            </div>
         </div>
         <br>
         <br>
         <br>
         <div class="table-responsive">
            @if($users->count())
            <!-- Darf nur direkt im Blade verwendet werden da sonst Error in anderen Seiten-->
            {{ HTML::style('assets/backend/plugins/tablesorter/media/css/dataTables.bootstrap.css') }}
            {{ HTML::script('assets/backend/plugins/tablesorter/media/js/jquery.dataTables.js') }} 
            {{ HTML::script('assets/backend/plugins/tablesorter/media/js/dataTables.bootstrap.js') }} 
            {{ HTML::script('assets/backend/plugins/tablesorter/TableTools-2.2.1/js/dataTables.tableTools.js') }} 
            {{ HTML::style('assets/backend/plugins/tablesorter/TableTools-2.2.1/css/dataTables.tableTools.css') }} 
            <script type="text/javascript" language="javascript" class="init">
               $(document).ready(function() {
               $(document).ready(function() {         
               lightbox('Wird geladen');          
               setTimeout(function() {          
               closeLightbox();   
               },690);    });
               
               
                   var table = $('#example').DataTable(
               
                    {
               
               "order": [[ 0, "desc" ]],
               "language": {
                               "url": "{{URL::to('assets/backend/plugins/tablesorter/media/german.json')}}"
                           },
               
               
                       "sDom": 'T<"clear">lfrtip',
                       "oTableTools": {
                         "sRowSelect": "multi",
                          "sSwfPath": "{{URL::to('assets/backend/plugins/tablesorter/TableTools-2.2.1/swf/copy_csv_xls_pdf.swf')}}",
                           "aButtons": [
               
                              
                               {
                                   "sExtends": "copy",
                                     "mColumns":[2,3,4,5,6,7],
                                   "bFooter": false,
                                   "sButtonText": "Zwischenablage",
                                    "bSelectedOnly": true
                               },
                               {
                                   "sExtends": "csv",                                
                                   "sFileName": "Kundendaten.csv",
                                   "sButtonText": "CSV speichern",
                                   "mColumns":[2,3,4,5,6,7],
                                   "bFooter": false,
                                   "bSelectedOnly": true
                                  
                               },
                            
                               {
                                   "sExtends": "pdf",
                                   "mColumns":[2,3,4,5,6,7],
                                   "bFooter": false,
                                    "sFileName": "Kundendaten.pdf",
                                   "sButtonText": "PDF speichern",
                                   "bSelectedOnly": true                             
                           
               
                               },
                                {
                                   "sExtends": "print",
                                   "sButtonText": "Drucken"
                               },
                           ]
               
                       },  
               
                            
               
                       "ajax": "tablesorter_customer_management_index",
               
               
                       "deferRender": true,
                       "columnDefs": [ {          
               
                       },   
                {
                          
               
                       }
               
               
                        ],
                   } );
               
               
               
               // Apply the filter
               $("#example tfoot input ").on( 'keyup change ', function () {
               table
               .column( $(this).parent().index()+':visible' )
               .search( this.value )
               .draw();
               } );           
               // Apply the filter
               $("#example tfoot select ").on( 'keyup change ', function () {
               table
               .column( $(this).parent().index()+':visible' )
               .search( this.value )
               .draw();
               } );      
               
               
               } );
               
               
            </script>
            <table id="example" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th style='width: 60px;'>ID</th>
                      <th>Kundengruppe</th>
                      <th style='width: 60px;'>Geschlecht</th>
                     <th>Vorname</th>
                     <th>Nachname</th>
                     <th>E-Mail</th>
                     <th>Telefon</th>
                     <th>Geburtsdatum</th>
                     <th>Letzer Login</th>
                     <th>Erstellt am</th>
                     <th>Update am</th>
                     <th>Bearbeiten</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1" >
                     <input class="form-control" type="text" placeholder="Filter ID">
                     </th>
                        <th rowspan="1" colspan="1">
                           <select name="select" class="form-control">
                           <option value="" selected>Auswahl Kundengruppe</option>
                            @foreach( $list_kundengruppe as $x ) 
                           <option value="{{ $x->groupname }}">{{ $x->groupname }}</option>
                           @endforeach     
                        </select>
                        </th>
                     <th rowspan="1" colspan="1" >                   
                        <select name="select" class="form-control">
                           <option value="" selected>Auswahl Anrede</option>
                           @foreach( $list_gender as $x )  
                           <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach 
                        </select>
                     </th>
                     <th rowspan="1" colspan="1">
                     <input class="form-control" type="text" placeholder="Filter Vorname">
                     </th>

                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Nachname">
                     </th>

                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Email">
                     </th>

                     <th rowspan="1" colspan="1">
                      <input class="form-control" type="text" placeholder="Filter Telefon">                      
                     </th>
                      <th rowspan="1" colspan="1">
                      <input class="form-control" type="text" placeholder="Filter Geburtsdatum">                      
                     </th>

                     <th rowspan="1" colspan="1"></th>

                     <th rowspan="1" colspan="1"></th>

                     <th rowspan="1" colspan="1"></th>

                     <th rowspan="1" colspan="1"></th>

                  </tr>
               </tfoot>
            
            </table>
         </div>
      </div>
      @else
      <div class="alert alert-danger">Keine Kunden vorhanden</div>
      @endif
   </div>
</div>
</div>
@stop