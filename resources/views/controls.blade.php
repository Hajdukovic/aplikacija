@extends('layouts.app')
@section('content')
<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">
    <a href="{{ route('control.create') }}" style="width: 25%" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodaj kontrolu</a>
    <br />

    <br />
    <h3>Buduće kontrole</h3>
    <div>
        <table class="table sortable">
            <tr>
                <th>Datum</th>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Pacijent</th>
            </tr>
            @foreach ($newcontrols as $newcontrol)
            <tr>
                <td>{{Carbon\Carbon::parse($newcontrol->control_date)->format('d-m-Y')}}</td>
                <td>{{$newcontrol->name}}</td>
                <td>{{$newcontrol->description}}</td>
                <td>{{$newcontrol->patient->name}} {{$newcontrol->patient->surname}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <br />
    <h3>Provedene kontrole</h3>
    <div>
        <table class="table sortable">
            <tr>
                <th>Datum</th>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Pacijent</th>
            </tr>
            @foreach ($controls as $control)
            <tr>
                <td>{{Carbon\Carbon::parse($control->control_date)->format('d-m-Y')}}</td>
                <td>{{$control->name}}</td>
                <td>{{$control->description}}</td>
                <td>{{$control->patient->name}} {{$control->patient->surname}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</fieldset>
@endsection('content')