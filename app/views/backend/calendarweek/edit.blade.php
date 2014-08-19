@extends('backend/_layout/layout')
@section('content')  
{{ HTML::style('assets/backend/plugins/selectize/dist/css/selectize.bootstrap3.css') }}
{{ HTML::script('assets/backend/plugins/selectize/dist/js/standalone/selectizenew.js') }}     

<div class="container">


<hr>
 <p><a class="index-block-want-more-infos" href="{{URL::to('modal')}}"> zur Obstbox </a></p>
<?php echo"$calendarweek->calendarweek";?>

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
$countselectbeast=rand(5, 15);
$product_name_var="90";
?>
 @foreach( $joinaufbaueinzel90 as $v )  </b>

<?php
$countselectbeast=rand(5, 15);
?>
      
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
            

                                      <!--nr_of_recipes 1x-->   
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$v->id" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
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
                      <hr>                                 
  
                     @endforeach


                       
     {{ $v->recipeflyerurl}}
        







                                    
     </div>
     </div>
     </div>
                  
 
 <div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title"><?php if (isset($final_results[1])) { echo"$final_results[1]";} else {};?></h3>
</div>
<div class="panel-body">
<div>  
 @foreach( $joinaufbaueinzel89 as $v )  </b>


<?php
$countselectbeast=rand(5, 15);
?>

      
                                    
            

                                      <!--nr_of_recipes 1x-->   
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$v->id" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
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
                      <hr>                                 
  
                     @endforeach
{{ $v->recipeflyerurl}}

     </div>
     </div>
     </div> 
 
 <div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title"><?php if (isset($final_results[2])) { echo"$final_results[2]";} else {};?></h3>
</div>
<div class="panel-body">
<div>       
 @foreach( $joinaufbaueinzel85 as $v )  </b>


<?php
$countselectbeast=rand(5, 15);
?>
        
            

                                      <!--nr_of_recipes 1x-->   
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$v->id" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
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
                      <hr>                                 
  
                     @endforeach
{{ $v->recipeflyerurl}}

 </div> 
     </div>
     </div>
     
 
 <div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title"><?php if (isset($final_results[3])) { echo"$final_results[3]";} else {};?></h3>
</div>
<div class="panel-body">
<div>       
    @foreach( $joinaufbaueinzel84 as $v )  </b>


<?php
$countselectbeast=rand(5, 15);
?>

      
            
            

                                      <!--nr_of_recipes 1x-->   
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$v->id" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
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
                      <hr>                                 
  
                     @endforeach      
{{ $v->recipeflyerurl}}

 </div>
     </div>
     </div>



      <div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title"><?php if (isset($final_results[4])) { echo"$final_results[4]";} else {};?></h3>
</div>
<div class="panel-body">
<div>       
 @foreach( $joinaufbaueinzel83 as $v )  </b>


<?php
$countselectbeast=rand(5, 15);
?>

      
                    
            

                                      <!--nr_of_recipes 1x-->   
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$v->id" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
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
                      <hr>                                 
  
                     @endforeach        
{{ $v->recipeflyerurl}}

 </div>
     </div>
     </div>



      <div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title"><?php if (isset($final_results[5])) { echo"$final_results[5]";} else {};?></h3>
</div>
<div class="panel-body">
<div>       
  @foreach( $joinaufbaueinzel82 as $v )  </b>


            
            

                                      <!--nr_of_recipes 1x-->   
                  <div id="wrapper">
                     <div class="control-group {{ $errors->has('title1') ? 'has-error' : '' }}">
                        <select  id="select-beast_<?php echo "$countselectbeast$v->id" ?>" name="merger[{{$v->id}}][recipe][]"  style="width:auto"  placeholder=">Wähle / Suche "   >
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
                      <hr>                                 
  
                     @endforeach       
{{ $v->recipeflyerurl}}

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

    <br> <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>



@if($joinaufbaueinzel90->count())

@foreach( $joinaufbaueinzel90 as $v ) 
<?php
$random = rand(50, 15000);
$random2 = rand(40, 18000);
$random3 = rand(30, 14000);


?>
<!--Leerzeichen , Sonderzeichen entfernen-->
<?php
$dateiname = $v->product_name;
$dateiname = preg_replace('/[^A-Za-z 0-9]/', '', $dateiname); // alles weg, bis auf Buchstaben, Ziffern und Leerzeichen
$dateiname = preg_replace('/\s\s+/', ' ', $dateiname);        // überflüssige Leerzeichen auf eines reduzieren
$dateiname = preg_replace('/\s/', '_', $dateiname);           // Leerzeichen durch Unterstrich ersetzen
//echo strtolower($dateiname);
$product_name_var= strtolower($dateiname);
?>




<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">{{$v->product_name}} [id: {{ $v->id}}] </h3>
</div>
<div class="panel-body">
<div>  
<div class="row">
  <div class="col-md-6">



<!--selectize Rezept DYNAMISCH auswählen Anfang-->   




    @foreach( $joinaufbaueinzel90 as $v )  </b>
            
                   <b>product_name: {{ $v->product_name}}</b>
                    calendarweek: {{ $v->calendarweek}}/ year: {{ $v->year}} - packetid: {{ $v->packetid}} <br>    
                    productid: {{ $v->productid}} <br> 
                    sorting: {{ $v->sorting}} <br> 
                    recipeid: {{ $v->recipeid}} <br> 
                    title: {{ $v->title}} <br>
                    titleid: {{ $v->id}}<br>
                    
                    ID: {{ $v->id}}
               
                    <hr>
                     @endforeach

                     <hr>

    @foreach( $joinaufbaueinzel89 as $v )  </b>
            
                   <b>product_name: {{ $v->product_name}}</b>
                    calendarweek: {{ $v->calendarweek}}/ year: {{ $v->year}} - packetid: {{ $v->packetid}} <br>    
                    productid: {{ $v->productid}} <br> 
                    sorting: {{ $v->sorting}} <br> 
                    recipeid: {{ $v->recipeid}} <br> 
                    title: {{ $v->title}} <br>
                    titleid: {{ $v->id}}<br>
                    
                    ID: {{ $v->id}}
               
                    <hr>
                     @endforeach

 <hr>
    @foreach( $joinaufbaueinzel90 as $v )  </b>
            
                   <b>product_name: {{ $v->product_name}}</b>
                    calendarweek: {{ $v->calendarweek}}/ year: {{ $v->year}} - packetid: {{ $v->packetid}} <br>    
                    productid: {{ $v->productid}} <br> 
                    sorting: {{ $v->sorting}} <br> 
                    recipeid: {{ $v->recipeid}} <br> 
                    title: {{ $v->title}} <br>
                    titleid: {{ $v->id}}<br>
                    
                    ID: {{ $v->id}}
               
                    <hr>
                     @endforeach


 <hr>
    @foreach( $joinaufbaueinzel90 as $v )  </b>
            
                   <b>product_name: {{ $v->product_name}}</b>
                    calendarweek: {{ $v->calendarweek}}/ year: {{ $v->year}} - packetid: {{ $v->packetid}} <br>    
                    productid: {{ $v->productid}} <br> 
                    sorting: {{ $v->sorting}} <br> 
                    recipeid: {{ $v->recipeid}} <br> 
                    title: {{ $v->title}} <br>
                    titleid: {{ $v->id}}<br>
                    
                    ID: {{ $v->id}}
               
                    <hr>
                     @endforeach                                                               








</div><div class="col-md-6">
       <!-- Image -->
<label class="control-label" for="image">PDF einfügen </label>
<div id="zone">
BILD
</div>
</div>
</div>
</div>
</div></div>
<br>


 <input type="hidden" name="{{$product_name_var}}[recipes][]" value="{{$calendarweek->packetid}}">
 <input type="hidden" name="{{$product_name_var}}[recipes][]" value="{{$calendarweek->calendarweek}}">


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

</div>
<!-- Plichtfeld Ende -->
<br>
<br>
</div>

</div>
</div>







