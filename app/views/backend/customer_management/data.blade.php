

{
  "data": [   
@foreach( $kundengrupperesult as $index => $x )
[ 
"{{{ $x->id }}}",
"{{{$x->groupname }}}",
"{{{ $x->gender }}}",
"{{{ $x->first_name }}}",
"{{{ $x->last_name }}}",
"{{{ $x->email }}}",
"{{{ $x->telephone}}}",
"{{{$x->birthday}}}-{{{$x->birthmonth}}}-{{{$x->birthyear}}}", 
"{{{ $x->last_login}}}",
"{{{ $x->created_at }}} ",
"{{{ $x->updated_at}}}", 
 "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.customer_management.edit', array($x->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $x->first_name }}} {{{ $x->last_name }}} <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.customer_management.delete', array($x->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $x->first_name }}} {{{ $x->last_name }}}  <strong>löschen</strong></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.address.show', array($x->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp; <strong>Adresse von</strong> {{{ $x->first_name }}} {{{ $x->last_name }}}</a></li></ul></div>"
@if ($index == -1)
@elseif ($index+1 == count($kundengrupperesult))
  ] ]}
  @else
  ], 
@endif
@endforeach