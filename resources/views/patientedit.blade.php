@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodavanje novog pacijenta</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('patient.update', $patient->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ime:</label>
                            <div class="col-md-6">
                                <input id="ime" type="text" class="form-control" name="name" value="{{$patient['name']}}" required autofocus>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">Prezime:</label>
                            <div class="col-md-6">
                                <input id="prezime" type="text" class="form-control" name="surname" value="{{$patient['surname']}}" required autofocus>
                            </div>
                        </div>
                        <br />

                        <div class="form-group row">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">Datum rođenja:</label>
                            <div class="col-md-6">
                                <input type="date" id="birth_date" name="birth_date" value="{{$patient['birth_date']}}" required pattern="\d{4}-\d{2}-\d{2}">
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Adresa:</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{$patient['address']}}" required autofocus>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="location_id" class="col-md-4 col-form-label text-md-right">Mjesto:</label>
                            <div class="col-md-6">
                                <select id="location_id" type="number" name="location_id" value="{{$patient['location']}}" class="form-control">
                                    @foreach($locations as $location)
                                    @if ($location->id == $patient['location_id'])
                                    <option value="{{$location->id}}" selected>{{$location->name}}</option>
                                    @else
                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="doctor_id" class="col-md-4 col-form-label text-md-right">Obiteljski liječnik:</label>
                            <div class="col-md-6">
                                <select id="doctor_id" type="number" name="doctor_id" value="{{$patient['doctor']}}" class="form-control">
                                    @foreach($doctors as $doctor)
                                    @if ($doctor->id == $patient['doctor_id'])
                                    <option value="{{$doctor->id}}" selected>{{$doctor->name}} {{$doctor->surname}}</option>
                                    @else
                                    <option value="{{$doctor->id}}">{{$doctor->name}} {{$doctor->surname}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{$patient['email']}}" required>
                                </div>
                            </div>
                            <br /><br />
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Kontakt broj:</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{$patient['phone']}}" required>
                                </div>
                            </div>
                            <br /><br /><br />
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" name="save" class="btn btn-primary" onclick="obavijest()">
                                        Izmijeni pacijenta
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
  alert("Izmijenili ste podatke pacijenta!");
}
</script>
@endsection