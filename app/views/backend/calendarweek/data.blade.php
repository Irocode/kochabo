{
  "data": [   
@foreach ($address as $index => $v)
[ 
   "{{{ $v->id }}}",
   "{{{ $v->customercustomer_id }}}",   
   "{{{ $v->first_name }}}",
   "{{{ $v->last_name}}}",
   "{{{ $v->street }}}  {{{ $v->housenumber }}} @if( ! empty($v->stairway_number))/@endif{{{ $v->stairway_number }}} @if( ! empty($v->floor))/@endif{{{ $v->floor }}}@if( ! empty($v->appartement_number))/@endif {{{ $v->appartement_number }}}",
   "{{{ $v->zip }}}",
   "{{{ $v->city }}}",
   "{{{ $v->country  }}}",
     
    @if($v->art=="Rechnungsadresse") 
    "<span class=\"badge badge-green\" style=\"background-color:#85b81d\">Rechnungsadresse</span>  ",
    @else           
    "<span class=\"badge badge-blue\" style=\"background-color:#517fdc\">Lieferadresse</span>  ",
     @endif
    "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.address.edit', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;Adresse von {{{ $v->first_name }}} {{{ $v->last_name }}} <b>ansehen/bearbeiten</b></a></li></ul></div>"
@if ($index == -1)
@elseif ($index+1 == count($address))
  ] ]}
  @else
  ], 
@endif
@endforeach