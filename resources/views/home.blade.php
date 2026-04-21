@extends("layouts.master")


@section("tabella")

<table>
    <thead>
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
            <td>{{ $train->is_on_time ? 'Sì' : 'No' }}</td>
            <td>{{ $train->is_cancelled ? 'Sì' : 'No' }}</td>
          
        </tr>
           @endforeach
    </tbody>
</table>

    

@endsection