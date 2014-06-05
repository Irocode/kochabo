{
  "data": [   
@foreach ($address as $index => $v)
[ 
   "{{{ $v->id }}}",
   "{{{ $v->first_name }}}",
   "{{{ $v->last_name}}}",
   "{{{ $v->street }}}",
   "{{{ $v->zip }}}",
   "{{{ $v->city }}}",
   "{{{ $v->telephone }}}",
   "{{{ $v->email }}}",   
   "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.address.edit', array($v->user_id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b></a></li></ul></div>"
], 
@if ($index == 0)
@elseif ($index+1 == count($address))
    [ "", "", "", "", "", "", "", "", ""] ]}
@endif
@endforeach