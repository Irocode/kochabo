{
  "data": [   
@foreach ($products as $index => $v)
[ 
"{{{ $v->id }}}",
@if( ! empty($v->imagex))
"<img src=\"{{ $v->imagex }}\" width=\"50\" height=\"50\"> ",
@else           
"<img src=\"{{URL::to('assets/backend/img/backend/images/empty.png')}}\" width=\"50\" height=\"50\"> ",
@endif
"{{{ $v->product_name }}}",
"{{{ $v->price}}} {{{ $v->currency}}}",
"{{{ $v->typename}}}",
"{{{ $v->recipetype}}}",
"{{{ $v->created_at->format('d-m-Y (H:i:s)') }}} ",
"{{{ $v->updated_at->format('d-m-Y (H:i:s)')}}}", 
    
"<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.products.edit', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;Artikel {{{ $v->product_name }}} <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.products.delete', array($v->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $v->product_name }}}  <strong>löschen</strong></a></li></ul></div>"

], 
@if ($index == 0)
@elseif ($index+1 == count($products))
    [ "", "", "", "", "", "", "", "","" ] ]}
@endif
@endforeach