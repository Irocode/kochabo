{
  "data": [   
@foreach ($order_address as $index => $v)
[  "{{{ $v->orderorder_id }}}",
   "{{{ $v->address_id }}}", 
   "{{{ $v->gender }}}",
   "{{{ $v->first_name }}}",
   "{{{ $v->last_name }}}"
   
 

@if ($index == -1)
@elseif ($index+1 == count($order_address))
  ] ]}
  @else
  ], 
@endif
@endforeach

