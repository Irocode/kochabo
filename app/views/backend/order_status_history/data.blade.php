{
  "data": [   
@foreach ($order_status_history as $index => $v)
[   
   "{{{ $v->order_status_history_id }}}",
   "{{{ $v->orderorder_id }}}",
   "{{{ $v->status }}}",
   "{{{ $v->channel }}}",
    "{{{ $v->operator }}}",
   "{{{ $v->timestamp }}}",
   "{{{ $v->created_at }}}",
   "{{{ $v->updated_at }}}"
   
 

], 

@if ($index == -1)
@elseif ($index+1 == count($order_status_history))
    [ "", "", "","","","","",""] ]}
@endif
@endforeach


