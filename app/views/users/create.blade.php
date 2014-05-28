@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Register
@stop

{{-- Content --}}
@section('content')
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
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-mail')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
                {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
            </div>
<div>



    

            {{ Form::submit('Registrieren', array('class' => 'btn btn-primary')) }}

             {{ Form::hidden('price_produkt', 'vomcmsangelegt', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('price_adobstbox', 'vomcmsangelegt', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('price_adwein', 'vomcmsangelegt', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('summe', 'vomcmsangelegt', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
         {{ Form::hidden('obstbox', 'vomcmsangelegt', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
          {{ Form::hidden('wein', 'vomcmsangelegt', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
            {{ Form::hidden('produkttyp', 'vomcmsangelegt', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
                   {{ Form::hidden('produkt', 'vomcmsangelegt', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
                    {{ Form::hidden('activated', '1', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 
                     {{ Form::hidden('terms', 'yes', array('class' => 'form-control', 'placeholder' => 'produkt' )) }} 

                   
       
            
        {{ Form::close() }}
    </div>
</div>


@stop