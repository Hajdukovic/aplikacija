@extends('layouts.app')
@section('content')

@if (Auth::check())

<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">
    <a href="{{ route('control.create') }}" style="width: 25%" class="btn btn-outline-primary" role="button" aria-pressed="true">Dodaj kontrolu</a>

    <a href="{{ route('control.show') }}" style="width: 25%" class="btn btn-outline-primary" role="button" aria-pressed="true">Prikaz svih kontrola</a>

</fieldset>
@endif
@endsection('content')