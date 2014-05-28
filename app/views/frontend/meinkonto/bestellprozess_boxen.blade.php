<!-- CSS Global Compulsory-->

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/headers/header1.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="favicon.ico">        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- CSS Style Page -->    
    <link rel="stylesheet" href="assets/css/pages/page_log_reg_v1.css">
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/themes/headers/default.css" id="style_color-header-1">    

    <link rel="stylesheet" href="{{$myuserurl}}assets/css/pages/page_pricing.css">    


    <!--Reg Block-->
<!--=== Content Part ===-->
<div class="container">
    <div class="row">








    <!-- BOXEN ANFANG-->


    <div class="col-md-10">
      <form action="{{$myuserurl}}meinkontoregistrierung" method="POST">
  
            <!-- Our Services -->
            <div class="headline"><h2>Bestell deine KochAbo-Box! Jederzeit pausieren!</h2></div>
            <div class="row servive-block servive-block-in margin-bottom-20">
                <div class="col-md-3">
                      <div class="pricing hover-effect">
                <div class="pricing-head">
                    <h3>Singlebox <span>3 köstliche Abendessen </span></h3>
                      <h4><i></i>34<i>.90</i><i>€</i> <span>Pro Monat</span></h4>
                </div>
                <ul class="pricing-content list-unstyled">
                    <li><i class="icon-tags"></i> kostenloser Versand </li>
                    <li><i class="icon-asterisk"></i> Frische Zutaten</li>
                    <li><i class="icon-heart"></i> Für 3 leckere Mahlzeiten</li>
                    <li><i class="icon-star"></i> Lieferdatum im nächsten Schritt</li>
         
                </ul>
                <div class="pricing-footer">
                    <p>Alle Preise inkl. Mwst. & Lieferung. </p><br><br><br><br>

                    <input type="hidden" name="produkt" value="Singlebox">
                    <input type="hidden" name="produkttyp" value="0">
                    
                    <input type="submit" class="btn-u" name="Abschicken" value="Jetzt Probieren!">

{{ Form::close() }}
                    <!-- <button type="submit">Jetzt Probieren!</button>-->


                </div>                    
            </div>
                </div>


                <div class="col-md-3">
                  <form action="{{$myuserurl}}meinkontoregistrierung" method="POST">
                <div class="pricing hover-effect">
                <div class="pricing-head">
                    <h3>Für Zwei <span>Für zwei Personen</span></h3>
                    <h4><i></i>41<i>.90</i><i>€</i> <span>Pro Monat</span></h4>
                </div>
                <ul class="pricing-content list-unstyled">
                   <li><i class="icon-tags"></i> kostenloser Versand </li>
                    <li><i class="icon-asterisk"></i> Frische Zutaten</li>
                    <li><i class="icon-heart"></i> Fusce condimentum</li>
                  <li><i class="icon-star"></i> Lieferdatum im nächsten Schritt</li>
                  
                </ul>
                <div class="pricing-footer">
                    <p>Alle Preise inkl. Mwst. & Lieferung. </p><br>
    <input type="hidden" name="produkt" value="Für Zwei">
    <select name="produkttyp" class="form-control">
  <option >Bitte ausw&auml;hlen</option>
  <option selected value="1">Classic + 3 Rezepte</option>
  <option value="2">Classic + 5 Rezepte</option>
  <option value="3">Vegetarisch + 3 Rezepte</option>
</select>

<br>
                 <!--  <button type="submit">Jetzt Probieren!</button>-->

                 <input type="submit" class="btn-u" name="Abschicken" value="Jetzt Probieren!">

{{ Form::close() }}


                </div>                    
            </div>


                </div>


                <div class="col-md-4">
                  <form action="{{$myuserurl}}meinkontoregistrierung" method="POST">
                          <div class="pricing hover-effect">
                <div class="pricing-head">
                    <h3>Familienbox <span>Für 3-4 Personen </span></h3>
                    <h4><i></i>79<i>.90</i><i>€</i> <span>Pro Monat</span></h4>
                </div>
                <ul class="pricing-content list-unstyled">
                     <li><i class="icon-tags"></i> kostenloser Versand </li>
                    <li><i class="icon-asterisk"></i> Frische Zutaten</li>
                    <li><i class="icon-heart"></i> Fusce condimentum</li>
                   <li><i class="icon-star"></i> Lieferdatum im nächsten Schritt</li>
                    
                </ul>
                <div class="pricing-footer">
                    <p>Alle Preise inkl. Mwst. & Lieferung. </p><br>
<input type="hidden" name="produkt" value="Familienbox">
 <select name="produkttyp" class="form-control">
  <option >Bitte ausw&auml;hlen</option> 
  <option value="1">Classic + 3 Rezepte</option>
  <option selected value="2">Classic + 5 Rezepte</option>
  <option value="3">Vegetarisch + 3 Rezepte</option>
</select>

<br>



   <input type="submit" class="btn-u" name="Abschicken" value="Jetzt Probieren!">

{{ Form::close() }}
                   <!--  <button type="submit">Jetzt Probieren!</button>-->
                </div>                    
            </div>
                </div>
            </div><!--/welcome-block-->
            <!-- End Our Services -->
  
  
 <!-- BOXEN ENDE-->

</div><!--/container-->


<div class="container">
    <div class="row">
    <div class="col-md-10">
  

 




 

  
</div>
</div>
</div>

<!--=== End Content Part ===-->


<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/plugins/hover-dropdown.min.js"></script> 
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
<![endif]-->
