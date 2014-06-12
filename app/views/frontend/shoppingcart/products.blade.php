@extends('frontend.shoppingcart.template.template')
@section('title')
@parent
products
@stop

{{-- Content --}}

@section('content')
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
@stop