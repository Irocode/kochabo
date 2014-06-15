[
    
@foreach ($deliveryzipcode as $index => $v)
{ 
"name":"Gebiet",
"avatar":"",
"location":"{{{ $v->zip }}}"
}, 
@if ($index == 0)
@elseif ($index+1 == count($deliveryzipcode))
    {  "name":"", "avatar": "", "location":""} ]
@endif
@endforeach