@extends("layouts.master")


@section("tabella")
<div class="container mt-5">
    <h2 class="text-white mb-4">🚆 Partenze</h2>
    <table class="table table-dark table-striped table-hover">
        <thead style="background-color: #003D2D;">
        <tr>
            <th>Azienda</th>
            <th>Codice Treno</th>
            <th>Stazione di arrivo</th>
            <th>Stazione di partenza</th>
            <th>Orario di partenza</th>
            <th>Orario di arrivo</th>
            <th>Totale Carrozze</th>
            <th>Sei in orario o meno</th>
            <th>Se cancellato o meno</th>
        </tr>
    </thead>
    <tbody>
         @foreach($trains as $train)
        <tr>
           
            <td>{{$train->company}}</td>
            <td>{{$train->train_code}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>{{$train->departure_time}}</td>
            <td>{{$train->arrival_time}}</td>
            <td>{{$train->total_carriages}}</td>
             <td>
                    @if($train->is_on_time)
                        <span class="badge bg-success">In orario</span>
                    @else
                        <span class="badge bg-warning text-dark">Ritardo</span>
                    @endif
                </td>
                <td>
                    @if($train->is_cancelled)
                        <span class="badge bg-danger">Cancellato</span>
                    @else
                        <span class="badge bg-success">Regolare</span>
                    @endif
                </td>
          
        </tr>
           @endforeach
    </tbody>
</table>

</div>

@endsection