@extends('layouts.Lmain')

@section('Title')
    <title>Moj Obrtnik | Profil</title>
@endsection
@section('Logo') 
{{ Auth::user()->name }}
@endsection

@section('Content')
<div class="container white" id="mainContainer" style="min-height:42.7em;">

<div class="container">
<div style="height:8em;"></div>
<div class="card hoverable grey-text text-darken-3" style="width:70%;margin:auto;">
        <div class="card-image  sticky-action waves-effect waves-block waves-light" style="border:1px solid #2e7d327c;">
          <img class="activator" src="storage/cover_images/{{$user->slika}}">
        </div>
        <div class="card-content" >
          <span class="card-title activator grey-text text-darken-4">{{ Auth::user()->name }} {{ Auth::user()->surname }}<i class="material-icons right tooltipped" data-position="right" data-delay="50" data-tooltip="Podrobnosti">more_vert</i></span>
          <div  class="row"style="margin-top:2em;">
              <div class="col s4 left-align">
                    <form action="{{ route('u_destroy')}}" method="POST" type="hidden" name="_token">
                            {{ csrf_field() }}
                                <button type="submit" class="waves-effect waves-light btn btn-large btn-Cancle">Izbriši</bnutton>
                            </form>
            </div>
            <div class="col s5 right-align">
                    
                </div>
            <div class="col s3 right-align">
                    <a href="{{ url('/profileSettings') }}" class="waves-effect waves-light btn btn-large">Spremeni račun</a>
                </div>
          </div>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
     
          <div class="row" style="margin-top:5em;">
              
                <div class="col l6 s12">
                  <b>E-Mail:</b><p>{{ Auth::user()->email }}</p>
                </div>
                <div class="col l6 s12">
                  <b>Telefon:</b><p>{{ Auth::user()->telefon }}</p>
                  </div>
                  <div class="col l6 s12">
                        <b>Davčna številka:</b><p>{{ Auth::user()->davcna }}</p>
                      </div>
                      <div class="col l6 s12">
                        <b>Regija:</b><p>{{ $regija->regija }}</p>
                      </div>
                  
            </div>
            <div class="row" style="margin-top:1em;">
                    
                    <div class="col l12 s12">
                      <b>Opis profila:</b><p>{{ Auth::user()->opis }}</p>
                      </div>
                      
                </div>
        </div>
      </div> 
    </div>      

@endsection




