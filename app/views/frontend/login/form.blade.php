@extends('frontend/_layout/layout')
@section('content')




   
    <!-- CSS Page Style -->    
 
    <link rel="stylesheet" href="assets/css/pages/page_log_reg_v1.css">  
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Mein Konto</h1>  
               
{{ Breadcrumbs::render('login') }}   
    </div>
</div><!--/breadcrumbs-->

<!-- Google Map -->
<div id="map" class="map margin-bottom-20">
</div><!---/map-->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container">     
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <form class="reg-page">
                <div class="reg-header">            
                    <h2>Anmelden</h2>
                </div>

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" placeholder="E-Mail Adresse" class="form-control">
                </div>                    
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                    <input type="text" placeholder="Passwort" class="form-control">
                </div>                    

                <div class="row">
                    <div class="col-md-6">
                        <label class="checkbox"><input type="checkbox"> Merken</label>                        
                    </div>
                    <div class="col-md-6">
                        <button class="btn-u pull-right" type="submit">Login</button>                        
                    </div>
                </div>

                <hr>

                <h4>Passwort vergessen ?</h4>
                <p>Kein Problem, <a class="color-green" href="#">click hier</a> um dein Passwort neu zu setzen.</p>
            </form>            
        </div>
    </div><!--/row-->
</div><!--/container-->     
<!--=== End Content Part ===-->






@stop