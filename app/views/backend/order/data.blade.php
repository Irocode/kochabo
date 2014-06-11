{
  "data": [   
@foreach ($order as $index => $v)
[ 
   "{{{ $v->order_id }}}",
   "{{{ $v->delivery_date }}}",   
   "{{{ $v->order_increment_id }}}",
   "{{{ $v->deliverable}}}", 
   "{{{ $v->customercustomer_id }}}",
   "{{{ $v->created_at }}}",
   "{{{ $v->updated_at  }}}",   
   
    "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.order.edit', array($v->user_id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b></a></li></ul></div>"


], 
@if ($index == 0)
@elseif ($index+1 == count($order))
    [ "", "", "", "", "", "","", "", "", ""] ]}
@endif
@endforeach