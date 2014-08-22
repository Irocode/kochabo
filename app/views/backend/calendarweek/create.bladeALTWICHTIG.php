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
   <!-- Maximale Anzahl Classic Rezepte ausgeben Start-->
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
                  <!--nr_of_recipes 1x-->  
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
                  <input type="hidden" name="merger{{$group}}[type][]" value="{{$nr_of_recipes_classic}}">   
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_" class="btn btn-u" value="PDF auswählen">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Maximale Anzahl Classic Rezepte ausgeben End-->
   <!--CLASSIC BOXEN END-->


   <!--VEGEARISCHE BOXEN START-->
   <!-- Maximale Anzahl Vegetarische Rezepte ausgeben Start-->
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
                  <!--nr_of_recipes 1x-->  
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
                  <input type="hidden" name="merger{{$group}}[type][]" value="{{$nr_of_recipes_vegetarisch}}">   
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_" class="btn btn-u" value="PDF auswählen">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Maximale Anzahl Vegetarische Rezepte ausgeben End-->
   <!--Vegetarische BOXEN END-->





 <!--Vegan BOXEN START-->
   <!-- Maximale Anzahl Vegan Rezepte ausgeben Start-->
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
                  <!--nr_of_recipes 1x-->  
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
                  <input type="hidden" name="merger{{$group}}[type][]" value="{{$nr_of_recipes_vegan}}">   
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_" class="btn btn-u" value="PDF auswählen">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Maximale Anzahl Vegan Rezepte ausgeben End-->
   <!--Vegan BOXEN END-->



<!--Fit BOXEN START-->
   <!-- Maximale Anzahl Fit Rezepte ausgeben Start-->
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
                  <!--nr_of_recipes 1x-->  
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
                  <input type="hidden" name="merger{{$group}}[type][]" value="{{$nr_of_recipes_fit}}">   
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_" class="btn btn-u" value="PDF auswählen">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Maximale Anzahl Fit Rezepte ausgeben End-->
   <!--Fit BOXEN END-->



   



   @if($products->count())
   @foreach( $products as $v ) 
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">{{$v->product_name}} [id: {{ $v->id}}] </h3>
      </div>
      <div class="panel-body">
         <div>
            <div class="row">
               <div class="col-md-6">
                  <!--Leerzeichen , Sonderzeichen entfernen-->
                  <?php
                     $dateiname = $v->product_name;
                     $dateiname = preg_replace('/[^A-Za-z 0-9]/', '', $dateiname); // alles weg, bis auf Buchstaben, Ziffern und Leerzeichen
                     $dateiname = preg_replace('/\s\s+/', ' ', $dateiname);        // überflüssige Leerzeichen auf eines reduzieren
                     $dateiname = preg_replace('/\s/', '_', $dateiname);           // Leerzeichen durch Unterstrich ersetzen
                     //echo strtolower($dateiname);
                     //$product_name_var= strtolower($dateiname);
                     
                     $product_name_var=  $v->id;
                     $imagevar=  $v->id;
                      $pdfvar=  $v->id;
                     
                     $countername = 1;
                     $countselectbeast = 1;
                     while ($countername <= $v->nr_of_recipes)                      
                     {
                         ?>
                  <!--selectize Rezept Dynamic auswählen Anfang-->                
                  <label class="control-label" for="recipetype">Rezept {{$countername}}</label>
                  <!--productid 1x-->    
                  <input type="hidden" name="merger[{{$v->id}}][id][id]" value="{{$v->id}}">
                  <!--nr_of_recipes 1x-->    
                  <input type="hidden" name="merger[{{$v->id}}][id][nr_of_recipes]" value="{{$v->nr_of_recipes}}">                   
                  <!--nr_of_recipes 1x-->   
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$v->id" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "    >
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
                        $('#select-beast_<?php echo "$countselectbeast$product_name_var" ?>').selectize({
                          create: true,
                          sortField: {
                            field: 'text',
                            direction: 'asc'
                          }
                        });
                     </script>
                  </div>
                  <input type="hidden" name="merger[{{$v->id}}][type]" value="{{$v->recipetypenummer}}">              
                  <!--selectize Rezept Dynamic auswählen Ende--> 
                  <?php
                     $countername++;    
                     $countselectbeast++;   
                            
                     }
                     ?>                    
                  <br>
               </div>
               <div class="col-md-6">
                  <!-- PDF -->
                  <div id="zone">
                     <div class="form-group">
                        <label for="exampleInputFile">PDF einfügen</label>
                        <input type="file" name="pdf_{{$imagevar}}" class="btn btn-u" value="PDF auswählen">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br>
   @endforeach
   @else
   <div class="alert alert-danger">Keine Produkte vorhanden</div>
   @endif 
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