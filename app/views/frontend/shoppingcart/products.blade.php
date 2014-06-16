@extends('frontend.shoppingcart.template.template')
@section('title')
@parent
products
@stop

{{-- Content --}}

@section('content')


<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
<div class="container">
<h1 class="pull-left">Unser Shop</h1>
<ul class="pull-right breadcrumb">
<li>
<a href="{{URL::to('')}}/">Home</a>
</li>
<li class="active">Unser Shop</li>
</ul>
</div>
</div>
<!--/breadcrumbs-->
<div class="container">

   <div class="headline">
            <h2>Unsere Boxen und Produkte</h2>
         </div>


<div class="row text-center">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 hero-feature">
                    <div class="thumbnail">
                        <img src="{{ URL::to('filemanager/userfiles/products')}}/{{$product->picurl}}" alt="" width="100%">
                        <div class="caption">
                            <h3>{{$product->product_name}}</h3>
                            <h4>Preis: {{$product->price}} {{$product->currency}}</h4>
                            <p>{{$product->description}}</p>
                            <p>
                                <a href="{{URL::to('/shop/insert/'.$product->id)}}" class="btn btn-u">Auswählen <span class="glyphicon glyphicon-shopping-cart"></span></a>  
                            </p>
                        </div>
                    </div> <br>
                </div> 
            @endforeach 


        </div>


         </div>
@stop