 [ 
@foreach( $ingredients as $index => $x )

"{{{ $x->name }}}"
 
@if ($index == -1)
@elseif ($index+1 == count($ingredients))
 
  @else
  ,
@endif

@endforeach
]