@extends('layouts.app')
@section('content')

@if (Auth::check())

<fieldset style=" width: 100%;  padding: 50px;  box-sizing: border-box;">

    <div style="position: relative;  top: 50%; left: 30%;"><img src="../pictures/nova_kontrola.png" alt="dodaj kontrolu"><a href="{{ route('control.create') }}" style=" width: 20%" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodaj kontrolu</a></div>

    <div style="position: relative;  top: 50%; left: 30%;"><img src="../pictures/sve_kontrole.png" alt="sve kontrole"><a href="{{ route('control.show') }}" style="width: 20%" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih kontrola</a></div>

    @if (Auth::user()->role == 0)
    <div style="position: relative;  top: 50%; left: 30%;"><img src="../pictures/pretraga.png" alt="pretraga">
        <a href="{{ route('patient.show') }}" style="width: 20%" class="btn btn-outline-primary" role="button" aria-pressed="true">Pretraga pacijenata</a>
        @endif
    </div>





</fieldset>



@endif
@endsection('content')