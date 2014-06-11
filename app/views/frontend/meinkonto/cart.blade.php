@extends('frontend/_layout/layout')
@section('content')




<!-- CSS Global Compulsory-->
<!--=== Breadcrumbs Manuel ===-->
<div class="breadcrumbs margin-bottom-40">
   <div class="container">
      <h1 class="pull-left">Bestellung - Registrierung</h1>
      <ul class="pull-right breadcrumb">
         <li><a href="{{URL::to('kochabo')}}">Kochabobox</a></li>
         <li><a href="javascript:history.back()">Bestellung</a></li>
         <li class="active">Registrierung</li>
   </div>
   </ul>
</div>
</div>


<div class="container">

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produkt</th>
            <th>Preis</th> 
            <th></th>
        </tr>
    </thead>

    <tbody>
   @foreach ($productscart as $productcart)
<tr>
   <td>{{$productcart->id}}</td>
    <td>{{$productcart->name}}</td>
     <td>{{$productcart->price}} {{$productcart->currency}}</td>
     
       <td><img alt="" width="50", height="50" src="{{URL::to('/filemanager/userfiles/products/thumb_')}}{{$productcart->image}}" > </td>
 </tr>
    @endforeach




 
    </tbody>
</table>
<hr>


      </div>
   </div>
</div>
</div>



<!--WARENKORB ANFANG-->
<div class="container">
   <!--WARENKORB ANFANG-->
   <div class="row">
   
      <div class="col-md-4">
         <div class="margin-bottom-30">
            <div class="warenkorb" >
               <h4><strong>Mein Warenkorb</strong></h4>
               @foreach ($productscart as $productcart)            
             
  
           <table width='100%' border='0'><tr>  <td><img alt="" width="50", height="50" src="{{URL::to('/filemanager/userfiles/products/thumb_')}}{{$productcart->image}}" >  </td> <td width='75%'>&nbsp;&nbsp;{{{$productcart->name}}}</td> <td width='25%';style='text-align:right'>{{$productcart->price}} {{$productcart->currency}}</td> </tr></table>
                               
                  @endforeach


                   <br><div class='hr'><hr /></div><br>
                    <table width='100%' border='0'><tr><td>Anzahl:</td><td width='25%';style='text-align:right'> {{ Cart::totalItems() }} </td></tr></table>
                     
                     <table width='100%' border='0'><tr><td>Endsumme:</td><td width='25%';style='text-align:right'><u> {{ Cart::total(false) }} {{$productcart->currency}}</u></td></tr></table>
                     
                     <br>
                     
                     
                     
                 
               </ul>
            </div>
         </div></div></div>

         </div>

          @foreach ($products as $product)
{{$product->id}}  {{$product->product_name}} <br>

 @endforeach

@stop