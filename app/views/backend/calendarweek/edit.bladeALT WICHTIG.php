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




















   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><?php if (isset($final_results[0])) { echo"$final_results[0]";} else {};?></h3>
      </div>
      <div class="panel-body">
         <div>
            <?php
               $countselectbeast=rand(5, 1500);
               $product_name_var="90";
               
               ?>
            <div class="row">
               <div class="col-md-6">
               <!--Singlebox-->
                  
                  @foreach( $joinaufbaueinzel2 as $v )  </b>
                  <?php
                     $countselectbeast=rand(5, 1500);
                                   
                     
                
                     ?>
                  <!--
                     <b>product_name: {{ $v->product_name}}</b><br> 
                     
                      nr_of_recipes {{ $v->nr_of_recipes}}<br> 
                     
                      calendarweek: {{ $v->calendarweek}}/ year: {{ $v->year}} - packetid: {{ $v->packetid}} <br>    
                      productid: {{ $v->productid}} <br> 
                      sorting: {{ $v->sorting}} <br> 
                      recipeid: {{ $v->recipeid}} <br> 
                      title: {{ $v->title}} <br>
                      titleid: {{ $v->id}}<br>
                      recipetypenummer: {{ $v->recipetypenummer}}<br>
                      type: {{ $v->type}}<br>
                      ID: {{ $v->id}}               
                     -->
                     
                  <!--nr_of_recipes 1x--> 
                  <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label>                    
                  <div id="wrapper">
                
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
                           <option value="{{$v->recipeid }}" selected="selected">{{ $v->title }}</option>
                           @foreach( $recipe as $x ) 
                           <option value="{{$x->id }}">{{ $x->title }}</option>
                           @endforeach             
                        </select>
                        @if ($errors->first('title1'))
                        <span class="help-block">{{ $errors->first('title1') }}</span>
                        @endif
                     </div>
                     <script>
                        $('#select-beast_<?php echo "$countselectbeast" ?>').selectize({
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
                  
                    
                  @endforeach

               </div>
               <div class="col-md-6">
                  
                  <!--<a href="{{$v->recipeflyerurl}}" target="_blank">Download {{$v->recipeflyerurl}}</a><br><br>-->
                   <img src="{{$v->recipeflyerurl}}" width="120" height="120"> </span>

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
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><?php if (isset($final_results[1])) { echo"$final_results[1]";} else {};?></h3>
      </div>
      <div class="panel-body">
         <div>
          <div class="row">
               <div class="col-md-6">
               <!--Für Zwei-->
            @foreach( $joinaufbaueinzel3 as $v )  </b>
            <?php
               $countselectbeast=rand(5, 1500);
               
               ?>
            <!--nr_of_recipes 1x-->   
             <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label>   
            <div id="wrapper">
               <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                  <select  id="select-beast_<?php echo "$countselectbeast" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
                     <option value="{{$v->recipeid }}" selected="selected">{{ $v->title }}</option>
                     @foreach( $recipe as $x ) 
                     <option value="{{$x->id }}">{{ $x->title }}</option>
                     @endforeach             
                  </select>
                  @if ($errors->first('title1'))
                  <span class="help-block">{{ $errors->first('title1') }}</span>
                  @endif
               </div>
               <script>
                  $('#select-beast_<?php echo "$countselectbeast" ?>').selectize({
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
            @endforeach
                    </div>
               <div class="col-md-6">
                 <!--<a href="{{$v->recipeflyerurl}}" target="_blank">Download {{$v->recipeflyerurl}}</a><br><br>-->
                 <img src="{{$v->recipeflyerurl}}" width="120" height="120"> </span>
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
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><?php if (isset($final_results[2])) { echo"$final_results[2]";} else {};?></h3>
      </div>
      <div class="panel-body">
         <div>
          <div class="row">
               <div class="col-md-6">
               <!--Familienbox-->
            @foreach( $joinaufbaueinzel4 as $v )  </b>
            <?php
               $countselectbeast=rand(5, 1500);
               ?>
            <!--nr_of_recipes 1x-->
             <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label>      
            <div id="wrapper">
               <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                  <select  id="select-beast_<?php echo "$countselectbeast" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
                     <option value="{{$v->recipeid }}" selected="selected">{{ $v->title }}</option>
                     @foreach( $recipe as $x ) 
                     <option value="{{$x->id }}">{{ $x->title }}</option>
                     @endforeach             
                  </select>
                  @if ($errors->first('title1'))
                  <span class="help-block">{{ $errors->first('title1') }}</span>
                  @endif
               </div>
               <script>
                  $('#select-beast_<?php echo "$countselectbeast" ?>').selectize({
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
            @endforeach
                    </div>
               <div class="col-md-6">
                 <!--<a href="{{$v->recipeflyerurl}}" target="_blank">Download {{$v->recipeflyerurl}}</a><br><br>-->
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

   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><?php if (isset($final_results[3])) { echo"$final_results[3]";} else {};?></h3>
      </div>
      <div class="panel-body">
         <div>
          <div class="row">
               <div class="col-md-6">
            <!--Vegetarische Box-->
            @foreach( $joinaufbaueinzel5 as $v )  </b>
            <?php
              $countselectbeast=rand(5, 1500);
               ?>
            <!--nr_of_recipes 1x-->
             <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label>      
            <div id="wrapper">
               <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                  <select  id="select-beast_<?php echo "$countselectbeast" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
                     <option value="{{$v->recipeid }}" selected="selected">{{ $v->title }}</option>
                     @foreach( $recipe as $x ) 
                     <option value="{{$x->id }}">{{ $x->title }}</option>
                     @endforeach             
                  </select>
                  @if ($errors->first('title1'))
                  <span class="help-block">{{ $errors->first('title1') }}</span>
                  @endif
               </div>
               <script>
                  $('#select-beast_<?php echo "$countselectbeast" ?>').selectize({
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
            @endforeach   
                    </div>
               <div class="col-md-6">
              <!--<a href="{{$v->recipeflyerurl}}" target="_blank">Download {{$v->recipeflyerurl}}</a><br><br>-->
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

      <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><?php if (isset($final_results[5])) { echo"$final_results[5]";} else {};?></h3>
      </div>
      <div class="panel-body">
         <div>
          <div class="row">
               <div class="col-md-6">
            <!--Vegetarische Box-->
            @foreach( $joinaufbaueinzel85 as $v )  </b>
            <?php
              $countselectbeast=rand(5, 1500);
               ?>
            <!--nr_of_recipes 1x-->
             <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label>      
            <div id="wrapper">
               <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                  <select  id="select-beast_<?php echo "$countselectbeast" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
                     <option value="{{$v->recipeid }}" selected="selected">{{ $v->title }}</option>
                     @foreach( $recipe as $x ) 
                     <option value="{{$x->id }}">{{ $x->title }}</option>
                     @endforeach             
                  </select>
                  @if ($errors->first('title1'))
                  <span class="help-block">{{ $errors->first('title1') }}</span>
                  @endif
               </div>
               <script>
                  $('#select-beast_<?php echo "$countselectbeast" ?>').selectize({
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
            @endforeach   
                    </div>
               <div class="col-md-6">
              <!--<a href="{{$v->recipeflyerurl}}" target="_blank">Download {{$v->recipeflyerurl}}</a><br><br>-->
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

      <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><?php if (isset($final_results[6])) { echo"$final_results[6]";} else {};?></h3>
      </div>
      <div class="panel-body">
         <div>
          <div class="row">
               <div class="col-md-6">
            <!--Vegetarische Box-->
            @foreach( $joinaufbaueinzel86 as $v )  </b>
            <?php
              $countselectbeast=rand(5, 1500);
               ?>
            <!--nr_of_recipes 1x-->
             <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label>      
            <div id="wrapper">
               <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                  <select  id="select-beast_<?php echo "$countselectbeast" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
                     <option value="{{$v->recipeid }}" selected="selected">{{ $v->title }}</option>
                     @foreach( $recipe as $x ) 
                     <option value="{{$x->id }}">{{ $x->title }}</option>
                     @endforeach             
                  </select>
                  @if ($errors->first('title1'))
                  <span class="help-block">{{ $errors->first('title1') }}</span>
                  @endif
               </div>
               <script>
                  $('#select-beast_<?php echo "$countselectbeast" ?>').selectize({
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
            @endforeach   
                    </div>
               <div class="col-md-6">
              <!--<a href="{{$v->recipeflyerurl}}" target="_blank">Download {{$v->recipeflyerurl}}</a><br><br>-->
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


   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><?php if (isset($final_results[4])) { echo"$final_results[4]";} else {};?></h3>
      </div>
      <div class="panel-body">
         <div>
          <div class="row">
               <div class="col-md-6">
               <!--Vegan Box-->
            @foreach( $joinaufbaueinzel6 as $v )  </b>
            <?php
               $countselectbeast=rand(5, 1500);
               ?>
            <!--nr_of_recipes 1x--> 
             <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label>     
            <div id="wrapper">
               <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                  <select  id="select-beast_<?php echo "$countselectbeast" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
                     <option value="{{$v->recipeid }}" selected="selected">{{ $v->title }}</option>
                     @foreach( $recipe as $x ) 
                     <option value="{{$x->id }}">{{ $x->title }}</option>
                     @endforeach             
                  </select>
                  @if ($errors->first('title1'))
                  <span class="help-block">{{ $errors->first('title1') }}</span>
                  @endif
               </div>
               <script>
                  $('#select-beast_<?php echo "$countselectbeast" ?>').selectize({
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
            @endforeach  
                    </div>
               <div class="col-md-6">
                 <!--<a href="{{$v->recipeflyerurl}}" target="_blank">Download {{$v->recipeflyerurl}}</a><br><br>-->
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
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title"><?php if (isset($final_results[5])) { echo"$final_results[5]";} else {};?></h3>
      </div>
      <div class="panel-body">
         <div>
          <div class="row">
               <div class="col-md-6">
               <!--Fit Box-->
            @foreach( $joinaufbaueinzel7 as $v )  </b>
              <?php
               $countselectbeast=rand(5, 1500);
               ?>
            <!--nr_of_recipes 1x-->   
             <div style="height :10px;"></div>
                  <label class="control-label" for="recipetype">Rezept {{ $v->sorting}}</label>   
            <div id="wrapper">
               <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                  <select  id="select-beast_<?php echo "$countselectbeast" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
                     <option value="{{$v->recipeid }}" selected="selected">{{ $v->title }}</option>
                     @foreach( $recipe as $x ) 
                     <option value="{{$x->id }}">{{ $x->title }}</option>
                     @endforeach             
                  </select>
                  @if ($errors->first('title1'))
                  <span class="help-block">{{ $errors->first('title1') }}</span>
                  @endif
               </div>
               <script>
                  $('#select-beast_<?php echo "$countselectbeast" ?>').selectize({
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
            @endforeach   
                    </div>
               <div class="col-md-6">
                 <!--<a href="{{$v->recipeflyerurl}}" target="_blank">Download {{$v->recipeflyerurl}}</a><br><br>-->
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