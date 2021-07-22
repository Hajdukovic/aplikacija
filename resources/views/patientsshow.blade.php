@extends('layouts.app')
@section('content')
<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">
    <br />
    <h3>Popis svih pacijenata</h3>
    <div>
        <table class="table sortable">
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Spol</th>
                <th>Datum rođenja</th>
                <th>Adresa</th>
                <th>Mjesto stanovanja</th>
                <th>Liječnik</th>
                <th>E-mail</th>
                <th>Kontakt broj</th>
            </tr>
            @foreach ($patients as $patient)
            <tr>
                <td>{{$patient->name}}</td>
                <td>{{$patient->surname}}</td>
                <td>{{$patient->gender}}</td>
                <td>{{$patient->birth_date}}</td>
                <td>{{$patient->address}}</td>
                <td>{{$patient->location->name}}</td>
                <td>{{$patient->doctor->name}} {{$patient->doctor->surname}}</td>
                <td>{{$patient->email}}</td>
                <td>{{$patient->phone}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</fieldset>
@endsection('content')