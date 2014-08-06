@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/backend/plugins/fullcalendar/js/jquery.lightbox_me.min.js') }}
{{ Notification::showAll() }}
<div class="container">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Rezepte verwalten</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ URL::route('admin.recipe.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neues Rezept anlegen
               </a>
            </div>
         </div>
         <div class="pull-right">
            <div class="btn-toolbar">
               <a href="{{URL::to('admin/list_einheit')}}" class="btn btn-u" >
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter settings
               </a>               
            </div>
         </div>
         <br>
         <br>
         <br>
         <div class="table-responsive">
            @if($recipe->count())
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
                                   "sFileName": "Rezept.csv",
                                   "sButtonText": "CSV speichern",
                                   "mColumns":[2,3,4,5,6,7],
                                   "bFooter": false,
                                   "bSelectedOnly": true
                                  
                               },
                            
                               {
                                   "sExtends": "pdf",
                                   "mColumns":[2,3,4,5,6,7],
                                   "bFooter": false,
                                    "sFileName": "Rezept.pdf",
                                   "sButtonText": "PDF speichern",
                                   "bSelectedOnly": true                             
                           
               
                               },
                                {
                                   "sExtends": "print",
                                   "sButtonText": "Drucken"
                               },
                           ]
               
                       },  
               
                            
               
                       "ajax": "tablesorter_recipe_index",
               
               
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
                      <th>Voransicht</th>
                      <th>Titel</th>                     
                     <th>Erstellt am</th>
                     <th>Update am</th>
                     <th>Bearbeiten</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                      <th rowspan="1" colspan="1"></th>
                      <th rowspan="1" colspan="1"></th>
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
      <div class="alert alert-danger">Kein Rezept vorhanden</div>
      @endif
   </div>
</div>
</div>
@stop