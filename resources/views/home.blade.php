@extends("layouts.master")


@section("tabella")
<ul>
    @foreach($treni as $treno)
    <li>{{$treno}}</li>
    @endforeach
</ul>
@endsection