@extends('layouts.Lmain')

@section('Title')
    <title>Moj Obrtnik | Spremeni profil</title>
@endsection
@section('Logo') 
{{ Auth::user()->name }}
@endsection

@section('Content')
<div class="container white" id="mainContainer" style="min-height:42.7em;">
<div class="row" style="height:auto;margin-top:0.5em;">
        <div class="container" style="width:30%;">
                        @if($errors->any())
                        <div class="z-depth-2" style="padding:0.5em; background-color:#d45b5b;color:white;">
                         <div class="center-align">
                         <p>{{$errors->first()}}</p>
                          </div>
                        </div>
                        @endif
        </div> 
</div>
<div class=" z-depth-2" style="width:80%;margin:auto;">
<div class="card hoverable" style="width:100%;margin:auto;">
                <div class="card-tabs">
                  <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#PSosnovno">Osnovno</a></li>
                    <li class="tab"><a  href="#PSemail">E-Mail</a></li>
                    <li class="tab"><a href="#PSgeslo">Geslo</a></li>
                    <li class="tab"><a href="#PSslika">Slika</a></li>
                  </ul>
                </div>
                <div class="card-content white lighten-4">
                
                <form class="col s12" action="{{route('update2')}}" method="POST" type="hidden" name="_token" enctype="multipart/form-data">{{ csrf_field() }}
                  <div id="PSosnovno">
                    <div class="row">
                        <div class="col s10 l6">
                                <div class="input-field">
                                        <input id="label123"type="text" class="validate" name="name" value="{{ Auth::user()->name }}">
                                        <label for="label123">Ime</label>
                                        @if ($errors->has('name'))
                                        <span class="invalid1">
                                        <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                      </div>
                        </div>
                        <div class="col s10 l6">
                                <div class="input-field">
                                        <input  id="label123"type="text" class="validate" name="surname" value="{{ Auth::user()->surname }}">
                                        <label for="label123">Priimek</label>
                                        @if ($errors->has('surname'))
                                        <span class="invalid1">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                        @endif
                                      </div>
                            </div>
                            <div class="col s10 l12">
                                <div class="input-field">
                                <select id="regija" name="regija_id">
                        @foreach($regije as $regija)
                        @if($regija->id==$u_regija_id)
                            <option value="{{$regija->id}}" selected="selected">{{$regija->regija}}</option>
                        @else
                                <option value="{{$regija->id}}">{{$regija->regija}}</option>
                                @endif
                        @endforeach 
                    </select>
                                        <label for="label123">Regija</label>
                                      </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col s10 l6">
                                    <div class="input-field">
                                            <input id="label123" type="text" class="validate" name="davcna" value="{{ Auth::user()->davcna }}">
                                            <label for="label123">Davčna številka</label>
                                                @if ($errors->has('davcna'))
                                                <span class="invalid1">
                                                <strong>{{ $errors->first('davcna') }}</strong>
                                                </span>
                                                @endif
                                          </div>
                            </div>
                            <div class="col s10 l6">
                                    <div class="input-field">
                                            <input  id="label123" type="text" class="validate" name="telefon" value="{{ Auth::user()->telefon }}">
                                            <label for="label123">Telefonska številka</label>
                                                @if ($errors->has('telefon'))
                                                <span class="invalid1">
                                                <strong>{{ $errors->first('telefon') }}</strong>
                                                </span>
                                                @endif
                                          </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col s10 l12">
                                        <textarea  class="materialize-textarea" name="opis" data-length="5000" id="txtarea" value="{{ Auth::user()->opis  }}">{{ Auth::user()->opis  }}</textarea>
                                        <label for="txtarea">Opis</label>
                                        @if ($errors->has('opis'))
                                        <span class="invalid1">
                                        <strong>{{ $errors->first('opis') }}</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>
                  </div>
                  <div id="PSemail">
                        <div class="row">
                                <div class="col s10 l12">
                                        <div class="input-field">
                                                <input id="label123" type="text" class="validate" name="email" value="{{ Auth::user()->email  }}">
                                                <label for="label123">Email</label>
                                                @if ($errors->has('email'))
                                                <span class="invalid1">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                              </div>
                                </div>
                               
                            </div>
                  </div>
                  <div id="PSgeslo">
                        <div class="row">
                                <div class="col s10 l6">
                                        <div class="input-field">
                                                <input id="password" type="password" class="validate" name="password" >
                                                <label for="password">{{ __('Geslo') }}</label>
                                                @if ($errors->has('password'))
                                                <span class="invalid1">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                              </div>
                                </div>
                                <div class="col s10 l6">
                                        <div class="input-field">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                                <label for="password-confirm">{{ __('Ponovi Geslo') }}</label>
                                            </div>
                                    </div>
                            </div>
                  </div>
                  <div id="PSslika">
                        <div class="file-field input-field">
                                <div class="btn">
                                <span>File</span>
                                <input type="file" name="slika">
                                </div>
                                <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="slika">
                                </div>
                        </div>
                  </div>
                
                </div>
    </div>
</div>
<div class="row" style="height:5em;"></div>
<div class="row" style="height:5em;margin:auto;width:40%;">
    <a href="{{ url('/profile') }}" class="z-depth-2 col s5 btn btn-large btn-cancle waves-effect waves-light"><i class="material-icons left">cancel</i>
       Prekliči
    </a>
    
    <button class="z-depth-2 col s5 offset-s1 btn btn-large waves-effect waves-light" type="submit"><i class="material-icons left">check</i>
       Shrani
    </button>
</form>
</div>
</div> 

@endsection




