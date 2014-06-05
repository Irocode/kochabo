{
  "data": [   
@foreach ($products as $index => $v)
[ 
"{{{ $v->id }}}",
@if( ! empty($v->picurl))
"<img src=\"{{{URL::to('filemanager/userfiles/products/thumb_')}}}{{{$v->picurl}}}\" width=\"50\" height=\"50\"> ",
@else           
"<img src=\"{{URL::to('assets/img/backend/images/empty.png')}}\" width=\"50\" height=\"50\"> ",
@endif
"{{{ $v->product_name }}}",
"{{{ $v->price}}} {{{ $v->currency}}}",
"{{{ $v->type}}}",
"{{{ $v->recipetype}}}",
"{{{ $v->created_at}}}",
"{{{ $v->updated_at}}}", 
@if( ! empty($v->picangelegt))
"<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.products.edit', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;Artikel {{{ $v->product_name }}} <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.products.delete', array($v->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;Artikel {{{ $v->product_name }}}  <strong> löschen</strong></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.photo_gallery_products.edit', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp; <strong>Artikel Bild von {{{ $v->product_name }}} <b>ansehen/bearbeiten</b></a></li></ul></div>"@else           
"<div class=\"btn-group\"><a class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Aktion<span class=\"caret\"></span></a><ul class=\"dropdown-menu\"><li><a href=\"{{ URL::route('admin.products.edit', array($v->id)) }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp;Artikel {{{ $v->product_name }}} <b>ansehen/bearbeiten</b></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::route('admin.products.delete', array($v->id)) }}\"><span class=\"glyphicon glyphicon-remove-circle\"></span>&nbsp;Artikel {{{ $v->product_name }}}  <strong> löschen</strong></a></li><li class=\"divider\"></li><li><a href=\"{{ URL::to("admin/photo_gallery_products/$v->id/edit?anlegen=ja") }}\"><span class=\"glyphicon glyphicon-edit\"></span>&nbsp; <strong>Artikel Bild von {{{ $v->product_name }}} <b>anlegen</b></a></li></ul></div>"

@endif

], 
@if ($index == 0)
@elseif ($index+1 == count($products))
    [ "", "", "", "", "", "", "", "","" ] ]}
@endif
@endforeach