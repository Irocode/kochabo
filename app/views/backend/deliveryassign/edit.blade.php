@extends('backend/_layout/layout')
@section('content')



<div class="container">

    <!--HEADER mit Zurück ANFANG-->
     <div class="headline">
      <h2> Liefergebiet zuordnen</h2>
        <div class="pull-right">
            {{ HTML::link('/admin/deliveryzipcode','Zurück', array('class'=>'btn btn-u')) }}
         </div>
      </div>
         <!--HEADER mit Zurück ENDE-->


   {{ Notification::showAll() }}
   <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="panel-title">Liefergebiet zuordnen</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
          
            </div>
         </div>
         <br>
         <br>
         <br>




<div class="row">
  <div class="col-md-4">
<div class="headline">
<h2>Logistiker</h2>
</div>

<form name="form1" method="post" action="">
  <select name="select" size="5">
  @foreach($logisticianmanager as $v)
   <option value="{{ $v->id }}">{{ $v->name }}</option>
  @endforeach
  </select>
</form>

  </div>
  <div class="col-md-4">
  <div class="headline">
<h2>Verfügbare Postleitzahlen</h2>
</div>

     
  <form name="form1" method="post" action="">edit_deliveryassign
  <select name="select" size="5">
  @foreach($deliveryzipcode as $x)
   <option value="{{ $v->user_id }}">{{ $x->zip }}</option>
  @endforeach
  </select>
</form>   
  </div>






  <div class="col-md-4">
     
<div class="headline">
<h2>Hinweis</h2>
</div>
<blockquote class="hero">
<p>Geprüfte Postleitzahlen können hier übernommen werden. </p>





</blockquote>

  </div>
</div>

<hr><br><br><br>


 <br>
  @foreach($deliveryzipcode as $x)

  <?php echo "<button type='button' id='go_$x->zip' class='btn btn-primary btn-lg block_"?>{{ $x->zip }} <?php echo" '>" ?>

  {{ $x->user_id }}/{{ $x->zip }}   

 </button><br><br>





<script>

$( "#go_{{$x->zip}}" ).click(function( event ) {
  event.preventDefault();


 <?php 
   

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "bono9999";
    $dbname = "kochabo";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);



   $updatequery = "UPDATE `ranking` SET text = '$x->zip', ranking_column = '1' WHERE entry_id = '2' AND judge_id = '1'";  
         mysql_query($updatequery) or die('Error, UPDATE failed!');  

?>
 
 console.log({{ $x->zip }} );




   $( this ).animate({
  opacity: .5,
  height: "50%"
}, {
  step: function( now, fx ) {
    var data = fx.elem.id + " " + fx.prop + ": " + now;
    $( "body" ).append( "<div>" + data + "</div>" );
  }
});
















});
</script>



  @endforeach
  <hr><br><br><br>


   <div>



 




 


@foreach($logisticianmanager as $v)


    <h3>ID:{{ $v->id }}/{{ $v->zip }} {{ $v->name }}</h3>


    @foreach($deliveryzipcode as $x)
         <h4>{{ $x->id }}  / USERID:{{ $x->user_id }}  </h4>
     
    
    @endforeach
    <hr>

@endforeach





 @foreach($deliveryzipcodeall as $u)

 hi 

  {{ $u->zip }}
  @endforeach










<?php 

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "bono9999";
    $dbname = "kochabo";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

$contest_id = '1';
$judge_id = '1';
$ip_address = $_SERVER['REMOTE_ADDR'];
$column1 = '';
$column2 = '';

$query = "SELECT entry_id FROM ranking WHERE contest_id = '$contest_id' AND judge_id = '$judge_id' AND ranking_column = '0' ORDER BY ranking_value ASC";
$result = mysql_query($query) or die('Error, query failed');

if (mysql_num_rows($result) == 0) { 
   $column1 = '';
   }
else {
   while ($row = mysql_fetch_array($result)) {
      $column1 .= '
 @foreach($deliveryzipcodeall as $u) 
  {{ $u->zip }}
  @endforeach

  <li id="entry_' . $row['entry_id'] . '" class="ui-state-default">Entry #' .  $row['entry_id'] . '</li>';
      }
   }


$query2 = "SELECT entry_id FROM ranking WHERE contest_id = '$contest_id' AND judge_id = '$judge_id' AND ranking_column = '1' ORDER BY ranking_value ASC";
$result2 = mysql_query($query2) or die('Error, query failed');

if (mysql_num_rows($result2) == 0) { 
   $column2 = '';
   }
else {
   while ($row2 = mysql_fetch_array($result2)) {
      $column2 .= '<li id="entry_' . $row2['entry_id'] . '" class="ui-state-default">Entry #' .  $row2['entry_id'] . '</li>';
      ?> @foreach($deliveryzipcode as $x){{ $x->zip }}   @endforeach <?php
      }
   }
   
?>




    


























<div class="container">
   {{ Notification::showAll() }}
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








  

















@foreach( $logisticianmanager as $v )
{{{ $v->name }}}
  @endforeach   

<br>
  @foreach( $deliveryzipcode as $v )
  <p> *{{{ $v->user_id }}} - {{{ $v->zip }}} *</p>
  @endforeach   

  <hr>







<!--

 
       


         @if($logisticianmanager->count())
         <div class="table-responsive">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Logistiker</th>
                     <th>Adresse</th>
                     <th>Kontakt Person</th>
                     <th>Telefon</th>
                     <th>E-Mail</th>
                       <th>Postleitzahl</th>
                        <th></th>
                     
                     <!--<th>Veröffentlichung</th>-->
                  </tr>
               </thead>
               <tbody>
  




                  @foreach( $logisticianmanager as $v )
                  <tr>
                     <td> {{ link_to_route( 'admin.logisticianmanager.edit', $v->id, $v->id, array( 'class' => 'btn btn-link btn-xs' )) }}</td>
                     <td>{{{ $v->name }}}</td>

                     <td>{{{ $v->street }}} <br>{{{ $v->zip }}} {{{ $v->city }}}<br>{{{ $v->stateprovince }}}<br>{{{ $v->country_id }}}      </td>
                  
                 
                     <td>{{{ $v->contactPerson }}}</td>

                     <td>{{{ $v->phone }}}</td>
                     <td>{{{ $v->email }}}</td>

   <td>







   </td>
                     


                    
                     <td>




                        <div class="btn-group">
                           <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                           Aktion
                           <span class="caret"></span>
                           </a>
                           <ul class="dropdown-menu">



                             


                                 <li>
                                 <a href="{{ URL::route('admin.logisticianmanager.edit_sefa_free', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-edit"></span>&nbsp;{{{ $v->name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b>
                                 </a>
                              </li>


                                <li class="divider"></li>
                                 <li>
                                 <a href="{{ URL::route('admin.logisticianmanager.edit_deliveryassign_sefa_free', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-edit"></span>&nbsp;{{{ $v->name }}} {{{ $v->last_name }}} <b>PLZ ansehen/bearbeiten</b>
                                 </a>
                              </li>
                            


                         
                              <li class="divider"></li>
                              <li>
                                 <a href="{{ URL::route('admin.logisticianmanager.delete', array($v->id)) }}">
                                 <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;{{{ $v->name }}} {{{ $v->last_name }}}  <strong>löschen</strong>
                                 </a>
                              </li>
                            
                           </ul>
                        </div>
                     </td>
                     <td>
                        <!--  <a href="#" id="{{ $v->id }}" class="publish">
                           <img id="publish-image-{{ $v->id }}" src="{{url('/')}}/assets/backend/images/{{ ($v->is_published) ? 'publish.png' : 'not_publish.png'  }}"/>
                           </a>-->
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
         @else
         <div class="alert alert-danger">Keine Daten vorhanden</div>
         @endif
      </div>
   </div>
   <div class="pull-left">
      <ul class="pagination">
    
      </ul>
   </div>
</div>
@stop