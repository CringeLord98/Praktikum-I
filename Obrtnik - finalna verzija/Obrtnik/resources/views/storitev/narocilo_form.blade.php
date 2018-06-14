@extends('layouts.Lfooter')
@extends('layouts.Lmain')
@section('Title')
    <title>Moj Obrtnik | Iskanje</title>
@endsection
@section('Logo')
    Iskanje
@endsection

@section('Content')
<div class="container white grey-text text-darken-3" id="mainContainer" style="min-height:42.7em;">
<div style="height:5em;">

    </div>
<h5 class="center-align">Da se naročiš na storitev <b>{{$storitev->naziv}}</b> vpiši svoje podatke:</h5><br>
<form action="{{ route('naroci', $storitev->id) }}" method="POST" type="hidden" name="_token"  enctype="multipart/form-data">
{{ csrf_field() }}



    <div class="row ">
        <div class="col s10 offset-s1">
            <div class="row">
                <div class="input-field col s12 l6">
                        <input id="naroc" type="text" class="validate" name="ime">
                        <label for="naroc">Ime</label>
                        @if ($errors->has('ime'))
                        <span class="invalid1">
                            <strong>{{ $errors->first('ime') }}</strong>
                        </span>
                        @endif
                </div>
                <div class="input-field col s12 l6">
                        <input id="naroc" type="text" class="validate" name="priimek">
                        <label for="naroc">Priimek</label>
                        @if ($errors->has('priimek'))
                        <span class="invalid1">
                            <strong>{{ $errors->first('priimek') }}</strong>
                        </span>
                        @endif
                </div>
            </div>
                <div class="row">
                        <div class="input-field col s12 l12">
                                <input id="naroc" type="text" class="validate" name="email" >
                                <label for="naroc">E-mail</label>
                                @if ($errors->has('email'))
                                <span class="invalid1">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                        </div>
                        
                    </div>
        </div>
    </div>
    <h5 class="center-align"><small> Podatki o naročilu:</small></h5><br>
    <div class="row">
            <div class="col s10 offset-s1">
                <div class="row">
                    <div class="input-field col s12 l6">
                            <text>Začetek: </text><input type="date" class="validate" name="datum_zacetka" value="2018-01-01"> 
                    </div>
                    <div class="input-field col s12 l6">
                            <text>Konec: </text><input type="date" class="validate" name="datum_konca" value="2018-12-31">
                    </div>
                </div>
                <div class="row">
                        <div class="input-field col s12 l6">
                                <input id="naroc"type="number" min="0" class="validate" name="okvirna_cena">
                                <label for="naroc">Okvirna cena (€)</label> 
                        </div>
                        <div class="input-field col s12 l6">
                                <input id="naroc" type="text" class="validate" name="telefon">
                                <label for="naroc">Telefon</label>
                                @if ($errors->has('telefon'))
                                <span class="invalid1">
                                        <strong>{{ $errors->first('telefon') }}</strong>
                                </span>
                                @endif
                        </div>
                    </div>
                    <div class="col s12 input-field">
                            <textarea id="textarea1" class="materialize-textarea" name="komentar"></textarea>
                            <label for="txtarea">Komentar</label>
                            @if ($errors->has('komentar'))
                            <span class="invalid1">
                                    <strong>{{ $errors->first('komentar') }}</strong>
                            </span>
                            @endif
                    </div>
            </div>
        </div>

        <div class="col s6 center-align">
                <button type="submit"class="waves-effect waves-light btn btn-large btnReg"><i class="material-icons left">check</i>Naroči</button>
        </div>
    
</form>
</div>
@endsection