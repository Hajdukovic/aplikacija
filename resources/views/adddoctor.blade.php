@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodavanje novog liječnika</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ime:</label>
                            <div class="col-md-6">
                                <input id="ime" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">Prezime:</label>
                            <div class="col-md-6">
                                <input id="prezime" type="text" class="form-control" name="surname" required autofocus>
                            </div>
                        </div>
                        <br />

                        <div class="form-group row">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-right">Datum rođenja:</label>
                            <div class="col-md-6">
                            <input type="date" id="birth_date" name="birth_date" required pattern="\d{4}-\d{2}-\d{2}">
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Adresa:</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required autofocus>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="location_id" class="col-md-4 col-form-label text-md-right">Mjesto:</label>
                            <div class="col-md-6">
                                <select id="location_id" type="number" name="location_id" class="form-control">
                                    @foreach($locations as $location)
                                    <option type="hidden" value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Spol:</label>
                            <div class="col-md-6">
                            <input type="radio" id="musko" name="gender" value="musko">
                            <label for="gender">Muško</label>
                            <input type="radio" id="zensko" name="gender" value="zensko">
                            <label for="gender">Žensko</label>
                        </div>
                        <br/>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" required>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Kontakt broj:</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <br/><br/><br/>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="save" class="btn btn-primary">
                                    Dodaj liječnika
                                </button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
            <br/>
        </div>
       
       
    </div>
</div>
@endsection