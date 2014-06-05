{
  "data": [   
@foreach ($customer as $index => $v)
[ 
   "{{{ $v->id }}}",
   "{{{ $v->first_name }}}",
   "{{{ $v->last_name}}}",
   "{{{ $v->kundeseit }}}",
   "{{{ $v->abobox }}}",
   "{{{ $v->abolieferung }}}",
   "{{{ $v->abotyp }}}",
   "{{{ $v->gruppen }}}",
   "{{{ $v->abostatus }}}",
   "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.customer.edit', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.customer.delete', array($v->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}}  <strong>löschen</strong></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.address.edit', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp; <strong>Adresse von</strong> {{{ $v->first_name }}} {{{ $v->last_name }}}</a></li></ul></div>"
], 
@if ($index == 0)
@elseif ($index+1 == count($customer))
    [ "", "", "", "", "", "", "", "", "", "" ] ]}
@endif
@endforeach