@extends("layouts.master")


@section("tabella")
<ul>
    @foreach($trains as $train)
    <li>{{$train}}</li>
    @endforeach
</ul>
@endsection