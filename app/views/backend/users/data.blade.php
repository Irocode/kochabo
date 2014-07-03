{
  "data": [   
@foreach ($users as $index => $user)
[ 
"{{{ $user->id }}}",
"{{{ $user->gender }}}",
"{{{ $user->first_name }}}",
"{{{ $user->last_name }}}",
"{{{ $user->email }}}",
"{{{ $user->telephone}}}",
"{{{$user->birthday}}}-{{{$user->birthmonth}}}-{{{$user->birthyear}}}", 
"{{{ $user->last_login}}}",
"{{{ $user->created_at->format('d-m-Y (H:i:s)') }}} ",
"{{{ $user->updated_at->format('d-m-Y (H:i:s)')}}}", 
  "@if ($user->status != 'Suspended')<button class=\"btn-u btn-u-yellow\" type=\"button\" onClick=\"location.href='{{ route('adminsuspendUserForm', array($user->id)) }}'\">Suspendieren</button>@else<button class=\"btn-u btn-u-yellow\" type=\"button\" onClick=\"location.href='{{ action('UseradminController@unsuspend', array($user->id)) }}'\">Entsperren</button>@endif",
"@if ($user->status != 'Banned')<button class=\"btn-u btn-u-orange\" type=\"button\" onClick=\"location.href='{{ action('UseradminController@ban', array($user->id)) }}'\">Ban</button>@else<button class=\"btn-u btn-u-orange\" type=\"button\" onClick=\"location.href='{{ action('UseradminController@unban', array($user->id)) }}'\">Un-Ban</button>@endif",

   "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.customer_management.edit', array($user->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $user->first_name }}} {{{ $user->last_name }}} <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.customer_management.delete', array($user->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $user->first_name }}} {{{ $user->last_name }}}  <strong>löschen</strong></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.address.show', array($user->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp; <strong>Adresse von</strong> {{{ $user->first_name }}} {{{ $user->last_name }}}</a></li></ul></div>"
@if ($index == -1)
@elseif ($index+1 == count($users))
  ] ]}
  @else
  ], 
@endif
@endforeach