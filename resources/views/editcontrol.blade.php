@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Izmijena kontrole</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('control.update', [$control->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="patient_id" class="col-md-4 col-form-label text-md-right">Pacijent:</label>
                            <div class="col-md-6">
                                <option value="{{$patient->id}}" selected>{{$patient->name}} {{$patient->surname}}</option>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Razlog dolaska:</label>
                            <div class="col-md-6">
                                <input id="ime" type="text" class="form-control" name="name" value="{{$control['name']}}" required autofocus>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="control_date" class="col-md-4 col-form-label text-md-right">Datum kontrole:</label>
                            <div class="col-md-6">
                                <input type="date" id="control_date" name="control_date" value="{{$control['control_date']}}" required pattern="\d{4}-\d{2}-\d{2}">
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Nalaz i mišljenje:</label>
                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control" name="description" value="{{$control['description']}}" required autofocus rows="10">{{$control['description']}}</textarea>
                            </div>
                        </div>
                        <br />
                        @if (Auth::user()->role == 0)
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status i zaključak liječnika:</label>
                            <div class="col-md-6">
                                <textarea id="status" type="text" class="form-control" name="status" value="{{$control['status']}}" autofocus rows="10">{{$control['status']}}</textarea>
                            </div>
                        </div>
                        <br />
                        @endif
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="save" class="btn btn-primary" onclick="obavijest()">
                                    Izmijeni kontrolu
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
        alert("Izmijenili ste postojeću kontrolu!");
    }
</script>
@endsection