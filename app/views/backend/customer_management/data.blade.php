


{
  "data": [   
@foreach ($users as $index => $v)
[ 
"{{{ $v->id }}}",

*
@foreach( $kundengrupperesult as $x )
{{ $x->groupname }}
@endforeach
*

"{{{ $v->gender }}}",
"{{{ $v->first_name }}}",
"{{{ $v->last_name }}}",
"{{{ $v->email }}}",
"{{{ $v->telephone}}}",
"{{{$v->birthday}}}-{{{$v->birthmonth}}}-{{{$v->birthyear}}}", 
"{{{ $v->last_login}}}",
"{{{ $v->created_at->format('d-m-Y (H:i:s)') }}} ",
"{{{ $v->updated_at->format('d-m-Y (H:i:s)')}}}", 
   "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.customer_management.edit', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.customer_management.delete', array($v->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $v->first_name }}} {{{ $v->last_name }}}  <strong>löschen</strong></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.address.show', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp; <strong>Adresse von</strong> {{{ $v->first_name }}} {{{ $v->last_name }}}</a></li></ul></div>"
@if ($index == -1)
@elseif ($index+1 == count($users))
  ] ]}
  @else
  ], 
@endif
@endforeach