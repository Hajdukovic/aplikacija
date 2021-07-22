@extends('layouts.app')
@section('content')
<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">
    <br />
    <h3>Popis svih doktora</h3>
    <div>
        <table class="table sortable">
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Spol</th>
                <th>Datum rođenja</th>
                <th>Adresa</th>
                <th>Mjesto stanovanja</th>
                <th>E-mail</th>
                <th>Kontakt broj</th>
            </tr>
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->surname}}</td>
                <td>{{$doctor->gender}}</td>
                <td>{{$doctor->birth_date}}</td>
                <td>{{$doctor->address}}</td>
                <td>{{$doctor->location->name}}</td>
                <td>{{$doctor->email}}</td>
                <td>{{$doctor->phone}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</fieldset>
@endsection('content')