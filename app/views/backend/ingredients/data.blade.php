{
  "data": [   
@foreach( $ingredients as $index => $x )
[ 
"{{{ $x->id }}}",
@if( ! empty($x->imagex))
"<img src=\"{{ $x->imagex }}\" width=\"50\" height=\"50\"> ",
@else           
"<img src=\"{{URL::to('assets/backend/img/backend/images/empty.png')}}\" width=\"50\" height=\"50\"> ",
@endif

"{{{ $x->name }}}",
"{{{ $x->kcal100g }}}",
"{{{ $x->defaultunit }}}",
"{{{ $x->created_at }}} ",
"{{{ $x->updated_at}}}", 
 "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.ingredients.edit', array($x->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $x->titel }}}  <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.ingredients.delete', array($x->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $x->titel }}} {{{ $x->last_name }}}  <strong>löschen</strong></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.ingredients.show', array($x->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp; <strong>Rezept von</strong> {{{ $x->titel }}} </a></li></ul></div>"
@if ($index == -1)
@elseif ($index+1 == count($ingredients))
  ] ]}
  @else
  ], 
@endif
@endforeach


