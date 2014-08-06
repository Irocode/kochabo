@extends('frontend/_layout/layout')
@section('content')
{{ HTML::script('assets/frontend/js/moment-with-langs.min.js') }}
<!-- Menü Wechsler für ACTIVE CLASS Linkanfrage -->
<script>
indexzwo =14;  
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







<div  class="container">    
 <div class="row">
 <div class="col-md-12 col-sm-12" >





             <iframe src="{{ URL::to('log')}}" width="100%" height="1500px" scrolling="auto" border="0" frameborder="0"  style="margin-top:-50px"></iframe>
       

 
</div>      
</div>
</div>

                 




</div>






@stop

