{
  "data": [   
@foreach( $recipe as $index => $x )
[ 
"{{{ $x->id }}}",
@if( ! empty($x->imagesmall))
"<img src=\"{{ $x->imagesmall }}\" width=\"50\" height=\"50\"> ",
@else           
"<img src=\"{{URL::to('assets/img/backend/images/empty.png')}}\" width=\"50\" height=\"50\"> ",
@endif
"{{{ $x->title }}}",
"{{{ $x->created_at }}} ",
"{{{ $x->updated_at}}}", 
 "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.recipe.edit', array($x->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $x->title }}}  <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.recipe.delete', array($x->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $x->title }}}   <strong>löschen</strong></a></li></ul></div>"
@if ($index == -1)
@elseif ($index+1 == count($recipe))
  ] ]}
  @else
  ], 
@endif
@endforeach