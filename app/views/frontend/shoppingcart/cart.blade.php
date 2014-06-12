@extends('frontend.shoppingcart.template.template')
@section('title')
@parent
cart
@stop

{{-- Content --}}
@section('content')

<div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Produkt</th>
                        <th>Anzahl</th>
                        <th class="text-center">Preis</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cartContent as $cartItem)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        	<h4 class="media-heading"><a href="{{URL::to('')}}{{$cartItem->productlink}}">{{$cartItem->name}}</a></h4>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        	<form action="{{URL::to('update')}}" method="post" >
                                <input type="hidden" name="rowid" value="{{$cartItem->rowid}}" />
                                <input type="number" name="updater" value="{{$cartItem->qty}}" class="input-qty form-control text-center" onchange="submit()" />
                            </form>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                        	<strong>{{$cartItem->price}} €</strong>
                        </td>
                        <td class="col-sm-2 col-md-2 text-center">
                        	<strong>{{$cartItem->subtotal}} €</strong>
                        </td>
                        <td class="col-sm-2 col-md-2 text-right" >
	                        <a href="{{URL::to('delete/'.$cartItem->rowid)}}" class="btn-u btn-u-red">
	                            Enfternen <span class="glyphicon glyphicon-remove"></span>
	                        </a>
                        </td>
                    </tr>
                @endforeach

                    <tr>
                     <td colspan="7">

<div class="row">
  <div class="col-md-8"><h4>Total Summe</h4></div>
  <div class="col-md-4 pull-right" style="margin-right: -40px"><h4><strong>{{Cart::total()}} €</strong></h4></div>
</div>
                     </td>
                       </tr>

                    <tr>
                        <td colspan="3">
	                        <a href="{{URL::to('/shop')}}" class="btn btn-u">
	                            <span class="glyphicon glyphicon-shopping-cart"></span> Weitershoppen
	                        </a>
                             <a href="{{URL::to('/terminate')}}" class="btn-u btn-u-red">
                                Warenkob löschen <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                         <td>
                            
                        </td>
                        <td class="text-right">
	                        <a href="{{URL::to('/checkout')}}" class="btn btn-u ">
	                            Kaufen <span class="glyphicon glyphicon-play"></span>
	                        </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop