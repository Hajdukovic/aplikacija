@extends('layouts.app')
@section('content')

<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">
    <a href="{{ route('control.create') }}" style="width: 100%" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodaj kontrolu</a>
    <br />
    <br />
    <h3>Buduće kontrole</h3>
    <div>
        <table class="table">
            <tr>
                <th style="width:150px">@sortablelink('control_date', 'Datum')</th>
                <th style="width:200px">@sortablelink('name', 'Razlog dolaska')</th>
                <th>@sortablelink('description', 'Nalaz i mišljenje')</th>
                @if (Auth::user()->role == 0)
                <th>@sortablelink('patient_id', 'Pacijent')</th>
                @endif
                <th style="width:300px">@sortablelink('status', 'Status i zaključak liječnika')</th>
                @if (Auth::user()->role == 0)
                <th style="width:100px">Izmijeni</th>
                @endif
            </tr>
            @foreach ($newcontrols as $newcontrol)
            <tr>
                <td>{{Carbon\Carbon::parse($newcontrol->control_date)->format('d-m-Y')}}</td>
                <td>{{$newcontrol->name}}</td>
                <td>{{$newcontrol->description}}</td>
                @if (Auth::user()->role == 0)
                <td style="width:200px">{{$newcontrol->patient->name}} {{$newcontrol->patient->surname}}</td>
                @endif
                @if (is_null($newcontrol->status))
                <td style="color:red;">Liječnik nije unijeo status</td>
                @else
                <td>{{$newcontrol->status}}</td>
                @endif
                @if (Auth::user()->role == 0)
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
                <th style="width:150px">@sortablelink('control_date', 'Datum')</th>
                <th style="width:200px">@sortablelink('name', 'Razlog dolaska')</th>
                <th>@sortablelink('description', 'Nalaz i mišljenje')</th>
                @if (Auth::user()->role == 0)
                <th style="width:200px">@sortablelink('patient_id', 'Pacijent')</th>
                @endif
                <th style="width:300px">@sortablelink('status', 'Status i zaključak liječnika')</th>
                @if (Auth::user()->role == 0)
                <th style="width:100px">Izmijeni</th>
                @endif
            </tr>
            @foreach ($controls as $control)
            <tr>
                <td>{{Carbon\Carbon::parse($control->control_date)->format('d-m-Y')}}</td>
                <td>{{$control->name}}</td>
                <td>{{$control->description}}</td>
                @if (Auth::user()->role == 0)
                <td>{{$control->patient->name}} {{$control->patient->surname}}</td>
                @endif
                @if (is_null($control->status))
                <td style="color:red;">Liječnik nije unijeo status</td>
                @else
                <td>{{$control->status}}</td>
                @endif
                @if (Auth::user()->role == 0)
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