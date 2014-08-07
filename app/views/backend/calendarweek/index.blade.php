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
         <br>
       


<?php
//Start Date Year and KW
$jahr = date("Y"); 
$kalenderwochestart = date("W");
//Minus 4 C-Weeks
$kalenderwoche= ($kalenderwochestart-4);

//calculation Date
$timestamp_montag1 = strtotime("{$jahr}-W{$kalenderwoche}");
$timestamp_sunday1 = strtotime("{$jahr}-W{$kalenderwoche}+ 6 Days");
$timestamp_montag2 = strtotime("{$jahr}-W{$kalenderwoche}+ 1 Week");
$timestamp_sunday2 = strtotime("{$jahr}-W{$kalenderwoche}+ 13 Days");
$timestamp_montag3 = strtotime("{$jahr}-W{$kalenderwoche}+ 2 Week");
$timestamp_sunday3 = strtotime("{$jahr}-W{$kalenderwoche}+ 20 Days");
$timestamp_montag4 = strtotime("{$jahr}-W{$kalenderwoche}+ 3 Week");
$timestamp_sunday4 = strtotime("{$jahr}-W{$kalenderwoche}+ 27 Days");
$timestamp_montag5 = strtotime("{$jahr}-W{$kalenderwoche}+ 4 Week");
$timestamp_sunday5 = strtotime("{$jahr}-W{$kalenderwoche}+ 34 Days");
$timestamp_montag6 = strtotime("{$jahr}-W{$kalenderwoche}+ 5 Week");
$timestamp_sunday6 = strtotime("{$jahr}-W{$kalenderwoche}+ 41 Days");
$timestamp_montag7 = strtotime("{$jahr}-W{$kalenderwoche}+ 6 Week");
$timestamp_sunday7 = strtotime("{$jahr}-W{$kalenderwoche}+ 48 Days");
$timestamp_montag8 = strtotime("{$jahr}-W{$kalenderwoche}+ 7 Week");
$timestamp_sunday8 = strtotime("{$jahr}-W{$kalenderwoche}+ 55 Days");
$timestamp_montag9 = strtotime("{$jahr}-W{$kalenderwoche}+ 8 Week");
$timestamp_sunday9 = strtotime("{$jahr}-W{$kalenderwoche}+ 62 Days");
$timestamp_montag10 = strtotime("{$jahr}-W{$kalenderwoche}+ 9 Week");
$timestamp_sunday10 = strtotime("{$jahr}-W{$kalenderwoche}+ 69 Days");
$timestamp_montag11 = strtotime("{$jahr}-W{$kalenderwoche}+ 10 Week");
$timestamp_sunday11 = strtotime("{$jahr}-W{$kalenderwoche}+ 76 Days");
$timestamp_montag12 = strtotime("{$jahr}-W{$kalenderwoche}+ 11 Week");
$timestamp_sunday12 = strtotime("{$jahr}-W{$kalenderwoche}+ 83 Days");

//Format Output
$kw1=date("W", $timestamp_montag1); 
$montag1=date("d.m.Y", $timestamp_montag1);
$sunday1=date("d.m.Y", $timestamp_sunday1); 
$kw2=date("W", $timestamp_montag2); 
$montag2=date("d.m.Y", $timestamp_montag2);
$sunday2=date("d.m.Y", $timestamp_sunday2); 
$kw3=date("W", $timestamp_montag3); 
$montag3=date("d.m.Y", $timestamp_montag3);
$sunday3=date("d.m.Y", $timestamp_sunday3); 
$kw4=date("W", $timestamp_montag4); 
$montag4=date("d.m.Y", $timestamp_montag4);
$sunday4=date("d.m.Y", $timestamp_sunday4); 
$kw5=date("W", $timestamp_montag5); 
$montag5=date("d.m.Y", $timestamp_montag5);
$sunday5=date("d.m.Y", $timestamp_sunday5); 
$kw6=date("W", $timestamp_montag6); 
$montag6=date("d.m.Y", $timestamp_montag6);
$sunday6=date("d.m.Y", $timestamp_sunday6); 
$kw7=date("W", $timestamp_montag7); 
$montag7=date("d.m.Y", $timestamp_montag7);
$sunday7=date("d.m.Y", $timestamp_sunday7); 
$kw8=date("W", $timestamp_montag8); 
$montag8=date("d.m.Y", $timestamp_montag8);
$sunday8=date("d.m.Y", $timestamp_sunday8); 
$kw9=date("W", $timestamp_montag9); 
$montag9=date("d.m.Y", $timestamp_montag9);
$sunday9=date("d.m.Y", $timestamp_sunday9); 
$kw10=date("W", $timestamp_montag10); 
$montag10=date("d.m.Y", $timestamp_montag10);
$sunday10=date("d.m.Y", $timestamp_sunday10); 
$kw11=date("W", $timestamp_montag11); 
$montag11=date("d.m.Y", $timestamp_montag11);
$sunday11=date("d.m.Y", $timestamp_sunday11); 
$kw12=date("W", $timestamp_montag12); 
$montag12=date("d.m.Y", $timestamp_montag12);
$sunday12=date("d.m.Y", $timestamp_sunday12); 

// Output
echo"
<select id='gender' class='form-control' name='week' required='required' >
<option value=''>Woche auswählen</option>
<option value='{$kw1}'>KW:{$kw1} / {$montag1} bis {$sunday1}</option>
<option value='{$kw2}'>KW:{$kw2} / {$montag2} bis {$sunday2}</option>
<option value='{$kw3}'>KW:{$kw3} / {$montag3} bis {$sunday3}</option>
<option value='{$kw4}'>KW:{$kw4} / {$montag4} bis {$sunday4}</option>
<option value='{$kw5}'>KW:{$kw5} / {$montag5} bis {$sunday5}</option>
<option value='{$kw6}'>KW:{$kw6} / {$montag6} bis {$sunday6}</option>
<option value='{$kw7}'>KW:{$kw7} / {$montag7} bis {$sunday7}</option>
<option value='{$kw8}'>KW:{$kw8} / {$montag8} bis {$sunday8}</option>
<option value='{$kw9}'>KW:{$kw9} / {$montag9} bis {$sunday9}</option>
<option value='{$kw10}'>KW:{$kw10} / {$montag10} bis {$sunday10}</option>
<option value='{$kw11}'>KW:{$kw11} / {$montag11} bis {$sunday11}</option>
<option value='{$kw12}'>KW:{$kw12} / {$montag12} bis {$sunday12}</option>
</select>";

?>
</div>
</div>

@stop