@extends('frontend/_layout/layout')
@section('content')
{{ HTML::script('assets/js/moment-with-langs.min.js') }}

<!-- Menü Wechsler für ACTIVE CLASS Linkanfrage -->
<script>
indexzwo =3;  
</script>
 <!-- Menü Wechsler für ACTIVE CLASS Linkanfrage ENDE -->


<link rel="stylesheet" href="assets/css/custom.css">


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
        <h1 class="pull-left">Obstbox</h1>  

      

               
{{ Breadcrumbs::render('obstbox', $obstbox) }}   

    </div>
</div><!--/breadcrumbs-->












<!--=== Content Part ===-->
    <div class="container content">
        <div class="row">


          <div class="col-md-12">
                <div class="tag-box tag-box-v3">
                    <div class="headline"><h2>Obstbox Charts</h2></div>
                    <p>Top Chart für unsere beliebtesten Früchte.</p><br><br>

       <!-- Pie Charts v2 -->
                    <div class="row pie-progress-charts margin-bottom-60">
                        <div class="inner-pchart col-md-4">
                            <div class="circle" id="circle-1"></div>
                            <h3 class="circle-title">Äpfel</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div> 
                        <div class="inner-pchart col-md-4">
                            <div class="circle" id="circle-2"></div>
                            <h3 class="circle-title">Birnen</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>       
                        <div class="inner-pchart col-md-4">
                            <div class="circle" id="circle-3"></div>
                            <h3 class="circle-title">Kirschen</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>    
                    <!-- End Pie Charts v2 --> 
  
    </div>  
  </div>  
  </div>  
  </div>  

   
  

  
  
</div>  
<!--=== End Content Part ===-->


<script type="text/javascript">
    jQuery(document).ready(function() {
    
        App.initCounter();
        CirclesMaster.initCirclesMaster1();
        CirclesMaster.initCirclesMaster2();


    });

</script>








            @foreach( $obstbox as $v )

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





                {{ $obstbox->links() }}
   



@stop

