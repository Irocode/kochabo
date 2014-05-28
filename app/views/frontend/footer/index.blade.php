@section('footeradd')
@foreach( $footer as $v )  
<!--=== Footer ===-->
<div class="footer">
   <div class="container">
      <div class="row">
         <div class="col-md-4 md-margin-bottom-40">
            <!-- About -->
            <div class="headline">
               <h2>{{ $v->hl_ueberuns }}</h2>
            </div>
            <p class="margin-bottom-25 md-margin-bottom-40">{{ $v->ct_ueberuns }}</p>
            <!-- Monthly Newsletter -->
            <div class="headline">
               <h2>{{ $v->hl_rezepte }}</h2>
            </div>
            <p>{{ $v->ct_rezepte }}</p>
             @endforeach
          
               <div class="input-group">
   


    
            
  
     
{{ HTML::ul($errors->all() )}}
{{ Form::open(array('url' => 'newslettereintrag')) }}


   <form class="footer-subsribe">
   <div class="input-group">


           

                  <input type="text" name="email" class="form-control" placeholder="E-Mail Adresse">   
                   <input type="hidden" name="code" class="form-control" value="{{$code = str_pad(rand(0, 9999999), 4, '0', STR_PAD_LEFT);}}">                            
                  <span class="input-group-btn">
                  <button class="btn-u" type="submit">Eintragen</button>



                  </span>
               </div>
               <!-- /input-group -->                    
            </form>


   

{{ Form::close() }}


                  </span>
               </div>
               <!-- /input-group -->                    
           
         </div>
         <!--/col-md-4-->  
        
       
         <!--
            ////////////// FOOTER ANFANG
            
            DES GEHÖRT ZUM FOOTER -->
         <!--@include('frontend/article/indexfooter')
            <!--///////////// FOOTER ENDE
            
            -->
         
         <!--/col-md-4-->
    
         <div class="col-md-4 md-margin-bottom-40">
            <div class="posts">
               <div class="headline">
                  <h2>Frisch aus dem Blog </h2>
               </div>
               <dl class="dl-horizontal">

                  <dt><a href="#"><img src="{{ URL::to('filemanager/userfiles/blog/9.jpg') }}" alt="" /></a></dt>
                  <dd>
                     <p><a href="#">Ff&uuml;r die Zubereitung unseres Orangen-Kurkuma-Risotto mit feinen H&uuml;hnerbrustst&uuml;cken musst du die Orange so vorbereiten, bevor du sie kochst.</a></p>
                  </dd>
               </dl>
               <dl class="dl-horizontal">
                  <dt><a href="#"><img src="{{ URL::to('filemanager/userfiles/blog/10.jpg') }}" alt="" /></a></dt>
                  <dd>
                     <p><a href="#">Gerade wurde noch zum letzten Mal im Fasching ordentlich gev&ouml;llert, jetzt steht die Fastenzeit an. Eva Fischer hat das richtige Rezept f&uuml;r euch!</a></p>
                  </dd>
               </dl>
               <dl class="dl-horizontal">
                  <dt><a href="#"><img src="{{ URL::to('filemanager/userfiles/blog/11.jpg') }}" alt="" /></a></dt>
                  <dd>
                     <p><a href="#">Liebe geht ja bekanntlich durch den Magen - ein herrliches Valentinstagsmen&uuml; mit zartem Lachsfilet und traumhaften Schokomuffins komponiert.</a></p>
                  </dd>
               </dl>
            </div>
         </div>
         <!--/col-md-4-->
         @foreach( $footer as $v )      
         <div class="col-md-4">
            <!-- Monthly Newsletter -->
            <div class="headline">
               <h2>{{ $v->hl_contact }}</h2>
            </div>
            <address class="md-margin-bottom-40">
               {{ $v->ct_contact }}
            </address>
            <!-- Stay Connected -->
            <div class="headline">
               <h2>Bleiben Sie in Verbindung</h2>
            </div>
            <ul class="social-icons">
               <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
               <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
               <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
               <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
               <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
               <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
               <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
            </ul>
         </div>
         <!--/col-md-4-->
      </div>
      <!--/row-->   
   </div>
   <!--/container--> 
</div>
<!--/footer-->    
<!--=== End Footer ===-->
@endforeach


@stop