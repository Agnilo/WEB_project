@extends('layouts.app')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row justify-content-center" style="padding-top: 10%; padding-bottom: 10%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header log-card-title">{{ __('Patvirtinkite slaptažodį') }}</div>

                <div class="card-body">
                    <div class="log-card-text">{{ __('Prieš tęsiant, prašome patvirtinti savo slaptažodį.') }} </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row" style="padding-top: 2%">
                            <label for="password" class="col-md-4 col-form-label text-md-right log-card-text">{{ __('Slaptažodis') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn" style="border-color: #6f5a39; color: #6f5a39">
                                    {{ __('Patvirtinti slaptažodį') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link forget" href="{{ route('password.request') }}">
                                        {{ __('Pamiršote slaptažodį?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
