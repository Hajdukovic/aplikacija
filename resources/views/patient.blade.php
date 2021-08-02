@extends('layouts.app')
@section('content')

@if (Auth::check())

<fieldset style="width: 100%;  padding: 30px;  box-sizing: border-box;">

    <div>Molimo odaberite pacijenta i obavezno dodati vremenski period za koji želite ispis kontrola (OD kada - DO kada).</div>
    <br>
    <form method="POST" action="{{route('control.showall')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row" style="width: 50%; position: relative;  top: 50%; left: 30%;">
            <label for="patient_id" class="col-md-4 col-form-label text-md-right">Odabir pacijenta:</label>
            <div class="col-md-6" style="width: 25%">
                <select name="patient_id" class="form-control custom-select">
                    @foreach($patients as $patient)
                    <option value="{{ $patient->id }}"> {{$patient->name}} {{$patient->surname}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br />

        <div class="form-group row" style="width: 55%; position: relative;  top: 50%; left: 30%;">
            <label for="" class="col-md-4 col-form-label text-md-right">Datum kontrole OD:</label>
            <div class="col-md-6">
                <input type="date" id="control_date1" name="control_date1">
            </div>
        </div>
        <br />
        <div class="form-group row" style="width: 55%; position: relative;  top: 50%; left: 30%;">
            <label for="" class="col-md-4 col-form-label text-md-right">Datum kontrole DO:</label>
            <div class="col-md-6">
                <input type="date" id="control_date2" name="control_date2">
            </div>
        </div>
        <br />
        <div class="form-group row mb-0" style="width: 55%; position: relative;  top: 50%; left: 30%;">
            <div class="col-md-6 offset-md-4">
                <button type="submit" name="save" class="btn btn-primary">
                    Pretraga kontrola
                </button>
            </div>
        </div>
    </form>
</fieldset>



@endif
@endsection('content')