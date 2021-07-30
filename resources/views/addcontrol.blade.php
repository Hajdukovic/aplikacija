@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodavanje nove kontrole</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('control.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Razlog dolaska:</label>
                            <div class="col-md-6">
                                <input id="ime" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="control_date" class="col-md-4 col-form-label text-md-right">Datum kontrole:</label>
                            <div class="col-md-6">
                                <input type="date" id="control_date" name="control_date" required pattern="\d{4}-\d{2}-\d{2}">
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Nalaz i mišljenje:</label>
                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" required autofocus rows="10"></textarea>
                            </div>
                        </div>
                        <br />
                        @if (Auth::user()->role == 0)
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status i zaključak liječnika:</label>
                            <div class="col-md-6">
                                <textarea id="status" type="text" class="form-control" name="status" required autofocus rows="10"></textarea>
                            </div>
                        </div>
                        <br />
                        @endif
                        <div class="form-group row">
                            <label for="patient_id" class="col-md-4 col-form-label text-md-right">Pacijent:</label>
                            <div class="col-md-6">
                                <select id="patient_id" type="number" name="patient_id" class="form-control">
                                    @foreach($patients as $patient)
                                    <option type="hidden" value="{{$patient->id}}">{{$patient->name}} {{$patient->surname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="doctor_id" class="col-md-4 col-form-label text-md-right">Liječnik:</label>
                            <div class="col-md-6">
                                <select id="doctor_id" type="number" name="doctor_id" class="form-control">
                                    @foreach($doctors as $doctor)
                                    <option type="hidden" value="{{$doctor->id}}">{{$doctor->name}} {{$doctor->surname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br />

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="save" class="btn btn-primary" onclick="obavijest()">
                                    Dodaj kontrolu
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br />
        </div>
    </div>
</div>
<script>
function obavijest() {
  alert("Dodali ste novu kontrolu!");
}
</script>
@endsection