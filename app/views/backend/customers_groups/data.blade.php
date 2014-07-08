{
  "data": [   
@foreach ($customers_groups as $index => $v)
[ 
"{{{ $v->customers_groups_id }}}",
"{{{ $v->groupname }}}",

@if($v->default=="1") 
    "<span class=\"badge badge-green\" style=\"background-color:#85b81d\">Ja</span>  ",
    @else           
    "<span class=\"badge badge-blue\" style=\"background-color:#517fdc\">Nein</span>  ",
     @endif
"{{{ $v->created_at->format('d-m-Y (H:i:s)') }}} ",
"{{{ $v->updated_at->format('d-m-Y (H:i:s)')}}}", 
   "<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.customers_groups.edit', array($v->customers_groups_id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;{{{ $v->groupname }}}  <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.customers_groups.delete', array($v->customers_groups_id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;{{{ $v->groupname }}}   <strong>löschen</strong></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.customer_management.index_customers_groups', array($v->customers_groups_id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp; <strong>Kundengruppe von</strong> {{{ $v->groupname }}} <b>ansehen/bearbeiten</b></a></li></ul></div>"
@if ($index == -1)
@elseif ($index+1 == count($customers_groups))
  ] ]}
  @else
  ], 
@endif
@endforeach