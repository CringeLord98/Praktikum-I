@extends('layouts.Lmain')
@section('Logo')
Registracija
@endsection
@section('Content')
<div style="height:5em;"></div>
<div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">
                <div class="input-field">
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    <label for="name">{{ __('Ime') }}</label>
                    @if ($errors->has('name'))
                        <span class="invalid1">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row">
                    <div class="input-field">
                        <input id="surname" type="text" class="{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required>
                        <label for="surname">{{ __('Priimek') }}</label>
                        @if ($errors->has('surname'))
                            <span class="invalid1">
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

            <div class="row">
                <div class="input-field">
                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    <label for="email">{{ __('E-Mail Naslov') }}</label>
                    @if ($errors->has('email'))
                        <span class="invalid1">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="input-field">
                    <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="password">{{ __('Geslo') }}</label>
                    @if ($errors->has('password'))
                        <span class="invalid1">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="input-field">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <label for="password-confirm">{{ __('Ponovi Geslo') }}</label>
                </div>
            </div>

            <div class="row">
                    <div class="input-field">
                        <input id="davnca" type="text" class="{{ $errors->has('davcna') ? ' is-invalid' : '' }}" name="davcna" value="{{ old('davcna') }}" required>
                        <label for="davcna">{{ __('Davčna številka') }}</label>
                        @if ($errors->has('davcna'))
                            <span class="invalid1">
                                <strong>{{ $errors->first('davcna') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

            <div class="row">
                    <div class="input-field">
                        <input id="telefon" type="text" class=" {{ $errors->has('telefon') ? ' is-invalid' : '' }}" name="telefon" value="{{ old('telefon') }}" required>
                        <label for="telefon">{{ __('Telefon') }}</label>
                        @if ($errors->has('telefon'))
                            <span class="invalid1">
                                <strong>{{ $errors->first('telefon') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

            <div class="row">
                <div class="col s3 offset-s9">
                    <button type="submit" class="btn btn-large btnReg">
                        {{ __('Registriraj se') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
