@extends('backend/_layout/layout')
@section('content')

<style>
.form-control.input-sm {
  margin-right:10px;
  background-color:#82b41c;
  color:#ffffff;
};
</style>


{{ Notification::showAll() }}

<div class="container">
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
         {{ HTML::style('assets/backend/plugins/tablesorter/media/css/dataTables.bootstrap.css') }}
         {{ HTML::script('assets/backend/plugins/tablesorter/media/js/jquery.dataTables.js') }} 
         {{ HTML::script('assets/backend/plugins/tablesorter/media/js/dataTables.bootstrap.js') }} 
         {{ HTML::script('assets/backend/plugins/tablesorter/TableTools-2.2.1/js/dataTables.tableTools.js') }} 
         {{ HTML::style('assets/backend/plugins/tablesorter/TableTools-2.2.1/css/dataTables.tableTools.css') }} 
         <script type="text/javascript" language="javascript" class="init">
            $(document).ready(function() {



 
            
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
                                "sButtonText": "Zwischenablage",
                                 "bSelectedOnly": true
                            },
                            {
                                "sExtends": "csv",                                
                                "sFileName": "Logistiker.csv",
                                "sButtonText": "CSV speichern",
                                "bSelectedOnly": true
                               
                            },
                         
                            {
                                "sExtends": "pdf",
                                 "sFileName": "Logistiker.pdf",
                                "sButtonText": "PDF speichern",
                                "bSelectedOnly": true                             
                        

                            },
                             {
                                "sExtends": "print",
                                "sButtonText": "Drucken"
                            },
                        ]
            
                    },  

                         













            
            
                    "ajax": "tablesorter_logisticianmanager_index",


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
                  <th>Logistiker</th>
                  <th>Adresse</th>
                  <th>Kontakt Person</th>
                  <th>Telefon</th>
                  <th>Bearbeiten</th>
               </tr>
            </thead>






<tfoot>
<tr>
<th rowspan="1" colspan="1">
<input class="form-control" type="text" placeholder="Filter ID">
</th>
<th rowspan="1" colspan="1">
<input class="form-control" type="text" placeholder="Filter Logistiker">
</th>
<th rowspan="1" colspan="1">
  <select name="select" class="form-control">
    <option value="-" selected>Auswahl Bundesland</option>
    <option value="Wien">Wien</option>
    <option value="Salzburg">Salzburg</option>
    <option value="Graz">Graz</option>
  </select>

</th>
<th rowspan="1" colspan="1">
<input class="form-control" type="text" placeholder="Filter Kontakt Person">
</th>
<th rowspan="1" colspan="1">
<input class="form-control" type="text" placeholder="Filter Telefon">
</th>
<th rowspan="1" colspan="1">

</th>
</tr>
</tfoot>



            <tfoot>
               <tr>
                  <th>ID</th>
                  <th>Logistiker</th>
                  <th>Adresse</th>
                  <th>Kontakt Person</th>
                  <th>Telefon</th>
                  <th>Bearbeiten</th>
               </tr>
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