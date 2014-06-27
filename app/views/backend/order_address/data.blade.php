{
  "data": [   
@foreach ($order_address as $index => $v)
[   
   "{{{ $v->address_id }}}",
   "{{{ $v->orderoder_id }}}",
   "{{{ $v->gender }}}",
   "{{{ $v->first_name }}}"
   
 

], 

@if ($index == -1)
@elseif ($index+1 == count($order_address))
    [ "", "", "",  ""] ]}
@endif
@endforeach


