@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/plugins/ckeditor/ckeditor.js') }} 
{{ HTML::script('assets/plugins/fullcalendar/js/jquery.lightbox_me.min.js') }}
<div class="container">
   <div class="page-header">
      <h3>
         Bestellung {{$order->order_id}}
         <div class="pull-right">
            {{HTML::link('admin/customer_management/'.$order->customercustomer_id.'/edit','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </h3>
   </div>



   {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\OrderController@update', $order->id), 'method' => 'PATCH')) }}
   <!-- Title -->


   <div class="row">
  <div class="col-md-6">



   <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
      <label class="control-label" for="title">BestellID</label>
      <div class="controls">
         {{ Form::text('order_id', $order->order_id, array('class'=>'form-control', 'order_id' => 'title', 'placeholder'=>'ID', 'value'=>Input::old('title'))) }}
         @if ($errors->first('order_id'))
         <span class="help-block">{{ $errors->first('order_id') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- delivery_date -->
   <div class="control-group {{ $errors->has('title') ? 'has-error' : '' }}">
      <label class="control-label" for="title">Bestelldatum</label>
      <div class="controls">
         {{ Form::text('delivery_date', $order->delivery_date, array('class'=>'form-control', 'delivery_date' => 'delivery_date', 'placeholder'=>'Bestelldatum', 'value'=>Input::old('delivery_date'))) }}
         @if ($errors->first('delivery_date'))
         <span class="help-block">{{ $errors->first('delivery_date') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- order_increment_id -->
   <div class="control-group {{ $errors->has('order_increment_id') ? 'has-error' : '' }}">
      <label class="control-label" for="order_increment_id">order_increment_id</label>
      <div class="controls">
         {{ Form::text('order_increment_id', $order->order_increment_id, array('class'=>'form-control', 'id' => 'order_increment_id', 'placeholder'=>'order_increment_id', 'value'=>Input::old('order_increment_id'))) }}
         @if ($errors->first('order_increment_id'))
         <span class="help-block">{{ $errors->first('order_increment_id') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- deliverable -->
   <div class="control-group {{ $errors->has('deliverable') ? 'has-error' : '' }}">
      <label class="control-label" for="deliverable">deliverable</label>
      <div class="controls">
         {{ Form::text('deliverable', $order->deliverable, array('class'=>'form-control', 'id' => 'deliverable', 'placeholder'=>'deliverable', 'value'=>Input::old('deliverable'))) }}
         @if ($errors->first('deliverable'))
         <span class="help-block">{{ $errors->first('deliverable') }}</span>
         @endif
      </div>
   </div>
   <br>


   </div>
  <div class="col-md-6">


   <!-- customercustomer_id -->
   <div class="control-group {{ $errors->has('customercustomer_id') ? 'has-error' : '' }}">
      <label class="control-label" for="customercustomer_id">customercustomer_id</label>
      <div class="controls">
         {{ Form::text('customercustomer_id', $order->customercustomer_id, array('class'=>'form-control', 'id' => 'customercustomer_id', 'placeholder'=>'customercustomer_id', 'value'=>Input::old('customercustomer_id'))) }}
         @if ($errors->first('customercustomer_id'))
         <span class="help-block">{{ $errors->first('customercustomer_id') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- created_at -->
   <div class="control-group {{ $errors->has('created_at') ? 'has-error' : '' }}">
      <label class="control-label" for="created_at">created_at</label>
      <div class="controls">
         {{ Form::text('created_at', $order->created_at, array('class'=>'form-control', 'id' => 'created_at', 'placeholder'=>'created_at', 'value'=>Input::old('created_at'))) }}
         @if ($errors->first('created_at'))
         <span class="help-block">{{ $errors->first('created_at') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- updated_at -->
   <div class="control-group {{ $errors->has('updated_at') ? 'has-error' : '' }}">
      <label class="control-label" for="updated_at">updated_at</label>
      <div class="controls">
         {{ Form::text('updated_at', $order->updated_at, array('class'=>'form-control', 'id' => 'updated_at', 'placeholder'=>'updated_at', 'value'=>Input::old('updated_at'))) }}
         @if ($errors->first('updated_at'))
         <span class="help-block">{{ $errors->first('updated_at') }}</span>
         @endif
      </div>
   </div>
   <br>
   <!-- order_id -->
   <div class="control-group {{ $errors->has('order_id') ? 'has-error' : '' }}">
      <label class="control-label" for="order_id">order_id</label>
      <div class="controls">
         {{ Form::text('order_id', $order->order_id, array('class'=>'form-control', 'id' => 'order_id', 'placeholder'=>'order_id', 'value'=>Input::old('order_id'))) }}
         @if ($errors->first('order_id'))
         <span class="help-block">{{ $errors->first('order_id') }}</span>
         @endif
      </div>
   </div>
   <br>

</div>
</div>


   <br>
  <!-- {{ Form::submit('Änderungen speichern', array('class' => 'btn btn-u')) }}--> 
   {{ Form::close() }}
   <!--CKEDITOR ANFANG--> 
</div>


  

<!--ADDRESS ANFANG ----------------------------------------------------------------- --> 
<div class="container">
 @if($order_address->count())              
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Bestellung Adresse {{$order->order_id}}</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <!--
                  <a href="{{ URL::route('admin.customer_management.create') }}" class="btn btn-u">
                  <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Bestellung anlegen (In Folge die Bestellung)
                  </a>
                  -->
            </div>
         </div>
         <div class="pull-right">
            <div class="btn-toolbar">
            </div>
         </div>
         <br>
         <br>
         <br>
         <div class="table-responsive">
            <!-- Darf nur direkt im Blade verwendet werden da sonst Error in anderen Seiten-->
            <script type="text/javascript" language="javascript" class="init">
               $(document).ready(function() {
                $(document).ready(function() {         
               lightbox('Wird geladen');          
               setTimeout(function() {          
               closeLightbox();   
               },690);    });
               
                   var table = $('#example').DataTable(
               
                    {
               
               "order_address": [[ 0, "desc" ]],
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
                                     "mColumns":[1,2,3,4],
                                     "bFooter": false,
                                   "sButtonText": "Zwischenablage",
                                    "bSelectedOnly": true
                               },
                               {
                                   "sExtends": "csv",  
                                      "mColumns":[1,2,3,4],
                                     "bFooter": false,                              
                                   "sFileName": "BestellungAdresse.csv",
                                   "sButtonText": "CSV speichern",
                                   "bSelectedOnly": true
                                  
                               },
                            
                               {
                                   "sExtends": "pdf",
                                      "mColumns":[1,2,3,4],
                                     "bFooter": false,
                                    "sFileName": "BestellungAdresse.pdf",
                                   "sButtonText": "PDF speichern",
                                   "bSelectedOnly": true                             
                           
               
                               },
                                {
                                   "sExtends": "print",
                                   "sButtonText": "Drucken"
                               },
                           ]
               
                       },  
               
                            
               
                       "ajax": "../../tablesorter_order_address_index/{{$order->order_id}}",
               
               
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
                     <th>Order ID</th>
                     <th>AddressID</th>
                     <th>Anrede</th>
                     <th>Vorname</th>
                     <th>Nachname</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tfoot>
               </tfoot>
            </table>
         </div>
      </div>
       @else
      <div class="alert alert-danger">Keine Bestellungen vorhanden</div>
      @endif
   </div>
   </div>
</div>
</div>

<!--ADDRESS ENDE ----------------------------------------------------------------- --> 
<!--OrderHistory ANFANG ----------------------------------------------------------------- --> 

 

<div class="container">
@if($order_status_history->count())
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Bestellung Historie {{$order->order_id}}</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <!--
                  <a href="{{ URL::route('admin.customer_management.create') }}" class="btn btn-u">
                  <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Bestellung anlegen (In Folge die Bestellung)
                  </a>
                  -->
            </div>
         </div>
         <div class="pull-right">
            <div class="btn-toolbar">
            </div>
         </div>
         <br>
         <br>
         <br>
         <div class="table-responsive">
            <!-- Darf nur direkt im Blade verwendet werden da sonst Error in anderen Seiten-->
            <script type="text/javascript" language="javascript" class="init">
               $(document).ready(function() {
                $(document).ready(function() {         
               lightbox('Wird geladen');          
               setTimeout(function() {          
               closeLightbox();   
               },690);    });
               
                   var table = $('#example2').DataTable(
               
                    {
               
               "order_address": [[ 0, "desc" ]],
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
                                     "mColumns":[1,2,3],
                                     "bFooter": false,
                                   "sButtonText": "Zwischenablage",
                                    "bSelectedOnly": true
                               },
                               {
                                   "sExtends": "csv",  
                                      "mColumns":[1,2,3],
                                     "bFooter": false,                              
                                   "sFileName": "BestellAdresse.csv",
                                   "sButtonText": "CSV speichern",
                                   "bSelectedOnly": true
                                  
                               },
                            
                               {
                                   "sExtends": "pdf",
                                      "mColumns":[1,2,3],
                                     "bFooter": false,
                                    "sFileName": "BestellAdresse.pdf",
                                   "sButtonText": "PDF speichern",
                                   "bSelectedOnly": true                             
                           
               
                               },
                                {
                                   "sExtends": "print",
                                   "sButtonText": "Drucken"
                               },
                           ]
               
                       },  
               
                            
               
                       "ajax": "../../tablesorter_order_status_history_index/{{$order->order_id}}",
               
               
                       "deferRender": true,
                       "columnDefs": [ {          
               
                       },   
                {
                          
               
                       }
               
               
                        ],
                   } );
               
               
               
               // Apply the filter
               $("#example2 tfoot input ").on( 'keyup change ', function () {
               table
               .column( $(this).parent().index()+':visible' )
               .search( this.value )
               .draw();
               } );           
               // Apply the filter
               $("#example2 tfoot select ").on( 'keyup change ', function () {
               table
               .column( $(this).parent().index()+':visible' )
               .search( this.value )
               .draw();
               } );      
               
               
               } );
               
               
            </script>
            <table id="example2" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                   <th>Order ID</th>
                     <th>order_status_history_id</th>
                     <th>status</th>     
                     <th>channel</th>  
                      <th>operator</th>
                     <th>timestamp</th>
                     <th>Erstellt am</th>     
                     <th>Update am</th>  
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
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tfoot>
               </tfoot>
            </table>
         </div>
         </div>
         @else
          <div class="alert alert-danger">Keine Bestell Historie vorhanden</div>
          @endif 
      </div>
   </div>
</div>
</div>
<!--OrderHistory ENDE ----------------------------------------------------------------- --> 
<!--OrderItems ANFANG ----------------------------------------------------------------- -->  

                
      
<div class="container">
@if($order_items->count())  
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Bestellung Artikel {{$order->order_id}}</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <!--
                  <a href="{{ URL::route('admin.customer_management.create') }}" class="btn btn-u">
                  <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Bestellung anlegen (In Folge die Bestellung)
                  </a>
                  -->
            </div>
         </div>
         <div class="pull-right">
            <div class="btn-toolbar">
            </div>
         </div>
         <br>
         <br>
         <br>
         <div class="table-responsive">
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
               
                   var table = $('#example3').DataTable(
               
                    {
               
               "order_address": [[ 0, "desc" ]],
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
                                     "mColumns":[1,2,3,4,5,6,7,8,9],
                                     "bFooter": false,
                                   "sButtonText": "Zwischenablage",
                                    "bSelectedOnly": true
                               },
                               {
                                   "sExtends": "csv",  
                                      "mColumns":[1,2,3,4,5,6,7,8,9],
                                     "bFooter": false,                              
                                   "sFileName": "BestellArtikel.csv",
                                   "sButtonText": "CSV speichern",
                                   "bSelectedOnly": true
                                  
                               },
                            
                               {
                                   "sExtends": "pdf",
                                      "mColumns":[1,2,3,4,5,6,7,8,9],
                                     "bFooter": false,
                                    "sFileName": "BestellArtikel.pdf",
                                   "sButtonText": "PDF speichern",
                                   "bSelectedOnly": true                             
                           
               
                               },
                                {
                                   "sExtends": "print",
                                   "sButtonText": "Drucken"
                               },
                           ]
               
                       },  
               
                            
               
                       "ajax": "../../tablesorter_order_items_index/{{$order->order_id}}",
               
               
                       "deferRender": true,
                       "columnDefs": [ {          
               
                       },   
                {
                          
               
                       }
               
               
                        ],
                   } );
               
               
               
               // Apply the filter
               $("#example3 tfoot input ").on( 'keyup change ', function () {
               table
               .column( $(this).parent().index()+':visible' )
               .search( this.value )
               .draw();
               } );           
               // Apply the filter
               $("#example3 tfoot select ").on( 'keyup change ', function () {
               table
               .column( $(this).parent().index()+':visible' )
               .search( this.value )
               .draw();
               } );      
               
               
               } );
               
               
            </script>
            <table id="example3" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                     <th>BestellID</th>
                     <th>order_items_id</th>                     
                     <th>product_id</th>                     
                     <th>product_sku</th>              
                     <th>product_name</th> 
                     <th>original_price_net</th> 
                     <th>ust</th>
                     <th>discount</th>
                     <th>affilate_discount</th>
                     <th>affilate_credit</th>
                     <th>giftvoucher_credit</th>
                     <th>giftvoucher_code</th>
                     <th>affilate_code</th>
                     <th>quantity</th>
                     <th>timestamp</th>
                     <th>Erstellt am</th>
                     <th>Update am</th>
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
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                     <th rowspan="1" colspan="1"></th>
                  </tr>
               </tfoot>
               <tfoot>
               </tfoot>
            </table>
         </div>
         </div>
         @else
         <div class="alert alert-danger">Kein Bestell Artikel vorhanden</div>
          @endif 
      </div>
   </div>
</div>
</div>
<!--OrderItems ENDE ----------------------------------------------------------------- --> 
@stop