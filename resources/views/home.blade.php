@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Prijava') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Uspiješno ste se prijavili!') }}
                    <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Nastavak na početnu stranicu</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection