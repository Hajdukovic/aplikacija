@extends('layouts.app')
@section('content')
@if (Auth::check())
<fieldset style=" width: 100%;  padding: 50px;  box-sizing: border-box;">
    @if (Auth::user()->role == 0)
    <div style="position: relative;  top: 50%; left: 38%;"><img src="../pictures/nova_kontrola.png" alt="dodaj kontrolu">
        <a href="{{ route('control.create') }}" style=" width: 15%" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodavanje kontrole</a>
    </div>
    <br />
    <br />
    <div style="position: relative;  top: 50%; left: 38%;"><img src="../pictures/sve_kontrole.png" alt="sve kontrole">
        <a href="{{ route('control.show') }}" style="width: 15%" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih kontrola</a>
    </div>
    <br />
    <br />
    <div style="position: relative;  top: 50%; left: 38%;"><img src="../pictures/pretraga.png" alt="pretraga">
        <a href="{{ route('patient.show') }}" style="width: 15%" class="btn btn-outline-primary" role="button" aria-pressed="true">Pretraga kontrola po pacijentu</a>
    </div>
    @endif
    @if (Auth::user()->role == 1)
    <div style="position: relative;  top: 50%; left: 38%;"><img src="../pictures/nova_kontrola.png" alt="dodaj kontrolu"><a href="{{ route('control.create') }}" style=" width: 20%" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodaj kontrolu</a></div>

    <div style="position: relative;  top: 50%; left: 38%;"><img src="../pictures/sve_kontrole.png" alt="sve kontrole"><a href="{{ route('control.show') }}" style="width: 20%" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih kontrola</a></div>
    @endif

    @if (Auth::user()->role == 2)
    <div style="position: relative;  top: 50%; left: 38%;"><img src="../pictures/nova_kontrola.png" alt="dodaj kontrolu">
        <a href="{{ route('patients.showall') }}" style=" width: 20%" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih pacijenata</a>
    </div>

    <div style="position: relative;  top: 50%; left: 38%;"><img src="../pictures/sve_kontrole.png" alt="sve kontrole">
        <a href="{{ route('doctors.showall') }}" style="width: 20%" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih doktora</a>
    </div>
    @endif
</fieldset>
@endif
@endsection('content')