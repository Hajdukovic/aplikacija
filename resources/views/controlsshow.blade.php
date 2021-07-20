@extends('layouts.app')
@section('content')
<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">


    <br />
    @foreach ($patients as $patient)
    <h3>Popis kontrola za pacijenta {{$patient->name}} {{$patient->surname}}</h3>
    @endforeach
    <div>
        <table class="table sortable">
            <tr>
                <th>Datum</th>
                <th>Naziv</th>
                <th>Opis</th>
            </tr>
            @if(is_null($controls))
            <tr>
                <td>Ne postoji zabilježena kontrola</td>
            </tr>
            @else
            @foreach ($controls as $control)
            <tr>
                <td>{{$control->created_at->format('d/m/Y') }}</td>
                <td>{{$control->name}}</td>
                <td>{{$control->description}}</td>
            </tr>
            @endforeach
            @endif

        </table>
    </div>
</fieldset>
@endsection('content')