@extends('backend/_layout/layout')
@section('content')
{{ Notification::showAll() }}
<div id="Notification2" class="Notification2"></div>
<div class="container">
   <div class="row">
      <div id="info" class="alert alert-info info" style="display: none;">
         <ul></ul>
      </div>
   </div>
</div>
</div>  
<div class="container">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">{{ $logisticianmanager->name }}</h3>
         Letztes mal verändert: {{ $logisticianmanager->updated_at }}
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ url('admin/logisticianmanager') }}"
                  class="btn btn-u">
               <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Zurück
               </a>
            </div>
         </div>
         <br>
         <br>
         {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\LogisticianmanagerController@update', $logisticianmanager->id), 'method' => 'PATCH')) }}
         <table class="table table-striped">
            <tbody>
               <tr>
                  <td><strong>Logistiker <span class="stern" >*</span></strong> </td>
                  <td>
                     <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {{ Form::text('name', $logisticianmanager->name, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Logistiker Name', 'value'=>Input::old('name'))) }}
                        @if ($errors->first('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                  </td>
               </tr>
               <tr>
               <td><strong>Adresse <span class="stern" >*</span></strong></td>
               <td>
               <div class="control-group {{ $errors->has('street') ? 'has-error' : '' }}">
               {{ Form::text('street', $logisticianmanager->street, array('class'=>'form-control', 'id' => 'street', 'placeholder'=>'Straße', 'value'=>Input::old('street'))) }}
               @if ($errors->first('street'))
               <span class="help-block">{{ $errors->first('street') }}</span>
               @endif
               </div>      
               <br>
               <div class="control-group {{ $errors->has('streetno') ? 'has-error' : '' }}">
               {{ Form::text('streetno', $logisticianmanager->streetno, array('class'=>'form-control', 'id' => 'streetno', 'placeholder'=>'Adress Zusatz', 'value'=>Input::old('streetno'))) }}
               @if ($errors->first('streetno'))
               <span class="help-block">{{ $errors->first('streetno') }}</span>
               @endif
               </div>
               <br>
               <div class="row">
               <div class="col-xs-2">
               <div class="control-group {{ $errors->has('zip') ? 'has-error' : '' }}">
               {{ Form::text('zip', $logisticianmanager->zip, array('class'=>'form-control', 'id' => 'zip', 'placeholder'=>'PLZ', 'value'=>Input::old('zip'))) }}
               @if ($errors->first('title'))
               <span class="help-block">{{ $errors->first('zip') }}</span>
               @endif
               </div>
               </div> <div class="col-xs-2">
               <div class="control-group {{ $errors->has('city') ? 'has-error' : '' }}">
               {{ Form::text('city', $logisticianmanager->city, array('class'=>'form-control', 'id' => 'city', 'placeholder'=>'Ort', 'value'=>Input::old('city'))) }}
               @if ($errors->first('city'))
               <span class="help-block">{{ $errors->first('city') }}</span>
               @endif
               </div>
               </div> <div class="col-xs-2">
               <div class="control-group {{ $errors->has('stateprovince') ? 'has-error' : '' }}">
               {{ Form::text('stateprovince', $logisticianmanager->stateprovince, array('class'=>'form-control', 'id' => 'stateprovince', 'placeholder'=>'Bundesland', 'value'=>Input::old('stateprovince'))) }}
               @if ($errors->first('stateprovince'))
               <span class="help-block">{{ $errors->first('stateprovince') }}</span>
               @endif
               </div>    
               </div> <div class="col-xs-3">
               <div class="control-group {{ $errors->has('country_id') ? 'has-error' : '' }}">
               {{ Form::text('country_id', $logisticianmanager->country_id, array('class'=>'form-control', 'id' => 'country_id', 'placeholder'=>'Land', 'value'=>Input::old('country_id'))) }}
               @if ($errors->first('country_id'))
               <span class="help-block">{{ $errors->first('country_id') }}</span>
               @endif
               </div>
               </div>
               </td>
               </tr>
               <tr>
               <td><strong>Kontakt Person <span class="stern" >*</span></strong></td>
               <td>
               <div class="control-group {{ $errors->has('contactPerson') ? 'has-error' : '' }}">
               {{ Form::text('contactPerson', $logisticianmanager->contactPerson, array('class'=>'form-control', 'id' => 'contactPerson', 'placeholder'=>'Kontakt Person', 'value'=>Input::old('contactPerson'))) }}
               @if ($errors->first('contactPerson'))
               <span class="help-block">{{ $errors->first('contactPerson') }}</span>
               @endif
               </div>
               </td>
               </tr>
               <tr>
               <td><strong>Telefon<span class="stern" >*</span> / E-Mail</strong></td>
               <td>
               <div class="row">
               <div class="col-xs-2">
               <div class="control-group {{ $errors->has('phone') ? 'has-error' : '' }}">
               {{ Form::text('phone', $logisticianmanager->phone, array('class'=>'form-control', 'id' => 'phone', 'placeholder'=>'Telefon', 'value'=>Input::old('phone'))) }}
               @if ($errors->first('phone'))
               <span class="help-block">{{ $errors->first('phone') }}</span>
               @endif
               </div>
               </div>
               <div class="col-xs-4">
               <div class="control-group {{ $errors->has('email') ? 'has-error' : '' }}">
               {{ Form::text('email', $logisticianmanager->email, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'E-Mail', 'value'=>Input::old('email'))) }}
               @if ($errors->first('email'))
               <span class="help-block">{{ $errors->first('email') }}</span>
               @endif
               </div>
               </div>
               </div>
               </td>
               </tr>
            </tbody>
         </table>
         <br>
         {{ Form::submit('Logistiker Änderungen speichern', array('class' => 'btn btn-u')) }}
         {{ Form::close() }}
         </div>
         </div>       
        
         <!--Anlegen Anfang-->
      </div>
      <div class="container">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">Zugeordnete Postleitzahlen</h3>
            </div>
            <div class="panel-body">
               <div>
               </div>
               <div>
                  <button id="toogle_button" class="btn btn-u  " type="button"> Postleitzahlen ansehen</button>
                  <br><br>
                  <div id="toogle" style="display: none">
                     @if($deliveryzipcode->count())
                     @foreach( $deliveryzipcode as $v )                  
                     <button id="go" class="btn btn-u btn  " type="button">  {{ $v->zip}}</button>
                     @endforeach
                     @else
                     <div class="alert alert-danger">Keine Zeit vorhanden</div>
                     @endif 
                     <a id="button_" class="btn btn-danger" target="" title="" href="{{URL::to('/admin/deliveryassign/')}}/{{$logisticianmanager->id}}/group">
                     Änderungen vornehmen
                     </a>
                  </div>
               </div>
               <!--  Toogle for hide and visible-->
               <script>
                  $( "#toogle_button" ).click(function() {
                    $( "#toogle" ).toggle();
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
















       <div id="zielanker_loeschen"></div>

   <!--Anlegen Anfang-->
   <div class="container">
      <div class="panel panel-default">
         <div class="panel-heading">
            <h3 class="panel-title">Logistik Zeiten</h3>
         </div>
         <div class="panel-body">
            @if($deliverytimes->count())
            <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th>Bezeichnung <span class="stern" >*</span></th>
                        <th>von <span class="stern" >*</span></th>
                        <th>bis <span class="stern" >*</span></th>
                        <th>Nachtsprung <span class="stern" >*</span></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach( $deliverytimes as $v )
                     <?php  $name_e =  $v->id; $name_ee ="name_$name_e" ?>
                     <?php   $delivery_time_from_e =  $v->id; $delivery_time_from_ee ="delivery_time_from_$delivery_time_from_e" ?>
                     <?php   $delivery_time_to_e =  $v->id; $delivery_time_to_ee ="delivery_time_to_$delivery_time_to_e" ?>
                     <?php   $nightjump_e =  $v->id;  $nightjump_ee ="nightjump_$nightjump_e" ?>
                     <form action="" method="PATCH" id="form_lieferzeiten_{{$v->id}}">
                        <tr>
                           <td>
                              <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                 {{ Form::text('name', $v->name, array('class'=>'form-control', 'id' => $name_ee, 'placeholder' => 'Bezeichnung', 'maxlength' => 100,'required' => true,'value'=>Input::old('name'))) }}
                                 @if ($errors->first('name'))
                                 <span class="help-block">{{ $errors->first('name') }}</span>
                                 @endif
                              </div>
                           </td>
                           <td>
                              <div class="control-group {{ $errors->has('delivery_time_from') ? 'has-error' : '' }}">
                                 {{ Form::text('delivery_time_from', $v->delivery_time_from, array('class'=>'form-control', 'id' => $delivery_time_from_ee, 'placeholder'=>'von', 'value'=>Input::old('delivery_time_from'))) }}
                                 @if ($errors->first('delivery_time_from'))
                                 <span class="help-block">{{ $errors->first('delivery_time_from') }}</span>
                                 @endif
                              </div>
                           </td>
                           <td>
                              <div class="control-group {{ $errors->has('delivery_time_to') ? 'has-error' : '' }}">
                                 {{ Form::text('delivery_time_to', $v->delivery_time_to, array('class'=>'form-control', 'id' => $delivery_time_to_ee, 'placeholder'=>'bis', 'value'=>Input::old('delivery_time_to'))) }}
                                 @if ($errors->first('delivery_time_to'))
                                 <span class="help-block">{{ $errors->first('delivery_time_to') }}</span>
                                 @endif
                              </div>
                           </td>
                           <td>
                              {{ Form::text('nightjump', $v->nightjump, array('class'=>'form-control', 'id' => $nightjump_ee, 'placeholder'=>'Nachtsprung', 'value'=>Input::old('nightjump'))) }}     
                              @if ($errors->first('nightjump'))
                              <span class="help-block">{{ $errors->first('nightjump') }}</span>
                              @endif
                              <input type="hidden" name="id" id="id" value="{{ $v->id}}">
                           <td>
                              <a id="button_" class="btn btn-danger publish" title="" href="{{ URL::route('admin.deliverytimes.delete', array($v->id, 'logisticianmanagerid' => $logisticianmanager->id)  ) }}">Löschen</a>
                           </td>
                           <td>
                              <button type="submit" class="btn btn-u"  id="update_{{ $v->id}}"> Aktualisieren</button>
                           </td>
                           <td>
                              <div id="flash_{{$v->id}}">&nbsp;</div>
                           </td>
                     </form>
            </div>
            </td>
            <td>
            </td>
            </td>
            </tr>
            <!-- AJAX FORM POST SCRIPT ANFANG-->
            <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
            <script>
               $(document).ready(function(){
               
               $('#form_lieferzeiten_{{$v->id}}').submit(function(e){
               
               
               
               
               
                           $("#flash_{{$v->id}}").show();
                           $("#flash_{{$v->id}}").fadeIn(1000).html('<img src="{{ URL::to('assets/img/backend/icons/ajax-loader.gif') }}" />'); 
                           $("#flash_{{$v->id}}").fadeOut(1000);
               
               
               //Hinweis Anfang
                   $(function(){
                    new PNotify({     
                   title: 'Hinweis',
                   text: 'Logistik Zeit wurde aktualisiert.',
                    type: 'success',
                   mouse_reset: false
               });
                   });
               
               //Hinweis ENDE   
               
               e.preventDefault();
               
               //formData 
               var formData = new FormData();
               
               formData.append('name', $('#name_{{$v->id}}').val());
               formData.append('delivery_time_from', $('#delivery_time_from_{{$v->id}}').val());
               formData.append('delivery_time_to', $('#delivery_time_to_{{$v->id}}').val());
               formData.append('nightjump', $('#nightjump_{{$v->id}}').val());
               
               
               $.ajax ({
               url:'../submitx/{{$v->id}}/toggle-publish',
               method:'post',
               processData:false,
               contentType:false,
               cache:false,
               dataType: 'json',
               data:formData,
               success:function(data) { 
               
               if(data.success) {               
                 
               
               $.each(data.errors, function(index, error){    
               });
               
               }else {    
               
               }
               
               },
               error:function(){}
               
               });
               
               });
               
               }); 
               
            </script>
            <!-- AJAX FORM POST SCRIPT ENDE-->
            @endforeach
            </tbody>
            </table>
         </div>
         @else
         <div class="alert alert-danger">Keine Zeiten angelegt</div>
         @endif 
         <!--Anlegen Anfang-->
         <div id="zielanker_speichern"></div>
        
         {{ Form::open( array( 'action' => array( 'App\Controllers\Admin\DeliverytimesController@store', 'logisticianmanagerid' => $logisticianmanager->id) ) ) }}
         <hr>
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>Bezeichnung <span class="stern" >*</span></th>
                     <th>von <span class="stern" >*</span></th>
                     <th>bis <span class="stern" >*</span></th>
                     <th>Nachtsprung <span class="stern" >*</span></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>
                        <div class="control-group {{ $errors->has('name') ? 'has-error' : '' }}">
                           {{ Form::text('name', null, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Bezeichnung', 'value'=>Input::old('name'))) }}   
                           @if ($errors->first('name'))
                           <span class="help-block">{{ $errors->first('name') }}</span>
                           @endif
                        </div>
                     </td>
                     <td>
                        <div class="control-group {{ $errors->has('delivery_time_from') ? 'has-error' : '' }}">
                           <div class="input-group date form_time col-md-30" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">                  
                              <input class="form-control" size="16" type="text" value="" name="delivery_time_from" Placeholder="von" id"delivery_time_from" readonly>
                              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                              <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                           </div>
                           <input type="hidden" id="dtp_input3" value="" />
                           @if ($errors->first('delivery_time_from'))
                           <span class="help-block">{{ $errors->first('delivery_time_from') }}</span>
                           @endif
                        </div>
                     </td>
                     <td>
                        <div class="control-group {{ $errors->has('delivery_time_to') ? 'has-error' : '' }}">
                           <div class="input-group date form_time col-md-30" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">                  
                              <input class="form-control" size="16" type="text" value="" name="delivery_time_to" Placeholder="bis" id"delivery_time_to" readonly>
                              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                              <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                           </div>
                           <input type="hidden" id="dtp_input3" value="" />
                           @if ($errors->first('delivery_time_to'))
                           <span class="help-block">{{ $errors->first('delivery_time_to') }}</span>
                           @endif
                        </div>
                     </td>
                     <td>
                        {{ Form::text('nightjump', null, array('class'=>'form-control', 'id' => 'nightjump', 'placeholder'=>'Nachtsprung', 'value'=>Input::old('nightjump'))) }}     
                        @if ($errors->first('nightjump'))
                        <span class="help-block">{{ $errors->first('nightjump') }}</span>
                        @endif
         </div>
         </td>
         <td>
         {{ Form::submit('Neue Zeit anlegen', array('class' => 'btn btn-danger ')) }}
         </td>
         </td>
         </tr>
         </tbody>
         </table>
      </div>
      {{ Form::hidden('user_id', $logisticianmanager->id) }} 
      {{ Form::close() }}
      <!--Anlegen ENDE-->   
   </div>
</div>
<a id="nacheingabe"></a>
<!-- Plichtfeld Anfang -->
<div  style="margin-top:20px; margin-bottom:10px;">
   <p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
</div>
<!-- Plichtfeld Ende -->
</div>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<!--Datepicker ANFANG-->   
<script type="text/javascript" src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ URL::to('assets/js/locales/bootstrap-datetimepicker.de.js') }}" charset="UTF-8"></script>
<script type="text/javascript">
   $('.form_datetime').datetimepicker({
       //language:  'de',
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
<!--Datepicker ENDE-->  
@stop