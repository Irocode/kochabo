{
  "data": [   
@foreach ($order_items as $index => $v)
[   

   "{{{ $v->order_items_id }}}",
   "{{{ $v->orderorder_id }}}",
   "{{{ $v->product_id }}}",  
   "{{{ $v->product_sku }}}", 
   "{{{ $v->product_name }}}",   
 
    "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.order.edit', array($v->customercustomer_id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b></a></li></ul></div>"
], 

@if ($index == -1)
@elseif ($index+1 == count($order_items))
    [ "", "", "", "", "", ""] ]}
@endif
@endforeach