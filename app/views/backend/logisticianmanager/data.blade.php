{
  "data": [   
@foreach ($logisticianmanager as $index => $v)
[ 
   "{{{ $v->id }}}",
   "{{{ $v->name }}}",
   "{{{ $v->street}}} {{{ $v->zip}}} {{{ $v->city}}}",
   "{{{ $v->contactPerson }}}",
   "{{{ $v->phone }}}",
   "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.logisticianmanager.group_sefa_free', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $v->name }}} {{{ $v->last_name }}} <b> ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.logisticianmanager.delete', array($v->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $v->name }}} {{{ $v->last_name }}}  <strong>löschen</strong></a></li></ul></div>"
], 
@if ($index == 0)
@elseif ($index+1 == count($logisticianmanager))
   [ "", "", "", "", "", "" ] ]}
@endif
@endforeach