@extends('backend/_layout/layout')
@section('content')


<div class="container">

<nav class="navbar navbar-inverse">
    
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('admin/userverwaltung') }}">Zeige alle Benutzer</a></li>
        <li><a href="{{ URL::to('admin/register') }}">Benutzer anlegen</a>
    </ul>
</nav>

<div class="pull-right">
<a href="javascript:history.back();"><button class="btn btn-u">&lt;&lt; Zurück</button></a>
</div>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


<div class="row">
    <div class="col-md-4 col-md-offset-4">
        {{ Form::open(array('action' => 'UserController@store')) }}

            <h2>Neuer Account</h2>


                     <div class="form-group ">
            
   {{ Form::text('first_name', '', array('class' => 'form-control', 'placeholder' => 'Vorname')) }}

        </div>

      <div class="form-group ">
   {{ Form::text('last_name', '', array('class' => 'form-control', 'placeholder' => 'Nachname')) }}
  
     </div>

            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-Mail')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Passwort')) }}
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Passwort bestätigen')) }}
                {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
            </div>
<div>



    

            {{ Form::submit('Registrieren', array('class' => 'btn btn-u')) }}
             {{ Form::hidden('price_produkt', 'cms-admin', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
              {{ Form::hidden('status', 'admin', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('price_adobstbox', 'cms-admin', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('price_adwein', 'cms-admin', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('summe', 'cms-admin', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('obstbox', 'cms-admin', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
          {{ Form::hidden('wein', 'cms-admin', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
            {{ Form::hidden('produkttyp', 'cms-admin', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
        {{ Form::hidden('produkt', 'cms-admin', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
        {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
        {{ Form::hidden('terms', 'yes', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
        
           {{ Form::hidden('cmsanlegung', 'yes', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 

                   
       
            
        {{ Form::close() }}
    </div>
</div>
</div></div>

@stop