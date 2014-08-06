@extends('frontend/_layout/layout')
@section('content')

{{ HTML::script('assets/frontend/js/moment-with-langs.min.js') }}

<!-- Menü Wechsler für ACTIVE CLASS Linkanfrage -->
<script>
indexzwo =4;  
</script>
 <!-- Menü Wechsler für ACTIVE CLASS Linkanfrage ENDE -->

<script type="text/javascript">
    moment().format();
    moment.lang('en');

    jQuery(document).ready(function ($) {
        var now = moment();
        $('.time').each(function (i, e) {
            var time = moment($(e).attr('datetime'));
            $(e).text(time.from(now));

        });
    });
</script>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Beispielbox</h1>  

               
{{ Breadcrumbs::render('beispielbox', $beispielbox) }}   

    </div>
</div><!--/breadcrumbs-->


<!--=== Content Part ===-->


  <div class="container content">
        <div class="row">





    </div>

    </div>

   <div class="container content">
        <div class="row">



 
            <!-- End Content -->
<!--=== End Content Part ===-->
   </div>   </div>




<script type="text/javascript">
    jQuery(document).ready(function() {
    
        App.initCounter();
        CirclesMaster.initCirclesMaster1();
        CirclesMaster.initCirclesMaster2();


    });

</script>





            @foreach( $beispielbox as $v )

<?php
// Free link fpr Images
$suchstring = '<p><img src="';
$ersatzstring = '';
$result1 = str_replace($suchstring , $ersatzstring , $v->bild1);

$suchstring2 = '"/> </p>';
$ersatzstring2 = '';
$result2=  str_replace($suchstring2 , $ersatzstring2, $result1);

$suchstring3 = '" />';
$ersatzstring3 = '';
$result3 = str_replace($suchstring3 , $ersatzstring3, $result2);

$suchstring4 = '</p>';
$ersatzstring4 = '';
$bild1_ready_link = str_replace($suchstring4 , $ersatzstring4, $result3);



?>



                 
@endforeach


                {{ $beispielbox->links() }}




@stop

