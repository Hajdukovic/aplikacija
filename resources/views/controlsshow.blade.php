@extends('layouts.app')
@section('content')
<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">
    <br />
    @foreach ($patients as $patient)
    <h3>Popis kontrola za pacijenta {{$patient->name}} {{$patient->surname}}</h3>
    @endforeach
    <div>
        <table class="table">
            <tr>
                <th>Datum</th>
                <th>Razlog dolaska</th>
                <th>Nalaz i mišljenje</th>
                <th>Status i zaključak liječnika</th>
                <th>Izmijeni</th>
            </tr>
            @if(is_null($controls))
            <tr>
                <td>Ne postoji zabilježena kontrola</td>
            </tr>
            @else
            @foreach ($controls as $control)
            <tr>
                <td>{{Carbon\Carbon::parse($control->control_date)->format('d-m-Y')}}</td>
                <td>{{$control->name}}</td>
                <td>{{$control->description}}</td>
                @if (is_null($control->status))
                <td style="color:red;">Liječnik nije unijeo status</td>
                @else
                <td>{{$newcontrol->status}}</td>
                @endif
                <td>
                    <form action="" method="GET">
                        <a href="{{route('control.edit', [$control->id, $control->patient_id])}}" class="btn btn-primary" role="button">Izmijeni</a>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </table>
    </div>
</fieldset>
@endsection('content')