@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Profil korisnika</h3>
	
	<table class="table">
	   <tr><th>Ime: </th><td>{{ Auth::user()->name }} </td></tr>
	   <tr><th>E-mail: </th><td>{{ Auth::user()->email }} </td></tr>
	   <tr><th>Spol: </th><td>{{ Auth::user()->gender==1?'Žensko':'Muško' }} </td></tr>
	   <tr><th>Uloga: </th><td>{{ Auth::user()->role==1?'Pacijent':'Liječnik' }} </td></tr>
	   <tr><th>Datum registracije: </th><td>{{strftime('%d.%m.%G. %H:%M',strtotime(Auth::user()->created_at)) }} </td></tr>
	</table>

@endsection