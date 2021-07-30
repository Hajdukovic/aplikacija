@extends('layouts.app')
@section('content')

<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">
    <a href="{{ route('control.create') }}" style="width: 25%" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodaj kontrolu</a>
    <br />
    <br />
    <h3>Buduće kontrole</h3>
    <div>
        <table class="table">
            <tr>
                <th>@sortablelink('control_date', 'Datum')</th>
                <th>@sortablelink('name', 'Razlog dolaska')</th>
                <th>@sortablelink('description', 'Nalaz i mišljenje')</th>
                @if (Auth::user()->role == 0)
                <th>@sortablelink('patient_id', 'Pacijent')</th>
                @endif
                <th>@sortablelink('status', 'Status i zaključak liječnika')</th>
                <th>Izmijeni</th>
            </tr>
            @foreach ($newcontrols as $newcontrol)
            <tr>
                <td>{{Carbon\Carbon::parse($newcontrol->control_date)->format('d-m-Y')}}</td>
                <td>{{$newcontrol->name}}</td>
                <td>{{$newcontrol->description}}</td>
                @if (Auth::user()->role == 0)
                <td>{{$newcontrol->patient->name}} {{$newcontrol->patient->surname}}</td>
                @if (is_null($newcontrol->status))
                <td style="color:red;">Liječnik nije unijeo status</td>
                @else
                <td>{{$newcontrol->status}}</td>
                @endif
                <td>
                    <form action="" method="GET">
                        <a href="{{route('control.edit', [$newcontrol->id, $newcontrol->patient_id])}}" class="btn btn-primary" role="button">Izmijeni</a>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
    <br />
    <h3>Provedene kontrole</h3>
    <div>
        <table class="table sortable">
            <tr>
                <th>@sortablelink('control_date', 'Datum')</th>
                <th>@sortablelink('name', 'Razlog dolaska')</th>
                <th>@sortablelink('description', 'Nalaz i mišljenje')</th>
                @if (Auth::user()->role == 0)
                <th>@sortablelink('patient_id', 'Pacijent')</th>
                @endif
                <th>@sortablelink('status', 'Status i zaključak liječnika')</th>
                <th>Izmijeni</th>
            </tr>
            @foreach ($controls as $control)
            <tr>
                <td>{{Carbon\Carbon::parse($control->control_date)->format('d-m-Y')}}</td>
                <td>{{$control->name}}</td>
                <td>{{$control->description}}</td>
                @if (Auth::user()->role == 0)
                <td>{{$control->patient->name}} {{$control->patient->surname}}</td>
                @if (is_null($control->status))
                <td style="color:red;">Liječnik nije unijeo status</td>
                @else
                <td>{{$control->status}}</td>
                @endif
                <td>
                    <form action="" method="GET">
                        <a href="{{route('control.edit', [$control->id, $control->patient_id])}}" class="btn btn-primary" role="button">Izmijeni</a>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</fieldset>

@endsection('content')