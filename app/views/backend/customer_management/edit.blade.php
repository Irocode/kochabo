@extends('backend/_layout/layout')
@section('content')
{{ HTML::script('assets/backend/plugins/ckeditor/ckeditor.js') }} 
{{ HTML::script('assets/backend/js/jquery.slug.js') }}
{{ HTML::script('assets/backend/plugins/fullcalendar/js/jquery.lightbox_me.min.js') }}
{{ Notification::showAll() }}
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>  Kunden bearbeiten </h2>
      <div class="pull-right">
         {{ HTML::link('/admin/customer_management','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
   {{ Form::model($ausgabe, array('route' => array('customer_management.update', $ausgabe->id), 'method' => 'PUT')) }}
   <div class="row">
      <div class="col-md-6">
   

             


<div class="row">
  <div class="col-md-3">
         <!-- gender -->

         <div class="control-group {{ $errors->has('gender') ? 'has-error' : '' }}">
            <label class="control-label" for="gender">Anrede <span class="stern" >*</span></label>
            <div class="controls">
               <select name="gender" class="form-control" required>
                  <option value="{{$ausgabe->gender}}" selected>{{$ausgabe->gender}}</option>
                  @foreach( $list_gender as $x )  
                  <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                  @endforeach   
               </select>
               @if ($errors->first('gender'))
               <span class="help-block">{{ $errors->first('gender') }}</span>
               @endif
            </div>
         </div></div>


     <div class="col-md-6">
     <!-- kundengruppe -->
   <div class="control-group {{ $errors->has('kundengruppe') ? 'has-error' : '' }}">
       <label class="control-label" for="kundengruppe">Kundengruppe <span class="stern" >*</span></label>
      <div class="controls">

  <!-- retrieval Data from customers_groups_id an collation with CustomerGroup Start-->
  <select name="customers_groups_id" class="form-control" required> 
    
    <option value="{{$ausgabe->customers_groups_id }}"
     selected>
     @foreach( $kundengrupperesult as $x )
     {{ $x->groupname }}
      @endforeach
      </option>

      @foreach( $list_kundengruppe as $x ) 
      <option value="{{ $x->customers_groups_id }}">{{ $x->groupname }}</option>
      @endforeach                  
      </select>   
      <!-- retrieval Data from customers_groups_id an collation with CustomerGroup End-->
            @if ($errors->first('kundengruppe'))
         <span class="help-block">{{ $errors->first('kundengruppe') }}</span>
         @endif

      </div>
   </div>
    </div>
         </div>
         <br>
         <!-- first_name -->
         <div class="control-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
            <label class="control-label" for="first_name">Vorname <span class="stern" >*</span></label>
            <div class="controls">      
               {{ Form::text('first_name', null, array('class'=>'form-control', 'id' => 'first_name', 'placeholder'=>'Vorname', 'required', 'value'=>Input::old('first_name'))) }}
               @if ($errors->first('first_name'))
               <span class="help-block">{{ $errors->first('first_name') }}</span>
               @endif
            </div>

         </div>
         <br>
         <!-- last_name -->
         <div class="control-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
            <label class="control-label" for="last_name">Nachname <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('last_name', null, array('class'=>'form-control', 'id' => 'last_name', 'placeholder'=>'Nachname','required', 'value'=>Input::old('last_name'))) }}          
               @if ($errors->first('last_name'))
               <span class="help-block">{{ $errors->first('last_name') }}</span>
               @endif
            </div>
         </div>
         <br>
         <!-- Datetime -->
         <?php
            $datumumwandeln= $ausgabe->date_of_birth; $date_of_birth= date("d-m-Y", strtotime($datumumwandeln));
            
            
            ?>
<div class="row">
  <div class="col-md-3">
      <!-- Day -->
   <div class="control-group {{ $errors->has('day') ? 'has-error' : '' }}">
      <label class="control-label" for="day">Geburttag <span class="stern" >*</span></label>
      <div class="controls">         
     <select name="day" class="form-control" required>
                         
                           <option value="{{$ausgabe->birthday}}" selected>{{$ausgabe->birthday}}</option>
                          @foreach( $list_day as $x )  

                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach   
               
                        </select>   

                

        
         @if ($errors->first('day'))
         <span class="help-block">{{ $errors->first('day') }}</span>
         @endif

 
      </div>
   </div> 
  


  </div>
  <div class="col-md-3">

  <!-- Month -->
     <div class="control-group {{ $errors->has('month') ? 'has-error' : '' }}">
      <label class="control-label" for="month">Geburtsmonat <span class="stern" >*</span></label>
      <div class="controls"> 
      <select name="month" class="form-control" required>
       <option value="{{$ausgabe->birthmonth}}" selected>{{$ausgabe->birthmonth}}</option>                   
                          @foreach( $list_month as $x )  
                          <option value="{{ $x->bezeichnung }}">{{ $x->bezeichnung }}</option>
                           @endforeach                  
                        </select>   


         @if ($errors->first('month'))
         <span class="help-block">{{ $errors->first('month') }}</span>
         @endif
      </div>
   </div> 
   <br>

   </div><div class="col-md-6">


  </div>
  <div class="col-md-4">
       <!-- Year -->
   <div class="control-group {{ $errors->has('year') ? 'has-error' : '' }}">
      <label class="control-label" for="year">Geburtsjahr <span class="stern" >*</span></label>
      <div class="controls">  


         {{ Form::text('birthyear', null, array('class'=>'form-control', 'id' => 'year', 'placeholder'=>'JJJJ', 'size' => '4', 'maxlength' => '4','required', 'value'=>Input::old('year'))) }}
         @if ($errors->first('year'))
         <span class="help-block">{{ $errors->first('year') }}</span>
         @endif
      </div>
   </div> 
            </div>
         </div>
     
         <!-- email_aktuell -->
         <div class="control-group {{ $errors->has('email_aktuell') ? 'has-error' : '' }}">
            <label class="control-label" for="email_aktuell">E-Mail für Newsletter(Bestätigt) <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::email('email_aktuell', null, array('class' => 'form-control', 'placeholder' => 'E-Mail','required')) }}
               @if ($errors->first('email_aktuell'))
               <span class="help-block">{{ $errors->first('email_aktuell') }}</span>
               @endif
            </div>
         </div>
         <br>



      
      



         <!-- telephone -->
         <div class="control-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
            <label class="control-label" for="last_name">Telefon <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('telephone', null, array('onkeypress' =>'return isNumberKey(event)', 'class' => 'form-control', 'placeholder' => 'Telefon [Zahl angeben]','required')) }}
               @if ($errors->first('telephone'))
               <span class="help-block">{{ $errors->first('telephone') }}</span>
               @endif
            </div>
         </div>
         <br>


            <!-- email -->
         <div class="control-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label class="control-label" for="email">E-Mail für Anmeldung <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'E-Mail','required', 'disabled')) }}
               @if ($errors->first('email'))
               <span class="help-block">{{ $errors->first('email') }}</span>
               @endif
            </div>
         </div>
         <br>
              <!-- passwort -->
         <div class="control-group {{ $errors->has('passwordhardcode') ? 'has-error' : '' }}">
            <label class="control-label" for="last_name">Derzeitiges Passwort <span class="stern" >*</span></label>
            <div class="controls">
               {{ Form::text('passwordhardcode', null, array('disabled', 'class' => 'form-control', 'placeholder' => 'Derzeitiges passwort')) }}
               @if ($errors->first('passwordhardcode'))
               <span class="help-block">{{ $errors->first('passwordhardcode') }}</span>
               @endif
            </div>
         </div>
         <br>
         <br>
         <!-- Plichtfeld Anfang -->
         <div  style="margin-top:20px; margin-bottom:10px;">
            <p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
         </div>
         <!-- Plichtfeld Ende -->
         <br>
         <br>
         <!-- Published -->
         <input type="hidden" value="is_published">
         <!--  <div class="control-group {{ $errors->has('is_published') ? 'has-error' : '' }}">
            <div class="controls">
                <label class="checkbox">{{ Form::checkbox('is_published', 'is_published') }} Veröffentlichen ?</label>
                @if ($errors->first('is_published'))
                <span class="help-block">{{ $errors->first('is_published') }}</span>
                @endif
            </div>
            </div>
            <br>
            -->
         {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
         {{ Form::submit('Ändern', array('class' => 'btn btn-u')) }}
         {{ Form::close() }}
         <script type="text/javascript" src="{{ URL::to('assets/backend/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>
         <script type="text/javascript" src="{{ URL::to('assets/backend/js/locales/bootstrap-datetimepicker.de.js') }}" charset="UTF-8"></script>
         <script type="text/javascript">
            $('.form_datetime').datetimepicker({
                //language:  'fr',
                 language:  'de',
                weekStart: 1,
                todayBtn:  1,
              autoclose: 1,
              todayHighlight: 1,
              startView: 2,
              forceParse: 0,
                showMeridian: 1
            });
            $('.form_date').datetimepicker({
                language:  'de',
                weekStart: 1,
                todayBtn:  1,
              autoclose: 1,
              todayHighlight: 1,
              startView: 2,
              minView: 2,
              forceParse: 0
            });
            $('.form_time').datetimepicker({
                language:  'de',
                weekStart: 1,
                todayBtn:  1,
              autoclose: 1,
              todayHighlight: 1,
              startView: 1,
              minView: 0,
              maxView: 1,
              forceParse: 0
            });
         </script>
      </div>
      <div class="col-md-6">
         <h4>Passwort ändern</h4>
         <div class="well">
            {{ Form::open(array(
            'action' => array('UseradminController@change', $ausgabe->id), 
            'class' => 'form-inline', 
            'role' => 'form'
            )) }}
            <div class="form-group {{ $errors->has('oldPassword') ? 'has-error' : '' }}">
               {{ Form::label('oldPassword', 'Altes Passwort', array('class' => 'sr-only')) }}
               {{ Form::password('oldPassword', array('class' => 'form-control', 'placeholder' => 'Altes Passwort')) }}
            </div>
            <div class="form-group {{ $errors->has('newPassword') ? 'has-error' : '' }}">
               {{ Form::label('newPassword', 'Neues Passwort', array('class' => 'sr-only')) }}
               {{ Form::password('newPassword', array('class' => 'form-control', 'placeholder' => 'Neues Passwort')) }}
            </div>
            <div class="form-group {{ $errors->has('newPassword_confirmation') ? 'has-error' : '' }}">
               {{ Form::label('newPassword_confirmation', 'Passwort bestätigen', array('class' => 'sr-only')) }}
               {{ Form::password('newPassword_confirmation', array('class' => 'form-control', 'placeholder' => 'Passwort bestätigen')) }}
            </div>
            <br><br>
            {{ Form::submit('Neues Passwort genehmigen', array('class' => 'btn-u'))}}
            {{ ($errors->has('oldPassword') ? '<br />' . $errors->first('oldPassword') : '') }}
            {{ ($errors->has('newPassword') ?  '<br />' . $errors->first('newPassword') : '') }}
            {{ ($errors->has('newPassword_confirmation') ? '<br />' . $errors->first('newPassword_confirmation') : '') }}
            {{ Form::close() }}
         </div>
      </div>
   </div>
   <hr>
</div>
<br><br>

 

   

<!--

   @if($order->count())
                     @foreach( $order as $v )                  
                    Bestellnummer: {{ $v->customercustomer_id}} / Datum: {{ $v->delivery_date}}<br>
                     @endforeach
                     @else
                     <div class="alert alert-danger">Keine Bestellung vorhanden</div>
                     @endif 
-->

<!--Order Anfang-->
<div class="container">


  <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>  Bestellung bearbeiten</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/customer_management','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>




   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Bestellungen</h3>
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
               <a href="{{URL::to('admin/list_settings_customer')}}" class="btn btn-u" disabled="">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Settings
               </a>               
            </div>
         </div>
         <br>
         <br>
         <br>
         <div class="table-responsive">
            @if($order->count())
            <!-- Darf nur direkt im Blade verwendet werden da sonst Error in anderen Seiten-->
        
            <script type="text/javascript" language="javascript" class="init">
               $(document).ready(function() {
                $(document).ready(function() {         
               lightbox('Wird geladen');          
               setTimeout(function() {          
               closeLightbox();   
               },690);    });
               
                   var table = $('#examplex').DataTable(
               
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
                                     "mColumns":[1,2,3,4,5,6],
                                     "bFooter": false,
                                   "sButtonText": "Zwischenablage",
                                    "bSelectedOnly": true
                               },
                               {
                                   "sExtends": "csv",  
                                      "mColumns":[1,2,3,4,5,6],
                                     "bFooter": false,                              
                                   "sFileName": "Bestellung.csv",
                                   "sButtonText": "CSV speichern",
                                   "bSelectedOnly": true
                                  
                               },
                            
                               {
                                   "sExtends": "pdf",
                                      "mColumns":[1,2,3,4,5,6],
                                     "bFooter": false,
                                    "sFileName": "Bestellung.pdf",
                                   "sButtonText": "PDF speichern",
                                   "bSelectedOnly": true                             
                           
               
                               },
                                {
                                   "sExtends": "print",
                                   "sButtonText": "Drucken"
                               },
                           ]
               
                       },  
               
                              "ajax": "../../tablesorter_order_index/{{$ausgabe->id}}",
               
                      
               
               
                       "deferRender": true,
                       "columnDefs": [ {          
               
                       },   
                {
                          
               
                       }
               
               
                        ],
                   } );
               
               
               
               // Apply the filter
               $("#examplex tfoot input ").on( 'keyup change ', function () {
               table
               .column( $(this).parent().index()+':visible' )
               .search( this.value )
               .draw();
               } );           
               // Apply the filter
               $("#examplex tfoot select ").on( 'keyup change ', function () {
               table
               .column( $(this).parent().index()+':visible' )
               .search( this.value )
               .draw();
               } );      
               
               
               } );
               
               
            </script>
            <table id="examplex" class="display" cellspacing="0" width="100%">
               <thead>
                  <tr>
                   <th>Order ID</th>
                     <th>KundenID</th>
                     <th>Order_increment_id</th>     
                     <th>Lieferbar</th>  
                     <th>Lieferdatum</th>              
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
<!--Order Ende-->




<!--


   @if($address->count())
                     @foreach( $address as $v )                  
                    Bestellnummer: {{ $v->firsname}} / Datum: {{ $v->id}}<br>
                     @endforeach
                     @else
                     <div class="alert alert-danger">Keine Bestellung vorhanden</div>
                     @endif 

-->



<!--Adressen Anfang-->

<div class="container">

<!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>  Adresse bearbeiten</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/customer_management','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Kunden Adressen</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
            <!--
               <a href="{{ URL::route('admin.customer_management.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Kunden anlegen (In Folge die Adresse)
               </a>

               -->
            </div>
         </div>
         <div class="pull-right">
            <div class="btn-toolbar">
               <a href="{{URL::to('admin/list_settings_customer')}}" class="btn btn-u" disabled="">
               <span class="glyphicon glyphicon-cog"></span>&nbsp;Filter Settings
               </a>               
            </div>
         </div>
         <br>
         <br>
         <br>
         <div class="table-responsive">
            @if($address->count())
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
                                     "mColumns":[1,2,3,4,5,6,7],
                                     "bFooter": false,
                                   "sButtonText": "Zwischenablage",
                                    "bSelectedOnly": true
                               },
                               {
                                   "sExtends": "csv",  
                                      "mColumns":[1,2,3,4,5,6,7,8],
                                     "bFooter": false,                              
                                   "sFileName": "Kundenadresse.csv",
                                   "sButtonText": "CSV speichern",
                                   "bSelectedOnly": true
                                  
                               },
                            
                               {
                                   "sExtends": "pdf",
                                      "mColumns":[1,2,3,4,5,6,7,8],
                                     "bFooter": false,
                                    "sFileName": "Kundenadresse.pdf",
                                   "sButtonText": "PDF speichern",
                                   "bSelectedOnly": true                             
                           
               
                               },
                                {
                                   "sExtends": "print",
                                   "sButtonText": "Drucken"
                               },
                           ]
               
                       },  
               
                            
               
                       "ajax": "../../tablesorter_address_index/{{$ausgabe->id}}",
               
               
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
                     <th style='width: 60px;'>KundenID</th>
                     <th>Vorname</th>
                     <th>Nachname</th>
                     <th >Adresse</th>
                     <th style='width: 60px;' >PLZ</th>
                     <th >Ort</th>
                     <th>Land</th>
                     <th>Art</th>
                     <th>Bearbeiten</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter ID">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter KundenID">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Vorname">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Nachname">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Adresse">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter PLZ">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Ort">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Land">
                     </th>
                     <th rowspan="1" colspan="1">
                        <input class="form-control" type="text" placeholder="Filter Art ">
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
<!--Adressem Emde-->
@stop