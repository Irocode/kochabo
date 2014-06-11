@extends('frontend/_layout/layout')
@section('content')
{{ HTML::script('assets/js/moment-with-langs.min.js') }}

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Obstbox</h1>  

      

               
{{ Breadcrumbs::render('obstbox', $obstbox) }}   

    </div>
</div><!--/breadcrumbs-->
<?php
   /// Lösche Warenkorb 
   Session::forget('summi_brummi');



   ?>

   



<!--*********************************************************************************************************************************************************************************************************************************** -->

<!--=== Content Part ===--> 
<div class="container">
   <div class="row">
      <div class="col-md-3">
         <!-- About Us -->
         <div class="margin-bottom-30">
            <div class="headline">
               <h2>Deine Vorteile</h2>
            </div>
            <p> Die Lieferung ist versandkostenfrei in ganz Österreich. Wir liefern Mo, Di, Do und Fr - deinen genauen Liefertag kannst du im nächten Bestellschritt festlegen.</p>
            <ul class="list-unstyled">
               <li><i class="icon-ok color-green"></i> Keine feste Bindung</li>
               <li><i class="icon-ok color-green"></i> Kostenlose Lieferung</li>
               <li><i class="icon-ok color-green"></i> Frische Lebensmittel</li>
               <li><i class="icon-ok color-green"></i> Passende Rezepte</li>
               <li><i class="icon-ok color-green"></i> Wöchentlich</li>
               <li><i class="icon-ok color-green"></i> oder alle 2 Wochen</li>
            </ul>
         </div>
         <!-- Posts -->
         <div class="posts margin-bottom-30">
            <div class="headline">
               <h2>Rezepte Blog</h2>
            </div>
            <dl class="dl-horizontal">

               <dt><a href="#"><img src="{{URL::to('filemanager/userfiles/blog/10.jpg')}}" alt="" /></a></dt>
               <dd>
                  <p><a href="#">Lorem sequat ipsum dolor lorem sunt aliqua put</a></p>
               </dd>
            </dl>
            <dl class="dl-horizontal">
               <dt><a href="#"><img src="{{URL::to('filemanager/userfiles/blog/11.jpg')}}" alt="" /></a></dt>
               <dd>
                  <p><a href="#">It works on all major web browsers tablets</a></p>
               </dd>
            </dl>
            <dl class="dl-horizontal">
               <dt><a href="#"><img src="{{URL::to('filemanager/userfiles/blog/9.jpg')}}" alt="" /></a></dt>
               <dd>
                  <p><a href="#">Brunch 3 wolf moon tempor sunt aliqua put.</a></p>
               </dd>
            </dl>
         </div>
         <!--/posts-->
         <!-- Contact Us -->
         <div class="who margin-bottom-30">
            <div class="headline">
               <h2>Kontakt</h2>
            </div>
            <p>Wenn du noch weitere Fragen hast, kannst du uns gerne kontaktieren. Wir beraten dich gerne und freuen uns auf deinen Anruf.</p>
            <ul class="list-unstyled">
               <li><a href="#"><i class="icon-home"></i>Strobachgasse 4/6</a></li>
               <li><a href="#"><i class="icon-envelope-alt"></i>infp@example.com</a></li>
               <li><a href="#"><i class="icon-phone-sign"></i>1(222) 5x86 x97x</a></li>
               <li><a href="#"><i class="icon-globe"></i>http://www.kochabo.at</a></li>
            </ul>
         </div>
      </div>
      <!--/col-md-3-->
      <div class="col-md-9">
         <!-- Our Services -->
         <div class="headline">
            <h2>Bestell deine Obst-Box! Jederzeit pausieren!</h2>
         </div>
         <div class="row servive-block servive-block-in margin-bottom-20">
            <div class="col-md-6">



               @foreach ($products_kleine_obst_box as $product)           
               <form action="{{ URL::to('obstbox/login_query') }}" method="POST">
               <div class="pricing hover-effect">
                  <div class="pricing-head">
                     <h3>{{$product->product_name}} <span>Frisch durchs Leben</span></h3>
                     <h4>
                       <i></i><y id="fuerzweiprice">{{$product->price}}</y><i>{{$product->currency}}</i> <span>Pro Monat</span>
                     </h4>
                  </div>

                  <div style="text-align:center">
                      <img alt="{{$product->product_name}}" src="filemanager/userfiles/products/{{$product->picurl}}">


                  </div>
                  <ul class="pricing-content list-unstyled">
                     <li><i class="icon-tags"></i>{{$product->description}}</li>
                    
                  </ul>
                  <div class="pricing-footer">
                     <p>Alle Preise inkl. Mwst. & Lieferung. </p>
                     <br>    <br>
                     <input type="submit" class="btn-u btn-u-red" name="Abschicken" value="Jetzt Probieren!">
                  </div>
               </div>
               <input type="hidden" name="produkt" value="Singlebox">
               <input type="hidden" name="produkttyp" value="3 köstliche Abendessen"> 
               {{ Form::close() }}
                @endforeach
            </div>
            <div class="col-md-6">

                @foreach ($products_grosse_obst_box as $product)   

                   {{ Form::open( array( 'action' => array( 'CartController@show', $product->id) ) ) }}


               
               <div class="pricing hover-effect">
                  <div class="pricing-head">
                     <h3>{{$product->product_name}}<span>Frisch durchs Leben</span></h3>
                     <h4>
                        <i></i><y id="fuerzweiprice">{{$product->price}}</y><i>{{$product->currency}}</i> <span>Pro Monat</span>
                     </h4>
                  </div>

                    <div style="text-align:center">
                      <img alt="{{$product->product_name}}" src="filemanager/userfiles/products/{{$product->picurl}}">


                  </div>


                  <ul class="pricing-content list-unstyled">
                     <li><i class="icon-tags"></i> {{$product->description}}</li>
                  
                  </ul>
                  <div class="pricing-footer">
                     <p>Alle Preise inkl. Mwst. & Lieferung. </p>
                     <br>                    
                  
                     <br>
                     <input type="submit" class="btn-u btn-u-red" name="Abschicken" value="Jetzt Probieren!">
                  </div>
               </div>
               <input type="hidden" name="produkt" value="Für Zwei">
               {{ Form::close() }}
                @endforeach
            </div>
    
         </div>
         <!--/welcome-block-->
         <!-- End Our Services -->
         <!-- Blockquotes -->
         <p> <strong class="color-green">Deine Vorteile: </strong> 
            Keine feste Bindung, jederzeit pausieren  |   Kostenlose Lieferung  |   Frische Lebensmittel & passende Rezepte  |   Wöchentlich oder alle 2 Wochen
            Alle Preise inkl. Mwst. & Lieferung. 
         </p>
         <br>
 
      </div>
   </div>
</div>
<!--/container-->     
<!--=== End Content Part ===-->
<!--*********************************************************************************************************************************************************************************************************************************** -->
<!--=== Content Part ===-->





<div class="container">
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
                        <div class="col-md-6">
                           <img alt="" src="filemanager/userfiles/kochabobox/kalender.jpg" class="img-responsive">
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
                        <div class="col-md-6">
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

                     <img alt="" src="{{ URL::to('filemanager/userfiles/kochabobox/lieferung.png') }}">
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
</div>
<div class="container">
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
   <!--/flexslider-->
   <!-- //End Our Clients -->
</div>
<!-----------SCRIPT ANFANG- -->
<!--script ENDE-->
@foreach( $kochabobox as $v )
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
@stop