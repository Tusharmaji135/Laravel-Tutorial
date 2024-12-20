@foreach ($user as $id => $u)
<h3>{{$id}} {{$u['name']}} | {{$u['phone']}} | {{$u['city']}}
  | <a href="{{route('view.user',$id)}}">Show</a>
  {{-- | <a href="/user/{{$id}}">Show</a> --}}
</h3>
@endforeach


<h3>City: <i>{{!empty($city)? $city : "NO CITY"}}</i></h3>

{{-- to use js script --}}
{{-- {!!$js!!} --}}