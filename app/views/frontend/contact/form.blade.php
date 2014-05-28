@extends('frontend/_layout/layout')
@section('content')
<!-- CSS Page Style -->    
<link rel="stylesheet" href="{{URL::to('assets/css/pages/page_contact.css')}}">
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-0">
   <div class="container">
      <h1 class="pull-left">Kontakt</h1>
      {{ Breadcrumbs::render('contact') }}   
   </div>
</div>
<!--/breadcrumbs-->
<!-- Google Map -->
<div id="map" class="map margin-bottom-20"></div>
<!---/map-->
<!-- End Google Map -->
<!--=== Content Part ===-->
<div class="container">
   <div class="row margin-bottom-30">
      <div class="col-md-9 mb-margin-bottom-30">
         <div class="headline">
            <h2>Unsere Kontakt in Wien</h2>
         </div>
         <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p>
         <br />
         @if(Session::has('notification'))
         <div class="alert alert-success" id="notification">
            {{ Session::get('notification') }}
         </div>
         @endif
         {{ Form::open(array('action' => 'FormPostController@postContact')) }}
         <div class="control-group {{ $errors->has('sender_name_surname') ? 'has-error' : '' }}">
            <label>Vor- und Nachname</label>
            <div class="row margin-bottom-20">
               <div class="col-md-7 col-md-offset-0">
                  {{ Form::text('sender_name_surname', null, array('class'=>'form-control', 'id' => 'sender_name_surname', 'placeholder'=>'Name and Surname', 'value'=>Input::old('sender_name_surname'))) }}
                  @if ($errors->first('sender_name_surname'))
                  <span class="help-block">{{ $errors->first('sender_name_surname') }}</span>
                  @endif
               </div>
            </div>
         </div>
         <div class="control-group {{ $errors->has('sender_email') ? 'has-error' : '' }}">
            <label>Telefon <span class="color-red">*</span></label>
            <div class="row margin-bottom-20">
               <div class="col-md-7 col-md-offset-0">
                  {{ Form::text('sender_email', null, array('class'=>'form-control', 'id' => 'sender_email', 'placeholder'=>'Email', 'value'=>Input::old('sender_email'))) }}
                  @if ($errors->first('sender_email'))
                  <span class="help-block">{{ $errors->first('sender_email') }}</span>
                  @endif
               </div>
            </div>
         </div>
         <div class="control-group {{ $errors->has('sender_phone_number') ? 'has-error' : '' }}">
            <label>Telefon <span class="color-red">*</span></label>
            <div class="row margin-bottom-20">
               <div class="col-md-7 col-md-offset-0">
                  {{ Form::text('sender_phone_number', null, array('class'=>'form-control', 'id' => 'sender_phone_number', 'placeholder'=>'Phone Number', 'value'=>Input::old('sender_phone_number'))) }}
                  @if ($errors->first('sender_phone_number'))
                  <span class="help-block">{{ $errors->first('sender_phone_number') }}</span>
                  @endif
               </div>
            </div>
         </div>
         <div class="control-group {{ $errors->has('subject') ? 'has-error' : '' }}">
            <label>Betreff <span class="color-red">*</span></label>
            <div class="row margin-bottom-20">
               <div class="col-md-7 col-md-offset-0">
                  {{ Form::text('subject', null, array('class'=>'form-control', 'id' => 'subject', 'placeholder'=>'Subject', 'value'=>Input::old('subject'))) }}
                  @if ($errors->first('subject'))
                  <span class="help-block">{{ $errors->first('subject') }}</span>
                  @endif
               </div>
            </div>
         </div>
         <div class="control-group {{ $errors->has('message') ? 'has-error' : '' }}">
            <label>Mitteilung</label>
            <div class="row margin-bottom-20">
               <div class="col-md-11 col-md-offset-0">
                  {{ Form::textarea('message', null, array('class'=>'form-control', 'id' => 'message-content', 'placeholder'=>'Message', 'value'=>Input::old('message'))) }}
                  @if ($errors->first('message'))
                  <span class="help-block">{{ $errors->first('message') }}</span>
                  @endif
               </div>
            </div>
         </div>
         <p><button type="submit" class="btn-u">Send Message</button></p>
         {{ Form::close() }}
      </div>
      <!--/col-md-9-->
      <div class="col-md-3">
         <!-- Contacts -->
         <div class="headline">
            <h2>Zentrale</h2>
         </div>
         <ul class="list-unstyled who margin-bottom-30">
            <li><a href="#"><i class="icon-home"></i>Strobachgasse 4/6</a></li>
            <li><a href="#"><i class="icon-envelope-alt"></i>info@example.com</a></li>
            <li><a href="#"><i class="icon-phone-sign"></i>1(222) 5x86 x97x</a></li>
            <li><a href="#"><i class="icon-globe"></i>http://www.kochabo.at</a></li>
         </ul>
         <!-- Business Hours -->
         <div class="headline">
            <h2>Business Hours</h2>
         </div>
         <ul class="list-unstyled margin-bottom-30">
            <li><strong>Monday-Friday:</strong> 10am to 8pm</li>
            <li><strong>Saturday:</strong> 11am to 3pm</li>
            <li><strong>Sunday:</strong> Closed</li>
         </ul>
         <!-- Why we are? -->
         <div class="headline">
            <h2>Why we are?</h2>
         </div>
         <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
         <ul class="list-unstyled">
            <li><i class="icon-ok color-green"></i> Odio dignissimos ducimus</li>
            <li><i class="icon-ok color-green"></i> Blanditiis praesentium volup</li>
            <li><i class="icon-ok color-green"></i> Eos et accusamus</li>
         </ul>
      </div>
      <!--/col-md-3-->
   </div>
   <!--/row-->
   <!-- Our Clients -->
   <div id="clients-flexslider" class="flexslider home clients">
      <div class="headline">
         <h2>&nbsp;</h2>
      </div>
   </div>
</div>
</div>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
{{ HTML::script('assets/plugins/gmap/gmap.js') }}
{{ HTML::script('assets/plugins/flexslider/jquery.flexslider-min.js') }}
{{ HTML::script('assets/js/app.js') }}
{{ HTML::script('assets/js/pages/contact.js') }}
<!-- JS Page Level -->           
<script type="text/javascript">
   jQuery(document).ready(function() {
       App.init();
       App.initSliders();                
       Contact.initMap();        
   });
</script>
@stop