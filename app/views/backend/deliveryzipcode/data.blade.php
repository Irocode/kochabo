{
  "data": [   
@foreach ($deliveryzipcode as $index => $v)
[ 
   "{{{ $v->id }}}",
   "{{{ $v->zip }}}",
   "{{{ $v->created_at}}}",
   "{{{ $v->updated_at }}}",
   "<a class=\"btn-u btn-u-red\" href=\"{{ URL::route('admin.deliveryzipcode.delete', array($v->id)) }}\">Löschen</a>"
], 
@if ($index == 0)
@elseif ($index+1 == count($deliveryzipcode))
    [ "", "", "", "", "", "", "", "", "", "" ] ]}
@endif
@endforeach