@extends('template.template')
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
                        	<h4 class="media-heading"><a href="{{$cartItem->productlink}}">{{$cartItem->name}}</a></h4>
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
                        <td class="col-sm-1 col-md-1 text-center">
                        	<strong>{{$cartItem->subtotal}} €</strong>
                        </td>
                        <td class="col-sm-1 col-md-1">
	                        <a href="{{URL::to('delete/'.$cartItem->rowid)}}" class="btn btn-danger">
	                            Enfternen <span class="glyphicon glyphicon-remove"></span>
	                        </a>
                        </td>
                    </tr>
                @endforeach

                    <tr>
                        <td colspan="4"><h3>Total Summe</h3></td>
                        <td class="text-right"><h3><strong>{{Cart::total()}} €</strong></h3></td>
                    </tr>
                    <tr>
                        <td colspan="3">
	                        <a href="{{URL::to('/home')}}" class="btn btn-u">
	                            <span class="glyphicon glyphicon-shopping-cart"></span> Weitershoppen
	                        </a>
                        </td>
                         <td>
                            <a href="{{URL::to('/terminate')}}" class="btn btn-danger">
                                Warenkob löschen <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                        <td>
	                        <a href="{{URL::to('/checkout')}}" class="btn btn-u">
	                            Kaufen <span class="glyphicon glyphicon-play"></span>
	                        </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop