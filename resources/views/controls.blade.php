
@extends('layouts.app')
@section('content')
<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">
<a href="{{ route('control.create') }}" style="width: 25%" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodaj kontrolu</a>
<br/>

<br/>
    <h3>Popis kontrola</h3>
    <div>
        <table class="table sortable">
            <tr>
                <th>Datum</th>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Pacijent</th>
                <th>Liječnik</th>
            </tr>
            @if(is_null($controls))
            <tr><td>Ne postoji zabilježena kontrola</td></tr>
            @else
            @foreach ($controls as $control)
            <tr>
                <td >{{$control->created_at->format('d/m/Y') }}</td>
                <td>{{$control->name}}</td>
                <td>{{$control->description}}</td>
                <td>{{$control->patient->name}} {{$control->patient->surname}}</td>
                <td>{{$control->doctor->name}} {{$control->doctor->surname}}</td>
            </tr>
            @endforeach
            @endif

        </table>
    </div>
</fieldset>
@endsection('content')

