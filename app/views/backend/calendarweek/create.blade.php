@extends('backend/_layout/layout')
@section('content')  
{{ HTML::style('assets/backend/plugins/selectize/dist/css/selectize.bootstrap3.css') }}
{{ HTML::script('assets/backend/plugins/selectize/dist/js/standalone/selectizecalandarweek.js') }}    
{{ Notification::showAll() }}  
<div class="container">
   <!--HEADER mit Zurück ANFANG-->
   <div class="headline">
      <h2>Neuen Wochenplan für KW: {{$calendarweek}} / Jahr: {{$year}} erstellen</h2>
      <div class="pull-right">
         {{ HTML::link('/admin/calendarweek','Zurück', array('class'=>'btn btn-u')) }}
      </div>
   </div>
   <!--HEADER mit Zurück ENDE-->
   {{ Form::open(array('action' => 'App\Controllers\Admin\CalendarweekController@store' , 'files'=> true, 'method' => 'post' )) }}
   <!--CLASSIC BOXEN START--> 
   <div class="panel panel-default" style=" border-style:solid; border-color:red;">
      <div class="panel-heading">
         <h3 class="panel-title"> <?php echo" $typeerfragenbezeichung_classic [Maximale Feldanzahl: $max_classic";?>]</h3>
      </div>
      <div class="panel-body">
         <div>
            <div class="row">
               <div class="col-md-6">
                  <?php                    
                     $countermaxstart = 1;
                     $countselectbeast = 1;
                     $countername = 1;
                     $group="classic";
                     while ($countermaxstart <= $max_classic)                      
                        {                    
                     ?>
                  <label class="control-label" for="recipetype">Rezept {{$countername}}</label>
                  <!--selectize Rezept Dynamic auswählen Anfang--> 
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$countermaxstart$group" ?>" name="merger{{$group}}[recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "    >
                           <option value="" selected>Wähle / Suche     </option>
                           @foreach( $recipe as $x ) 
                           <option value="{{$x->id }}">{{ $x->title }}</option>
                           @endforeach             
                        </select>
                        @if ($errors->first('title1'))
                        <span class="help-block">{{ $errors->first('title1') }}</span>
                        @endif
                     </div>
                     <script>
                        $('#select-beast_<?php echo "$countselectbeast$countermaxstart$group" ?>').selectize({
                          create: true,
                          sortField: {
                            field: 'text',
                            direction: 'asc'
                          }
                        });
                     </script>
                  </div>
                  <!--selectize Rezept Dynamic auswählen Ende--> 
                  <?php
                     $countermaxstart++;  
                     $countername++; 
                     }
                     ?>
            
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_{{$group}}" class="btn btn-u" value="PDF auswählen">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--CLASSIC BOXEN END-->
   <!--VEGEARISCHE BOXEN START-->   
   <div class="panel panel-default" style=" border-style:solid; border-color:blue;">
      <div class="panel-heading">
         <h3 class="panel-title"> <?php echo" $typeerfragenbezeichung_vegetarisch [Maximale Feldanzahl: $max_vegetarisch";?>]</h3>
      </div>
      <div class="panel-body">
         <div>
            <div class="row">
               <div class="col-md-6">
                  <?php                    
                     $countermaxstart = 1;
                     $countselectbeast = 1;
                     $countername = 1;
                     $group="vegetarisch";
                     while ($countermaxstart <= $max_vegetarisch)                      
                        {                    
                     ?>
                  <label class="control-label" for="recipetype">Rezept {{$countername}}</label>
                  <!--selectize Rezept Dynamic auswählen Anfang--> 
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$countermaxstart$group" ?>" name="merger{{$group}}[recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "    >
                           <option value="" selected>Wähle / Suche     </option>
                           @foreach( $recipe as $x ) 
                           <option value="{{$x->id }}">{{ $x->title }}</option>
                           @endforeach             
                        </select>
                        @if ($errors->first('title1'))
                        <span class="help-block">{{ $errors->first('title1') }}</span>
                        @endif
                     </div>
                     <script>
                        $('#select-beast_<?php echo "$countselectbeast$countermaxstart$group" ?>').selectize({
                          create: true,
                          sortField: {
                            field: 'text',
                            direction: 'asc'
                          }
                        });
                     </script>
                  </div>
                  <!--selectize Rezept Dynamic auswählen Ende--> 
                  <?php 
                     $countermaxstart++;  
                     $countername++; 
                     } 
                     ?>
                  
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_{{$group}}" class="btn btn-u" value="PDF auswählen">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Vegetarische BOXEN END-->
   <!--Vegan BOXEN START-->   
   <div class="panel panel-default" style=" border-style:solid; border-color:green;">
      <div class="panel-heading">
         <h3 class="panel-title"> <?php echo" $typeerfragenbezeichung_vegan [Maximale Feldanzahl: $max_vegan";?>]</h3>
      </div>
      <div class="panel-body">
         <div>
            <div class="row">
               <div class="col-md-6">
                  <?php                    
                     $countermaxstart = 1;
                     $countselectbeast = 1;
                     $countername = 1;
                     $group="vegan";
                     while ($countermaxstart <= $max_vegan)                      
                        {                    
                     ?>
                  <label class="control-label" for="recipetype">Rezept {{$countername}}</label>
                  <!--selectize Rezept Dynamic auswählen Anfang--> 
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$countermaxstart$group" ?>" name="merger{{$group}}[recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "    >
                           <option value="" selected>Wähle / Suche     </option>
                           @foreach( $recipe as $x ) 
                           <option value="{{$x->id }}">{{ $x->title }}</option>
                           @endforeach             
                        </select>
                        @if ($errors->first('title1'))
                        <span class="help-block">{{ $errors->first('title1') }}</span>
                        @endif
                     </div>
                     <script>
                        $('#select-beast_<?php echo "$countselectbeast$countermaxstart$group" ?>').selectize({
                          create: true,
                          sortField: {
                            field: 'text',
                            direction: 'asc'
                          }
                        });
                     </script>
                  </div>
                  <!--selectize Rezept Dynamic auswählen Ende--> 
                  <?php 
                     $countermaxstart++;  
                     $countername++; 
                     } 
                     ?>
                  
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_{{$group}}" class="btn btn-u" value="PDF auswählen">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Vegan BOXEN END-->
   <!--Fit BOXEN START-->  
   <div class="panel panel-default" style=" border-style:solid; border-color:yellow;">
      <div class="panel-heading">
         <h3 class="panel-title"> <?php echo" $typeerfragenbezeichung_fit [Maximale Feldanzahl: $max_fit";?>]</h3>
      </div>
      <div class="panel-body">
         <div>
            <div class="row">
               <div class="col-md-6">
                  <?php                    
                     $countermaxstart = 1;
                     $countselectbeast = 1;
                     $countername = 1;
                     $group="fit";
                     while ($countermaxstart <= $max_fit)                      
                        {                    
                     ?>
                  <label class="control-label" for="recipetype">Rezept {{$countername}}</label>
                  <!--selectize Rezept Dynamic auswählen Anfang-->   
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$countermaxstart$group" ?>" name="merger{{$group}}[recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "    >
                           <option value="" selected>Wähle / Suche     </option>
                           @foreach( $recipe as $x ) 
                           <option value="{{$x->id }}">{{ $x->title }}</option>
                           @endforeach             
                        </select>
                        @if ($errors->first('title1'))
                        <span class="help-block">{{ $errors->first('title1') }}</span>
                        @endif
                     </div>
                     <script>
                        $('#select-beast_<?php echo "$countselectbeast$countermaxstart$group" ?>').selectize({
                          create: true,
                          sortField: {
                            field: 'text',
                            direction: 'asc'
                          }
                        });
                     </script>
                  </div>
                  <!--selectize Rezept Dynamic auswählen Ende--> 
                  <?php 
                     $countermaxstart++;  
                     $countername++; 
                     } 
                     ?>
                 
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_{{$group}}" class="btn btn-u" value="PDF auswählen">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Fit BOXEN END-->
   <br>  
   <!-- Plichtfeld Anfang -->
   <div  style="margin-top:20px; margin-bottom:10px;">
      <p><span class="stern" >*</span> Plichtfelder müssen ausgefüllt werden. </p>
   </div>
   <!-- Plichtfeld Ende -->
   <!--Formular Registrierung Ende-->
   {{ Form::hidden('activated', '1', array('class' => 'form-control' )) }} 
   {{ Form::hidden('check_yes', 'yes', array('class' => 'form-control' )) }} 
   {{ Form::hidden('calendarweek', $calendarweek, array('class' => 'form-control' )) }} 
   {{ Form::hidden('year', $year, array('class' => 'form-control' )) }} 
   {{ Form::submit('Anlegen', array('class' => 'btn btn-u')) }}
   {{ Form::close() }}
</div>
<!-- Plichtfeld Ende -->
<br>
<br>
</div>
</div>
</div>
@stop