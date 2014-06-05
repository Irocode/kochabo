@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/fullcalendar/js/jquery.lightbox_me.min.js') }}
{{ Notification::showAll() }}
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
                <div class="pull-right">
            <div class="btn-toolbar">

               <a href="{{URL::to('admin/list_settings_customer')}}" class="btn btn-u">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Settings
               </a>               
            </div>
 </div>      
         <br>
         <br>
         <br>
         <div class="table-responsive">
            @if($customer->count())
            <!-- Darf nur direkt im Blade verwendet werden da sonst Error in anderen Seiten-->
            {{ HTML::style('assets/plugins/tablesorter/media/css/dataTables.bootstrap.css') }}
            {{ HTML::script('assets/plugins/tablesorter/media/js/jquery.dataTables.js') }} 
            {{ HTML::script('assets/plugins/tablesorter/media/js/dataTables.bootstrap.js') }} 
            {{ HTML::script('assets/plugins/tablesorter/TableTools-2.2.1/js/dataTables.tableTools.js') }} 
            {{ HTML::style('assets/plugins/tablesorter/TableTools-2.2.1/css/dataTables.tableTools.css') }} 
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
                               "url": "{{URL::to('assets/plugins/tablesorter/media/german.json')}}"
                           },
               
               
                       "sDom": 'T<"clear">lfrtip',
                       "oTableTools": {
                         "sRowSelect": "multi",
                          "sSwfPath": "{{URL::to('assets/plugins/tablesorter/TableTools-2.2.1/swf/copy_csv_xls_pdf.swf')}}",
                           "aButtons": [
               
                              
                               {
                                   "sExtends": "copy",
                                     "mColumns":[1,2,3,4,5,6,7,8],
                                   "bFooter": false,
                                   "sButtonText": "Zwischenablage",
                                    "bSelectedOnly": true
                               },
                               {
                                   "sExtends": "csv",  
                                       "mColumns":[1,2,3,4,5,6,7,8],
                                   "bFooter": false,                              
                                   "sFileName": "Kunden.csv",
                                   "sButtonText": "CSV speichern",
                                   "bSelectedOnly": true
                                  
                               },
                            
                               {
                                   "sExtends": "pdf",
                                   "mColumns":[1,2,3,4,5,6,7,8],
                                   "bFooter": false,
                                    "sFileName": "Kunden.pdf",
                                   "sButtonText": "PDF speichern",
                                   "bSelectedOnly": true                             
                           
               
                               },
                                {
                                   "sExtends": "print",
                                   "sButtonText": "Drucken"
                               },
                           ]
               
                       },  
               
                            
               
                       "ajax": "tablesorter_customer_index",
               
               
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
                     <th>ID</th>
                     <th>Vorname</th>
                     <th>Nachname</th>
                     <th>Kunde seit</th>
                     <th>Abo Box</th>
                     <th>Abo Lieferung</th>
                     <th>Abo Typ</th>
                     <th>Gruppen</th>
                     <th>Abo Status</th>
                     <th>Bearbeiten</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter ID">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Vorname">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Nachname">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Kunde seit">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Abobox">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Abo Lieferung">
                     </th>
                     <th rowspan="1" colspan="1">
                        <select name="select" class="form-control">
                           <option value="" selected>Auswahl Abo Typ</option>
                           @foreach( $list_abotyp as $x )  
                           <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   

                        
                        </select>
                     <th rowspan="1" colspan="1">
                        <select name="select" class="form-control">
                           <option value="" selected>Auswahl Gruppe</option>
                           @foreach( $list_gruppe as $x )  
                           <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
                    
                        </select>
                     <th rowspan="1" colspan="1">
                        <select name="select" class="form-control">
                           <option value="" selected>Auswahl Status</option>
                          @foreach( $list_status as $x )  
                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>
                     </th>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tfoot>
                  
               </tfoot>
            </table>
         </div>
      </div>
      @else
      <div class="alert alert-danger">Keine Daten vorhanden</div>
      @endif
   </div>
</div>
</div>
@stop