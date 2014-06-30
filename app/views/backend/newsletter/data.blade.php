{
  "data": [   
@foreach ($newsletter as $index => $v)
[ 
"{{{ $v->id }}}",
"{{{ $v->user_id }}}",
"{{{ $v->first_name }}}",
"{{{ $v->last_name }}}",
"{{{ $v->email }}}",
"{{{ $v->aktiviert}}}",
"{{{ $v->created_at->format('d-m-Y (H:i:s)') }}} ",
"{{{ $v->updated_at->format('d-m-Y (H:i:s)')}}}", 
"<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.newsletter.edit', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $v->email }}} <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.newsletter.delete', array($v->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $v->email }}}  <strong>löschen</strong></a></li>"


], 
@if ($index == 0)
@elseif ($index+1 == count($newsletter))
    [ "", "", "", "", "","", "", "", "" ] ]}
@endif
@endforeach