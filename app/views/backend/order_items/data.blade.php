{
  "data": [   
@foreach ($order_items as $index => $v)
[   

   "{{{ $v->orderorder_id }}}",
   "{{{ $v->order_items_id }}}",   
   "{{{ $v->product_id }}}",  
   "{{{ $v->product_sku }}}", 
   "{{{ $v->product_name }}}",
   "{{{ $v->original_price_net }}}",
   "{{{ $v->ust}}}",
   "{{{ $v->discount }}}",
   "{{{ $v->affilate_discount }}}",
   "{{{ $v->affilate_credit }}}",
   "{{{ $v->giftvoucher_credit }}}",
   "{{{ $v->giftvoucher_code }}}",
   "{{{ $v->affilate_code }}}",
   "{{{ $v->quantity }}}",
   "{{{ $v->timestamp }}}",
   "{{{ $v->created_at }}}",
   "{{{ $v->updated_at }}}"  
], 

@if ($index == -1)
@elseif ($index+1 == count($order_items))
    [ "", "","","","","","","","","","","","", "", "", "", ""] ]}
@endif
@endforeach