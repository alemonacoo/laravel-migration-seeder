@foreach ($trains as $train)
    <h3><span>{{ $train['stazione_partenza']}}</span> - <span>{{ $train['stazione_arrivo']}}</span></h3>
    <p>{{$train['azienda']}}</p>
    <p><span>{{ $train['orario_partenza']}}</span> - <span>{{ $train['orario_arrivo']}}</span></p>
    <p>Codice treno: {{ $train['codice_treno']}}</p>
    <p>Numero Carrozze: {{ $train['carrozze']}}</p>
    <hr>
    <br>
@endforeach