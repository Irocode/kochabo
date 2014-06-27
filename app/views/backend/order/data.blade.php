{
  "data": [   
@foreach ($order as $index => $v)
[   

   "{{{ $v->order_id }}}",
   "{{{ $v->customercustomer_id }}}",
   "{{{ $v->order_increment_id }}}",  
    @if($v->deliverable=="1") 
    "Ja",
    @else           
    "Nein ",
     @endif

"{{{ date("d-m-Y",strtotime($v->delivery_date)) }}}",  
   
   "{{{ $v->created_at->format('d-m-Y (H:i:s)') }}} ",
"{{{ $v->updated_at->format('d-m-Y (H:i:s)')}}}",    
    "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.order.edit', array($v->order_id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b></a></li></ul></div>"
], 

@if ($index == -1)
@elseif ($index+1 == count($order))
    [ "", "", "", "", "", "","", ""] ]}
@endif
@endforeach