@extends('layouts.Lmain')
@section('Logo')
Prijava
@endsection
@section('Content')
<div style="height:10em;"></div>
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row">
            <div class="input-field">
                <input id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus>
                <label for="email">{{ __('E-Mail Address') }}</label>
                
            </div>
        </div>

        <div class="row">
            <div class="input-field">
                <input id="password" type="password"  name="password" required>
                <label for="password">{{ __('Password') }}</label>
                
            </div>
        </div>

        <div class="row">
            <div class="col s8">
                    @if ($errors->has('email'))
                    <span class="invalid1">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                    @if ($errors->has('password'))
                    <span class="invalid1">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col s4">
                <button type="submit" class="btn btn-large btnReg"><i class="material-icons left">check</i>
                    {{ __('Prijavi') }}
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
