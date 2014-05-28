@extends('frontend/_layout/layout')
@section('content')

<?php




?>

<!--=== Slider ===-->
<div class="slider-inner hidden-xs">
   <div id="da-slider" class="da-slider">
      <div class="da-slide">
         <h2><i>Ein bessere Weg zu kochen</i> <br /><i>Frische Zutaten</i> </h2>
         <p><i>Frische Zutaten und tolle </i> <br /> <i>Rezepte direkt nach Hause geliefert.</i></p>
      </div>
      <div class="da-slide">
         <h2><i>Andi Knoll erklärt KochAbo</i> <br /> <i>Exklusive</i> <br /> <i>und noch viel mehr</i></h2>
         <p><i>Frische Zutaten und tolle </i> <br /> <i>Rezepte direkt nach Hause geliefert.</i></p>
      </div>
      <div class="da-slide">
         <h2><i>NEUE REZEPTE</i> <br /> <i>Dein gratis Rezeptheft </i> <br /> <i>jede Woche</i></h2>
         <p><i>Jede Woche zaubern wir in unserer </i> <br /> <i>Test-K&uuml;che f&uuml;nf neue fabelhafte Rezepte. </i> <br /> <i>Alles ganz Frisch </i></p>
         <div class="da-img"></div>
      </div>
      <div class="da-arrows">
         <span class="da-arrows-prev"></span>
         <span class="da-arrows-next"></span>    
      </div>
   </div>
   <!--/da-slider-->
</div>
<!--/slider-->
<!--=== Purchase Block ===-->
<div class="purchase">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <span>Bestell deine KochAbo-Box! Jederzeit pausieren!</span>
            <p>Deine Vorteile: Keine feste Bindung, jederzeit pausieren. Frische Zutaten, dazu passende tolle Rezepte f&uuml;r 3 leckere Mahlzeiten.</p>
         </div>
         <div class="col-md-4">
            <a href="#" class="btn-buy hover-effect">KochAbo jetzt ausprobieren!</a>            
         </div>
      </div>
   </div>
</div>
<!--/row-->
<!-- End Purchase Block -->
<!--=== Content Part ===-->
<div class="container">
   <!-- Recent Works -->
   <div class="headline">
      <h2>Information</h2>
   </div>
   <div class="row">
      <div class="col-md-4 col-sm-3">
         <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
               <div class="overflow-hidden">

               

                  <img class="img-responsive" src="{{ URL::to('filemanager/userfiles/startseite/obstkorb.jpg') }}" alt="" />
               </div>
               <a class="btn-more hover-effect" href="#">mehr lesen +</a>          
            </div>
            <div class="caption">
               <h3><a class="hover-effect" href="#">Obstbox Extraportion Vitamine</a></h3>
               KochAbo hilft dir jetzt noch besser, dich ausgewogen und gesund zu ern&auml;hren.<br>
               </p>
            </div>
         </div>
      </div>
      <div class="col-md-4 col-sm-3">
         <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
               <div class="overflow-hidden">


                  <img class="img-responsive" src="{{ URL::to('filemanager/userfiles/startseite/rezepte.jpg') }}" alt="" />
               </div>
               <a class="btn-more hover-effect" href="#">mehr lesen +</a>                   
            </div>
            <div class="caption">
               <h3><a class="hover-effect" href="#">Rezepte</a></h3>
               <p>F&uuml;r Lieferungen am Mo/Di bis inklusive Donnerstag, 20. M&auml;rz bestellen.</p>
            </div>
         </div>
      </div>
      <div class="col-md-4 col-sm-6">
         <div class="thumbnails thumbnail-style thumbnail-kenburn">
            <div class="thumbnail-img">
               <div class="overflow-hidden">

                  <img class="img-responsive" src=" {{ URL::to('filemanager/userfiles/startseite/partner_kochabo_v2.jpg') }}" alt="" />
               </div>
               <a class="btn-more hover-effect" href="#">mehr lesen +</a>                   
            </div>
            <div class="caption">
               <h3><a class="hover-effect" href="#">Unsere Lieferanten</a></h3>
               <p>Mit Wiesbauer Gourmet, Sonnentor, Toni&acute;s Freilandeier, K&auml;seland und Finkensteiner haben wir ideale Partner f&uuml;r unsere Kunden gefunden. </p>
            </div>
         </div>
      </div>
   </div>
   <!--/row-->
   <!-- End Recent Works -->
   <!-- Service Blocks -->
   <div class="row">
      <div class="col-md-4">
         <div class="service">
            <i class="icon-eur  service-icon"></i>
            <div class="desc">
               <h4>Einfache Bestellung</h4>
               <p>Bestell einfach online deine KochAbo-Box mit 3 oder 5 k&ouml;stlichen und gesunden Rezepten.</p>

               <p><a class="index-block-want-more-infos" href="{{ URL::to('obstbox') }}"> zur Obstbox </a></p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="service">
            <i class=" icon-stackexchange service-icon"></i>
            <div class="desc">
               <h4>Kreation der Rezepte</h4>
               <p>Unser KochAbo-Koch erfindet immer neue geniale Rezepte. Die Rezepte sind gut beschrieben, einfach und rasch zum Nachkochen. 
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="service">
            <i class="icon-archive service-icon"></i>
            <div class="desc">
               <h4>Lieferung frei Haus</h4>
               <p>Wir liefern in ganz &Ouml;sterreich.<br>
                  Abh&auml;ngig von deiner Postleitzahl liefern wir dir deine Box Montag abend zwischen 
                  17 und 22 Uhr oder Dienstag fr&uuml;h.
               </p>
            </div>
         </div>
      </div>
   </div>
   <!--/row-->
   <!-- End Service Blokcs -->
   <!--=== Content Part ===-->
   <div class="container">
      <div class="row">
         <div class="col-md-4 md-margin-bottom-50">
            <!-- Our Services -->
            <div class="headline">
               <h2>Probier mal unsere Rezepte</h2>
            </div>
            <div class="servive-block servive-block-in margin-bottom-0">
               <div class="servive-block-in servive-block-colored servive-block-green">
                  <h4>GRATIS REZEPTE </h4>
                  <p><i class="icon-lightbulb"></i></p>
                  <p>Hast du es satt ewig mit den Rezepten deiner Oma zu leben? Dann melde dich bei uns an. Du erhaltest von uns kostenloase Rezepte. Einzig deine E-Mail Adresse wäre dazu notwenig. Dann kannst du sofort loslegen und deine Lieben überraschen und mit neuen Haupt- und Nachspeisen überraschen.</p>
               </div>
            </div>
            <!--/welcome-block-->
            <!-- End Our Services -->
            <!-- Recent Works -->
         </div>
         <!--/col-md-4-->
         <!--/Responsive Youtuber col-md-4-->
         <div class="col-md-4 md-margin-bottom-50">
            <div class="headline">
               <h2>Andi Knoll erkl&auml;rt KochAbo.at</h2>
            </div>
            <style>
               .video-container {
               position: relative;
               padding-bottom: 56.25%;
               padding-top: 30px; height: 0; overflow: hidden;
               }
               .video-container iframe,
               .video-container object,
               .video-container embed {
               position: absolute;
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               }
            </style>
            <div class="video-container">
               <iframe width="360" height="287" src="//www.youtube.com/embed/ailT4Gd0e80" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="margin-bottom-30 clearfix"></div>
         </div>
         <!--/col-md-4-->
         <div class="col-md-4 md-margin-bottom-50">
            <div class="headline">
               <h2>Verfolg uns bitte</h2>
            </div>
            <!-- Our Services -->
            <div class="servive-block servive-block-in margin-bottom-0">
               <div class="servive-block-in servive-block-colored servive-block-blue">
                  <h4>Facebook </h4>
               </div>
            </div>
            <!--/welcome-block-->
            <!-- End Our Services -->
            <div class="servive-block servive-block-in margin-bottom-0">
               <div class="servive-block-in servive-block-colored servive-block-red">
                  <h4>Google + </h4>
               </div>
            </div>
            <!--/welcome-block-->
            <!-- End Our Services -->
            <div class="servive-block servive-block-in margin-bottom-0">
               <div class="servive-block-in servive-block-colored servive-block-sea">
                  <h4>Twitter + </h4>
               </div>
            </div>
            <!--/welcome-block-->
            <!-- End Our Services -->
         </div>
         <!--/col-md-4-->
      </div>
      <!--/row-->        
   </div>
   <!--=== Content Part ===-->
   <div class="container">
      <div class="headline">
         <h2>Was unsere Kunden sagen</h2>
      </div>
      <div class="row">
         <!--Accordion--> 
         <div class="col-md-7 md-margin-bottom-40">
            <div id="accordion-1" class="panel-group acc-v1">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a href="#collapse-One" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                        Jederzeit pausieren
                        </a>
                     </h4>
                  </div>
                  <div class="panel-collapse collapse in" id="collapse-One">
                     <div class="panel-body">
                        <div class="row">
                           <div class="col-md-4">

                              <img alt="" src="{{ URL::to('filemanager/userfiles/startseite/kalender.jpg') }}" class="img-responsive">
                           </div>
                           <div class="col-md-8">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a href="#collapse-Two" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                        100% Zufriedenheit
                        </a>
                     </h4>
                  </div>
                  <div class="panel-collapse collapse" id="collapse-Two">
                     <div class="panel-body">
                        <div class="row">
                           <div class="col-md-8">
                              <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
                              <ul class="list-unstyled">
                                 <li><i class="icon-ok color-green"></i> Donec id elit non mi porta gravida at eget metus..</li>
                                 <li><i class="icon-ok color-green"></i> Fusce dapibus, tellus ac cursus comodo egetine..</li>
                                 <li><i class="icon-ok color-green"></i> Food truck quinoa nesciunt laborum eiusmod runch..</li>
                              </ul>
                           </div>
                           <div class="col-md-4">
                              <img alt="" src="filemanager/userfiles/kochabobox/zufriedenheitssiegel.png" class="img-responsive">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a href="#collapse-Three" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                        Kostenlose Lieferung
                        </a>
                     </h4>
                  </div>
                  <div class="panel-collapse collapse" id="collapse-Three">
                     <div class="panel-body">
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--End Accordion--> 
         <!--Testimonials--> 
         <div class="col-md-5">
            <div class="carousel slide testimonials testimonials-v1" id="testimonials-1">
               <div class="carousel-inner">
                  <div class="item active">
                     <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                     <div class="testimonial-info">
                        <img alt="" src="{{ URL::to('filemanager/userfiles/testimonials/lieferung.png') }}">
                        <span class="testimonial-author">
                        Jeremy Asigner 
                        <em>Web Developer, Unify Theme.</em>
                        </span>
                     </div>
                  </div>
                  <div class="item">
                     <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                     <div class="testimonial-info">
                        <img alt="" src="{{ URL::to('filemanager/userfiles/testimonials/user.jpg') }}">
                        <span class="testimonial-author">
                        User 
                        <em>Java Developer, Htmlstream</em>
                        </span>
                     </div>
                  </div>
                  <div class="item">
                     <p>Crasjusto ducimus qui cupiditate non provident, similique sunt in culpaid est anditiis praesentium praesentium blanditiis praesentium non provident, similique sunt in culpaid est anditiis praesentium praesentium..</p>
                     <div class="testimonial-info">


                        <img alt="" src="{{ URL::to('filemanager/userfiles/testimonials/img2.jpg') }}">
                        <span class="testimonial-author">
                        Kate Davenport 
                        <em>Web Designer, Google Inc.</em>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="carousel-arrow">
                  <a data-slide="prev" href="#testimonials-1" class="left carousel-control">
                  <i class="icon-angle-left"></i>
                  </a>
                  <a data-slide="next" href="#testimonials-1" class="right carousel-control">
                  <i class="icon-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!--End Testimonials--> 
      </div>
      <!-- Our Clients -->
      <!-- Our Clients -->
      <div id="clients-flexslider" class="flexslider home clients">
         <div class="headline">
            <h2>Bekannt aus</h2>
         </div>
         <ul class="slides">
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/vadafone_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/vadafone.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/walmart_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/walmart.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/shell_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/shell.png') }}" class="color-img" alt="" />
               </a>
            </li>

      
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/natural_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/natural.png') }}" class="color-img" alt="" />
               </a>
            </li>

            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/aztec_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/aztec.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/gamescast_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/gamescast.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/cisco_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/cisco.png') }}" class="color-img" alt="" />
               </a>
            </li>

          


            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/everyday_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/everyday.png') }}" class="color-img" alt="" />
               </a>
            </li>

            
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/cocacola_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/cocacola.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/spinworkx_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/spinworkx.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src=" {{ URL::to('filemanager/userfiles/clients/shell_grey.png') }}" alt="" /> 
               <img src=" {{ URL::to('filemanager/userfiles/clients/shell.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/natural_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/natural.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/gamescast_grey.png') }}" alt="" /> 
               <img src=" {{ URL::to('filemanager/userfiles/clients/gamescast.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/everyday_grey.png') }}" alt="" /> 
               <img src="{{ URL::to('filemanager/userfiles/clients/everyday.png') }}" class="color-img" alt="" />
               </a>
            </li>
            <li>
               <a href="#">
               <img src="{{ URL::to('filemanager/userfiles/clients/spinworkx_grey.png') }}" alt="" /> 
               <img src=" {{ URL::to('filemanager/userfiles/clients/spinworkx.png') }}" class="color-img" alt="" />


               


               </a>
            </li>
         </ul>
      </div>
      <!--/flexslider-->
      <!-- End Our Clients -->
      <!-- End Our Clients -->
   </div>
   <!--/container-->   
   <!-- End Content Part -->
</div>
@stop