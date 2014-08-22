@extends('backend/_layout/layout')
@section('content')  
{{ HTML::style('assets/backend/plugins/selectize/dist/css/selectize.bootstrap3.css') }}
{{ HTML::style('assets/backend/bootstrap/css/backend_bootstrap.css') }}      
{{ HTML::script('assets/backend/js/jquery-ui-1.10.4.custom/development-bundle/jquery-1.10.2.js') }}    
{{ HTML::script('assets/backend/js/company.js') }}    
{{ HTML::script('assets/backend/plugins/selectize/dist/js/standalone/selectizecalandarweek.js') }}  
{{ Notification::showAll() }}  
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Neuen Wochenplan für KW: {{$calendarweek->calendarweek}} / Jahr: {{$calendarweek->year}} bearbeiten</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/calendarweek','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
   {{ Form::open(array('action' => 'App\Controllers\Admin\CalendarweekController@store' , 'files'=> true, 'method' => 'post' )) }}
<!--
|**************************************************************************************************************************************
| CLASSIC BOXEN START 
|**************************************************************************************************************************************-->
   <?php $group="classic";?>   
   <div class="panel panel-default" style=" border-style:solid; border-color:red;">
      <div class="panel-heading">
         <h3 class="panel-title"> <?php echo" $typeerfragenbezeichung_classic";?></h3>
      </div>
      <div class="panel-body">
         <div>
            <div class="row">
               <div class="col-md-6">
                  @foreach( $joinaufbauclassic as $v )  
                  <?php $id =$v->title;?> 
                  <!--selectize Rezept Dynamic auswählen Anfang--> 
                  <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label>   
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$id$group" ?>" name="merger{{$group}}[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "    >
                           <option value="{{$v->recipeid }}" selected="selected">{{$v->title}}</option>
                           @foreach( $recipe as $x ) 
                           <option value="{{$x->id }}">{{ $x->title }}</option>
                           @endforeach             
                        </select>
                        @if ($errors->first('title1'))
                        <span class="help-block">{{ $errors->first('title1') }}</span>
                        @endif
                     </div>
                     <script>
                        $('#select-beast_<?php echo "$id$group" ?>').selectize({
                          create: true,
                          sortField: {
                            field: 'text',
                            direction: 'asc'
                          }
                        });
                     </script>
                  </div>
                  <!--selectize Rezept Dynamic auswählen Ende-->                   
                
                  @endforeach  
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_{{$group}}" class="btn btn-u" value="PDF auswählen">
                     </div>
                     <img src="{{$v->recipeflyerurl}}" width="120" height="120"> </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<!--
|**************************************************************************************************************************************
| CLASSIC BOXEN END 
|**************************************************************************************************************************************-->

<!--
|**************************************************************************************************************************************
| VEGETARISCHE BOXEN START 
|**************************************************************************************************************************************-->
   <?php $group="vegetarisch";?>   
   <div class="panel panel-default" style=" border-style:solid; border-color:blue;">
      <div class="panel-heading">
         <h3 class="panel-title"> <?php echo" $typeerfragenbezeichung_vegetarisch";?></h3>
      </div>
      <div class="panel-body">
         <div>
            <div class="row">
               <div class="col-md-6">
                  @foreach( $joinaufbauvegetarisch as $v )  
                  <?php $id =$v->title;?>
                  <!--selectize Rezept Dynamic auswählen Anfang--> 
                  <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label> 
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$id$group" ?>" name="merger{{$group}}[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "    >
                           <option value="{{$v->recipeid }}" selected="selected">{{$v->title}}</option>
                           @foreach( $recipe as $x ) 
                           <option value="{{$x->id }}">{{ $x->title }}</option>
                           @endforeach             
                        </select>
                        @if ($errors->first('title1'))
                        <span class="help-block">{{ $errors->first('title1') }}</span>
                        @endif
                     </div>
                     <script>
                        $('#select-beast_<?php echo "$id$group" ?>').selectize({
                          create: true,
                          sortField: {
                            field: 'text',
                            direction: 'asc'
                          }
                        });
                     </script>
                  </div>
                  <!--selectize Rezept Dynamic auswählen Ende-->            
                 
                  @endforeach  
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_{{$group}}" class="btn btn-u" value="PDF auswählen">
                        </span> <img src="{{$v->recipeflyerurl}}" width="120" height="120"> </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
  <!--
|**************************************************************************************************************************************
| VEGETARISCHE BOXEN END 
|**************************************************************************************************************************************-->

<!--
|**************************************************************************************************************************************
| VEGAN BOXEN START 
|**************************************************************************************************************************************-->
   <?php $group="vegan";?>   
   <div class="panel panel-default" style=" border-style:solid; border-color:green;">
      <div class="panel-heading">
         <h3 class="panel-title"> <?php echo" $typeerfragenbezeichung_vegan";?></h3>
      </div>
      <div class="panel-body">
         <div>
            <div class="row">
               <div class="col-md-6">
                  @foreach( $joinaufbauvegan as $v )  
                  <?php $id =$v->title;?>
                  <!--selectize Rezept Dynamic auswählen Anfang--> 
                  <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label> 
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$id$group" ?>" name="merger{{$group}}[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "    >
                           <option value="{{$v->recipeid }}" selected="selected">{{$v->title}}</option>
                           @foreach( $recipe as $x ) 
                           <option value="{{$x->id }}">{{ $x->title }}</option>
                           @endforeach             
                        </select>
                        @if ($errors->first('title1'))
                        <span class="help-block">{{ $errors->first('title1') }}</span>
                        @endif
                     </div>
                     <script>
                        $('#select-beast_<?php echo "$id$group" ?>').selectize({
                          create: true,
                          sortField: {
                            field: 'text',
                            direction: 'asc'
                          }
                        });
                     </script>
                  </div>
                  <!--selectize Rezept Dynamic auswählen Ende-->                  
                 
                  @endforeach  
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_{{$group}}" class="btn btn-u" value="PDF auswählen">
                     </div>
                     <img src="{{$v->recipeflyerurl}}" width="120" height="120"> </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--
|**************************************************************************************************************************************
| VEGAN BOXEN END 
|**************************************************************************************************************************************-->

<!--
|**************************************************************************************************************************************
| FIT BOXEN START 
|**************************************************************************************************************************************--> 
   <?php $group="fit";?>  
   <div class="panel panel-default" style=" border-style:solid; border-color:yellow;">
      <div class="panel-heading">
         <h3 class="panel-title"> <?php echo" $typeerfragenbezeichung_fit";?></h3>
      </div>
      <div class="panel-body">
         <div>
            <div class="row">
               <div class="col-md-6">
                  @foreach( $joinaufbaufit as $v )  
                  <?php $id =$v->title;?>
                  <!--selectize Rezept Dynamic auswählen Anfang--> 
                  <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label> 
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$id$group" ?>" name="merger{{$group}}[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "    >
                           <option value="{{$v->recipeid }}" selected="selected">{{$v->title}}</option>
                           @foreach( $recipe as $x ) 
                           <option value="{{$x->id }}">{{ $x->title }}</option>
                           @endforeach             
                        </select>
                        @if ($errors->first('title1'))
                        <span class="help-block">{{ $errors->first('title1') }}</span>
                        @endif
                     </div>
                     <script>
                        $('#select-beast_<?php echo "$id$group" ?>').selectize({
                          create: true,
                          sortField: {
                            field: 'text',
                            direction: 'asc'
                          }
                        });
                     </script>
                  </div>
                  <!--selectize Rezept Dynamic auswählen Ende-->             
                 
                  @endforeach  
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_{{$group}}" class="btn btn-u" value="PDF auswählen">
                     </div>
                     <img src="{{$v->recipeflyerurl}}" width="120" height="120"> </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--
|**************************************************************************************************************************************
| FIT BOXEN end 
|**************************************************************************************************************************************-->
 
   {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::hidden('check_yes', 'yes', array('class' => 'form-control', 'placeholder' => 'activated' )) }} 
   {{ Form::hidden('calendarweek', $calendarweek->calendarweek, array('class' => 'form-control' )) }} 
   {{ Form::hidden('year', $year, array('class' => 'form-control' )) }} 
   {{ Form::hidden('update', 'yes', array('class' => 'form-control' )) }} 
   {{ Form::submit('Ändern', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}
   <br>  
   <!-- Plichtfeld Anfang -->
   <div  style="margin-top:20px; margin-bottom:10px;">
      <p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
   </div>
   <!-- Plichtfeld Ende -->
   <!--Formular Registrierung Ende-->
</div>
<!-- Plichtfeld Ende -->
<br>
<br>
</div>
</div>
</div>