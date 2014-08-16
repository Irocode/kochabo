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
           
         </div>          
         <br>
<?php
    $week  = date('W'); 
?>
<div class="row">
  <div class="col-md-6">

 <br> <br> <br>
<form id="week_form"  name="week_form" >
                    <select id="week_selector"  class="form-control notinvalid" name="week" onchange="showSelectedWeek();"  >
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
  <div class="col-md-6">
<div class="headline">
<h2>Hinweis</h2>
</div>
<blockquote class="hero">
<p>Ein Wochenplan wird mit den aktuellen Produkten angelegt. Nachherige Änderungen in den Produkten werden nicht in einem bestehenden Wochenplan übernommen. </p>

</blockquote>
</div>
</div>
</div> 


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
             window.location = location.href+'new/' + year + '/' +calendarweek + '/edit'; // redirect
          }
          return false;
      });
    });
</script>



@stop