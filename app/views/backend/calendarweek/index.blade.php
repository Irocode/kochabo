@extends('backend/_layout/layout')
@section('content')
{{ Notification::showAll() }}
<div class="container">
   <div class="panel panel-default">
      <div class="panel-heading">
              <h3 class="panel-title">Kalenderwoche</h3>
      </div>
      <div class="panel-body">
         <div class="pull-left">
            <div class="btn-toolbar">
               <a href="{{ URL::route('admin.customer_management.create') }}" class="btn btn-u">
               <span class="glyphicon glyphicon-plus"></span>&nbsp;Neue Kalenderwoche anlegen
               </a>
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
         <br>dd
       


<?php

printf ('<h4>Diese Woche
Mo, der %s bis Fr, der %s</h4>',  
    date('d.m.Y', strtotime("last monday")), 
    date('d.m.Y', strtotime("friday"))); 

printf ('<h4>Nächste Woche
Mo, der %s bis Ff, der %s</h4>',  
    date('d.m.Y', strtotime("monday")), 
    date('d.m.Y', strtotime("monday +5 days"))); 

printf ('<h4>Übernächste Woche
Mo, der %s bis Fr, der %s</h4>',  
    date('d.m.Y', strtotime("next monday")), 
    date('d.m.Y', strtotime("friday"))); 




$start = new DateTime();
$startendweek = new DateTime();
$end = new DateTime("+3 weeks");
$endendweek = new DateTime("+3 weeks");
$interval = DateInterval::createFromDateString("7 day");

$period = new DatePeriod($start,$interval,$end);
$periodenweek = new DatePeriod($start,$interval,$end);
foreach($period as $date){
    echo $date->format('d.m.Y - W').'<br/>';
}  








$today = date("W"); // = z.B. 17 


echo"$today";





?><br>
<?php
// Wochennamen ausgeben

setLocale(LC_ALL, "de_DE", "german");
for ($zaehler = 5; $zaehler < 12; $zaehler++) {
 echo strftime("%A, ", mktime(0, 0, 0, 1, $zaehler, 1970));
}
?>

         

</div>
@stop