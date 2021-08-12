@extends('layouts.app')
@section('content')
@if (Auth::check())
<fieldset style=" width: 100%;  padding: 50px;  box-sizing: border-box;">
    @if (Auth::user()->role == 0)
    <div style="position: relative;  top: 50%; left: 37%;"><img src="../public/pictures/nova_kontrola.png" alt="dodaj kontrolu" width="50px" height="50px">
        <a href="{{ route('control.create') }}" style="width: 15%; border: none;" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodavanje kontrole</a>
    </div>
    <br />
    <br />
    <div style="position: relative;  top: 50%; left: 37.5%;"><img src="../public/pictures/sve_kontrole.png" alt="sve kontrole" width="40px" height="40px">
        <a href="{{ route('control.show') }}" style="width: 15%; border: none;" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih kontrola</a>
    </div>
    <br />
    <br />
    <div style="position: relative;  top: 50%; left: 38%;"><img src="../public/pictures/pretraga.png" alt="pretraga" width="40px" height="40px">
        <a href="{{ route('patient.show') }}" style="width: 15%; border: none;" class="btn btn-outline-primary" role="button" aria-pressed="true">Pretraga kontrola po pacijentu</a>
    </div>
    @endif

    @if (Auth::user()->role == 1)
    <div style="position: relative;  top: 50%; left: 37.5%;"><img src="../public/pictures/nova_kontrola.png" alt="dodaj kontrolu" width="50px" height="50px">
        <a href="{{ route('control.create') }}" style="width: 15%; border: none;" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodavanje kontrole</a>
    </div>
    <br />
    <br />
    <div style="position: relative;  top: 50%; left: 38%;"><img src="../public/pictures/sve_kontrole.png" alt="sve kontrole" width="40px" height="40px">
        <a href="{{ route('control.show') }}" style="width: 15%; border: none;" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih kontrola</a>
    </div>
    <br />
    @endif

    @if (Auth::user()->role == 2)
    <br />
    <div style="position: relative;  top: 50%; left: 38%;"><img src="../public/pictures/pretraga.png" alt="svi pacijenti" width="40px" height="40px">
        <a href="{{ route('patients.showall') }}" style="width: 15%; border: none;" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih pacijenata</a>
    </div>
    <br />
    <br />
    <div style="position: relative;  top: 50%; left: 38%;"><img src="../public/pictures/nova_kontrola.png" alt="svi doktori" width="40px" height="40px">
        <a href="{{ route('doctors.showall') }}" style="width: 15%; border: none;" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih doktora</a>
    </div>
    <br />

    @endif
</fieldset>
@endif
@endsection('content')