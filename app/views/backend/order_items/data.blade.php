{
  "data": [   
@foreach ($order_items as $index => $v)
[   
   "{{{ $v->orderorder_id }}}",
   "{{{ $v->order_items_id }}}",   
   "{{{ $v->product_id }}}",  
   "{{{ $v->product_sku }}}", 
   "{{{ $v->product_name }}}"  
 
  
], 

@if ($index == -1)
@elseif ($index+1 == count($order_items))
    [ "", "", "", "", ""] ]}
@endif
@endforeach