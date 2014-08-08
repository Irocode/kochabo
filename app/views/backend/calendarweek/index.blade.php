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



    $week  = date('W'); 

?>

<form id="week_form"  name="week_form" >
                    <select id="week_selector"  class="form-control" name="week" onchange="showSelectedWeek();" >
                        <?php
                            $now = time();
                            $currentDay = date('w', $now);

                            /* calculate the timestamp of monday and sunday of the current week */
                            $currentMonday = $now;
                            if ($currentDay > 1) {
                                $currentMonday = $now - ($currentDay - 1) * 24 * 60 * 60;
                            } else if ($currentDay == 0) {
                                $currentMonday = $now - 6 * 24 * 60 * 60;
                            }
                            $currentSunday = $currentMonday + 6 * 24 * 60 * 60;

                            /* generating the option tags showing the week numbers */
                            for ($i = -4; $i <= 7; $i++) {
                                $monday = $currentMonday + $i * 7 * 24 * 60 * 60;
                                $sunday = $currentSunday + $i * 7 * 24 * 60 * 60;
                                $mondayString = date('d.m.Y', $monday);
                                $sundayString = date('d.m.Y', $sunday);
                                $weekString = 'Woche ' . date('W', $monday) . ': ' . $mondayString . ' - ' . $sundayString;
                                $optionValue = date('W', $monday) . '-' . date('Y', $monday);
                                if (strcmp($optionValue, $week) == 0) {
                                    echo '<option value="' . $optionValue . '" SELECTED>' . $weekString . '</option>';
                                } else {
                                    echo '<option value="' . $optionValue . '">' . $weekString . '</option>';
                                }
                            }
                        ?>
                    </select>
                </form>
</div>
</div>





<script>
    $(function(){
      // bind change event to select
      $('#week_selector').bind('change', function () {
          var variable = $(this).val(); // get selected value
  var split = variable.split('-');
var calendarweek = split[0];
var year = split[1];
          if (variable) { // require a URL
              window.location = 'http://127.0.0.1/laravel/kochabo/admin/calendarweeknew/' + year + '/' +calendarweek + '/edit'; // redirect
          }
          return false;
      });
    });
</script>









@stop